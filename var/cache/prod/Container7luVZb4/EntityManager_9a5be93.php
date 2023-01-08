<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHoldere9811 = null;
    private $initializer09cda = null;
    private static $publicProperties0d328 = [
        
    ];
    public function getConnection()
    {
        $this->initializer09cda && ($this->initializer09cda->__invoke($valueHoldere9811, $this, 'getConnection', array(), $this->initializer09cda) || 1) && $this->valueHoldere9811 = $valueHoldere9811;
        return $this->valueHoldere9811->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer09cda && ($this->initializer09cda->__invoke($valueHoldere9811, $this, 'getMetadataFactory', array(), $this->initializer09cda) || 1) && $this->valueHoldere9811 = $valueHoldere9811;
        return $this->valueHoldere9811->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer09cda && ($this->initializer09cda->__invoke($valueHoldere9811, $this, 'getExpressionBuilder', array(), $this->initializer09cda) || 1) && $this->valueHoldere9811 = $valueHoldere9811;
        return $this->valueHoldere9811->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer09cda && ($this->initializer09cda->__invoke($valueHoldere9811, $this, 'beginTransaction', array(), $this->initializer09cda) || 1) && $this->valueHoldere9811 = $valueHoldere9811;
        return $this->valueHoldere9811->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer09cda && ($this->initializer09cda->__invoke($valueHoldere9811, $this, 'getCache', array(), $this->initializer09cda) || 1) && $this->valueHoldere9811 = $valueHoldere9811;
        return $this->valueHoldere9811->getCache();
    }
    public function transactional($func)
    {
        $this->initializer09cda && ($this->initializer09cda->__invoke($valueHoldere9811, $this, 'transactional', array('func' => $func), $this->initializer09cda) || 1) && $this->valueHoldere9811 = $valueHoldere9811;
        return $this->valueHoldere9811->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer09cda && ($this->initializer09cda->__invoke($valueHoldere9811, $this, 'wrapInTransaction', array('func' => $func), $this->initializer09cda) || 1) && $this->valueHoldere9811 = $valueHoldere9811;
        return $this->valueHoldere9811->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer09cda && ($this->initializer09cda->__invoke($valueHoldere9811, $this, 'commit', array(), $this->initializer09cda) || 1) && $this->valueHoldere9811 = $valueHoldere9811;
        return $this->valueHoldere9811->commit();
    }
    public function rollback()
    {
        $this->initializer09cda && ($this->initializer09cda->__invoke($valueHoldere9811, $this, 'rollback', array(), $this->initializer09cda) || 1) && $this->valueHoldere9811 = $valueHoldere9811;
        return $this->valueHoldere9811->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer09cda && ($this->initializer09cda->__invoke($valueHoldere9811, $this, 'getClassMetadata', array('className' => $className), $this->initializer09cda) || 1) && $this->valueHoldere9811 = $valueHoldere9811;
        return $this->valueHoldere9811->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer09cda && ($this->initializer09cda->__invoke($valueHoldere9811, $this, 'createQuery', array('dql' => $dql), $this->initializer09cda) || 1) && $this->valueHoldere9811 = $valueHoldere9811;
        return $this->valueHoldere9811->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer09cda && ($this->initializer09cda->__invoke($valueHoldere9811, $this, 'createNamedQuery', array('name' => $name), $this->initializer09cda) || 1) && $this->valueHoldere9811 = $valueHoldere9811;
        return $this->valueHoldere9811->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer09cda && ($this->initializer09cda->__invoke($valueHoldere9811, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer09cda) || 1) && $this->valueHoldere9811 = $valueHoldere9811;
        return $this->valueHoldere9811->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer09cda && ($this->initializer09cda->__invoke($valueHoldere9811, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer09cda) || 1) && $this->valueHoldere9811 = $valueHoldere9811;
        return $this->valueHoldere9811->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer09cda && ($this->initializer09cda->__invoke($valueHoldere9811, $this, 'createQueryBuilder', array(), $this->initializer09cda) || 1) && $this->valueHoldere9811 = $valueHoldere9811;
        return $this->valueHoldere9811->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer09cda && ($this->initializer09cda->__invoke($valueHoldere9811, $this, 'flush', array('entity' => $entity), $this->initializer09cda) || 1) && $this->valueHoldere9811 = $valueHoldere9811;
        return $this->valueHoldere9811->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer09cda && ($this->initializer09cda->__invoke($valueHoldere9811, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer09cda) || 1) && $this->valueHoldere9811 = $valueHoldere9811;
        return $this->valueHoldere9811->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer09cda && ($this->initializer09cda->__invoke($valueHoldere9811, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer09cda) || 1) && $this->valueHoldere9811 = $valueHoldere9811;
        return $this->valueHoldere9811->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer09cda && ($this->initializer09cda->__invoke($valueHoldere9811, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer09cda) || 1) && $this->valueHoldere9811 = $valueHoldere9811;
        return $this->valueHoldere9811->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer09cda && ($this->initializer09cda->__invoke($valueHoldere9811, $this, 'clear', array('entityName' => $entityName), $this->initializer09cda) || 1) && $this->valueHoldere9811 = $valueHoldere9811;
        return $this->valueHoldere9811->clear($entityName);
    }
    public function close()
    {
        $this->initializer09cda && ($this->initializer09cda->__invoke($valueHoldere9811, $this, 'close', array(), $this->initializer09cda) || 1) && $this->valueHoldere9811 = $valueHoldere9811;
        return $this->valueHoldere9811->close();
    }
    public function persist($entity)
    {
        $this->initializer09cda && ($this->initializer09cda->__invoke($valueHoldere9811, $this, 'persist', array('entity' => $entity), $this->initializer09cda) || 1) && $this->valueHoldere9811 = $valueHoldere9811;
        return $this->valueHoldere9811->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer09cda && ($this->initializer09cda->__invoke($valueHoldere9811, $this, 'remove', array('entity' => $entity), $this->initializer09cda) || 1) && $this->valueHoldere9811 = $valueHoldere9811;
        return $this->valueHoldere9811->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer09cda && ($this->initializer09cda->__invoke($valueHoldere9811, $this, 'refresh', array('entity' => $entity), $this->initializer09cda) || 1) && $this->valueHoldere9811 = $valueHoldere9811;
        return $this->valueHoldere9811->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer09cda && ($this->initializer09cda->__invoke($valueHoldere9811, $this, 'detach', array('entity' => $entity), $this->initializer09cda) || 1) && $this->valueHoldere9811 = $valueHoldere9811;
        return $this->valueHoldere9811->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer09cda && ($this->initializer09cda->__invoke($valueHoldere9811, $this, 'merge', array('entity' => $entity), $this->initializer09cda) || 1) && $this->valueHoldere9811 = $valueHoldere9811;
        return $this->valueHoldere9811->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer09cda && ($this->initializer09cda->__invoke($valueHoldere9811, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer09cda) || 1) && $this->valueHoldere9811 = $valueHoldere9811;
        return $this->valueHoldere9811->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer09cda && ($this->initializer09cda->__invoke($valueHoldere9811, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer09cda) || 1) && $this->valueHoldere9811 = $valueHoldere9811;
        return $this->valueHoldere9811->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer09cda && ($this->initializer09cda->__invoke($valueHoldere9811, $this, 'getRepository', array('entityName' => $entityName), $this->initializer09cda) || 1) && $this->valueHoldere9811 = $valueHoldere9811;
        return $this->valueHoldere9811->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer09cda && ($this->initializer09cda->__invoke($valueHoldere9811, $this, 'contains', array('entity' => $entity), $this->initializer09cda) || 1) && $this->valueHoldere9811 = $valueHoldere9811;
        return $this->valueHoldere9811->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer09cda && ($this->initializer09cda->__invoke($valueHoldere9811, $this, 'getEventManager', array(), $this->initializer09cda) || 1) && $this->valueHoldere9811 = $valueHoldere9811;
        return $this->valueHoldere9811->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer09cda && ($this->initializer09cda->__invoke($valueHoldere9811, $this, 'getConfiguration', array(), $this->initializer09cda) || 1) && $this->valueHoldere9811 = $valueHoldere9811;
        return $this->valueHoldere9811->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer09cda && ($this->initializer09cda->__invoke($valueHoldere9811, $this, 'isOpen', array(), $this->initializer09cda) || 1) && $this->valueHoldere9811 = $valueHoldere9811;
        return $this->valueHoldere9811->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer09cda && ($this->initializer09cda->__invoke($valueHoldere9811, $this, 'getUnitOfWork', array(), $this->initializer09cda) || 1) && $this->valueHoldere9811 = $valueHoldere9811;
        return $this->valueHoldere9811->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer09cda && ($this->initializer09cda->__invoke($valueHoldere9811, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer09cda) || 1) && $this->valueHoldere9811 = $valueHoldere9811;
        return $this->valueHoldere9811->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer09cda && ($this->initializer09cda->__invoke($valueHoldere9811, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer09cda) || 1) && $this->valueHoldere9811 = $valueHoldere9811;
        return $this->valueHoldere9811->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer09cda && ($this->initializer09cda->__invoke($valueHoldere9811, $this, 'getProxyFactory', array(), $this->initializer09cda) || 1) && $this->valueHoldere9811 = $valueHoldere9811;
        return $this->valueHoldere9811->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer09cda && ($this->initializer09cda->__invoke($valueHoldere9811, $this, 'initializeObject', array('obj' => $obj), $this->initializer09cda) || 1) && $this->valueHoldere9811 = $valueHoldere9811;
        return $this->valueHoldere9811->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer09cda && ($this->initializer09cda->__invoke($valueHoldere9811, $this, 'getFilters', array(), $this->initializer09cda) || 1) && $this->valueHoldere9811 = $valueHoldere9811;
        return $this->valueHoldere9811->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer09cda && ($this->initializer09cda->__invoke($valueHoldere9811, $this, 'isFiltersStateClean', array(), $this->initializer09cda) || 1) && $this->valueHoldere9811 = $valueHoldere9811;
        return $this->valueHoldere9811->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer09cda && ($this->initializer09cda->__invoke($valueHoldere9811, $this, 'hasFilters', array(), $this->initializer09cda) || 1) && $this->valueHoldere9811 = $valueHoldere9811;
        return $this->valueHoldere9811->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer09cda = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHoldere9811) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldere9811 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHoldere9811->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer09cda && ($this->initializer09cda->__invoke($valueHoldere9811, $this, '__get', ['name' => $name], $this->initializer09cda) || 1) && $this->valueHoldere9811 = $valueHoldere9811;
        if (isset(self::$publicProperties0d328[$name])) {
            return $this->valueHoldere9811->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere9811;
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
        $targetObject = $this->valueHoldere9811;
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
        $this->initializer09cda && ($this->initializer09cda->__invoke($valueHoldere9811, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer09cda) || 1) && $this->valueHoldere9811 = $valueHoldere9811;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere9811;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHoldere9811;
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
        $this->initializer09cda && ($this->initializer09cda->__invoke($valueHoldere9811, $this, '__isset', array('name' => $name), $this->initializer09cda) || 1) && $this->valueHoldere9811 = $valueHoldere9811;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere9811;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHoldere9811;
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
        $this->initializer09cda && ($this->initializer09cda->__invoke($valueHoldere9811, $this, '__unset', array('name' => $name), $this->initializer09cda) || 1) && $this->valueHoldere9811 = $valueHoldere9811;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere9811;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHoldere9811;
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
        $this->initializer09cda && ($this->initializer09cda->__invoke($valueHoldere9811, $this, '__clone', array(), $this->initializer09cda) || 1) && $this->valueHoldere9811 = $valueHoldere9811;
        $this->valueHoldere9811 = clone $this->valueHoldere9811;
    }
    public function __sleep()
    {
        $this->initializer09cda && ($this->initializer09cda->__invoke($valueHoldere9811, $this, '__sleep', array(), $this->initializer09cda) || 1) && $this->valueHoldere9811 = $valueHoldere9811;
        return array('valueHoldere9811');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer09cda = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer09cda;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer09cda && ($this->initializer09cda->__invoke($valueHoldere9811, $this, 'initializeProxy', array(), $this->initializer09cda) || 1) && $this->valueHoldere9811 = $valueHoldere9811;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldere9811;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldere9811;
    }
}
