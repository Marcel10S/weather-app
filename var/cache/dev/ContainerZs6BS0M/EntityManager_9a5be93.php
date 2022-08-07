<?php

namespace ContainerZs6BS0M;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderfc807 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerb37cb = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesfdf48 = [
        
    ];

    public function getConnection()
    {
        $this->initializerb37cb && ($this->initializerb37cb->__invoke($valueHolderfc807, $this, 'getConnection', array(), $this->initializerb37cb) || 1) && $this->valueHolderfc807 = $valueHolderfc807;

        return $this->valueHolderfc807->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerb37cb && ($this->initializerb37cb->__invoke($valueHolderfc807, $this, 'getMetadataFactory', array(), $this->initializerb37cb) || 1) && $this->valueHolderfc807 = $valueHolderfc807;

        return $this->valueHolderfc807->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerb37cb && ($this->initializerb37cb->__invoke($valueHolderfc807, $this, 'getExpressionBuilder', array(), $this->initializerb37cb) || 1) && $this->valueHolderfc807 = $valueHolderfc807;

        return $this->valueHolderfc807->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerb37cb && ($this->initializerb37cb->__invoke($valueHolderfc807, $this, 'beginTransaction', array(), $this->initializerb37cb) || 1) && $this->valueHolderfc807 = $valueHolderfc807;

        return $this->valueHolderfc807->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerb37cb && ($this->initializerb37cb->__invoke($valueHolderfc807, $this, 'getCache', array(), $this->initializerb37cb) || 1) && $this->valueHolderfc807 = $valueHolderfc807;

        return $this->valueHolderfc807->getCache();
    }

    public function transactional($func)
    {
        $this->initializerb37cb && ($this->initializerb37cb->__invoke($valueHolderfc807, $this, 'transactional', array('func' => $func), $this->initializerb37cb) || 1) && $this->valueHolderfc807 = $valueHolderfc807;

        return $this->valueHolderfc807->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerb37cb && ($this->initializerb37cb->__invoke($valueHolderfc807, $this, 'wrapInTransaction', array('func' => $func), $this->initializerb37cb) || 1) && $this->valueHolderfc807 = $valueHolderfc807;

        return $this->valueHolderfc807->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerb37cb && ($this->initializerb37cb->__invoke($valueHolderfc807, $this, 'commit', array(), $this->initializerb37cb) || 1) && $this->valueHolderfc807 = $valueHolderfc807;

        return $this->valueHolderfc807->commit();
    }

    public function rollback()
    {
        $this->initializerb37cb && ($this->initializerb37cb->__invoke($valueHolderfc807, $this, 'rollback', array(), $this->initializerb37cb) || 1) && $this->valueHolderfc807 = $valueHolderfc807;

        return $this->valueHolderfc807->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerb37cb && ($this->initializerb37cb->__invoke($valueHolderfc807, $this, 'getClassMetadata', array('className' => $className), $this->initializerb37cb) || 1) && $this->valueHolderfc807 = $valueHolderfc807;

        return $this->valueHolderfc807->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerb37cb && ($this->initializerb37cb->__invoke($valueHolderfc807, $this, 'createQuery', array('dql' => $dql), $this->initializerb37cb) || 1) && $this->valueHolderfc807 = $valueHolderfc807;

        return $this->valueHolderfc807->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerb37cb && ($this->initializerb37cb->__invoke($valueHolderfc807, $this, 'createNamedQuery', array('name' => $name), $this->initializerb37cb) || 1) && $this->valueHolderfc807 = $valueHolderfc807;

        return $this->valueHolderfc807->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerb37cb && ($this->initializerb37cb->__invoke($valueHolderfc807, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerb37cb) || 1) && $this->valueHolderfc807 = $valueHolderfc807;

        return $this->valueHolderfc807->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerb37cb && ($this->initializerb37cb->__invoke($valueHolderfc807, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerb37cb) || 1) && $this->valueHolderfc807 = $valueHolderfc807;

        return $this->valueHolderfc807->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerb37cb && ($this->initializerb37cb->__invoke($valueHolderfc807, $this, 'createQueryBuilder', array(), $this->initializerb37cb) || 1) && $this->valueHolderfc807 = $valueHolderfc807;

        return $this->valueHolderfc807->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerb37cb && ($this->initializerb37cb->__invoke($valueHolderfc807, $this, 'flush', array('entity' => $entity), $this->initializerb37cb) || 1) && $this->valueHolderfc807 = $valueHolderfc807;

        return $this->valueHolderfc807->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerb37cb && ($this->initializerb37cb->__invoke($valueHolderfc807, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb37cb) || 1) && $this->valueHolderfc807 = $valueHolderfc807;

        return $this->valueHolderfc807->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerb37cb && ($this->initializerb37cb->__invoke($valueHolderfc807, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerb37cb) || 1) && $this->valueHolderfc807 = $valueHolderfc807;

        return $this->valueHolderfc807->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerb37cb && ($this->initializerb37cb->__invoke($valueHolderfc807, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerb37cb) || 1) && $this->valueHolderfc807 = $valueHolderfc807;

        return $this->valueHolderfc807->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerb37cb && ($this->initializerb37cb->__invoke($valueHolderfc807, $this, 'clear', array('entityName' => $entityName), $this->initializerb37cb) || 1) && $this->valueHolderfc807 = $valueHolderfc807;

        return $this->valueHolderfc807->clear($entityName);
    }

    public function close()
    {
        $this->initializerb37cb && ($this->initializerb37cb->__invoke($valueHolderfc807, $this, 'close', array(), $this->initializerb37cb) || 1) && $this->valueHolderfc807 = $valueHolderfc807;

        return $this->valueHolderfc807->close();
    }

    public function persist($entity)
    {
        $this->initializerb37cb && ($this->initializerb37cb->__invoke($valueHolderfc807, $this, 'persist', array('entity' => $entity), $this->initializerb37cb) || 1) && $this->valueHolderfc807 = $valueHolderfc807;

        return $this->valueHolderfc807->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerb37cb && ($this->initializerb37cb->__invoke($valueHolderfc807, $this, 'remove', array('entity' => $entity), $this->initializerb37cb) || 1) && $this->valueHolderfc807 = $valueHolderfc807;

        return $this->valueHolderfc807->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerb37cb && ($this->initializerb37cb->__invoke($valueHolderfc807, $this, 'refresh', array('entity' => $entity), $this->initializerb37cb) || 1) && $this->valueHolderfc807 = $valueHolderfc807;

        return $this->valueHolderfc807->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerb37cb && ($this->initializerb37cb->__invoke($valueHolderfc807, $this, 'detach', array('entity' => $entity), $this->initializerb37cb) || 1) && $this->valueHolderfc807 = $valueHolderfc807;

        return $this->valueHolderfc807->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerb37cb && ($this->initializerb37cb->__invoke($valueHolderfc807, $this, 'merge', array('entity' => $entity), $this->initializerb37cb) || 1) && $this->valueHolderfc807 = $valueHolderfc807;

        return $this->valueHolderfc807->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerb37cb && ($this->initializerb37cb->__invoke($valueHolderfc807, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerb37cb) || 1) && $this->valueHolderfc807 = $valueHolderfc807;

        return $this->valueHolderfc807->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerb37cb && ($this->initializerb37cb->__invoke($valueHolderfc807, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb37cb) || 1) && $this->valueHolderfc807 = $valueHolderfc807;

        return $this->valueHolderfc807->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerb37cb && ($this->initializerb37cb->__invoke($valueHolderfc807, $this, 'getRepository', array('entityName' => $entityName), $this->initializerb37cb) || 1) && $this->valueHolderfc807 = $valueHolderfc807;

        return $this->valueHolderfc807->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerb37cb && ($this->initializerb37cb->__invoke($valueHolderfc807, $this, 'contains', array('entity' => $entity), $this->initializerb37cb) || 1) && $this->valueHolderfc807 = $valueHolderfc807;

        return $this->valueHolderfc807->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerb37cb && ($this->initializerb37cb->__invoke($valueHolderfc807, $this, 'getEventManager', array(), $this->initializerb37cb) || 1) && $this->valueHolderfc807 = $valueHolderfc807;

        return $this->valueHolderfc807->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerb37cb && ($this->initializerb37cb->__invoke($valueHolderfc807, $this, 'getConfiguration', array(), $this->initializerb37cb) || 1) && $this->valueHolderfc807 = $valueHolderfc807;

        return $this->valueHolderfc807->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerb37cb && ($this->initializerb37cb->__invoke($valueHolderfc807, $this, 'isOpen', array(), $this->initializerb37cb) || 1) && $this->valueHolderfc807 = $valueHolderfc807;

        return $this->valueHolderfc807->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerb37cb && ($this->initializerb37cb->__invoke($valueHolderfc807, $this, 'getUnitOfWork', array(), $this->initializerb37cb) || 1) && $this->valueHolderfc807 = $valueHolderfc807;

        return $this->valueHolderfc807->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerb37cb && ($this->initializerb37cb->__invoke($valueHolderfc807, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb37cb) || 1) && $this->valueHolderfc807 = $valueHolderfc807;

        return $this->valueHolderfc807->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerb37cb && ($this->initializerb37cb->__invoke($valueHolderfc807, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb37cb) || 1) && $this->valueHolderfc807 = $valueHolderfc807;

        return $this->valueHolderfc807->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerb37cb && ($this->initializerb37cb->__invoke($valueHolderfc807, $this, 'getProxyFactory', array(), $this->initializerb37cb) || 1) && $this->valueHolderfc807 = $valueHolderfc807;

        return $this->valueHolderfc807->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerb37cb && ($this->initializerb37cb->__invoke($valueHolderfc807, $this, 'initializeObject', array('obj' => $obj), $this->initializerb37cb) || 1) && $this->valueHolderfc807 = $valueHolderfc807;

        return $this->valueHolderfc807->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerb37cb && ($this->initializerb37cb->__invoke($valueHolderfc807, $this, 'getFilters', array(), $this->initializerb37cb) || 1) && $this->valueHolderfc807 = $valueHolderfc807;

        return $this->valueHolderfc807->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerb37cb && ($this->initializerb37cb->__invoke($valueHolderfc807, $this, 'isFiltersStateClean', array(), $this->initializerb37cb) || 1) && $this->valueHolderfc807 = $valueHolderfc807;

        return $this->valueHolderfc807->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerb37cb && ($this->initializerb37cb->__invoke($valueHolderfc807, $this, 'hasFilters', array(), $this->initializerb37cb) || 1) && $this->valueHolderfc807 = $valueHolderfc807;

        return $this->valueHolderfc807->hasFilters();
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

        $instance->initializerb37cb = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderfc807) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderfc807 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderfc807->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerb37cb && ($this->initializerb37cb->__invoke($valueHolderfc807, $this, '__get', ['name' => $name], $this->initializerb37cb) || 1) && $this->valueHolderfc807 = $valueHolderfc807;

        if (isset(self::$publicPropertiesfdf48[$name])) {
            return $this->valueHolderfc807->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfc807;

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

        $targetObject = $this->valueHolderfc807;
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
        $this->initializerb37cb && ($this->initializerb37cb->__invoke($valueHolderfc807, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb37cb) || 1) && $this->valueHolderfc807 = $valueHolderfc807;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfc807;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderfc807;
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
        $this->initializerb37cb && ($this->initializerb37cb->__invoke($valueHolderfc807, $this, '__isset', array('name' => $name), $this->initializerb37cb) || 1) && $this->valueHolderfc807 = $valueHolderfc807;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfc807;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderfc807;
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
        $this->initializerb37cb && ($this->initializerb37cb->__invoke($valueHolderfc807, $this, '__unset', array('name' => $name), $this->initializerb37cb) || 1) && $this->valueHolderfc807 = $valueHolderfc807;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfc807;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderfc807;
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
        $this->initializerb37cb && ($this->initializerb37cb->__invoke($valueHolderfc807, $this, '__clone', array(), $this->initializerb37cb) || 1) && $this->valueHolderfc807 = $valueHolderfc807;

        $this->valueHolderfc807 = clone $this->valueHolderfc807;
    }

    public function __sleep()
    {
        $this->initializerb37cb && ($this->initializerb37cb->__invoke($valueHolderfc807, $this, '__sleep', array(), $this->initializerb37cb) || 1) && $this->valueHolderfc807 = $valueHolderfc807;

        return array('valueHolderfc807');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerb37cb = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerb37cb;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerb37cb && ($this->initializerb37cb->__invoke($valueHolderfc807, $this, 'initializeProxy', array(), $this->initializerb37cb) || 1) && $this->valueHolderfc807 = $valueHolderfc807;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderfc807;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderfc807;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
