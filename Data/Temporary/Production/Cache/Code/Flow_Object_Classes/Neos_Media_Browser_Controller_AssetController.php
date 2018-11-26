<?php 

namespace Neos\Media\Browser\Controller;

/*
 * This file is part of the Neos.Media.Browser package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Doctrine\Common\Persistence\Proxy as DoctrineProxy;
use Doctrine\ORM\EntityNotFoundException;
use Neos\Error\Messages\Error;
use Neos\Error\Messages\Message;
use Neos\Flow\Annotations as Flow;
use Neos\Flow\I18n\Translator;
use Neos\Flow\Mvc\Controller\ActionController;
use Neos\Flow\Mvc\Exception\InvalidArgumentValueException;
use Neos\Flow\Mvc\Exception\StopActionException;
use Neos\Flow\Mvc\Exception\UnsupportedRequestTypeException;
use Neos\Flow\Mvc\View\JsonView;
use Neos\Flow\Mvc\View\ViewInterface;
use Neos\Flow\Package\PackageManagerInterface;
use Neos\Flow\Property\TypeConverter\PersistentObjectConverter;
use Neos\Flow\ResourceManagement\PersistentResource;
use Neos\FluidAdaptor\View\TemplateView;
use Neos\Media\Browser\Domain\Session\BrowserState;
use Neos\Media\Domain\Model\Asset;
use Neos\Media\Domain\Model\AssetCollection;
use Neos\Media\Domain\Model\AssetInterface;
use Neos\Media\Domain\Model\AssetSource\AssetNotFoundExceptionInterface;
use Neos\Media\Domain\Model\AssetSource\AssetProxyRepositoryInterface;
use Neos\Media\Domain\Model\AssetSource\AssetSourceConnectionExceptionInterface;
use Neos\Media\Domain\Model\AssetSource\AssetSourceInterface;
use Neos\Media\Domain\Model\AssetSource\AssetTypeFilter;
use Neos\Media\Domain\Model\AssetSource\Neos\NeosAssetProxy;
use Neos\Media\Domain\Model\AssetSource\SupportsCollectionsInterface;
use Neos\Media\Domain\Model\AssetSource\SupportsSortingInterface;
use Neos\Media\Domain\Model\AssetSource\SupportsTaggingInterface;
use Neos\Media\Domain\Model\Tag;
use Neos\Media\Domain\Repository\AssetCollectionRepository;
use Neos\Media\Domain\Repository\AssetRepository;
use Neos\Media\Domain\Repository\TagRepository;
use Neos\Media\Domain\Service\AssetService;
use Neos\Media\TypeConverter\AssetInterfaceConverter;
use Neos\Neos\Controller\BackendUserTranslationTrait;
use Neos\Neos\Controller\CreateContentContextTrait;
use Neos\Neos\Domain\Repository\DomainRepository;
use Neos\Neos\Domain\Repository\SiteRepository;
use Neos\Utility\Files;
use Neos\Utility\MediaTypes;

/**
 * Controller for asset handling
 *
 * @Flow\Scope("singleton")
 */
class AssetController_Original extends ActionController
{
    use CreateContentContextTrait;
    use BackendUserTranslationTrait;

    const TAG_GIVEN = 0;
    const TAG_ALL = 1;
    const TAG_NONE = 2;

    const COLLECTION_GIVEN = 0;
    const COLLECTION_ALL = 1;

    /**
     * @var array
     */
    protected $viewFormatToObjectNameMap = [
        'html' => TemplateView::class,
        'json' => JsonView::class
    ];

    /**
     * @Flow\Inject
     * @var SiteRepository
     */
    protected $siteRepository;

    /**
     * @Flow\Inject
     * @var DomainRepository
     */
    protected $domainRepository;

    /**
     * @Flow\Inject
     * @var AssetRepository
     */
    protected $assetRepository;

    /**
     * @Flow\Inject
     * @var TagRepository
     */
    protected $tagRepository;

    /**
     * @Flow\Inject
     * @var AssetCollectionRepository
     */
    protected $assetCollectionRepository;

    /**
     * @Flow\Inject
     * @var PackageManagerInterface
     */
    protected $packageManager;

    /**
     * @Flow\Inject(lazy = false)
     * @var BrowserState
     */
    protected $browserState;

    /**
     * @Flow\Inject
     * @var AssetService
     */
    protected $assetService;

    /**
     * @Flow\Inject
     * @var Translator
     */
    protected $translator;

    /**
     * @Flow\InjectConfiguration(path="assetSources", package="Neos.Media")
     * @var array
     */
    protected $assetSourcesConfiguration;

    /**
     * @var AssetSourceInterface[]
     */
    protected $assetSources = [];

    /**
     * @return void
     */
    public function initializeObject()
    {
        $domain = $this->domainRepository->findOneByActiveRequest();

        // Set active asset collection to the current site's asset collection, if it has one, on the first view if a matching domain is found
        if ($domain !== null && !$this->browserState->get('activeAssetCollection') && $this->browserState->get('automaticAssetCollectionSelection') !== true && $domain->getSite()->getAssetCollection() !== null) {
            $this->browserState->set('activeAssetCollection', $domain->getSite()->getAssetCollection());
            $this->browserState->set('automaticAssetCollectionSelection', true);
        }

        foreach ($this->assetSourcesConfiguration as $assetSourceIdentifier => $assetSourceConfiguration) {
            if (is_array($assetSourceConfiguration)) {
                $this->assetSources[$assetSourceIdentifier] = new $assetSourceConfiguration['assetSource']($assetSourceIdentifier, $assetSourceConfiguration['assetSourceOptions'] ?? []);
            }
        }
    }

    /**
     * Set common variables on the view
     *
     * @param ViewInterface $view
     * @return void
     */
    protected function initializeView(ViewInterface $view)
    {
        $view->assignMultiple([
            'view' => $this->browserState->get('view'),
            'sortBy' => $this->browserState->get('sortBy'),
            'sortDirection' => $this->browserState->get('sortDirection'),
            'filter' => $this->browserState->get('filter'),
            'activeTag' => $this->browserState->get('activeTag'),
            'activeAssetCollection' => $this->browserState->get('activeAssetCollection'),
            'assetSources' => $this->assetSources
        ]);
    }

    /**
     * List existing assets
     *
     * @param string $view
     * @param string $sortBy
     * @param string $sortDirection
     * @param string $filter
     * @param int $tagMode
     * @param Tag $tag
     * @param string $searchTerm
     * @param int $collectionMode
     * @param AssetCollection $assetCollection
     * @param string $assetSourceIdentifier
     * @return void
     * @throws \Neos\Utility\Exception\FilesException
     */
    public function indexAction($view = null, $sortBy = null, $sortDirection = null, $filter = null, $tagMode = self::TAG_GIVEN, Tag $tag = null, $searchTerm = null, $collectionMode = self::COLLECTION_GIVEN, AssetCollection $assetCollection = null, $assetSourceIdentifier = null)
    {
        // First, apply all options given to indexAction() and save them in the BrowserState object.
        // Note that the order of these apply*() method calls plays a role, because they may depend on previous results:
        $this->applyActiveAssetSourceToBrowserState($assetSourceIdentifier);
        $this->applyAssetCollectionOptionsToBrowserState($collectionMode, $assetCollection);

        $activeAssetSource = $this->getAssetSourceFromBrowserState();
        $assetProxyRepository = $activeAssetSource->getAssetProxyRepository();
        $activeAssetCollection = $this->getActiveAssetCollectionFromBrowserState();

        $this->applyViewOptionsToBrowserState($view, $sortBy, $sortDirection, $filter);
        $this->applyTagToBrowserState($tagMode, $tag, $activeAssetCollection);

        // Second, apply the options from the browser state to the Asset Proxy Repository
        $this->applyAssetTypeFilterFromBrowserState($assetProxyRepository);
        $this->applySortingFromBrowserState($assetProxyRepository);
        $this->applyAssetCollectionFilterFromBrowserState($assetProxyRepository);

        $assetCollections = [];
        $tags = [];
        $assetProxies = [];

        $allCollectionsCount = 0;
        $allCount = 0;
        $searchResultCount = 0;
        $untaggedCount = 0;

        try {
            foreach ($this->assetCollectionRepository->findAll() as $assetCollection) {
                $assetCollections[] = ['object' => $assetCollection, 'count' => $this->assetRepository->countByAssetCollection($assetCollection)];
            }

            foreach ($activeAssetCollection !== null ? $activeAssetCollection->getTags() : $this->tagRepository->findAll() as $tag) {
                $tags[] = ['object' => $tag, 'count' => $this->assetRepository->countByTag($tag, $activeAssetCollection)];
            }

            if ($searchTerm !== null) {
                $assetProxies = $assetProxyRepository->findBySearchTerm($searchTerm);
                $this->view->assign('searchTerm', $searchTerm);
            } elseif ($this->browserState->get('tagMode') === self::TAG_NONE) {
                $assetProxies = $assetProxyRepository->findUntagged();
            } elseif ($this->browserState->get('activeTag') !== null) {
                $assetProxies = $assetProxyRepository->findByTag($this->browserState->get('activeTag'));
            } else {
                $assetProxies = $activeAssetCollection === null ? $assetProxyRepository->findAll() : $assetProxyRepository->findAll();
            }

            $allCollectionsCount = $assetProxyRepository->countAll();
            $allCount = ($activeAssetCollection ? $this->assetRepository->countByAssetCollection($activeAssetCollection) : $allCollectionsCount);
            $searchResultCount = isset($assetProxies) ? $assetProxies->count() : 0;
            $untaggedCount = ($assetProxyRepository instanceof SupportsTaggingInterface ? $assetProxyRepository->countUntagged() : 0);
        } catch (AssetSourceConnectionExceptionInterface $e) {
            $this->view->assign('connectionError', $e);
        }

        $this->view->assignMultiple([
            'tags' => $tags,
            'allCollectionsCount' => $allCollectionsCount,
            'allCount' => $allCount,
            'searchResultCount' => $searchResultCount,
            'untaggedCount' => $untaggedCount,
            'tagMode' => $this->browserState->get('tagMode'),
            'assetProxies' => $assetProxies,
            'assetCollections' => $assetCollections,
            'argumentNamespace' => $this->request->getArgumentNamespace(),
            'maximumFileUploadSize' => $this->getMaximumFileUploadSize(),
            'humanReadableMaximumFileUploadSize' => Files::bytesToSizeString($this->getMaximumFileUploadSize()),
            'activeAssetSource' => $activeAssetSource,
            'activeAssetSourceSupportsSorting' => ($assetProxyRepository instanceof SupportsSortingInterface)
        ]);
    }

    /**
     * New asset form
     *
     * @return void
     */
    public function newAction()
    {
        $maximumFileUploadSize = $this->getMaximumFileUploadSize();
        $this->view->assignMultiple([
            'tags' => $this->tagRepository->findAll(),
            'assetCollections' => $this->assetCollectionRepository->findAll(),
            'maximumFileUploadSize' => $maximumFileUploadSize,
            'humanReadableMaximumFileUploadSize' => Files::bytesToSizeString($maximumFileUploadSize)
        ]);
    }

    /**
     * @param Asset $asset
     * @return void
     */
    public function replaceAssetResourceAction(Asset $asset)
    {
        $maximumFileUploadSize = $this->getMaximumFileUploadSize();
        $this->view->assignMultiple([
            'asset' => $asset,
            'maximumFileUploadSize' => $maximumFileUploadSize,
            'redirectPackageEnabled' => $this->packageManager->isPackageAvailable('Neos.RedirectHandler'),
            'humanReadableMaximumFileUploadSize' => Files::bytesToSizeString($maximumFileUploadSize)
        ]);
    }

    /**
     * Show an asset
     *
     * @param string $assetSourceIdentifier
     * @param string $assetProxyIdentifier
     * @return void
     * @throws StopActionException
     * @throws UnsupportedRequestTypeException
     */
    public function showAction(string $assetSourceIdentifier, string $assetProxyIdentifier)
    {
        if (!isset($this->assetSources[$assetSourceIdentifier])) {
            throw new \RuntimeException('Given asset source is not configured.', 1509702178);
        }

        $assetProxyRepository = $this->assetSources[$assetSourceIdentifier]->getAssetProxyRepository();
        try {
            $assetProxy = $assetProxyRepository->getAssetProxy($assetProxyIdentifier);

            $this->view->assignMultiple([
                'assetProxy' => $assetProxy,
                'assetCollections' => $this->assetCollectionRepository->findAll()
            ]);
        } catch (AssetNotFoundExceptionInterface $e) {
            $this->throwStatus(404, 'Asset not found');
        } catch (AssetSourceConnectionExceptionInterface $e) {
            $this->view->assign('connectionError', $e);
        }
    }

    /**
     * Edit an asset
     *
     * @param string $assetSourceIdentifier
     * @param string $assetProxyIdentifier
     * @return void
     * @throws StopActionException
     * @throws UnsupportedRequestTypeException
     */
    public function editAction(string $assetSourceIdentifier, string $assetProxyIdentifier)
    {
        if (!isset($this->assetSources[$assetSourceIdentifier])) {
            throw new \RuntimeException('Given asset source is not configured.', 1509632166);
        }

        $assetSource = $this->assetSources[$assetSourceIdentifier];
        $assetProxyRepository = $assetSource->getAssetProxyRepository();

        try {
            $assetProxy = $assetProxyRepository->getAssetProxy($assetProxyIdentifier);

            $tags = [];
            $contentPreview = 'ContentDefault';
            if ($assetProxyRepository instanceof SupportsTaggingInterface && $assetProxyRepository instanceof SupportsCollectionsInterface) {
                // TODO: For generic implementation (allowing other asset sources to provide asset collections), the following needs to be refactored:

                if ($assetProxy instanceof NeosAssetProxy) {
                    /** @var Asset $asset */
                    $asset = $assetProxy->getAsset();
                    $assetCollections = $asset->getAssetCollections();
                    $tags = $assetCollections->count() > 0 ? $this->tagRepository->findByAssetCollections($assetCollections->toArray()) : $this->tagRepository->findAll();

                    switch ($asset->getFileExtension()) {
                        case 'pdf':
                            $contentPreview = 'ContentPdf';
                            break;
                    }
                }
            }

            $this->view->assignMultiple([
                'tags' => $tags,
                'assetProxy' => $assetProxy,
                'assetCollections' => $this->assetCollectionRepository->findAll(),
                'contentPreview' => $contentPreview,
                'assetSource' => $assetSource
            ]);
        } catch (AssetNotFoundExceptionInterface $e) {
            $this->throwStatus(404, 'Asset not found');
        } catch (AssetSourceConnectionExceptionInterface $e) {
            $this->view->assign('connectionError', $e);
        }
    }

    /**
     * @return void
     * @throws \Neos\Flow\Mvc\Exception\NoSuchArgumentException
     */
    protected function initializeUpdateAction()
    {
        $assetMappingConfiguration = $this->arguments->getArgument('asset')->getPropertyMappingConfiguration();
        $assetMappingConfiguration->allowProperties('title', 'resource', 'tags', 'assetCollections');
        $assetMappingConfiguration->setTypeConverterOption(PersistentObjectConverter::class, PersistentObjectConverter::CONFIGURATION_CREATION_ALLOWED, true);
    }

    /**
     * Update an asset
     *
     * @param Asset $asset
     * @return void
     * @throws StopActionException
     */
    public function updateAction(Asset $asset)
    {
        $this->assetRepository->update($asset);
        $this->addFlashMessage('assetHasBeenUpdated', '', Message::SEVERITY_OK, [htmlspecialchars($asset->getLabel())]);
        $this->redirect('index');
    }

    /**
     * Initialization for createAction
     *
     * @return void
     * @throws \Neos\Flow\Mvc\Exception\NoSuchArgumentException
     */
    protected function initializeCreateAction()
    {
        $assetMappingConfiguration = $this->arguments->getArgument('asset')->getPropertyMappingConfiguration();
        $assetMappingConfiguration->allowProperties('title', 'resource', 'tags', 'assetCollections');
        $assetMappingConfiguration->setTypeConverterOption(PersistentObjectConverter::class, PersistentObjectConverter::CONFIGURATION_CREATION_ALLOWED, true);
        $assetMappingConfiguration->setTypeConverterOption(AssetInterfaceConverter::class, AssetInterfaceConverter::CONFIGURATION_ONE_PER_RESOURCE, true);
    }

    /**
     * Create a new asset
     *
     * @param Asset $asset
     * @return void
     * @throws StopActionException
     */
    public function createAction(Asset $asset)
    {
        if ($this->persistenceManager->isNewObject($asset)) {
            $this->assetRepository->add($asset);
        }
        $this->addFlashMessage('assetHasBeenAdded', '', Message::SEVERITY_OK, [htmlspecialchars($asset->getLabel())]);
        $this->redirect('index', null, null, [], 0, 201);
    }

    /**
     * Initialization for uploadAction
     *
     * @return void
     * @throws \Neos\Flow\Mvc\Exception\NoSuchArgumentException
     */
    protected function initializeUploadAction()
    {
        $assetMappingConfiguration = $this->arguments->getArgument('asset')->getPropertyMappingConfiguration();
        $assetMappingConfiguration->allowProperties('title', 'resource');
        $assetMappingConfiguration->setTypeConverterOption(PersistentObjectConverter::class, PersistentObjectConverter::CONFIGURATION_CREATION_ALLOWED, true);
        $assetMappingConfiguration->setTypeConverterOption(AssetInterfaceConverter::class, AssetInterfaceConverter::CONFIGURATION_ONE_PER_RESOURCE, true);
    }

    /**
     * Upload a new asset. No redirection and no response body, for use by plupload (or similar).
     *
     * @param Asset $asset
     * @return string
     * @throws \Neos\Flow\Persistence\Exception\IllegalObjectTypeException
     */
    public function uploadAction(Asset $asset)
    {
        if (($tag = $this->browserState->get('activeTag')) !== null) {
            $asset->addTag($tag);
        }

        if ($this->persistenceManager->isNewObject($asset)) {
            $this->assetRepository->add($asset);
        } else {
            $this->assetRepository->update($asset);
        }

        if (($assetCollection = $this->browserState->get('activeAssetCollection')) !== null && $assetCollection->addAsset($asset)) {
            $this->assetCollectionRepository->update($assetCollection);
        }

        $this->addFlashMessage('assetHasBeenAdded', '', Message::SEVERITY_OK, [htmlspecialchars($asset->getLabel())]);
        $this->response->setStatus(201);
        return '';
    }

    /**
     * Tags an asset with a tag.
     *
     * No redirection and no response body, no flash message, for use by plupload (or similar).
     *
     * @param Asset $asset
     * @param Tag $tag
     * @return void
     */
    public function tagAssetAction(Asset $asset, Tag $tag)
    {
        $success = false;
        if ($asset->addTag($tag)) {
            $this->assetRepository->update($asset);
            $success = true;
        }
        $this->view->assign('value', $success);
    }

    /**
     * Adds an asset to an asset collection
     *
     * @param Asset $asset
     * @param AssetCollection $assetCollection
     * @return void
     */
    public function addAssetToCollectionAction(Asset $asset, AssetCollection $assetCollection)
    {
        $success = false;
        if ($assetCollection->addAsset($asset)) {
            $this->assetCollectionRepository->update($assetCollection);
            $success = true;
        }
        $this->view->assign('value', $success);
    }

    /**
     * Delete an asset
     *
     * @param Asset $asset
     * @return void
     */
    public function deleteAction(Asset $asset)
    {
        $usageReferences = $this->assetService->getUsageReferences($asset);
        if (count($usageReferences) > 0) {
            $this->addFlashMessage('deleteRelatedNodes', '', Message::SEVERITY_WARNING, [], 1412422767);
            $this->redirect('index');
        }

        $this->assetRepository->remove($asset);
        $this->addFlashMessage('assetHasBeenDeleted', '', Message::SEVERITY_OK, [$asset->getLabel()], 1412375050);
        $this->redirect('index');
    }

    /**
     * Update the resource on an asset.
     *
     * @param AssetInterface $asset
     * @param PersistentResource $resource
     * @param array $options
     * @throws InvalidArgumentValueException
     * @return void
     */
    public function updateAssetResourceAction(AssetInterface $asset, PersistentResource $resource, array $options = [])
    {
        $sourceMediaType = MediaTypes::parseMediaType($asset->getMediaType());
        $replacementMediaType = MediaTypes::parseMediaType($resource->getMediaType());

        // Prevent replacement of image, audio and video by a different mimetype because of possible rendering issues.
        if (in_array($sourceMediaType['type'], ['image', 'audio', 'video']) && $sourceMediaType['type'] !== $replacementMediaType['type']) {
            $this->addFlashMessage(
                'resourceCanOnlyBeReplacedBySimilarResource',
                '',
                Message::SEVERITY_WARNING,
                [$sourceMediaType['type'], $resource->getMediaType()],
                1462308179
            );
            $this->redirect('index');
        }

        try {
            $originalFilename = $asset->getLabel();
            $this->assetService->replaceAssetResource($asset, $resource, $options);
        } catch (\Exception $exception) {
            $this->addFlashMessage('couldNotReplaceAsset', '', Message::SEVERITY_OK, [], 1463472606);
            $this->forwardToReferringRequest();
            return;
        }

        $this->addFlashMessage('assetHasBeenReplaced', '', Message::SEVERITY_OK, [htmlspecialchars($originalFilename)]);
        $this->redirect('index');
    }

    /**
     * Get Related Nodes for an asset (proxy action)
     *
     * @param AssetInterface $asset
     * @return void
     */
    public function relatedNodesAction(AssetInterface $asset)
    {
        $this->forward('relatedNodes', 'Usage', 'Neos.Media.Browser', ['asset' => $asset]);
    }

    /**
     * @param string $label
     * @return void
     * @Flow\Validate(argumentName="label", type="NotEmpty")
     * @Flow\Validate(argumentName="label", type="Label")
     */
    public function createTagAction($label)
    {
        $this->forward('create', 'Tag', 'Neos.Media.Browser', ['label' => $label]);
    }

    /**
     * @param Tag $tag
     * @return void
     */
    public function editTagAction(Tag $tag)
    {
        $this->forward('edit', 'Tag', 'Neos.Media.Browser', ['tag' => $tag]);
    }

    /**
     * @param Tag $tag
     * @return void
     */
    public function updateTagAction(Tag $tag)
    {
        $this->forward('update', 'Tag', 'Neos.Media.Browser', ['tag' => $tag]);
    }

    /**
     * @param Tag $tag
     * @return void
     */
    public function deleteTagAction(Tag $tag)
    {
        $this->forward('delete', 'Tag', 'Neos.Media.Browser', ['tag' => $tag]);
    }

    /**
     * @param string $title
     * @return void
     * @Flow\Validate(argumentName="title", type="NotEmpty")
     * @Flow\Validate(argumentName="title", type="Label")
     */
    public function createAssetCollectionAction($title)
    {
        $this->forward('create', 'AssetCollection', 'Neos.Media.Browser', ['title' => $title]);
    }

    /**
     * @param AssetCollection $assetCollection
     * @return void
     */
    public function editAssetCollectionAction(AssetCollection $assetCollection)
    {
        $this->forward('edit', 'AssetCollection', 'Neos.Media.Browser', ['assetCollection' => $assetCollection]);
    }

    /**
     * @param AssetCollection $assetCollection
     * @return void
     */
    public function updateAssetCollectionAction(AssetCollection $assetCollection)
    {
        $this->forward('update', 'AssetCollection', 'Neos.Media.Browser', ['assetCollection' => $assetCollection]);
    }

    /**
     * @param AssetCollection $assetCollection
     * @return void
     */
    public function deleteAssetCollectionAction(AssetCollection $assetCollection)
    {
        $this->forward('delete', 'AssetCollection', 'Neos.Media.Browser', ['assetCollection' => $assetCollection]);
    }

    /**
     * This custom errorAction adds FlashMessages for validation results to give more information in the
     *
     * @return string
     */
    protected function errorAction()
    {
        foreach ($this->arguments->getValidationResults()->getFlattenedErrors() as $propertyPath => $errors) {
            foreach ($errors as $error) {
                $this->flashMessageContainer->addMessage($error);
            }
        }

        return parent::errorAction();
    }

    /**
     * Individual error FlashMessage that hides which action fails in production.
     *
     * @return Message|bool The flash message or false if no flash message should be set
     */
    protected function getErrorFlashMessage()
    {
        if ($this->arguments->getValidationResults()->hasErrors()) {
            return false;
        }
        $errorMessage = 'An error occurred';
        if ($this->objectManager->getContext()->isDevelopment()) {
            $errorMessage .= ' while trying to call %1$s->%2$s()';
        }

        return new Error($errorMessage, null, [get_class($this), $this->actionMethodName]);
    }

    /**
     * Add a translated flashMessage.
     *
     * @param string $messageBody The translation id for the message body.
     * @param string $messageTitle The translation id for the message title.
     * @param string $severity
     * @param array $messageArguments
     * @param integer $messageCode
     * @return void
     */
    public function addFlashMessage($messageBody, $messageTitle = '', $severity = Message::SEVERITY_OK, array $messageArguments = [], $messageCode = null)
    {
        if (is_string($messageBody)) {
            $messageBody = $this->translator->translateById($messageBody, $messageArguments, null, null, 'Main', 'Neos.Media.Browser') ?: $messageBody;
        }

        $messageTitle = $this->translator->translateById($messageTitle, $messageArguments, null, null, 'Main', 'Neos.Media.Browser');
        parent::addFlashMessage($messageBody, $messageTitle, $severity, $messageArguments, $messageCode);
    }

    /**
     * Returns the lowest configured maximum upload file size
     *
     * @return integer
     * @throws \Neos\Utility\Exception\FilesException
     */
    private function getMaximumFileUploadSize()
    {
        return min(Files::sizeStringToBytes(ini_get('post_max_size')), Files::sizeStringToBytes(ini_get('upload_max_filesize')));
    }

    /**
     * @param string $view
     * @param string $sortBy
     * @param string $sortDirection
     * @param string $filter
     */
    private function applyViewOptionsToBrowserState(string $view = null, string $sortBy = null, string $sortDirection = null, string $filter = null): void
    {
        if (!empty($view)) {
            $this->browserState->set('view', $view);
        }
        if (!empty($sortBy)) {
            $this->browserState->set('sortBy', $sortBy);
        }
        if (!empty($sortDirection)) {
            $this->browserState->set('sortDirection', $sortDirection);
        }
        if (!empty($filter)) {
            $this->browserState->set('filter', $filter);
        }

        foreach (['view', 'sortBy', 'sortDirection', 'filter'] as $optionName) {
            $this->view->assign($optionName, $this->browserState->get($optionName));
        }
    }

    /**
     * @param $assetSourceIdentifier
     */
    private function applyActiveAssetSourceToBrowserState($assetSourceIdentifier)
    {
        if ($assetSourceIdentifier !== null && isset($this->assetSources[$assetSourceIdentifier])) {
            $this->browserState->setActiveAssetSourceIdentifier($assetSourceIdentifier);
        }
    }

    /**
     * @param int $tagMode
     * @param Tag $tag
     * @param AssetCollection|null $activeAssetCollection
     */
    private function applyTagToBrowserState(int $tagMode = null, Tag $tag = null, AssetCollection $activeAssetCollection = null): void
    {
        if ($tagMode === self::TAG_GIVEN && $tag !== null) {
            $this->browserState->set('activeTag', $tag);
            $this->view->assign('activeTag', $tag);
        } elseif ($tagMode === self::TAG_NONE || $tagMode === self::TAG_ALL) {
            $this->browserState->set('activeTag', null);
            $this->view->assign('activeTag', null);
        }
        $this->browserState->set('tagMode', $tagMode);

        // Unset active tag if it isn't available in the active asset collection
        if ($this->browserState->get('activeTag') && $activeAssetCollection !== null && !$activeAssetCollection->getTags()->contains($this->browserState->get('activeTag'))) {
            $this->browserState->set('activeTag', null);
            $this->view->assign('activeTag', null);
        }

        if (!$this->browserState->get('activeTag') && $this->browserState->get('tagMode') === self::TAG_GIVEN) {
            $this->browserState->set('tagMode', self::TAG_ALL);
        }
    }

    /**
     * @return AssetSourceInterface
     */
    private function getAssetSourceFromBrowserState(): AssetSourceInterface
    {
        $assetSourceIdentifier = $this->browserState->getActiveAssetSourceIdentifier();
        if (!isset($this->assetSources[$assetSourceIdentifier])) {
            $assetSourceIdentifiers = array_keys($this->assetSources);
            $assetSourceIdentifier = reset($assetSourceIdentifiers);
        }
        return $this->assetSources[$assetSourceIdentifier];
    }

    /**
     * @param int $collectionMode
     * @param AssetCollection $assetCollection
     */
    private function applyAssetCollectionOptionsToBrowserState(int $collectionMode = null, AssetCollection $assetCollection = null): void
    {
        if ($collectionMode === self::COLLECTION_GIVEN && $assetCollection !== null) {
            $this->browserState->set('activeAssetCollection', $assetCollection);
            $this->view->assign('activeAssetCollection', $assetCollection);
        } elseif ($collectionMode === self::COLLECTION_ALL) {
            $this->browserState->set('activeAssetCollection', null);
            $this->view->assign('activeAssetCollection', null);
        }
        $this->browserState->set('collectionMode', $collectionMode);
    }

    /**
     * @return AssetCollection|null
     */
    private function getActiveAssetCollectionFromBrowserState(): ?AssetCollection
    {
        try {
            /** @var AssetCollection $activeAssetCollection */
            $activeAssetCollection = $this->browserState->get('activeAssetCollection');
            if ($activeAssetCollection instanceof DoctrineProxy) {
                // To trigger a possible EntityNotFound have to load the entity
                $activeAssetCollection->__load();
            }
        } catch (EntityNotFoundException $exception) {
            // If a removed asset collection is still in the browser state it can not be fetched
            $this->browserState->set('activeAssetCollection', null);
            $activeAssetCollection = null;
        }
        return $activeAssetCollection;
    }

    /**
     * @param AssetProxyRepositoryInterface $assetProxyRepository
     */
    private function applySortingFromBrowserState(AssetProxyRepositoryInterface $assetProxyRepository): void
    {
        if ($assetProxyRepository instanceof SupportsSortingInterface) {
            switch ($this->browserState->get('sortBy')) {
                case 'Name':
                    $assetProxyRepository->orderBy(['resource.filename' => $this->browserState->get('sortDirection')]);
                    break;
                case 'Modified':
                default:
                    $assetProxyRepository->orderBy(['lastModified' => $this->browserState->get('sortDirection')]);
                    break;
            }
        }
    }

    /**
     * @param AssetProxyRepositoryInterface $assetProxyRepository
     */
    private function applyAssetTypeFilterFromBrowserState(AssetProxyRepositoryInterface $assetProxyRepository): void
    {
        $assetProxyRepository->filterByType(new AssetTypeFilter($this->browserState->get('filter')));
    }

    /**
     * @param AssetProxyRepositoryInterface $assetProxyRepository
     */
    private function applyAssetCollectionFilterFromBrowserState(AssetProxyRepositoryInterface $assetProxyRepository): void
    {
        if ($assetProxyRepository instanceof SupportsCollectionsInterface) {
            $assetProxyRepository->filterByCollection($this->getActiveAssetCollectionFromBrowserState());
        }
    }
}

#
# Start of Flow generated Proxy code
#
namespace Neos\Media\Browser\Controller;

use Doctrine\ORM\Mapping as ORM;
use Neos\Flow\Annotations as Flow;

/**
 * Controller for asset handling
 * @\Neos\Flow\Annotations\Scope("singleton")
 */
class AssetController extends AssetController_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\Aop\AdvicesTrait, \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;

    private $Flow_Aop_Proxy_targetMethodsAndGroupedAdvices = array();

    private $Flow_Aop_Proxy_groupedAdviceChains = array();

    private $Flow_Aop_Proxy_methodIsInAdviceMode = array();


    /**
     * Autogenerated Proxy Method
     */
    public function __construct()
    {

        $this->Flow_Aop_Proxy_buildMethodsAndAdvicesArray();
        if (get_class($this) === 'Neos\Media\Browser\Controller\AssetController') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Media\Browser\Controller\AssetController', $this);
        if ('Neos\Media\Browser\Controller\AssetController' === get_class($this)) {
            $this->Flow_Proxy_injectProperties();
        }

        $isSameClass = get_class($this) === 'Neos\Media\Browser\Controller\AssetController';
        if ($isSameClass) {
            $this->initializeObject(1);
        }
    }

    /**
     * Autogenerated Proxy Method
     */
    protected function Flow_Aop_Proxy_buildMethodsAndAdvicesArray()
    {
        if (method_exists(get_parent_class(), 'Flow_Aop_Proxy_buildMethodsAndAdvicesArray') && is_callable('parent::Flow_Aop_Proxy_buildMethodsAndAdvicesArray')) parent::Flow_Aop_Proxy_buildMethodsAndAdvicesArray();

        $objectManager = \Neos\Flow\Core\Bootstrap::$staticObjectManager;
        $this->Flow_Aop_Proxy_targetMethodsAndGroupedAdvices = array(
            'indexAction' => array(
                'Neos\Flow\Aop\Advice\AroundAdvice' => array(
                    new \Neos\Flow\Aop\Advice\AroundAdvice('Neos\Flow\Security\Aspect\PolicyEnforcementAspect', 'enforcePolicy', $objectManager, NULL),
                ),
            ),
            'newAction' => array(
                'Neos\Flow\Aop\Advice\AroundAdvice' => array(
                    new \Neos\Flow\Aop\Advice\AroundAdvice('Neos\Flow\Security\Aspect\PolicyEnforcementAspect', 'enforcePolicy', $objectManager, NULL),
                ),
            ),
            'replaceAssetResourceAction' => array(
                'Neos\Flow\Aop\Advice\AroundAdvice' => array(
                    new \Neos\Flow\Aop\Advice\AroundAdvice('Neos\Flow\Security\Aspect\PolicyEnforcementAspect', 'enforcePolicy', $objectManager, NULL),
                ),
            ),
            'showAction' => array(
                'Neos\Flow\Aop\Advice\AroundAdvice' => array(
                    new \Neos\Flow\Aop\Advice\AroundAdvice('Neos\Flow\Security\Aspect\PolicyEnforcementAspect', 'enforcePolicy', $objectManager, NULL),
                ),
            ),
            'editAction' => array(
                'Neos\Flow\Aop\Advice\AroundAdvice' => array(
                    new \Neos\Flow\Aop\Advice\AroundAdvice('Neos\Flow\Security\Aspect\PolicyEnforcementAspect', 'enforcePolicy', $objectManager, NULL),
                ),
            ),
            'updateAction' => array(
                'Neos\Flow\Aop\Advice\AroundAdvice' => array(
                    new \Neos\Flow\Aop\Advice\AroundAdvice('Neos\Flow\Security\Aspect\PolicyEnforcementAspect', 'enforcePolicy', $objectManager, NULL),
                ),
            ),
            'initializeCreateAction' => array(
                'Neos\Flow\Aop\Advice\AroundAdvice' => array(
                    new \Neos\Flow\Aop\Advice\AroundAdvice('Neos\Flow\Security\Aspect\PolicyEnforcementAspect', 'enforcePolicy', $objectManager, NULL),
                ),
            ),
            'createAction' => array(
                'Neos\Flow\Aop\Advice\AroundAdvice' => array(
                    new \Neos\Flow\Aop\Advice\AroundAdvice('Neos\Flow\Security\Aspect\PolicyEnforcementAspect', 'enforcePolicy', $objectManager, NULL),
                ),
            ),
            'initializeUploadAction' => array(
                'Neos\Flow\Aop\Advice\AroundAdvice' => array(
                    new \Neos\Flow\Aop\Advice\AroundAdvice('Neos\Flow\Security\Aspect\PolicyEnforcementAspect', 'enforcePolicy', $objectManager, NULL),
                ),
            ),
            'uploadAction' => array(
                'Neos\Flow\Aop\Advice\AroundAdvice' => array(
                    new \Neos\Flow\Aop\Advice\AroundAdvice('Neos\Flow\Security\Aspect\PolicyEnforcementAspect', 'enforcePolicy', $objectManager, NULL),
                ),
            ),
            'tagAssetAction' => array(
                'Neos\Flow\Aop\Advice\AroundAdvice' => array(
                    new \Neos\Flow\Aop\Advice\AroundAdvice('Neos\Flow\Security\Aspect\PolicyEnforcementAspect', 'enforcePolicy', $objectManager, NULL),
                ),
            ),
            'addAssetToCollectionAction' => array(
                'Neos\Flow\Aop\Advice\AroundAdvice' => array(
                    new \Neos\Flow\Aop\Advice\AroundAdvice('Neos\Flow\Security\Aspect\PolicyEnforcementAspect', 'enforcePolicy', $objectManager, NULL),
                ),
            ),
            'deleteAction' => array(
                'Neos\Flow\Aop\Advice\AroundAdvice' => array(
                    new \Neos\Flow\Aop\Advice\AroundAdvice('Neos\Flow\Security\Aspect\PolicyEnforcementAspect', 'enforcePolicy', $objectManager, NULL),
                ),
            ),
            'updateAssetResourceAction' => array(
                'Neos\Flow\Aop\Advice\AroundAdvice' => array(
                    new \Neos\Flow\Aop\Advice\AroundAdvice('Neos\Flow\Security\Aspect\PolicyEnforcementAspect', 'enforcePolicy', $objectManager, NULL),
                ),
            ),
            'relatedNodesAction' => array(
                'Neos\Flow\Aop\Advice\AroundAdvice' => array(
                    new \Neos\Flow\Aop\Advice\AroundAdvice('Neos\Flow\Security\Aspect\PolicyEnforcementAspect', 'enforcePolicy', $objectManager, NULL),
                ),
            ),
            'createTagAction' => array(
                'Neos\Flow\Aop\Advice\AroundAdvice' => array(
                    new \Neos\Flow\Aop\Advice\AroundAdvice('Neos\Flow\Security\Aspect\PolicyEnforcementAspect', 'enforcePolicy', $objectManager, NULL),
                ),
            ),
            'editTagAction' => array(
                'Neos\Flow\Aop\Advice\AroundAdvice' => array(
                    new \Neos\Flow\Aop\Advice\AroundAdvice('Neos\Flow\Security\Aspect\PolicyEnforcementAspect', 'enforcePolicy', $objectManager, NULL),
                ),
            ),
            'updateTagAction' => array(
                'Neos\Flow\Aop\Advice\AroundAdvice' => array(
                    new \Neos\Flow\Aop\Advice\AroundAdvice('Neos\Flow\Security\Aspect\PolicyEnforcementAspect', 'enforcePolicy', $objectManager, NULL),
                ),
            ),
            'deleteTagAction' => array(
                'Neos\Flow\Aop\Advice\AroundAdvice' => array(
                    new \Neos\Flow\Aop\Advice\AroundAdvice('Neos\Flow\Security\Aspect\PolicyEnforcementAspect', 'enforcePolicy', $objectManager, NULL),
                ),
            ),
            'createAssetCollectionAction' => array(
                'Neos\Flow\Aop\Advice\AroundAdvice' => array(
                    new \Neos\Flow\Aop\Advice\AroundAdvice('Neos\Flow\Security\Aspect\PolicyEnforcementAspect', 'enforcePolicy', $objectManager, NULL),
                ),
            ),
            'editAssetCollectionAction' => array(
                'Neos\Flow\Aop\Advice\AroundAdvice' => array(
                    new \Neos\Flow\Aop\Advice\AroundAdvice('Neos\Flow\Security\Aspect\PolicyEnforcementAspect', 'enforcePolicy', $objectManager, NULL),
                ),
            ),
            'updateAssetCollectionAction' => array(
                'Neos\Flow\Aop\Advice\AroundAdvice' => array(
                    new \Neos\Flow\Aop\Advice\AroundAdvice('Neos\Flow\Security\Aspect\PolicyEnforcementAspect', 'enforcePolicy', $objectManager, NULL),
                ),
            ),
            'deleteAssetCollectionAction' => array(
                'Neos\Flow\Aop\Advice\AroundAdvice' => array(
                    new \Neos\Flow\Aop\Advice\AroundAdvice('Neos\Flow\Security\Aspect\PolicyEnforcementAspect', 'enforcePolicy', $objectManager, NULL),
                ),
            ),
        );
    }

    /**
     * Autogenerated Proxy Method
     */
    public function __wakeup()
    {

        $this->Flow_Aop_Proxy_buildMethodsAndAdvicesArray();
        if (get_class($this) === 'Neos\Media\Browser\Controller\AssetController') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Media\Browser\Controller\AssetController', $this);

        $this->Flow_setRelatedEntities();
        $this->Flow_Proxy_injectProperties();
            $result = NULL;
        if (method_exists(get_parent_class(), '__wakeup') && is_callable('parent::__wakeup')) parent::__wakeup();

        $isSameClass = get_class($this) === 'Neos\Media\Browser\Controller\AssetController';
        $classParents = class_parents($this);
        $classImplements = class_implements($this);
        $isClassProxy = array_search('Neos\Media\Browser\Controller\AssetController', $classParents) !== false && array_search('Doctrine\ORM\Proxy\Proxy', $classImplements) !== false;

        if ($isSameClass || $isClassProxy) {
            $this->initializeObject(2);
        }
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     */
    public function __clone()
    {

        $this->Flow_Aop_Proxy_buildMethodsAndAdvicesArray();
    }

    /**
     * Autogenerated Proxy Method
     * @param string $view
     * @param string $sortBy
     * @param string $sortDirection
     * @param string $filter
     * @param int $tagMode
     * @param Tag $tag
     * @param string $searchTerm
     * @param int $collectionMode
     * @param AssetCollection $assetCollection
     * @param string $assetSourceIdentifier
     * @return void
     * @throws \Neos\Utility\Exception\FilesException
     */
    public function indexAction($view = NULL, $sortBy = NULL, $sortDirection = NULL, $filter = NULL, $tagMode = 0, \Neos\Media\Domain\Model\Tag $tag = NULL, $searchTerm = NULL, $collectionMode = 0, \Neos\Media\Domain\Model\AssetCollection $assetCollection = NULL, $assetSourceIdentifier = NULL)
    {

        if (isset($this->Flow_Aop_Proxy_methodIsInAdviceMode['indexAction'])) {
            $result = parent::indexAction($view, $sortBy, $sortDirection, $filter, $tagMode, $tag, $searchTerm, $collectionMode, $assetCollection, $assetSourceIdentifier);

        } else {
            $this->Flow_Aop_Proxy_methodIsInAdviceMode['indexAction'] = true;
            try {
            
                $methodArguments = [];

                $methodArguments['view'] = $view;
                $methodArguments['sortBy'] = $sortBy;
                $methodArguments['sortDirection'] = $sortDirection;
                $methodArguments['filter'] = $filter;
                $methodArguments['tagMode'] = $tagMode;
                $methodArguments['tag'] = $tag;
                $methodArguments['searchTerm'] = $searchTerm;
                $methodArguments['collectionMode'] = $collectionMode;
                $methodArguments['assetCollection'] = $assetCollection;
                $methodArguments['assetSourceIdentifier'] = $assetSourceIdentifier;
            
                $adviceChains = $this->Flow_Aop_Proxy_getAdviceChains('indexAction');
                $adviceChain = $adviceChains['Neos\Flow\Aop\Advice\AroundAdvice'];
                $adviceChain->rewind();
                $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\Media\Browser\Controller\AssetController', 'indexAction', $methodArguments, $adviceChain);
                $result = $adviceChain->proceed($joinPoint);
                $methodArguments = $joinPoint->getMethodArguments();

            } catch (\Exception $exception) {
                unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['indexAction']);
                throw $exception;
            }
            unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['indexAction']);
        }
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     * @return void
     */
    public function newAction()
    {

        if (isset($this->Flow_Aop_Proxy_methodIsInAdviceMode['newAction'])) {
            $result = parent::newAction();

        } else {
            $this->Flow_Aop_Proxy_methodIsInAdviceMode['newAction'] = true;
            try {
            
                $methodArguments = [];

                $adviceChains = $this->Flow_Aop_Proxy_getAdviceChains('newAction');
                $adviceChain = $adviceChains['Neos\Flow\Aop\Advice\AroundAdvice'];
                $adviceChain->rewind();
                $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\Media\Browser\Controller\AssetController', 'newAction', $methodArguments, $adviceChain);
                $result = $adviceChain->proceed($joinPoint);
                $methodArguments = $joinPoint->getMethodArguments();

            } catch (\Exception $exception) {
                unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['newAction']);
                throw $exception;
            }
            unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['newAction']);
        }
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     * @param Asset $asset
     * @return void
     */
    public function replaceAssetResourceAction(\Neos\Media\Domain\Model\Asset $asset)
    {

        if (isset($this->Flow_Aop_Proxy_methodIsInAdviceMode['replaceAssetResourceAction'])) {
            $result = parent::replaceAssetResourceAction($asset);

        } else {
            $this->Flow_Aop_Proxy_methodIsInAdviceMode['replaceAssetResourceAction'] = true;
            try {
            
                $methodArguments = [];

                $methodArguments['asset'] = $asset;
            
                $adviceChains = $this->Flow_Aop_Proxy_getAdviceChains('replaceAssetResourceAction');
                $adviceChain = $adviceChains['Neos\Flow\Aop\Advice\AroundAdvice'];
                $adviceChain->rewind();
                $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\Media\Browser\Controller\AssetController', 'replaceAssetResourceAction', $methodArguments, $adviceChain);
                $result = $adviceChain->proceed($joinPoint);
                $methodArguments = $joinPoint->getMethodArguments();

            } catch (\Exception $exception) {
                unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['replaceAssetResourceAction']);
                throw $exception;
            }
            unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['replaceAssetResourceAction']);
        }
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     * @param string $assetSourceIdentifier
     * @param string $assetProxyIdentifier
     * @return void
     * @throws StopActionException
     * @throws UnsupportedRequestTypeException
     */
    public function showAction(string $assetSourceIdentifier, string $assetProxyIdentifier)
    {

        if (isset($this->Flow_Aop_Proxy_methodIsInAdviceMode['showAction'])) {
            $result = parent::showAction($assetSourceIdentifier, $assetProxyIdentifier);

        } else {
            $this->Flow_Aop_Proxy_methodIsInAdviceMode['showAction'] = true;
            try {
            
                $methodArguments = [];

                $methodArguments['assetSourceIdentifier'] = $assetSourceIdentifier;
                $methodArguments['assetProxyIdentifier'] = $assetProxyIdentifier;
            
                $adviceChains = $this->Flow_Aop_Proxy_getAdviceChains('showAction');
                $adviceChain = $adviceChains['Neos\Flow\Aop\Advice\AroundAdvice'];
                $adviceChain->rewind();
                $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\Media\Browser\Controller\AssetController', 'showAction', $methodArguments, $adviceChain);
                $result = $adviceChain->proceed($joinPoint);
                $methodArguments = $joinPoint->getMethodArguments();

            } catch (\Exception $exception) {
                unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['showAction']);
                throw $exception;
            }
            unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['showAction']);
        }
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     * @param string $assetSourceIdentifier
     * @param string $assetProxyIdentifier
     * @return void
     * @throws StopActionException
     * @throws UnsupportedRequestTypeException
     */
    public function editAction(string $assetSourceIdentifier, string $assetProxyIdentifier)
    {

        if (isset($this->Flow_Aop_Proxy_methodIsInAdviceMode['editAction'])) {
            $result = parent::editAction($assetSourceIdentifier, $assetProxyIdentifier);

        } else {
            $this->Flow_Aop_Proxy_methodIsInAdviceMode['editAction'] = true;
            try {
            
                $methodArguments = [];

                $methodArguments['assetSourceIdentifier'] = $assetSourceIdentifier;
                $methodArguments['assetProxyIdentifier'] = $assetProxyIdentifier;
            
                $adviceChains = $this->Flow_Aop_Proxy_getAdviceChains('editAction');
                $adviceChain = $adviceChains['Neos\Flow\Aop\Advice\AroundAdvice'];
                $adviceChain->rewind();
                $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\Media\Browser\Controller\AssetController', 'editAction', $methodArguments, $adviceChain);
                $result = $adviceChain->proceed($joinPoint);
                $methodArguments = $joinPoint->getMethodArguments();

            } catch (\Exception $exception) {
                unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['editAction']);
                throw $exception;
            }
            unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['editAction']);
        }
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     * @param Asset $asset
     * @return void
     * @throws StopActionException
     */
    public function updateAction(\Neos\Media\Domain\Model\Asset $asset)
    {

        if (isset($this->Flow_Aop_Proxy_methodIsInAdviceMode['updateAction'])) {
            $result = parent::updateAction($asset);

        } else {
            $this->Flow_Aop_Proxy_methodIsInAdviceMode['updateAction'] = true;
            try {
            
                $methodArguments = [];

                $methodArguments['asset'] = $asset;
            
                $adviceChains = $this->Flow_Aop_Proxy_getAdviceChains('updateAction');
                $adviceChain = $adviceChains['Neos\Flow\Aop\Advice\AroundAdvice'];
                $adviceChain->rewind();
                $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\Media\Browser\Controller\AssetController', 'updateAction', $methodArguments, $adviceChain);
                $result = $adviceChain->proceed($joinPoint);
                $methodArguments = $joinPoint->getMethodArguments();

            } catch (\Exception $exception) {
                unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['updateAction']);
                throw $exception;
            }
            unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['updateAction']);
        }
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     * @return void
     * @throws \Neos\Flow\Mvc\Exception\NoSuchArgumentException
     */
    protected function initializeCreateAction()
    {

        if (isset($this->Flow_Aop_Proxy_methodIsInAdviceMode['initializeCreateAction'])) {
            $result = parent::initializeCreateAction();

        } else {
            $this->Flow_Aop_Proxy_methodIsInAdviceMode['initializeCreateAction'] = true;
            try {
            
                $methodArguments = [];

                $adviceChains = $this->Flow_Aop_Proxy_getAdviceChains('initializeCreateAction');
                $adviceChain = $adviceChains['Neos\Flow\Aop\Advice\AroundAdvice'];
                $adviceChain->rewind();
                $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\Media\Browser\Controller\AssetController', 'initializeCreateAction', $methodArguments, $adviceChain);
                $result = $adviceChain->proceed($joinPoint);
                $methodArguments = $joinPoint->getMethodArguments();

            } catch (\Exception $exception) {
                unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['initializeCreateAction']);
                throw $exception;
            }
            unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['initializeCreateAction']);
        }
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     * @param Asset $asset
     * @return void
     * @throws StopActionException
     */
    public function createAction(\Neos\Media\Domain\Model\Asset $asset)
    {

        if (isset($this->Flow_Aop_Proxy_methodIsInAdviceMode['createAction'])) {
            $result = parent::createAction($asset);

        } else {
            $this->Flow_Aop_Proxy_methodIsInAdviceMode['createAction'] = true;
            try {
            
                $methodArguments = [];

                $methodArguments['asset'] = $asset;
            
                $adviceChains = $this->Flow_Aop_Proxy_getAdviceChains('createAction');
                $adviceChain = $adviceChains['Neos\Flow\Aop\Advice\AroundAdvice'];
                $adviceChain->rewind();
                $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\Media\Browser\Controller\AssetController', 'createAction', $methodArguments, $adviceChain);
                $result = $adviceChain->proceed($joinPoint);
                $methodArguments = $joinPoint->getMethodArguments();

            } catch (\Exception $exception) {
                unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['createAction']);
                throw $exception;
            }
            unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['createAction']);
        }
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     * @return void
     * @throws \Neos\Flow\Mvc\Exception\NoSuchArgumentException
     */
    protected function initializeUploadAction()
    {

        if (isset($this->Flow_Aop_Proxy_methodIsInAdviceMode['initializeUploadAction'])) {
            $result = parent::initializeUploadAction();

        } else {
            $this->Flow_Aop_Proxy_methodIsInAdviceMode['initializeUploadAction'] = true;
            try {
            
                $methodArguments = [];

                $adviceChains = $this->Flow_Aop_Proxy_getAdviceChains('initializeUploadAction');
                $adviceChain = $adviceChains['Neos\Flow\Aop\Advice\AroundAdvice'];
                $adviceChain->rewind();
                $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\Media\Browser\Controller\AssetController', 'initializeUploadAction', $methodArguments, $adviceChain);
                $result = $adviceChain->proceed($joinPoint);
                $methodArguments = $joinPoint->getMethodArguments();

            } catch (\Exception $exception) {
                unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['initializeUploadAction']);
                throw $exception;
            }
            unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['initializeUploadAction']);
        }
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     * @param Asset $asset
     * @return string
     * @throws \Neos\Flow\Persistence\Exception\IllegalObjectTypeException
     */
    public function uploadAction(\Neos\Media\Domain\Model\Asset $asset)
    {

        if (isset($this->Flow_Aop_Proxy_methodIsInAdviceMode['uploadAction'])) {
            $result = parent::uploadAction($asset);

        } else {
            $this->Flow_Aop_Proxy_methodIsInAdviceMode['uploadAction'] = true;
            try {
            
                $methodArguments = [];

                $methodArguments['asset'] = $asset;
            
                $adviceChains = $this->Flow_Aop_Proxy_getAdviceChains('uploadAction');
                $adviceChain = $adviceChains['Neos\Flow\Aop\Advice\AroundAdvice'];
                $adviceChain->rewind();
                $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\Media\Browser\Controller\AssetController', 'uploadAction', $methodArguments, $adviceChain);
                $result = $adviceChain->proceed($joinPoint);
                $methodArguments = $joinPoint->getMethodArguments();

            } catch (\Exception $exception) {
                unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['uploadAction']);
                throw $exception;
            }
            unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['uploadAction']);
        }
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     * @param Asset $asset
     * @param Tag $tag
     * @return void
     */
    public function tagAssetAction(\Neos\Media\Domain\Model\Asset $asset, \Neos\Media\Domain\Model\Tag $tag)
    {

        if (isset($this->Flow_Aop_Proxy_methodIsInAdviceMode['tagAssetAction'])) {
            $result = parent::tagAssetAction($asset, $tag);

        } else {
            $this->Flow_Aop_Proxy_methodIsInAdviceMode['tagAssetAction'] = true;
            try {
            
                $methodArguments = [];

                $methodArguments['asset'] = $asset;
                $methodArguments['tag'] = $tag;
            
                $adviceChains = $this->Flow_Aop_Proxy_getAdviceChains('tagAssetAction');
                $adviceChain = $adviceChains['Neos\Flow\Aop\Advice\AroundAdvice'];
                $adviceChain->rewind();
                $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\Media\Browser\Controller\AssetController', 'tagAssetAction', $methodArguments, $adviceChain);
                $result = $adviceChain->proceed($joinPoint);
                $methodArguments = $joinPoint->getMethodArguments();

            } catch (\Exception $exception) {
                unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['tagAssetAction']);
                throw $exception;
            }
            unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['tagAssetAction']);
        }
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     * @param Asset $asset
     * @param AssetCollection $assetCollection
     * @return void
     */
    public function addAssetToCollectionAction(\Neos\Media\Domain\Model\Asset $asset, \Neos\Media\Domain\Model\AssetCollection $assetCollection)
    {

        if (isset($this->Flow_Aop_Proxy_methodIsInAdviceMode['addAssetToCollectionAction'])) {
            $result = parent::addAssetToCollectionAction($asset, $assetCollection);

        } else {
            $this->Flow_Aop_Proxy_methodIsInAdviceMode['addAssetToCollectionAction'] = true;
            try {
            
                $methodArguments = [];

                $methodArguments['asset'] = $asset;
                $methodArguments['assetCollection'] = $assetCollection;
            
                $adviceChains = $this->Flow_Aop_Proxy_getAdviceChains('addAssetToCollectionAction');
                $adviceChain = $adviceChains['Neos\Flow\Aop\Advice\AroundAdvice'];
                $adviceChain->rewind();
                $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\Media\Browser\Controller\AssetController', 'addAssetToCollectionAction', $methodArguments, $adviceChain);
                $result = $adviceChain->proceed($joinPoint);
                $methodArguments = $joinPoint->getMethodArguments();

            } catch (\Exception $exception) {
                unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['addAssetToCollectionAction']);
                throw $exception;
            }
            unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['addAssetToCollectionAction']);
        }
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     * @param Asset $asset
     * @return void
     */
    public function deleteAction(\Neos\Media\Domain\Model\Asset $asset)
    {

        if (isset($this->Flow_Aop_Proxy_methodIsInAdviceMode['deleteAction'])) {
            $result = parent::deleteAction($asset);

        } else {
            $this->Flow_Aop_Proxy_methodIsInAdviceMode['deleteAction'] = true;
            try {
            
                $methodArguments = [];

                $methodArguments['asset'] = $asset;
            
                $adviceChains = $this->Flow_Aop_Proxy_getAdviceChains('deleteAction');
                $adviceChain = $adviceChains['Neos\Flow\Aop\Advice\AroundAdvice'];
                $adviceChain->rewind();
                $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\Media\Browser\Controller\AssetController', 'deleteAction', $methodArguments, $adviceChain);
                $result = $adviceChain->proceed($joinPoint);
                $methodArguments = $joinPoint->getMethodArguments();

            } catch (\Exception $exception) {
                unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['deleteAction']);
                throw $exception;
            }
            unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['deleteAction']);
        }
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     * @param AssetInterface $asset
     * @param PersistentResource $resource
     * @param array $options
     * @throws InvalidArgumentValueException
     * @return void
     */
    public function updateAssetResourceAction(\Neos\Media\Domain\Model\AssetInterface $asset, \Neos\Flow\ResourceManagement\PersistentResource $resource, array $options = array())
    {

        if (isset($this->Flow_Aop_Proxy_methodIsInAdviceMode['updateAssetResourceAction'])) {
            $result = parent::updateAssetResourceAction($asset, $resource, $options);

        } else {
            $this->Flow_Aop_Proxy_methodIsInAdviceMode['updateAssetResourceAction'] = true;
            try {
            
                $methodArguments = [];

                $methodArguments['asset'] = $asset;
                $methodArguments['resource'] = $resource;
                $methodArguments['options'] = $options;
            
                $adviceChains = $this->Flow_Aop_Proxy_getAdviceChains('updateAssetResourceAction');
                $adviceChain = $adviceChains['Neos\Flow\Aop\Advice\AroundAdvice'];
                $adviceChain->rewind();
                $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\Media\Browser\Controller\AssetController', 'updateAssetResourceAction', $methodArguments, $adviceChain);
                $result = $adviceChain->proceed($joinPoint);
                $methodArguments = $joinPoint->getMethodArguments();

            } catch (\Exception $exception) {
                unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['updateAssetResourceAction']);
                throw $exception;
            }
            unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['updateAssetResourceAction']);
        }
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     * @param AssetInterface $asset
     * @return void
     */
    public function relatedNodesAction(\Neos\Media\Domain\Model\AssetInterface $asset)
    {

        if (isset($this->Flow_Aop_Proxy_methodIsInAdviceMode['relatedNodesAction'])) {
            $result = parent::relatedNodesAction($asset);

        } else {
            $this->Flow_Aop_Proxy_methodIsInAdviceMode['relatedNodesAction'] = true;
            try {
            
                $methodArguments = [];

                $methodArguments['asset'] = $asset;
            
                $adviceChains = $this->Flow_Aop_Proxy_getAdviceChains('relatedNodesAction');
                $adviceChain = $adviceChains['Neos\Flow\Aop\Advice\AroundAdvice'];
                $adviceChain->rewind();
                $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\Media\Browser\Controller\AssetController', 'relatedNodesAction', $methodArguments, $adviceChain);
                $result = $adviceChain->proceed($joinPoint);
                $methodArguments = $joinPoint->getMethodArguments();

            } catch (\Exception $exception) {
                unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['relatedNodesAction']);
                throw $exception;
            }
            unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['relatedNodesAction']);
        }
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     * @param string $label
     * @return void
     * @\Neos\Flow\Annotations\Validate(type="NotEmpty", argumentName="label")
     * @\Neos\Flow\Annotations\Validate(type="Label", argumentName="label")
     */
    public function createTagAction($label)
    {

        if (isset($this->Flow_Aop_Proxy_methodIsInAdviceMode['createTagAction'])) {
            $result = parent::createTagAction($label);

        } else {
            $this->Flow_Aop_Proxy_methodIsInAdviceMode['createTagAction'] = true;
            try {
            
                $methodArguments = [];

                $methodArguments['label'] = $label;
            
                $adviceChains = $this->Flow_Aop_Proxy_getAdviceChains('createTagAction');
                $adviceChain = $adviceChains['Neos\Flow\Aop\Advice\AroundAdvice'];
                $adviceChain->rewind();
                $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\Media\Browser\Controller\AssetController', 'createTagAction', $methodArguments, $adviceChain);
                $result = $adviceChain->proceed($joinPoint);
                $methodArguments = $joinPoint->getMethodArguments();

            } catch (\Exception $exception) {
                unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['createTagAction']);
                throw $exception;
            }
            unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['createTagAction']);
        }
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     * @param Tag $tag
     * @return void
     */
    public function editTagAction(\Neos\Media\Domain\Model\Tag $tag)
    {

        if (isset($this->Flow_Aop_Proxy_methodIsInAdviceMode['editTagAction'])) {
            $result = parent::editTagAction($tag);

        } else {
            $this->Flow_Aop_Proxy_methodIsInAdviceMode['editTagAction'] = true;
            try {
            
                $methodArguments = [];

                $methodArguments['tag'] = $tag;
            
                $adviceChains = $this->Flow_Aop_Proxy_getAdviceChains('editTagAction');
                $adviceChain = $adviceChains['Neos\Flow\Aop\Advice\AroundAdvice'];
                $adviceChain->rewind();
                $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\Media\Browser\Controller\AssetController', 'editTagAction', $methodArguments, $adviceChain);
                $result = $adviceChain->proceed($joinPoint);
                $methodArguments = $joinPoint->getMethodArguments();

            } catch (\Exception $exception) {
                unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['editTagAction']);
                throw $exception;
            }
            unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['editTagAction']);
        }
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     * @param Tag $tag
     * @return void
     */
    public function updateTagAction(\Neos\Media\Domain\Model\Tag $tag)
    {

        if (isset($this->Flow_Aop_Proxy_methodIsInAdviceMode['updateTagAction'])) {
            $result = parent::updateTagAction($tag);

        } else {
            $this->Flow_Aop_Proxy_methodIsInAdviceMode['updateTagAction'] = true;
            try {
            
                $methodArguments = [];

                $methodArguments['tag'] = $tag;
            
                $adviceChains = $this->Flow_Aop_Proxy_getAdviceChains('updateTagAction');
                $adviceChain = $adviceChains['Neos\Flow\Aop\Advice\AroundAdvice'];
                $adviceChain->rewind();
                $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\Media\Browser\Controller\AssetController', 'updateTagAction', $methodArguments, $adviceChain);
                $result = $adviceChain->proceed($joinPoint);
                $methodArguments = $joinPoint->getMethodArguments();

            } catch (\Exception $exception) {
                unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['updateTagAction']);
                throw $exception;
            }
            unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['updateTagAction']);
        }
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     * @param Tag $tag
     * @return void
     */
    public function deleteTagAction(\Neos\Media\Domain\Model\Tag $tag)
    {

        if (isset($this->Flow_Aop_Proxy_methodIsInAdviceMode['deleteTagAction'])) {
            $result = parent::deleteTagAction($tag);

        } else {
            $this->Flow_Aop_Proxy_methodIsInAdviceMode['deleteTagAction'] = true;
            try {
            
                $methodArguments = [];

                $methodArguments['tag'] = $tag;
            
                $adviceChains = $this->Flow_Aop_Proxy_getAdviceChains('deleteTagAction');
                $adviceChain = $adviceChains['Neos\Flow\Aop\Advice\AroundAdvice'];
                $adviceChain->rewind();
                $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\Media\Browser\Controller\AssetController', 'deleteTagAction', $methodArguments, $adviceChain);
                $result = $adviceChain->proceed($joinPoint);
                $methodArguments = $joinPoint->getMethodArguments();

            } catch (\Exception $exception) {
                unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['deleteTagAction']);
                throw $exception;
            }
            unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['deleteTagAction']);
        }
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     * @param string $title
     * @return void
     * @\Neos\Flow\Annotations\Validate(type="NotEmpty", argumentName="title")
     * @\Neos\Flow\Annotations\Validate(type="Label", argumentName="title")
     */
    public function createAssetCollectionAction($title)
    {

        if (isset($this->Flow_Aop_Proxy_methodIsInAdviceMode['createAssetCollectionAction'])) {
            $result = parent::createAssetCollectionAction($title);

        } else {
            $this->Flow_Aop_Proxy_methodIsInAdviceMode['createAssetCollectionAction'] = true;
            try {
            
                $methodArguments = [];

                $methodArguments['title'] = $title;
            
                $adviceChains = $this->Flow_Aop_Proxy_getAdviceChains('createAssetCollectionAction');
                $adviceChain = $adviceChains['Neos\Flow\Aop\Advice\AroundAdvice'];
                $adviceChain->rewind();
                $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\Media\Browser\Controller\AssetController', 'createAssetCollectionAction', $methodArguments, $adviceChain);
                $result = $adviceChain->proceed($joinPoint);
                $methodArguments = $joinPoint->getMethodArguments();

            } catch (\Exception $exception) {
                unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['createAssetCollectionAction']);
                throw $exception;
            }
            unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['createAssetCollectionAction']);
        }
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     * @param AssetCollection $assetCollection
     * @return void
     */
    public function editAssetCollectionAction(\Neos\Media\Domain\Model\AssetCollection $assetCollection)
    {

        if (isset($this->Flow_Aop_Proxy_methodIsInAdviceMode['editAssetCollectionAction'])) {
            $result = parent::editAssetCollectionAction($assetCollection);

        } else {
            $this->Flow_Aop_Proxy_methodIsInAdviceMode['editAssetCollectionAction'] = true;
            try {
            
                $methodArguments = [];

                $methodArguments['assetCollection'] = $assetCollection;
            
                $adviceChains = $this->Flow_Aop_Proxy_getAdviceChains('editAssetCollectionAction');
                $adviceChain = $adviceChains['Neos\Flow\Aop\Advice\AroundAdvice'];
                $adviceChain->rewind();
                $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\Media\Browser\Controller\AssetController', 'editAssetCollectionAction', $methodArguments, $adviceChain);
                $result = $adviceChain->proceed($joinPoint);
                $methodArguments = $joinPoint->getMethodArguments();

            } catch (\Exception $exception) {
                unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['editAssetCollectionAction']);
                throw $exception;
            }
            unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['editAssetCollectionAction']);
        }
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     * @param AssetCollection $assetCollection
     * @return void
     */
    public function updateAssetCollectionAction(\Neos\Media\Domain\Model\AssetCollection $assetCollection)
    {

        if (isset($this->Flow_Aop_Proxy_methodIsInAdviceMode['updateAssetCollectionAction'])) {
            $result = parent::updateAssetCollectionAction($assetCollection);

        } else {
            $this->Flow_Aop_Proxy_methodIsInAdviceMode['updateAssetCollectionAction'] = true;
            try {
            
                $methodArguments = [];

                $methodArguments['assetCollection'] = $assetCollection;
            
                $adviceChains = $this->Flow_Aop_Proxy_getAdviceChains('updateAssetCollectionAction');
                $adviceChain = $adviceChains['Neos\Flow\Aop\Advice\AroundAdvice'];
                $adviceChain->rewind();
                $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\Media\Browser\Controller\AssetController', 'updateAssetCollectionAction', $methodArguments, $adviceChain);
                $result = $adviceChain->proceed($joinPoint);
                $methodArguments = $joinPoint->getMethodArguments();

            } catch (\Exception $exception) {
                unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['updateAssetCollectionAction']);
                throw $exception;
            }
            unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['updateAssetCollectionAction']);
        }
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     * @param AssetCollection $assetCollection
     * @return void
     */
    public function deleteAssetCollectionAction(\Neos\Media\Domain\Model\AssetCollection $assetCollection)
    {

        if (isset($this->Flow_Aop_Proxy_methodIsInAdviceMode['deleteAssetCollectionAction'])) {
            $result = parent::deleteAssetCollectionAction($assetCollection);

        } else {
            $this->Flow_Aop_Proxy_methodIsInAdviceMode['deleteAssetCollectionAction'] = true;
            try {
            
                $methodArguments = [];

                $methodArguments['assetCollection'] = $assetCollection;
            
                $adviceChains = $this->Flow_Aop_Proxy_getAdviceChains('deleteAssetCollectionAction');
                $adviceChain = $adviceChains['Neos\Flow\Aop\Advice\AroundAdvice'];
                $adviceChain->rewind();
                $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\Media\Browser\Controller\AssetController', 'deleteAssetCollectionAction', $methodArguments, $adviceChain);
                $result = $adviceChain->proceed($joinPoint);
                $methodArguments = $joinPoint->getMethodArguments();

            } catch (\Exception $exception) {
                unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['deleteAssetCollectionAction']);
                throw $exception;
            }
            unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['deleteAssetCollectionAction']);
        }
        return $result;
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
  'viewFormatToObjectNameMap' => 'array',
  'siteRepository' => 'Neos\\Neos\\Domain\\Repository\\SiteRepository',
  'domainRepository' => 'Neos\\Neos\\Domain\\Repository\\DomainRepository',
  'assetRepository' => 'Neos\\Media\\Domain\\Repository\\AssetRepository',
  'tagRepository' => 'Neos\\Media\\Domain\\Repository\\TagRepository',
  'assetCollectionRepository' => 'Neos\\Media\\Domain\\Repository\\AssetCollectionRepository',
  'packageManager' => 'Neos\\Flow\\Package\\PackageManagerInterface',
  'browserState' => 'Neos\\Media\\Browser\\Domain\\Session\\BrowserState',
  'assetService' => 'Neos\\Media\\Domain\\Service\\AssetService',
  'translator' => 'Neos\\Flow\\I18n\\Translator',
  'assetSourcesConfiguration' => 'array',
  'assetSources' => 'AssetSourceInterface[]',
  'objectManager' => 'Neos\\Flow\\ObjectManagement\\ObjectManagerInterface',
  'reflectionService' => 'Neos\\Flow\\Reflection\\ReflectionService',
  'mvcPropertyMappingConfigurationService' => 'Neos\\Flow\\Mvc\\Controller\\MvcPropertyMappingConfigurationService',
  'viewConfigurationManager' => 'Neos\\Flow\\Mvc\\ViewConfigurationManager',
  'view' => 'Neos\\Flow\\Mvc\\View\\ViewInterface',
  'viewObjectNamePattern' => 'string',
  'defaultViewObjectName' => 'string',
  'defaultViewImplementation' => 'string',
  'actionMethodName' => 'string',
  'errorMethodName' => 'string',
  'settings' => 'array',
  'systemLogger' => 'Neos\\Flow\\Log\\SystemLoggerInterface',
  'logger' => 'Psr\\Log\\LoggerInterface',
  'uriBuilder' => 'Neos\\Flow\\Mvc\\Routing\\UriBuilder',
  'validatorResolver' => 'Neos\\Flow\\Validation\\ValidatorResolver',
  'request' => 'Neos\\Flow\\Mvc\\ActionRequest',
  'response' => 'Neos\\Flow\\Http\\Response',
  'arguments' => 'Neos\\Flow\\Mvc\\Controller\\Arguments',
  'controllerContext' => 'Neos\\Flow\\Mvc\\Controller\\ControllerContext',
  'flashMessageContainer' => 'Neos\\Flow\\Mvc\\FlashMessageContainer',
  'persistenceManager' => 'Neos\\Flow\\Persistence\\PersistenceManagerInterface',
  'supportedMediaTypes' => 'array',
  '_contextFactory' => '\\Neos\\Neos\\Domain\\Service\\ContentContextFactory',
  '_siteRepository' => '\\Neos\\Neos\\Domain\\Repository\\SiteRepository',
  '_localizationService' => '\\Neos\\Flow\\I18n\\Service',
  '_userService' => '\\Neos\\Neos\\Service\\UserService',
);
        $result = $this->Flow_serializeRelatedEntities($transientProperties, $propertyVarTags);
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     */
    private function Flow_Proxy_injectProperties()
    {
        $this->injectSettings(\Neos\Flow\Core\Bootstrap::$staticObjectManager->get(\Neos\Flow\Configuration\ConfigurationManager::class)->getConfiguration('Settings', 'Neos.Media.Browser'));
        $this->injectLogger(\Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Psr\Log\LoggerInterface'));
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Neos\Domain\Repository\SiteRepository', 'Neos\Neos\Domain\Repository\SiteRepository', 'siteRepository', '42785f5eca4dff104f1860b84f531a9f', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Neos\Domain\Repository\SiteRepository'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Neos\Domain\Repository\DomainRepository', 'Neos\Neos\Domain\Repository\DomainRepository', 'domainRepository', '37b1b7f7b2d5d92dae299591af3b7e10', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Neos\Domain\Repository\DomainRepository'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Media\Domain\Repository\AssetRepository', 'Neos\Media\Domain\Repository\AssetRepository', 'assetRepository', '45191f771a429c7decedb6fc0abbcc74', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Media\Domain\Repository\AssetRepository'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Media\Domain\Repository\TagRepository', 'Neos\Media\Domain\Repository\TagRepository', 'tagRepository', '4cf01dea3b6190efe49ffdcb9a0ab644', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Media\Domain\Repository\TagRepository'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Media\Domain\Repository\AssetCollectionRepository', 'Neos\Media\Domain\Repository\AssetCollectionRepository', 'assetCollectionRepository', '75dd022c88117120d3ec81cf84770446', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Media\Domain\Repository\AssetCollectionRepository'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Package\PackageManagerInterface', 'Neos\Flow\Package\PackageManager', 'packageManager', 'b44be8eaae4695ec4f42edfbf6f8880a', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Package\PackageManagerInterface'); });
        $this->browserState = \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Media\Browser\Domain\Session\BrowserState');
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Media\Domain\Service\AssetService', 'Neos\Media\Domain\Service\AssetService', 'assetService', 'b8a3f9ba29596737396943e4de630328', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Media\Domain\Service\AssetService'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\I18n\Translator', 'Neos\Flow\I18n\Translator', 'translator', 'a1556ebf8488dcff234496272bb811f7', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\I18n\Translator'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\ObjectManagement\ObjectManagerInterface', 'Neos\Flow\ObjectManagement\ObjectManager', 'objectManager', '9524ff5e5332c1890aa361e5d186b7b6', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\ObjectManagement\ObjectManagerInterface'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Reflection\ReflectionService', 'Neos\Flow\Reflection\ReflectionService', 'reflectionService', '464c26aa94c66579c050985566cbfc1f', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Reflection\ReflectionService'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Mvc\Controller\MvcPropertyMappingConfigurationService', 'Neos\Flow\Mvc\Controller\MvcPropertyMappingConfigurationService', 'mvcPropertyMappingConfigurationService', '245f31ad31ca22b8c2b2255e0f65f847', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Mvc\Controller\MvcPropertyMappingConfigurationService'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Mvc\ViewConfigurationManager', 'Neos\Flow\Mvc\ViewConfigurationManager', 'viewConfigurationManager', '40e27e95b530777b9b476762cf735a69', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Mvc\ViewConfigurationManager'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Log\SystemLoggerInterface', 'Neos\Flow\Log\Logger', 'systemLogger', '717e9de4d0309f4f47c821b9257eb5c2', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Log\SystemLoggerInterface'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Validation\ValidatorResolver', 'Neos\Flow\Validation\ValidatorResolver', 'validatorResolver', 'e992f50de62d81bfe770d5c5f1242621', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Validation\ValidatorResolver'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Mvc\FlashMessageContainer', 'Neos\Flow\Mvc\FlashMessageContainer', 'flashMessageContainer', 'a5f5265657df54eb081324fb2ff5b8e1', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Mvc\FlashMessageContainer'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Persistence\PersistenceManagerInterface', 'Neos\Flow\Persistence\Doctrine\PersistenceManager', 'persistenceManager', '8a72b773ea2cb98c2933df44c659da06', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Persistence\PersistenceManagerInterface'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Neos\Domain\Service\ContentContextFactory', 'Neos\Neos\Domain\Service\ContentContextFactory', '_contextFactory', 'bf6447fb48e80589ca3a024bc3882005', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Neos\Domain\Service\ContentContextFactory'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Neos\Domain\Repository\SiteRepository', 'Neos\Neos\Domain\Repository\SiteRepository', '_siteRepository', '42785f5eca4dff104f1860b84f531a9f', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Neos\Domain\Repository\SiteRepository'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\I18n\Service', 'Neos\Flow\I18n\Service', '_localizationService', 'bdcad09aa1b6973b35f2987887987892', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\I18n\Service'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Neos\Service\UserService', 'Neos\Neos\Service\UserService', '_userService', '3af75a289d0337400c3d43d557f82c49', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Neos\Service\UserService'); });
        $this->assetSourcesConfiguration = \Neos\Flow\Core\Bootstrap::$staticObjectManager->get(\Neos\Flow\Configuration\ConfigurationManager::class)->getConfiguration('Settings', 'Neos.Media.assetSources');
        $this->defaultViewImplementation = \Neos\Flow\Core\Bootstrap::$staticObjectManager->get(\Neos\Flow\Configuration\ConfigurationManager::class)->getConfiguration('Settings', 'Neos.Flow.mvc.view.defaultImplementation');
        $this->Flow_Injected_Properties = array (
  0 => 'settings',
  1 => 'logger',
  2 => 'siteRepository',
  3 => 'domainRepository',
  4 => 'assetRepository',
  5 => 'tagRepository',
  6 => 'assetCollectionRepository',
  7 => 'packageManager',
  8 => 'browserState',
  9 => 'assetService',
  10 => 'translator',
  11 => 'objectManager',
  12 => 'reflectionService',
  13 => 'mvcPropertyMappingConfigurationService',
  14 => 'viewConfigurationManager',
  15 => 'systemLogger',
  16 => 'validatorResolver',
  17 => 'flashMessageContainer',
  18 => 'persistenceManager',
  19 => '_contextFactory',
  20 => '_siteRepository',
  21 => '_localizationService',
  22 => '_userService',
  23 => 'assetSourcesConfiguration',
  24 => 'defaultViewImplementation',
);
    }

    /**
     * Autogenerated Proxy Method
     * @param ObjectManagerInterface $objectManager
     * @return array Array of method parameters by action name
     * @\Neos\Flow\Annotations\CompileStatic
     */
    static public function getActionMethodParameters($objectManager)
    {

return array (
  'indexAction' => 
  array (
    'view' => 
    array (
      'position' => 0,
      'optional' => true,
      'type' => 'string',
      'class' => NULL,
      'array' => false,
      'byReference' => false,
      'allowsNull' => true,
      'defaultValue' => NULL,
      'scalarDeclaration' => false,
    ),
    'sortBy' => 
    array (
      'position' => 1,
      'optional' => true,
      'type' => 'string',
      'class' => NULL,
      'array' => false,
      'byReference' => false,
      'allowsNull' => true,
      'defaultValue' => NULL,
      'scalarDeclaration' => false,
    ),
    'sortDirection' => 
    array (
      'position' => 2,
      'optional' => true,
      'type' => 'string',
      'class' => NULL,
      'array' => false,
      'byReference' => false,
      'allowsNull' => true,
      'defaultValue' => NULL,
      'scalarDeclaration' => false,
    ),
    'filter' => 
    array (
      'position' => 3,
      'optional' => true,
      'type' => 'string',
      'class' => NULL,
      'array' => false,
      'byReference' => false,
      'allowsNull' => true,
      'defaultValue' => NULL,
      'scalarDeclaration' => false,
    ),
    'tagMode' => 
    array (
      'position' => 4,
      'optional' => true,
      'type' => 'integer',
      'class' => NULL,
      'array' => false,
      'byReference' => false,
      'allowsNull' => true,
      'defaultValue' => 0,
      'scalarDeclaration' => false,
    ),
    'tag' => 
    array (
      'position' => 5,
      'optional' => true,
      'type' => 'Neos\\Media\\Domain\\Model\\Tag',
      'class' => 'Neos\\Media\\Domain\\Model\\Tag',
      'array' => false,
      'byReference' => false,
      'allowsNull' => true,
      'defaultValue' => NULL,
      'scalarDeclaration' => false,
    ),
    'searchTerm' => 
    array (
      'position' => 6,
      'optional' => true,
      'type' => 'string',
      'class' => NULL,
      'array' => false,
      'byReference' => false,
      'allowsNull' => true,
      'defaultValue' => NULL,
      'scalarDeclaration' => false,
    ),
    'collectionMode' => 
    array (
      'position' => 7,
      'optional' => true,
      'type' => 'integer',
      'class' => NULL,
      'array' => false,
      'byReference' => false,
      'allowsNull' => true,
      'defaultValue' => 0,
      'scalarDeclaration' => false,
    ),
    'assetCollection' => 
    array (
      'position' => 8,
      'optional' => true,
      'type' => 'Neos\\Media\\Domain\\Model\\AssetCollection',
      'class' => 'Neos\\Media\\Domain\\Model\\AssetCollection',
      'array' => false,
      'byReference' => false,
      'allowsNull' => true,
      'defaultValue' => NULL,
      'scalarDeclaration' => false,
    ),
    'assetSourceIdentifier' => 
    array (
      'position' => 9,
      'optional' => true,
      'type' => 'string',
      'class' => NULL,
      'array' => false,
      'byReference' => false,
      'allowsNull' => true,
      'defaultValue' => NULL,
      'scalarDeclaration' => false,
    ),
  ),
  'newAction' => 
  array (
  ),
  'replaceAssetResourceAction' => 
  array (
    'asset' => 
    array (
      'position' => 0,
      'optional' => false,
      'type' => 'Neos\\Media\\Domain\\Model\\Asset',
      'class' => 'Neos\\Media\\Domain\\Model\\Asset',
      'array' => false,
      'byReference' => false,
      'allowsNull' => false,
      'defaultValue' => NULL,
      'scalarDeclaration' => false,
    ),
  ),
  'showAction' => 
  array (
    'assetSourceIdentifier' => 
    array (
      'position' => 0,
      'optional' => false,
      'type' => 'string',
      'class' => NULL,
      'array' => false,
      'byReference' => false,
      'allowsNull' => false,
      'defaultValue' => NULL,
      'scalarDeclaration' => true,
    ),
    'assetProxyIdentifier' => 
    array (
      'position' => 1,
      'optional' => false,
      'type' => 'string',
      'class' => NULL,
      'array' => false,
      'byReference' => false,
      'allowsNull' => false,
      'defaultValue' => NULL,
      'scalarDeclaration' => true,
    ),
  ),
  'editAction' => 
  array (
    'assetSourceIdentifier' => 
    array (
      'position' => 0,
      'optional' => false,
      'type' => 'string',
      'class' => NULL,
      'array' => false,
      'byReference' => false,
      'allowsNull' => false,
      'defaultValue' => NULL,
      'scalarDeclaration' => true,
    ),
    'assetProxyIdentifier' => 
    array (
      'position' => 1,
      'optional' => false,
      'type' => 'string',
      'class' => NULL,
      'array' => false,
      'byReference' => false,
      'allowsNull' => false,
      'defaultValue' => NULL,
      'scalarDeclaration' => true,
    ),
  ),
  'initializeUpdateAction' => 
  array (
  ),
  'updateAction' => 
  array (
    'asset' => 
    array (
      'position' => 0,
      'optional' => false,
      'type' => 'Neos\\Media\\Domain\\Model\\Asset',
      'class' => 'Neos\\Media\\Domain\\Model\\Asset',
      'array' => false,
      'byReference' => false,
      'allowsNull' => false,
      'defaultValue' => NULL,
      'scalarDeclaration' => false,
    ),
  ),
  'initializeCreateAction' => 
  array (
  ),
  'createAction' => 
  array (
    'asset' => 
    array (
      'position' => 0,
      'optional' => false,
      'type' => 'Neos\\Media\\Domain\\Model\\Asset',
      'class' => 'Neos\\Media\\Domain\\Model\\Asset',
      'array' => false,
      'byReference' => false,
      'allowsNull' => false,
      'defaultValue' => NULL,
      'scalarDeclaration' => false,
    ),
  ),
  'initializeUploadAction' => 
  array (
  ),
  'uploadAction' => 
  array (
    'asset' => 
    array (
      'position' => 0,
      'optional' => false,
      'type' => 'Neos\\Media\\Domain\\Model\\Asset',
      'class' => 'Neos\\Media\\Domain\\Model\\Asset',
      'array' => false,
      'byReference' => false,
      'allowsNull' => false,
      'defaultValue' => NULL,
      'scalarDeclaration' => false,
    ),
  ),
  'tagAssetAction' => 
  array (
    'asset' => 
    array (
      'position' => 0,
      'optional' => false,
      'type' => 'Neos\\Media\\Domain\\Model\\Asset',
      'class' => 'Neos\\Media\\Domain\\Model\\Asset',
      'array' => false,
      'byReference' => false,
      'allowsNull' => false,
      'defaultValue' => NULL,
      'scalarDeclaration' => false,
    ),
    'tag' => 
    array (
      'position' => 1,
      'optional' => false,
      'type' => 'Neos\\Media\\Domain\\Model\\Tag',
      'class' => 'Neos\\Media\\Domain\\Model\\Tag',
      'array' => false,
      'byReference' => false,
      'allowsNull' => false,
      'defaultValue' => NULL,
      'scalarDeclaration' => false,
    ),
  ),
  'addAssetToCollectionAction' => 
  array (
    'asset' => 
    array (
      'position' => 0,
      'optional' => false,
      'type' => 'Neos\\Media\\Domain\\Model\\Asset',
      'class' => 'Neos\\Media\\Domain\\Model\\Asset',
      'array' => false,
      'byReference' => false,
      'allowsNull' => false,
      'defaultValue' => NULL,
      'scalarDeclaration' => false,
    ),
    'assetCollection' => 
    array (
      'position' => 1,
      'optional' => false,
      'type' => 'Neos\\Media\\Domain\\Model\\AssetCollection',
      'class' => 'Neos\\Media\\Domain\\Model\\AssetCollection',
      'array' => false,
      'byReference' => false,
      'allowsNull' => false,
      'defaultValue' => NULL,
      'scalarDeclaration' => false,
    ),
  ),
  'deleteAction' => 
  array (
    'asset' => 
    array (
      'position' => 0,
      'optional' => false,
      'type' => 'Neos\\Media\\Domain\\Model\\Asset',
      'class' => 'Neos\\Media\\Domain\\Model\\Asset',
      'array' => false,
      'byReference' => false,
      'allowsNull' => false,
      'defaultValue' => NULL,
      'scalarDeclaration' => false,
    ),
  ),
  'updateAssetResourceAction' => 
  array (
    'asset' => 
    array (
      'position' => 0,
      'optional' => false,
      'type' => 'Neos\\Media\\Domain\\Model\\AssetInterface',
      'class' => 'Neos\\Media\\Domain\\Model\\AssetInterface',
      'array' => false,
      'byReference' => false,
      'allowsNull' => false,
      'defaultValue' => NULL,
      'scalarDeclaration' => false,
    ),
    'resource' => 
    array (
      'position' => 1,
      'optional' => false,
      'type' => 'Neos\\Flow\\ResourceManagement\\PersistentResource',
      'class' => 'Neos\\Flow\\ResourceManagement\\PersistentResource',
      'array' => false,
      'byReference' => false,
      'allowsNull' => false,
      'defaultValue' => NULL,
      'scalarDeclaration' => false,
    ),
    'options' => 
    array (
      'position' => 2,
      'optional' => true,
      'type' => 'array',
      'class' => NULL,
      'array' => true,
      'byReference' => false,
      'allowsNull' => false,
      'defaultValue' => 
      array (
      ),
      'scalarDeclaration' => false,
    ),
  ),
  'relatedNodesAction' => 
  array (
    'asset' => 
    array (
      'position' => 0,
      'optional' => false,
      'type' => 'Neos\\Media\\Domain\\Model\\AssetInterface',
      'class' => 'Neos\\Media\\Domain\\Model\\AssetInterface',
      'array' => false,
      'byReference' => false,
      'allowsNull' => false,
      'defaultValue' => NULL,
      'scalarDeclaration' => false,
    ),
  ),
  'createTagAction' => 
  array (
    'label' => 
    array (
      'position' => 0,
      'optional' => false,
      'type' => 'string',
      'class' => NULL,
      'array' => false,
      'byReference' => false,
      'allowsNull' => true,
      'defaultValue' => NULL,
      'scalarDeclaration' => false,
    ),
  ),
  'editTagAction' => 
  array (
    'tag' => 
    array (
      'position' => 0,
      'optional' => false,
      'type' => 'Neos\\Media\\Domain\\Model\\Tag',
      'class' => 'Neos\\Media\\Domain\\Model\\Tag',
      'array' => false,
      'byReference' => false,
      'allowsNull' => false,
      'defaultValue' => NULL,
      'scalarDeclaration' => false,
    ),
  ),
  'updateTagAction' => 
  array (
    'tag' => 
    array (
      'position' => 0,
      'optional' => false,
      'type' => 'Neos\\Media\\Domain\\Model\\Tag',
      'class' => 'Neos\\Media\\Domain\\Model\\Tag',
      'array' => false,
      'byReference' => false,
      'allowsNull' => false,
      'defaultValue' => NULL,
      'scalarDeclaration' => false,
    ),
  ),
  'deleteTagAction' => 
  array (
    'tag' => 
    array (
      'position' => 0,
      'optional' => false,
      'type' => 'Neos\\Media\\Domain\\Model\\Tag',
      'class' => 'Neos\\Media\\Domain\\Model\\Tag',
      'array' => false,
      'byReference' => false,
      'allowsNull' => false,
      'defaultValue' => NULL,
      'scalarDeclaration' => false,
    ),
  ),
  'createAssetCollectionAction' => 
  array (
    'title' => 
    array (
      'position' => 0,
      'optional' => false,
      'type' => 'string',
      'class' => NULL,
      'array' => false,
      'byReference' => false,
      'allowsNull' => true,
      'defaultValue' => NULL,
      'scalarDeclaration' => false,
    ),
  ),
  'editAssetCollectionAction' => 
  array (
    'assetCollection' => 
    array (
      'position' => 0,
      'optional' => false,
      'type' => 'Neos\\Media\\Domain\\Model\\AssetCollection',
      'class' => 'Neos\\Media\\Domain\\Model\\AssetCollection',
      'array' => false,
      'byReference' => false,
      'allowsNull' => false,
      'defaultValue' => NULL,
      'scalarDeclaration' => false,
    ),
  ),
  'updateAssetCollectionAction' => 
  array (
    'assetCollection' => 
    array (
      'position' => 0,
      'optional' => false,
      'type' => 'Neos\\Media\\Domain\\Model\\AssetCollection',
      'class' => 'Neos\\Media\\Domain\\Model\\AssetCollection',
      'array' => false,
      'byReference' => false,
      'allowsNull' => false,
      'defaultValue' => NULL,
      'scalarDeclaration' => false,
    ),
  ),
  'deleteAssetCollectionAction' => 
  array (
    'assetCollection' => 
    array (
      'position' => 0,
      'optional' => false,
      'type' => 'Neos\\Media\\Domain\\Model\\AssetCollection',
      'class' => 'Neos\\Media\\Domain\\Model\\AssetCollection',
      'array' => false,
      'byReference' => false,
      'allowsNull' => false,
      'defaultValue' => NULL,
      'scalarDeclaration' => false,
    ),
  ),
  'errorAction' => 
  array (
  ),
  'initializeAction' => 
  array (
  ),
);
    }

    /**
     * Autogenerated Proxy Method
     * @param ObjectManagerInterface $objectManager
     * @return array Array of validation groups by action method name
     * @\Neos\Flow\Annotations\CompileStatic
     */
    static public function getActionValidationGroups($objectManager)
    {

return array (
);
    }

    /**
     * Autogenerated Proxy Method
     * @param ObjectManagerInterface $objectManager
     * @return array Array of validate annotation parameters by action method name
     * @\Neos\Flow\Annotations\CompileStatic
     */
    static public function getActionValidateAnnotationData($objectManager)
    {

return array (
  'indexAction' => 
  array (
  ),
  'newAction' => 
  array (
  ),
  'replaceAssetResourceAction' => 
  array (
  ),
  'showAction' => 
  array (
  ),
  'editAction' => 
  array (
  ),
  'initializeUpdateAction' => 
  array (
  ),
  'updateAction' => 
  array (
  ),
  'initializeCreateAction' => 
  array (
  ),
  'createAction' => 
  array (
  ),
  'initializeUploadAction' => 
  array (
  ),
  'uploadAction' => 
  array (
  ),
  'tagAssetAction' => 
  array (
  ),
  'addAssetToCollectionAction' => 
  array (
  ),
  'deleteAction' => 
  array (
  ),
  'updateAssetResourceAction' => 
  array (
  ),
  'relatedNodesAction' => 
  array (
  ),
  'createTagAction' => 
  array (
    0 => 
    array (
      'type' => 'NotEmpty',
      'options' => 
      array (
      ),
      'argumentName' => 'label',
    ),
    1 => 
    array (
      'type' => 'Label',
      'options' => 
      array (
      ),
      'argumentName' => 'label',
    ),
  ),
  'editTagAction' => 
  array (
  ),
  'updateTagAction' => 
  array (
  ),
  'deleteTagAction' => 
  array (
  ),
  'createAssetCollectionAction' => 
  array (
    0 => 
    array (
      'type' => 'NotEmpty',
      'options' => 
      array (
      ),
      'argumentName' => 'title',
    ),
    1 => 
    array (
      'type' => 'Label',
      'options' => 
      array (
      ),
      'argumentName' => 'title',
    ),
  ),
  'editAssetCollectionAction' => 
  array (
  ),
  'updateAssetCollectionAction' => 
  array (
  ),
  'deleteAssetCollectionAction' => 
  array (
  ),
  'errorAction' => 
  array (
  ),
  'initializeAction' => 
  array (
  ),
);
    }

    /**
     * Autogenerated Proxy Method
     * @param ObjectManagerInterface $objectManager
     * @return array Array of argument names as key by action method name
     * @\Neos\Flow\Annotations\CompileStatic
     */
    static public function getActionIgnoredValidationArguments($objectManager)
    {

return array (
);
    }

    /**
     * Autogenerated Proxy Method
     * @param ObjectManagerInterface $objectManager
     * @return array Array of all public action method names, indexed by method name
     * @\Neos\Flow\Annotations\CompileStatic
     */
    static public function getPublicActionMethods($objectManager)
    {

return array (
  'indexAction' => true,
  'newAction' => true,
  'replaceAssetResourceAction' => true,
  'showAction' => true,
  'editAction' => true,
  'updateAction' => true,
  'createAction' => true,
  'uploadAction' => true,
  'tagAssetAction' => true,
  'addAssetToCollectionAction' => true,
  'deleteAction' => true,
  'updateAssetResourceAction' => true,
  'relatedNodesAction' => true,
  'createTagAction' => true,
  'editTagAction' => true,
  'updateTagAction' => true,
  'deleteTagAction' => true,
  'createAssetCollectionAction' => true,
  'editAssetCollectionAction' => true,
  'updateAssetCollectionAction' => true,
  'deleteAssetCollectionAction' => true,
);
    }
}
# PathAndFilename: C:\Bitnami\neos-4.1.7-neu\apps\neos\htdocs\Packages\Application\Neos.Media.Browser\Classes\Controller\AssetController.php
#