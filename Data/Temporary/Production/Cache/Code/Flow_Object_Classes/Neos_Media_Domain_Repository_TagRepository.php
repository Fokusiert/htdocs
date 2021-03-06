<?php 
namespace Neos\Media\Domain\Repository;

/*
 * This file is part of the Neos.Media package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\Flow\Annotations as Flow;
use Neos\Flow\Persistence\QueryInterface;
use Neos\Flow\Persistence\QueryResultInterface;
use Neos\Flow\Persistence\Repository;

/**
 * A repository for Tags
 *
 * @Flow\Scope("singleton")
 */
class TagRepository_Original extends Repository
{
    /**
     * @var array
     */
    protected $defaultOrderings = array('label' => QueryInterface::ORDER_ASCENDING);

    /**
     * @param string $searchTerm
     * @return QueryResultInterface
     */
    public function findBySearchTerm($searchTerm)
    {
        $query = $this->createQuery();
        return $query->matching($query->like('label', '%' . $searchTerm . '%'))->execute();
    }

    /**
     * @param array<AssetCollection> $assetCollection
     * @return QueryResultInterface
     */
    public function findByAssetCollections(array $assetCollections)
    {
        $query = $this->createQuery();
        $constraints = [];
        foreach ($assetCollections as $assetCollection) {
            $constraints[] = $query->contains('assetCollections', $assetCollection);
        }
        $query->matching($query->logicalOr($constraints));
        return $query->execute();
    }
}

#
# Start of Flow generated Proxy code
#
namespace Neos\Media\Domain\Repository;

use Doctrine\ORM\Mapping as ORM;
use Neos\Flow\Annotations as Flow;

/**
 * A repository for Tags
 * @\Neos\Flow\Annotations\Scope("singleton")
 */
class TagRepository extends TagRepository_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     */
    public function __construct()
    {
        if (get_class($this) === 'Neos\Media\Domain\Repository\TagRepository') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Media\Domain\Repository\TagRepository', $this);
        parent::__construct();
        if ('Neos\Media\Domain\Repository\TagRepository' === get_class($this)) {
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
  'defaultOrderings' => 'array',
  'persistenceManager' => 'Neos\\Flow\\Persistence\\PersistenceManagerInterface',
  'entityClassName' => 'string',
);
        $result = $this->Flow_serializeRelatedEntities($transientProperties, $propertyVarTags);
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     */
    public function __wakeup()
    {
        if (get_class($this) === 'Neos\Media\Domain\Repository\TagRepository') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Media\Domain\Repository\TagRepository', $this);

        $this->Flow_setRelatedEntities();
        $this->Flow_Proxy_injectProperties();
    }

    /**
     * Autogenerated Proxy Method
     */
    private function Flow_Proxy_injectProperties()
    {
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Persistence\PersistenceManagerInterface', 'Neos\Flow\Persistence\Doctrine\PersistenceManager', 'persistenceManager', '8a72b773ea2cb98c2933df44c659da06', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Persistence\PersistenceManagerInterface'); });
        $this->Flow_Injected_Properties = array (
  0 => 'persistenceManager',
);
    }
}
# PathAndFilename: C:\Bitnami\neos-4.1.7-neu\apps\neos\htdocs\Packages\Application\Neos.Media\Classes\Domain\Repository\TagRepository.php
#