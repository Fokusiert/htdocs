<?php 
namespace Neos\RedirectHandler\NeosAdapter\Service;

/*
 * This file is part of the Neos.RedirectHandler.NeosAdapter package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\ContentRepository\Domain\Factory\NodeFactory;
use Neos\RedirectHandler\Storage\RedirectStorageInterface;
use Neos\Flow\Annotations as Flow;
use Neos\Flow\Http\Request;
use Neos\Flow\Log\SystemLoggerInterface;
use Neos\Flow\Mvc\ActionRequest;
use Neos\Flow\Mvc\Exception\NoMatchingRouteException;
use Neos\Flow\Mvc\Routing\RouterCachingService;
use Neos\Flow\Mvc\Routing\UriBuilder;
use Neos\Flow\Persistence\PersistenceManagerInterface;
use Neos\Neos\Domain\Model\Domain;
use Neos\Neos\Domain\Service\ContentContext;
use Neos\ContentRepository\Domain\Service\ContextFactoryInterface;
use Neos\Neos\Routing\Exception;
use Neos\ContentRepository\Domain\Model\NodeInterface;
use Neos\ContentRepository\Domain\Model\Workspace;

/**
 * Service that creates redirects for moved / deleted nodes.
 *
 * Note: This is usually invoked by a signal emitted by Workspace::publishNode()
 *
 * @Flow\Scope("singleton")
 */
class NodeRedirectService_Original implements NodeRedirectServiceInterface
{
    /**
     * @var UriBuilder
     */
    protected $uriBuilder;

    /**
     * @Flow\Inject
     * @var RedirectStorageInterface
     */
    protected $redirectStorage;

    /**
     * @Flow\Inject
     * @var RouterCachingService
     */
    protected $routerCachingService;

    /**
     * @Flow\Inject
     * @var PersistenceManagerInterface
     */
    protected $persistenceManager;

    /**
     * @Flow\Inject
     * @var ContextFactoryInterface
     */
    protected $contextFactory;

    /**
     * @Flow\Inject
     * @var NodeFactory
     */
    protected $nodeFactory;

    /**
     * @Flow\Inject
     * @var SystemLoggerInterface
     */
    protected $systemLogger;

    /**
     * @Flow\InjectConfiguration(path="statusCode", package="Neos.RedirectHandler")
     * @var array
     */
    protected $defaultStatusCode;

    /**
     * @Flow\InjectConfiguration(path="enableRemovedNodeRedirect", package="Neos.RedirectHandler.NeosAdapter")
     * @var array
     */
    protected $enableRemovedNodeRedirect;

    /**
     * {@inheritdoc}
     */
    public function createRedirectsForPublishedNode(NodeInterface $node, Workspace $targetWorkspace)
    {
        try {
            $this->executeRedirectsForPublishedNode($node, $targetWorkspace);
        } catch (\Exception $exception) {
            $this->systemLogger->log(sprintf('Can not create redirect for the node = %s in workspace = %s. See original exception: "%s"', $node->getContextPath(), $targetWorkspace->getName(), $exception->getMessage()), LOG_WARNING);
        }
    }

    /**
     * Creates a redirect for the node if it is a 'Neos.Neos:Document' node and its URI has changed
     *
     * @param NodeInterface $publishedNode The node that is about to be published
     * @param Workspace $targetWorkspace
     * @return void
     * @throws Exception
     * @throws \Neos\Eel\Exception
     * @throws \Neos\Flow\Mvc\Routing\Exception\MissingActionNameException
     */
    protected function executeRedirectsForPublishedNode(NodeInterface $publishedNode, Workspace $targetWorkspace)
    {
        $nodeType = $publishedNode->getNodeType();
        if ($targetWorkspace->getName() !== 'live' || !$nodeType->isOfType('Neos.Neos:Document')) {
            return;
        }

        $liveContext = $this->contextFactory->create([
            'workspaceName' => 'live',
            'invisibleContentShown' => true,
            'dimensions' => $publishedNode->getContext()->getDimensions()
        ]);

        $liveNode = $liveContext->getNodeByIdentifier($publishedNode->getIdentifier());
        if ($liveNode === null) {
            // The page has been added
            return;
        }

        $liveNodeUriPath = $this->buildUriPathForNodeContextPath($liveNode);
        if ($liveNodeUriPath === null) {
            throw new Exception('The target URI path of the node could not be resolved', 1451945358);
        }

        $hosts = $this->getHostnames($publishedNode->getContext());

        // The page has been removed
        if ($publishedNode->isRemoved()) {
            // By default the redirect handling for removed nodes is activated.
            // If it is deactivated in your settings you will be able to handle the redirects on your own.
            // For example redirect to dedicated landing pages for deleted campaign NodeTypes
            if ($this->enableRemovedNodeRedirect) {
                $this->flushRoutingCacheForNode($liveNode);
                $statusCode = (integer)$this->defaultStatusCode['gone'];
                $this->redirectStorage->addRedirect($liveNodeUriPath, '', $statusCode, $hosts);
            }

            return;
        }

        // We need to reset the internal node cache to get a node with new path in the same request
        $this->nodeFactory->reset();

        // compare the "old" node URI to the new one
        $publishedNodeUriPath = $this->buildUriPathForNodeContextPath($publishedNode);
        // use the same regexp than the ContentContextBar Ember View
        $publishedNodeUriPath = preg_replace('/@[A-Za-z0-9;&,\-_=]+/', '', $publishedNodeUriPath);
        if ($publishedNodeUriPath === null || $publishedNodeUriPath === $liveNodeUriPath) {
            // The page node path has not been changed
            return;
        }

        $this->flushRoutingCacheForNode($liveNode);
        $statusCode = (integer)$this->defaultStatusCode['redirect'];
        $this->redirectStorage->addRedirect($liveNodeUriPath, $publishedNodeUriPath, $statusCode, $hosts);

        foreach ($publishedNode->getChildNodes('Neos.Neos:Document') as $childNode) {
            $this->executeRedirectsForPublishedNode($childNode, $targetWorkspace);
        }
    }

    /**
     * Collects all hostnames from the Domain entries attached to the current site.
     *
     * @param ContentContext $contentContext
     * @return array
     */
    protected function getHostnames(ContentContext $contentContext)
    {
        $site = $contentContext->getCurrentSite();
        $domains = [];
        if ($site !== null) {
            foreach ($site->getActiveDomains() as $domain) {
                /** @var Domain $domain */
                $domains[] = $domain->getHostname();
            }
        }
        return $domains;
    }

    /**
     * Removes all routing cache entries for the given $nodeData
     *
     * @param NodeInterface $node
     * @return void
     */
    protected function flushRoutingCacheForNode(NodeInterface $node)
    {
        $nodeData = $node->getNodeData();
        $nodeDataIdentifier = $this->persistenceManager->getIdentifierByObject($nodeData);
        if ($nodeDataIdentifier === null) {
            return;
        }
        $this->routerCachingService->flushCachesByTag($nodeDataIdentifier);
    }

    /**
     * Creates a (relative) URI for the given $nodeContextPath removing the "@workspace-name" from the result
     *
     * @param NodeInterface $node
     * @return string the resulting (relative) URI or NULL if no route could be resolved
     * @throws \Neos\Flow\Mvc\Routing\Exception\MissingActionNameException
     */
    protected function buildUriPathForNodeContextPath(NodeInterface $node)
    {
        try {
            return $this->getUriBuilder()
                ->uriFor('show', ['node' => $node], 'Frontend\\Node', 'Neos.Neos');
        } catch (NoMatchingRouteException $exception) {
            return null;
        }
    }

    /**
     * Creates an UriBuilder instance for the current request
     *
     * @return UriBuilder
     */
    protected function getUriBuilder()
    {
        if ($this->uriBuilder === null) {
            $httpRequest = Request::createFromEnvironment();
            $actionRequest = new ActionRequest($httpRequest);
            $this->uriBuilder = new UriBuilder();
            $this->uriBuilder
                ->setRequest($actionRequest);
            $this->uriBuilder
                ->setFormat('html')
                ->setCreateAbsoluteUri(false);
        }
        return $this->uriBuilder;
    }
}

#
# Start of Flow generated Proxy code
#
namespace Neos\RedirectHandler\NeosAdapter\Service;

use Doctrine\ORM\Mapping as ORM;
use Neos\Flow\Annotations as Flow;

/**
 * Service that creates redirects for moved / deleted nodes.
 * 
 * Note: This is usually invoked by a signal emitted by Workspace::publishNode()
 * @\Neos\Flow\Annotations\Scope("singleton")
 */
class NodeRedirectService extends NodeRedirectService_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     */
    public function __construct()
    {
        if (get_class($this) === 'Neos\RedirectHandler\NeosAdapter\Service\NodeRedirectService') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\RedirectHandler\NeosAdapter\Service\NodeRedirectService', $this);
        if (get_class($this) === 'Neos\RedirectHandler\NeosAdapter\Service\NodeRedirectService') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\RedirectHandler\NeosAdapter\Service\NodeRedirectServiceInterface', $this);
        if ('Neos\RedirectHandler\NeosAdapter\Service\NodeRedirectService' === get_class($this)) {
            $this->Flow_Proxy_injectProperties();
        }
    }

    /**
     * Autogenerated Proxy Method
     */
    public function __sleep()
    {
            $result = NULL;
        $this->Flow_Object_PropertiesToSerialize = array();

        $transientProperties = array (
);
        $propertyVarTags = array (
  'uriBuilder' => 'Neos\\Flow\\Mvc\\Routing\\UriBuilder',
  'redirectStorage' => 'Neos\\RedirectHandler\\Storage\\RedirectStorageInterface',
  'routerCachingService' => 'Neos\\Flow\\Mvc\\Routing\\RouterCachingService',
  'persistenceManager' => 'Neos\\Flow\\Persistence\\PersistenceManagerInterface',
  'contextFactory' => 'Neos\\ContentRepository\\Domain\\Service\\ContextFactoryInterface',
  'nodeFactory' => 'Neos\\ContentRepository\\Domain\\Factory\\NodeFactory',
  'systemLogger' => 'Neos\\Flow\\Log\\SystemLoggerInterface',
  'defaultStatusCode' => 'array',
  'enableRemovedNodeRedirect' => 'array',
);
        $result = $this->Flow_serializeRelatedEntities($transientProperties, $propertyVarTags);
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     */
    public function __wakeup()
    {
        if (get_class($this) === 'Neos\RedirectHandler\NeosAdapter\Service\NodeRedirectService') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\RedirectHandler\NeosAdapter\Service\NodeRedirectService', $this);
        if (get_class($this) === 'Neos\RedirectHandler\NeosAdapter\Service\NodeRedirectService') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\RedirectHandler\NeosAdapter\Service\NodeRedirectServiceInterface', $this);

        $this->Flow_setRelatedEntities();
        $this->Flow_Proxy_injectProperties();
    }

    /**
     * Autogenerated Proxy Method
     */
    private function Flow_Proxy_injectProperties()
    {
        $this->Flow_Proxy_LazyPropertyInjection('Neos\RedirectHandler\Storage\RedirectStorageInterface', 'Neos\RedirectHandler\DatabaseStorage\RedirectStorage', 'redirectStorage', '5bb1bcf1c148b16245216d23785cc355', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\RedirectHandler\Storage\RedirectStorageInterface'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Mvc\Routing\RouterCachingService', 'Neos\Flow\Mvc\Routing\RouterCachingService', 'routerCachingService', '8fc40685a308919d1842ba4fb253c576', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Mvc\Routing\RouterCachingService'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Persistence\PersistenceManagerInterface', 'Neos\Flow\Persistence\Doctrine\PersistenceManager', 'persistenceManager', '8a72b773ea2cb98c2933df44c659da06', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Persistence\PersistenceManagerInterface'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\ContentRepository\Domain\Service\ContextFactoryInterface', 'Neos\Neos\Domain\Service\ContentContextFactory', 'contextFactory', '98dca7b1f95a25ec173662fc4e785341', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\ContentRepository\Domain\Service\ContextFactoryInterface'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\ContentRepository\Domain\Factory\NodeFactory', 'Neos\ContentRepository\Domain\Factory\NodeFactory', 'nodeFactory', 'dd541629b8e42562866a1bf47375f14d', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\ContentRepository\Domain\Factory\NodeFactory'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Log\SystemLoggerInterface', 'Neos\Flow\Log\Logger', 'systemLogger', '717e9de4d0309f4f47c821b9257eb5c2', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Log\SystemLoggerInterface'); });
        $this->defaultStatusCode = \Neos\Flow\Core\Bootstrap::$staticObjectManager->get(\Neos\Flow\Configuration\ConfigurationManager::class)->getConfiguration('Settings', 'Neos.RedirectHandler.statusCode');
        $this->enableRemovedNodeRedirect = \Neos\Flow\Core\Bootstrap::$staticObjectManager->get(\Neos\Flow\Configuration\ConfigurationManager::class)->getConfiguration('Settings', 'Neos.RedirectHandler.NeosAdapter.enableRemovedNodeRedirect');
        $this->Flow_Injected_Properties = array (
  0 => 'redirectStorage',
  1 => 'routerCachingService',
  2 => 'persistenceManager',
  3 => 'contextFactory',
  4 => 'nodeFactory',
  5 => 'systemLogger',
  6 => 'defaultStatusCode',
  7 => 'enableRemovedNodeRedirect',
);
    }
}
# PathAndFilename: C:\Bitnami\neos-4.1.7-neu\apps\neos\htdocs\Packages\Application\Neos.RedirectHandler.NeosAdapter\Classes\Service\NodeRedirectService.php
#