<?php 
namespace Neos\ContentRepository;

/*
 * This file is part of the Neos.ContentRepository package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\Flow\Configuration\ConfigurationManager;
use Neos\Flow\Core\Booting\Sequence;
use Neos\Flow\Core\Bootstrap;
use Neos\Flow\Monitor\FileMonitor;
use Neos\Flow\Package\FlowPackageInterface;
use Neos\Flow\Package\Package as BasePackage;
use Neos\Flow\Package\PackageManager;
use Neos\Flow\Package\PackageManagerInterface;
use Neos\Flow\Persistence\Doctrine\PersistenceManager;
use Neos\ContentRepository\Domain\Model\Node;
use Neos\ContentRepository\Domain\Model\NodeInterface;
use Neos\ContentRepository\Domain\Repository\NodeDataRepository;
use Neos\ContentRepository\Domain\Service\Context;
use Neos\ContentRepository\Domain\Service\ContextFactoryInterface;

/**
 * The ContentRepository Package
 */
class Package_Original extends BasePackage
{
    /**
     * Invokes custom PHP code directly after the package manager has been initialized.
     *
     * @param Bootstrap $bootstrap The current bootstrap
     * @return void
     */
    public function boot(Bootstrap $bootstrap)
    {
        $dispatcher = $bootstrap->getSignalSlotDispatcher();
        $dispatcher->connect(PersistenceManager::class, 'allObjectsPersisted', NodeDataRepository::class, 'flushNodeRegistry');
        $dispatcher->connect(NodeDataRepository::class, 'repositoryObjectsPersisted', NodeDataRepository::class, 'flushNodeRegistry');
        $dispatcher->connect(Node::class, 'nodePathChanged', function () use ($bootstrap) {
            $contextFactory = $bootstrap->getObjectManager()->get(ContextFactoryInterface::class);
            /** @var Context $contextInstance */
            foreach ($contextFactory->getInstances() as $contextInstance) {
                $contextInstance->getFirstLevelNodeCache()->flush();
            }
        });

        $dispatcher->connect(ConfigurationManager::class, 'configurationManagerReady', function (ConfigurationManager $configurationManager) {
            $configurationManager->registerConfigurationType('NodeTypes', ConfigurationManager::CONFIGURATION_PROCESSING_TYPE_DEFAULT, true);
        });

        $context = $bootstrap->getContext();
        if (!$context->isProduction()) {
            $dispatcher->connect(Sequence::class, 'afterInvokeStep', function ($step) use ($bootstrap) {
                if ($step->getIdentifier() === 'neos.flow:systemfilemonitor') {
                    $nodeTypeConfigurationFileMonitor = FileMonitor::createFileMonitorAtBoot('ContentRepository_NodeTypesConfiguration', $bootstrap);
                    /** @var PackageManager $packageManager */
                    $packageManager = $bootstrap->getEarlyInstance(PackageManagerInterface::class);
                    foreach ($packageManager->getFlowPackages() as $packageKey => $package) {
                        if ($packageManager->isPackageFrozen($packageKey)) {
                            continue;
                        }
                        if (file_exists($package->getConfigurationPath())) {
                            $nodeTypeConfigurationFileMonitor->monitorDirectory($package->getConfigurationPath(), 'NodeTypes(\..+)\.yaml');
                        }
                    }

                    $nodeTypeConfigurationFileMonitor->monitorDirectory(FLOW_PATH_CONFIGURATION, 'NodeTypes(\..+)\.yaml');

                    $nodeTypeConfigurationFileMonitor->detectChanges();
                    $nodeTypeConfigurationFileMonitor->shutdownObject();
                }
            });
        }
    }
}

#
# Start of Flow generated Proxy code
#
namespace Neos\ContentRepository;

use Doctrine\ORM\Mapping as ORM;
use Neos\Flow\Annotations as Flow;

/**
 * The ContentRepository Package
 */
class Package extends Package_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait;


    /**
     * Autogenerated Proxy Method
     * @param string $packageKey Key of this package
     * @param string $composerName
     * @param string $packagePath Absolute path to the location of the package's composer manifest
     * @param array $autoloadConfiguration
     */
    public function __construct()
    {
        $arguments = func_get_args();
        if (!array_key_exists(0, $arguments)) throw new \Neos\Flow\ObjectManagement\Exception\UnresolvedDependenciesException('Missing required constructor argument $packageKey in class ' . __CLASS__ . '. Note that constructor injection is only support for objects of scope singleton (and this is not a singleton) – for other scopes you must pass each required argument to the constructor yourself.', 1296143788);
        if (!array_key_exists(1, $arguments)) throw new \Neos\Flow\ObjectManagement\Exception\UnresolvedDependenciesException('Missing required constructor argument $composerName in class ' . __CLASS__ . '. Note that constructor injection is only support for objects of scope singleton (and this is not a singleton) – for other scopes you must pass each required argument to the constructor yourself.', 1296143788);
        if (!array_key_exists(2, $arguments)) throw new \Neos\Flow\ObjectManagement\Exception\UnresolvedDependenciesException('Missing required constructor argument $packagePath in class ' . __CLASS__ . '. Note that constructor injection is only support for objects of scope singleton (and this is not a singleton) – for other scopes you must pass each required argument to the constructor yourself.', 1296143788);
        call_user_func_array('parent::__construct', $arguments);
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
  'packageKey' => 'string',
  'composerName' => 'string',
  'packagePath' => 'string',
  'namespaces' => 'string[]',
  'autoloadTypes' => 'string[]',
  'autoloadConfiguration' => 'array',
  'flattenedAutoloadConfiguration' => 'array',
);
        $result = $this->Flow_serializeRelatedEntities($transientProperties, $propertyVarTags);
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     */
    public function __wakeup()
    {

        $this->Flow_setRelatedEntities();
    }
}
# PathAndFilename: C:\Bitnami\neos-4.1.7-neu\apps\neos\htdocs\Packages\Application\Neos.ContentRepository\Classes\Package.php
#