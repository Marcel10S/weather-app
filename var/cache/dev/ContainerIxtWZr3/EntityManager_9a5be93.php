<?php

namespace ContainerIxtWZr3;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderb9303 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerd7a19 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties7fb2e = [
        
    ];

    public function getConnection()
    {
        $this->initializerd7a19 && ($this->initializerd7a19->__invoke($valueHolderb9303, $this, 'getConnection', array(), $this->initializerd7a19) || 1) && $this->valueHolderb9303 = $valueHolderb9303;

        return $this->valueHolderb9303->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerd7a19 && ($this->initializerd7a19->__invoke($valueHolderb9303, $this, 'getMetadataFactory', array(), $this->initializerd7a19) || 1) && $this->valueHolderb9303 = $valueHolderb9303;

        return $this->valueHolderb9303->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerd7a19 && ($this->initializerd7a19->__invoke($valueHolderb9303, $this, 'getExpressionBuilder', array(), $this->initializerd7a19) || 1) && $this->valueHolderb9303 = $valueHolderb9303;

        return $this->valueHolderb9303->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerd7a19 && ($this->initializerd7a19->__invoke($valueHolderb9303, $this, 'beginTransaction', array(), $this->initializerd7a19) || 1) && $this->valueHolderb9303 = $valueHolderb9303;

        return $this->valueHolderb9303->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerd7a19 && ($this->initializerd7a19->__invoke($valueHolderb9303, $this, 'getCache', array(), $this->initializerd7a19) || 1) && $this->valueHolderb9303 = $valueHolderb9303;

        return $this->valueHolderb9303->getCache();
    }

    public function transactional($func)
    {
        $this->initializerd7a19 && ($this->initializerd7a19->__invoke($valueHolderb9303, $this, 'transactional', array('func' => $func), $this->initializerd7a19) || 1) && $this->valueHolderb9303 = $valueHolderb9303;

        return $this->valueHolderb9303->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerd7a19 && ($this->initializerd7a19->__invoke($valueHolderb9303, $this, 'wrapInTransaction', array('func' => $func), $this->initializerd7a19) || 1) && $this->valueHolderb9303 = $valueHolderb9303;

        return $this->valueHolderb9303->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerd7a19 && ($this->initializerd7a19->__invoke($valueHolderb9303, $this, 'commit', array(), $this->initializerd7a19) || 1) && $this->valueHolderb9303 = $valueHolderb9303;

        return $this->valueHolderb9303->commit();
    }

    public function rollback()
    {
        $this->initializerd7a19 && ($this->initializerd7a19->__invoke($valueHolderb9303, $this, 'rollback', array(), $this->initializerd7a19) || 1) && $this->valueHolderb9303 = $valueHolderb9303;

        return $this->valueHolderb9303->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerd7a19 && ($this->initializerd7a19->__invoke($valueHolderb9303, $this, 'getClassMetadata', array('className' => $className), $this->initializerd7a19) || 1) && $this->valueHolderb9303 = $valueHolderb9303;

        return $this->valueHolderb9303->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerd7a19 && ($this->initializerd7a19->__invoke($valueHolderb9303, $this, 'createQuery', array('dql' => $dql), $this->initializerd7a19) || 1) && $this->valueHolderb9303 = $valueHolderb9303;

        return $this->valueHolderb9303->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerd7a19 && ($this->initializerd7a19->__invoke($valueHolderb9303, $this, 'createNamedQuery', array('name' => $name), $this->initializerd7a19) || 1) && $this->valueHolderb9303 = $valueHolderb9303;

        return $this->valueHolderb9303->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerd7a19 && ($this->initializerd7a19->__invoke($valueHolderb9303, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerd7a19) || 1) && $this->valueHolderb9303 = $valueHolderb9303;

        return $this->valueHolderb9303->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerd7a19 && ($this->initializerd7a19->__invoke($valueHolderb9303, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerd7a19) || 1) && $this->valueHolderb9303 = $valueHolderb9303;

        return $this->valueHolderb9303->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerd7a19 && ($this->initializerd7a19->__invoke($valueHolderb9303, $this, 'createQueryBuilder', array(), $this->initializerd7a19) || 1) && $this->valueHolderb9303 = $valueHolderb9303;

        return $this->valueHolderb9303->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerd7a19 && ($this->initializerd7a19->__invoke($valueHolderb9303, $this, 'flush', array('entity' => $entity), $this->initializerd7a19) || 1) && $this->valueHolderb9303 = $valueHolderb9303;

        return $this->valueHolderb9303->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerd7a19 && ($this->initializerd7a19->__invoke($valueHolderb9303, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd7a19) || 1) && $this->valueHolderb9303 = $valueHolderb9303;

        return $this->valueHolderb9303->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerd7a19 && ($this->initializerd7a19->__invoke($valueHolderb9303, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerd7a19) || 1) && $this->valueHolderb9303 = $valueHolderb9303;

        return $this->valueHolderb9303->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerd7a19 && ($this->initializerd7a19->__invoke($valueHolderb9303, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerd7a19) || 1) && $this->valueHolderb9303 = $valueHolderb9303;

        return $this->valueHolderb9303->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerd7a19 && ($this->initializerd7a19->__invoke($valueHolderb9303, $this, 'clear', array('entityName' => $entityName), $this->initializerd7a19) || 1) && $this->valueHolderb9303 = $valueHolderb9303;

        return $this->valueHolderb9303->clear($entityName);
    }

    public function close()
    {
        $this->initializerd7a19 && ($this->initializerd7a19->__invoke($valueHolderb9303, $this, 'close', array(), $this->initializerd7a19) || 1) && $this->valueHolderb9303 = $valueHolderb9303;

        return $this->valueHolderb9303->close();
    }

    public function persist($entity)
    {
        $this->initializerd7a19 && ($this->initializerd7a19->__invoke($valueHolderb9303, $this, 'persist', array('entity' => $entity), $this->initializerd7a19) || 1) && $this->valueHolderb9303 = $valueHolderb9303;

        return $this->valueHolderb9303->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerd7a19 && ($this->initializerd7a19->__invoke($valueHolderb9303, $this, 'remove', array('entity' => $entity), $this->initializerd7a19) || 1) && $this->valueHolderb9303 = $valueHolderb9303;

        return $this->valueHolderb9303->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerd7a19 && ($this->initializerd7a19->__invoke($valueHolderb9303, $this, 'refresh', array('entity' => $entity), $this->initializerd7a19) || 1) && $this->valueHolderb9303 = $valueHolderb9303;

        return $this->valueHolderb9303->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerd7a19 && ($this->initializerd7a19->__invoke($valueHolderb9303, $this, 'detach', array('entity' => $entity), $this->initializerd7a19) || 1) && $this->valueHolderb9303 = $valueHolderb9303;

        return $this->valueHolderb9303->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerd7a19 && ($this->initializerd7a19->__invoke($valueHolderb9303, $this, 'merge', array('entity' => $entity), $this->initializerd7a19) || 1) && $this->valueHolderb9303 = $valueHolderb9303;

        return $this->valueHolderb9303->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerd7a19 && ($this->initializerd7a19->__invoke($valueHolderb9303, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerd7a19) || 1) && $this->valueHolderb9303 = $valueHolderb9303;

        return $this->valueHolderb9303->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerd7a19 && ($this->initializerd7a19->__invoke($valueHolderb9303, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd7a19) || 1) && $this->valueHolderb9303 = $valueHolderb9303;

        return $this->valueHolderb9303->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerd7a19 && ($this->initializerd7a19->__invoke($valueHolderb9303, $this, 'getRepository', array('entityName' => $entityName), $this->initializerd7a19) || 1) && $this->valueHolderb9303 = $valueHolderb9303;

        return $this->valueHolderb9303->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerd7a19 && ($this->initializerd7a19->__invoke($valueHolderb9303, $this, 'contains', array('entity' => $entity), $this->initializerd7a19) || 1) && $this->valueHolderb9303 = $valueHolderb9303;

        return $this->valueHolderb9303->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerd7a19 && ($this->initializerd7a19->__invoke($valueHolderb9303, $this, 'getEventManager', array(), $this->initializerd7a19) || 1) && $this->valueHolderb9303 = $valueHolderb9303;

        return $this->valueHolderb9303->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerd7a19 && ($this->initializerd7a19->__invoke($valueHolderb9303, $this, 'getConfiguration', array(), $this->initializerd7a19) || 1) && $this->valueHolderb9303 = $valueHolderb9303;

        return $this->valueHolderb9303->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerd7a19 && ($this->initializerd7a19->__invoke($valueHolderb9303, $this, 'isOpen', array(), $this->initializerd7a19) || 1) && $this->valueHolderb9303 = $valueHolderb9303;

        return $this->valueHolderb9303->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerd7a19 && ($this->initializerd7a19->__invoke($valueHolderb9303, $this, 'getUnitOfWork', array(), $this->initializerd7a19) || 1) && $this->valueHolderb9303 = $valueHolderb9303;

        return $this->valueHolderb9303->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerd7a19 && ($this->initializerd7a19->__invoke($valueHolderb9303, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd7a19) || 1) && $this->valueHolderb9303 = $valueHolderb9303;

        return $this->valueHolderb9303->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerd7a19 && ($this->initializerd7a19->__invoke($valueHolderb9303, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd7a19) || 1) && $this->valueHolderb9303 = $valueHolderb9303;

        return $this->valueHolderb9303->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerd7a19 && ($this->initializerd7a19->__invoke($valueHolderb9303, $this, 'getProxyFactory', array(), $this->initializerd7a19) || 1) && $this->valueHolderb9303 = $valueHolderb9303;

        return $this->valueHolderb9303->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerd7a19 && ($this->initializerd7a19->__invoke($valueHolderb9303, $this, 'initializeObject', array('obj' => $obj), $this->initializerd7a19) || 1) && $this->valueHolderb9303 = $valueHolderb9303;

        return $this->valueHolderb9303->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerd7a19 && ($this->initializerd7a19->__invoke($valueHolderb9303, $this, 'getFilters', array(), $this->initializerd7a19) || 1) && $this->valueHolderb9303 = $valueHolderb9303;

        return $this->valueHolderb9303->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerd7a19 && ($this->initializerd7a19->__invoke($valueHolderb9303, $this, 'isFiltersStateClean', array(), $this->initializerd7a19) || 1) && $this->valueHolderb9303 = $valueHolderb9303;

        return $this->valueHolderb9303->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerd7a19 && ($this->initializerd7a19->__invoke($valueHolderb9303, $this, 'hasFilters', array(), $this->initializerd7a19) || 1) && $this->valueHolderb9303 = $valueHolderb9303;

        return $this->valueHolderb9303->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializerd7a19 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderb9303) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderb9303 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderb9303->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerd7a19 && ($this->initializerd7a19->__invoke($valueHolderb9303, $this, '__get', ['name' => $name], $this->initializerd7a19) || 1) && $this->valueHolderb9303 = $valueHolderb9303;

        if (isset(self::$publicProperties7fb2e[$name])) {
            return $this->valueHolderb9303->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb9303;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderb9303;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializerd7a19 && ($this->initializerd7a19->__invoke($valueHolderb9303, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerd7a19) || 1) && $this->valueHolderb9303 = $valueHolderb9303;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb9303;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderb9303;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializerd7a19 && ($this->initializerd7a19->__invoke($valueHolderb9303, $this, '__isset', array('name' => $name), $this->initializerd7a19) || 1) && $this->valueHolderb9303 = $valueHolderb9303;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb9303;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderb9303;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializerd7a19 && ($this->initializerd7a19->__invoke($valueHolderb9303, $this, '__unset', array('name' => $name), $this->initializerd7a19) || 1) && $this->valueHolderb9303 = $valueHolderb9303;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb9303;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderb9303;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializerd7a19 && ($this->initializerd7a19->__invoke($valueHolderb9303, $this, '__clone', array(), $this->initializerd7a19) || 1) && $this->valueHolderb9303 = $valueHolderb9303;

        $this->valueHolderb9303 = clone $this->valueHolderb9303;
    }

    public function __sleep()
    {
        $this->initializerd7a19 && ($this->initializerd7a19->__invoke($valueHolderb9303, $this, '__sleep', array(), $this->initializerd7a19) || 1) && $this->valueHolderb9303 = $valueHolderb9303;

        return array('valueHolderb9303');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerd7a19 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerd7a19;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerd7a19 && ($this->initializerd7a19->__invoke($valueHolderb9303, $this, 'initializeProxy', array(), $this->initializerd7a19) || 1) && $this->valueHolderb9303 = $valueHolderb9303;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderb9303;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderb9303;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
