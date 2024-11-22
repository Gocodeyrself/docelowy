<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder06807 = null;
    private $initializer80f5f = null;
    private static $publicPropertiesfd0f4 = [
        
    ];
    public function getConnection()
    {
        $this->initializer80f5f && ($this->initializer80f5f->__invoke($valueHolder06807, $this, 'getConnection', array(), $this->initializer80f5f) || 1) && $this->valueHolder06807 = $valueHolder06807;
        return $this->valueHolder06807->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer80f5f && ($this->initializer80f5f->__invoke($valueHolder06807, $this, 'getMetadataFactory', array(), $this->initializer80f5f) || 1) && $this->valueHolder06807 = $valueHolder06807;
        return $this->valueHolder06807->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer80f5f && ($this->initializer80f5f->__invoke($valueHolder06807, $this, 'getExpressionBuilder', array(), $this->initializer80f5f) || 1) && $this->valueHolder06807 = $valueHolder06807;
        return $this->valueHolder06807->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer80f5f && ($this->initializer80f5f->__invoke($valueHolder06807, $this, 'beginTransaction', array(), $this->initializer80f5f) || 1) && $this->valueHolder06807 = $valueHolder06807;
        return $this->valueHolder06807->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer80f5f && ($this->initializer80f5f->__invoke($valueHolder06807, $this, 'getCache', array(), $this->initializer80f5f) || 1) && $this->valueHolder06807 = $valueHolder06807;
        return $this->valueHolder06807->getCache();
    }
    public function transactional($func)
    {
        $this->initializer80f5f && ($this->initializer80f5f->__invoke($valueHolder06807, $this, 'transactional', array('func' => $func), $this->initializer80f5f) || 1) && $this->valueHolder06807 = $valueHolder06807;
        return $this->valueHolder06807->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer80f5f && ($this->initializer80f5f->__invoke($valueHolder06807, $this, 'wrapInTransaction', array('func' => $func), $this->initializer80f5f) || 1) && $this->valueHolder06807 = $valueHolder06807;
        return $this->valueHolder06807->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer80f5f && ($this->initializer80f5f->__invoke($valueHolder06807, $this, 'commit', array(), $this->initializer80f5f) || 1) && $this->valueHolder06807 = $valueHolder06807;
        return $this->valueHolder06807->commit();
    }
    public function rollback()
    {
        $this->initializer80f5f && ($this->initializer80f5f->__invoke($valueHolder06807, $this, 'rollback', array(), $this->initializer80f5f) || 1) && $this->valueHolder06807 = $valueHolder06807;
        return $this->valueHolder06807->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer80f5f && ($this->initializer80f5f->__invoke($valueHolder06807, $this, 'getClassMetadata', array('className' => $className), $this->initializer80f5f) || 1) && $this->valueHolder06807 = $valueHolder06807;
        return $this->valueHolder06807->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer80f5f && ($this->initializer80f5f->__invoke($valueHolder06807, $this, 'createQuery', array('dql' => $dql), $this->initializer80f5f) || 1) && $this->valueHolder06807 = $valueHolder06807;
        return $this->valueHolder06807->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer80f5f && ($this->initializer80f5f->__invoke($valueHolder06807, $this, 'createNamedQuery', array('name' => $name), $this->initializer80f5f) || 1) && $this->valueHolder06807 = $valueHolder06807;
        return $this->valueHolder06807->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer80f5f && ($this->initializer80f5f->__invoke($valueHolder06807, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer80f5f) || 1) && $this->valueHolder06807 = $valueHolder06807;
        return $this->valueHolder06807->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer80f5f && ($this->initializer80f5f->__invoke($valueHolder06807, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer80f5f) || 1) && $this->valueHolder06807 = $valueHolder06807;
        return $this->valueHolder06807->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer80f5f && ($this->initializer80f5f->__invoke($valueHolder06807, $this, 'createQueryBuilder', array(), $this->initializer80f5f) || 1) && $this->valueHolder06807 = $valueHolder06807;
        return $this->valueHolder06807->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer80f5f && ($this->initializer80f5f->__invoke($valueHolder06807, $this, 'flush', array('entity' => $entity), $this->initializer80f5f) || 1) && $this->valueHolder06807 = $valueHolder06807;
        return $this->valueHolder06807->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer80f5f && ($this->initializer80f5f->__invoke($valueHolder06807, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer80f5f) || 1) && $this->valueHolder06807 = $valueHolder06807;
        return $this->valueHolder06807->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer80f5f && ($this->initializer80f5f->__invoke($valueHolder06807, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer80f5f) || 1) && $this->valueHolder06807 = $valueHolder06807;
        return $this->valueHolder06807->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer80f5f && ($this->initializer80f5f->__invoke($valueHolder06807, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer80f5f) || 1) && $this->valueHolder06807 = $valueHolder06807;
        return $this->valueHolder06807->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer80f5f && ($this->initializer80f5f->__invoke($valueHolder06807, $this, 'clear', array('entityName' => $entityName), $this->initializer80f5f) || 1) && $this->valueHolder06807 = $valueHolder06807;
        return $this->valueHolder06807->clear($entityName);
    }
    public function close()
    {
        $this->initializer80f5f && ($this->initializer80f5f->__invoke($valueHolder06807, $this, 'close', array(), $this->initializer80f5f) || 1) && $this->valueHolder06807 = $valueHolder06807;
        return $this->valueHolder06807->close();
    }
    public function persist($entity)
    {
        $this->initializer80f5f && ($this->initializer80f5f->__invoke($valueHolder06807, $this, 'persist', array('entity' => $entity), $this->initializer80f5f) || 1) && $this->valueHolder06807 = $valueHolder06807;
        return $this->valueHolder06807->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer80f5f && ($this->initializer80f5f->__invoke($valueHolder06807, $this, 'remove', array('entity' => $entity), $this->initializer80f5f) || 1) && $this->valueHolder06807 = $valueHolder06807;
        return $this->valueHolder06807->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer80f5f && ($this->initializer80f5f->__invoke($valueHolder06807, $this, 'refresh', array('entity' => $entity), $this->initializer80f5f) || 1) && $this->valueHolder06807 = $valueHolder06807;
        return $this->valueHolder06807->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer80f5f && ($this->initializer80f5f->__invoke($valueHolder06807, $this, 'detach', array('entity' => $entity), $this->initializer80f5f) || 1) && $this->valueHolder06807 = $valueHolder06807;
        return $this->valueHolder06807->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer80f5f && ($this->initializer80f5f->__invoke($valueHolder06807, $this, 'merge', array('entity' => $entity), $this->initializer80f5f) || 1) && $this->valueHolder06807 = $valueHolder06807;
        return $this->valueHolder06807->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer80f5f && ($this->initializer80f5f->__invoke($valueHolder06807, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer80f5f) || 1) && $this->valueHolder06807 = $valueHolder06807;
        return $this->valueHolder06807->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer80f5f && ($this->initializer80f5f->__invoke($valueHolder06807, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer80f5f) || 1) && $this->valueHolder06807 = $valueHolder06807;
        return $this->valueHolder06807->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer80f5f && ($this->initializer80f5f->__invoke($valueHolder06807, $this, 'getRepository', array('entityName' => $entityName), $this->initializer80f5f) || 1) && $this->valueHolder06807 = $valueHolder06807;
        return $this->valueHolder06807->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer80f5f && ($this->initializer80f5f->__invoke($valueHolder06807, $this, 'contains', array('entity' => $entity), $this->initializer80f5f) || 1) && $this->valueHolder06807 = $valueHolder06807;
        return $this->valueHolder06807->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer80f5f && ($this->initializer80f5f->__invoke($valueHolder06807, $this, 'getEventManager', array(), $this->initializer80f5f) || 1) && $this->valueHolder06807 = $valueHolder06807;
        return $this->valueHolder06807->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer80f5f && ($this->initializer80f5f->__invoke($valueHolder06807, $this, 'getConfiguration', array(), $this->initializer80f5f) || 1) && $this->valueHolder06807 = $valueHolder06807;
        return $this->valueHolder06807->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer80f5f && ($this->initializer80f5f->__invoke($valueHolder06807, $this, 'isOpen', array(), $this->initializer80f5f) || 1) && $this->valueHolder06807 = $valueHolder06807;
        return $this->valueHolder06807->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer80f5f && ($this->initializer80f5f->__invoke($valueHolder06807, $this, 'getUnitOfWork', array(), $this->initializer80f5f) || 1) && $this->valueHolder06807 = $valueHolder06807;
        return $this->valueHolder06807->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer80f5f && ($this->initializer80f5f->__invoke($valueHolder06807, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer80f5f) || 1) && $this->valueHolder06807 = $valueHolder06807;
        return $this->valueHolder06807->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer80f5f && ($this->initializer80f5f->__invoke($valueHolder06807, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer80f5f) || 1) && $this->valueHolder06807 = $valueHolder06807;
        return $this->valueHolder06807->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer80f5f && ($this->initializer80f5f->__invoke($valueHolder06807, $this, 'getProxyFactory', array(), $this->initializer80f5f) || 1) && $this->valueHolder06807 = $valueHolder06807;
        return $this->valueHolder06807->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer80f5f && ($this->initializer80f5f->__invoke($valueHolder06807, $this, 'initializeObject', array('obj' => $obj), $this->initializer80f5f) || 1) && $this->valueHolder06807 = $valueHolder06807;
        return $this->valueHolder06807->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer80f5f && ($this->initializer80f5f->__invoke($valueHolder06807, $this, 'getFilters', array(), $this->initializer80f5f) || 1) && $this->valueHolder06807 = $valueHolder06807;
        return $this->valueHolder06807->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer80f5f && ($this->initializer80f5f->__invoke($valueHolder06807, $this, 'isFiltersStateClean', array(), $this->initializer80f5f) || 1) && $this->valueHolder06807 = $valueHolder06807;
        return $this->valueHolder06807->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer80f5f && ($this->initializer80f5f->__invoke($valueHolder06807, $this, 'hasFilters', array(), $this->initializer80f5f) || 1) && $this->valueHolder06807 = $valueHolder06807;
        return $this->valueHolder06807->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer80f5f = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder06807) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder06807 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder06807->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer80f5f && ($this->initializer80f5f->__invoke($valueHolder06807, $this, '__get', ['name' => $name], $this->initializer80f5f) || 1) && $this->valueHolder06807 = $valueHolder06807;
        if (isset(self::$publicPropertiesfd0f4[$name])) {
            return $this->valueHolder06807->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder06807;
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
        $targetObject = $this->valueHolder06807;
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
        $this->initializer80f5f && ($this->initializer80f5f->__invoke($valueHolder06807, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer80f5f) || 1) && $this->valueHolder06807 = $valueHolder06807;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder06807;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder06807;
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
        $this->initializer80f5f && ($this->initializer80f5f->__invoke($valueHolder06807, $this, '__isset', array('name' => $name), $this->initializer80f5f) || 1) && $this->valueHolder06807 = $valueHolder06807;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder06807;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder06807;
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
        $this->initializer80f5f && ($this->initializer80f5f->__invoke($valueHolder06807, $this, '__unset', array('name' => $name), $this->initializer80f5f) || 1) && $this->valueHolder06807 = $valueHolder06807;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder06807;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder06807;
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
        $this->initializer80f5f && ($this->initializer80f5f->__invoke($valueHolder06807, $this, '__clone', array(), $this->initializer80f5f) || 1) && $this->valueHolder06807 = $valueHolder06807;
        $this->valueHolder06807 = clone $this->valueHolder06807;
    }
    public function __sleep()
    {
        $this->initializer80f5f && ($this->initializer80f5f->__invoke($valueHolder06807, $this, '__sleep', array(), $this->initializer80f5f) || 1) && $this->valueHolder06807 = $valueHolder06807;
        return array('valueHolder06807');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer80f5f = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer80f5f;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer80f5f && ($this->initializer80f5f->__invoke($valueHolder06807, $this, 'initializeProxy', array(), $this->initializer80f5f) || 1) && $this->valueHolder06807 = $valueHolder06807;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder06807;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder06807;
    }
}
