<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderd2f5e = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer71f4a = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties13281 = [
        
    ];

    public function getConnection()
    {
        $this->initializer71f4a && ($this->initializer71f4a->__invoke($valueHolderd2f5e, $this, 'getConnection', array(), $this->initializer71f4a) || 1) && $this->valueHolderd2f5e = $valueHolderd2f5e;

        return $this->valueHolderd2f5e->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer71f4a && ($this->initializer71f4a->__invoke($valueHolderd2f5e, $this, 'getMetadataFactory', array(), $this->initializer71f4a) || 1) && $this->valueHolderd2f5e = $valueHolderd2f5e;

        return $this->valueHolderd2f5e->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer71f4a && ($this->initializer71f4a->__invoke($valueHolderd2f5e, $this, 'getExpressionBuilder', array(), $this->initializer71f4a) || 1) && $this->valueHolderd2f5e = $valueHolderd2f5e;

        return $this->valueHolderd2f5e->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer71f4a && ($this->initializer71f4a->__invoke($valueHolderd2f5e, $this, 'beginTransaction', array(), $this->initializer71f4a) || 1) && $this->valueHolderd2f5e = $valueHolderd2f5e;

        return $this->valueHolderd2f5e->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer71f4a && ($this->initializer71f4a->__invoke($valueHolderd2f5e, $this, 'getCache', array(), $this->initializer71f4a) || 1) && $this->valueHolderd2f5e = $valueHolderd2f5e;

        return $this->valueHolderd2f5e->getCache();
    }

    public function transactional($func)
    {
        $this->initializer71f4a && ($this->initializer71f4a->__invoke($valueHolderd2f5e, $this, 'transactional', array('func' => $func), $this->initializer71f4a) || 1) && $this->valueHolderd2f5e = $valueHolderd2f5e;

        return $this->valueHolderd2f5e->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer71f4a && ($this->initializer71f4a->__invoke($valueHolderd2f5e, $this, 'wrapInTransaction', array('func' => $func), $this->initializer71f4a) || 1) && $this->valueHolderd2f5e = $valueHolderd2f5e;

        return $this->valueHolderd2f5e->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer71f4a && ($this->initializer71f4a->__invoke($valueHolderd2f5e, $this, 'commit', array(), $this->initializer71f4a) || 1) && $this->valueHolderd2f5e = $valueHolderd2f5e;

        return $this->valueHolderd2f5e->commit();
    }

    public function rollback()
    {
        $this->initializer71f4a && ($this->initializer71f4a->__invoke($valueHolderd2f5e, $this, 'rollback', array(), $this->initializer71f4a) || 1) && $this->valueHolderd2f5e = $valueHolderd2f5e;

        return $this->valueHolderd2f5e->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer71f4a && ($this->initializer71f4a->__invoke($valueHolderd2f5e, $this, 'getClassMetadata', array('className' => $className), $this->initializer71f4a) || 1) && $this->valueHolderd2f5e = $valueHolderd2f5e;

        return $this->valueHolderd2f5e->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer71f4a && ($this->initializer71f4a->__invoke($valueHolderd2f5e, $this, 'createQuery', array('dql' => $dql), $this->initializer71f4a) || 1) && $this->valueHolderd2f5e = $valueHolderd2f5e;

        return $this->valueHolderd2f5e->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer71f4a && ($this->initializer71f4a->__invoke($valueHolderd2f5e, $this, 'createNamedQuery', array('name' => $name), $this->initializer71f4a) || 1) && $this->valueHolderd2f5e = $valueHolderd2f5e;

        return $this->valueHolderd2f5e->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer71f4a && ($this->initializer71f4a->__invoke($valueHolderd2f5e, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer71f4a) || 1) && $this->valueHolderd2f5e = $valueHolderd2f5e;

        return $this->valueHolderd2f5e->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer71f4a && ($this->initializer71f4a->__invoke($valueHolderd2f5e, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer71f4a) || 1) && $this->valueHolderd2f5e = $valueHolderd2f5e;

        return $this->valueHolderd2f5e->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer71f4a && ($this->initializer71f4a->__invoke($valueHolderd2f5e, $this, 'createQueryBuilder', array(), $this->initializer71f4a) || 1) && $this->valueHolderd2f5e = $valueHolderd2f5e;

        return $this->valueHolderd2f5e->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer71f4a && ($this->initializer71f4a->__invoke($valueHolderd2f5e, $this, 'flush', array('entity' => $entity), $this->initializer71f4a) || 1) && $this->valueHolderd2f5e = $valueHolderd2f5e;

        return $this->valueHolderd2f5e->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer71f4a && ($this->initializer71f4a->__invoke($valueHolderd2f5e, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer71f4a) || 1) && $this->valueHolderd2f5e = $valueHolderd2f5e;

        return $this->valueHolderd2f5e->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer71f4a && ($this->initializer71f4a->__invoke($valueHolderd2f5e, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer71f4a) || 1) && $this->valueHolderd2f5e = $valueHolderd2f5e;

        return $this->valueHolderd2f5e->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer71f4a && ($this->initializer71f4a->__invoke($valueHolderd2f5e, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer71f4a) || 1) && $this->valueHolderd2f5e = $valueHolderd2f5e;

        return $this->valueHolderd2f5e->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer71f4a && ($this->initializer71f4a->__invoke($valueHolderd2f5e, $this, 'clear', array('entityName' => $entityName), $this->initializer71f4a) || 1) && $this->valueHolderd2f5e = $valueHolderd2f5e;

        return $this->valueHolderd2f5e->clear($entityName);
    }

    public function close()
    {
        $this->initializer71f4a && ($this->initializer71f4a->__invoke($valueHolderd2f5e, $this, 'close', array(), $this->initializer71f4a) || 1) && $this->valueHolderd2f5e = $valueHolderd2f5e;

        return $this->valueHolderd2f5e->close();
    }

    public function persist($entity)
    {
        $this->initializer71f4a && ($this->initializer71f4a->__invoke($valueHolderd2f5e, $this, 'persist', array('entity' => $entity), $this->initializer71f4a) || 1) && $this->valueHolderd2f5e = $valueHolderd2f5e;

        return $this->valueHolderd2f5e->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer71f4a && ($this->initializer71f4a->__invoke($valueHolderd2f5e, $this, 'remove', array('entity' => $entity), $this->initializer71f4a) || 1) && $this->valueHolderd2f5e = $valueHolderd2f5e;

        return $this->valueHolderd2f5e->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer71f4a && ($this->initializer71f4a->__invoke($valueHolderd2f5e, $this, 'refresh', array('entity' => $entity), $this->initializer71f4a) || 1) && $this->valueHolderd2f5e = $valueHolderd2f5e;

        return $this->valueHolderd2f5e->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer71f4a && ($this->initializer71f4a->__invoke($valueHolderd2f5e, $this, 'detach', array('entity' => $entity), $this->initializer71f4a) || 1) && $this->valueHolderd2f5e = $valueHolderd2f5e;

        return $this->valueHolderd2f5e->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer71f4a && ($this->initializer71f4a->__invoke($valueHolderd2f5e, $this, 'merge', array('entity' => $entity), $this->initializer71f4a) || 1) && $this->valueHolderd2f5e = $valueHolderd2f5e;

        return $this->valueHolderd2f5e->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer71f4a && ($this->initializer71f4a->__invoke($valueHolderd2f5e, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer71f4a) || 1) && $this->valueHolderd2f5e = $valueHolderd2f5e;

        return $this->valueHolderd2f5e->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer71f4a && ($this->initializer71f4a->__invoke($valueHolderd2f5e, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer71f4a) || 1) && $this->valueHolderd2f5e = $valueHolderd2f5e;

        return $this->valueHolderd2f5e->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer71f4a && ($this->initializer71f4a->__invoke($valueHolderd2f5e, $this, 'getRepository', array('entityName' => $entityName), $this->initializer71f4a) || 1) && $this->valueHolderd2f5e = $valueHolderd2f5e;

        return $this->valueHolderd2f5e->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer71f4a && ($this->initializer71f4a->__invoke($valueHolderd2f5e, $this, 'contains', array('entity' => $entity), $this->initializer71f4a) || 1) && $this->valueHolderd2f5e = $valueHolderd2f5e;

        return $this->valueHolderd2f5e->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer71f4a && ($this->initializer71f4a->__invoke($valueHolderd2f5e, $this, 'getEventManager', array(), $this->initializer71f4a) || 1) && $this->valueHolderd2f5e = $valueHolderd2f5e;

        return $this->valueHolderd2f5e->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer71f4a && ($this->initializer71f4a->__invoke($valueHolderd2f5e, $this, 'getConfiguration', array(), $this->initializer71f4a) || 1) && $this->valueHolderd2f5e = $valueHolderd2f5e;

        return $this->valueHolderd2f5e->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer71f4a && ($this->initializer71f4a->__invoke($valueHolderd2f5e, $this, 'isOpen', array(), $this->initializer71f4a) || 1) && $this->valueHolderd2f5e = $valueHolderd2f5e;

        return $this->valueHolderd2f5e->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer71f4a && ($this->initializer71f4a->__invoke($valueHolderd2f5e, $this, 'getUnitOfWork', array(), $this->initializer71f4a) || 1) && $this->valueHolderd2f5e = $valueHolderd2f5e;

        return $this->valueHolderd2f5e->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer71f4a && ($this->initializer71f4a->__invoke($valueHolderd2f5e, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer71f4a) || 1) && $this->valueHolderd2f5e = $valueHolderd2f5e;

        return $this->valueHolderd2f5e->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer71f4a && ($this->initializer71f4a->__invoke($valueHolderd2f5e, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer71f4a) || 1) && $this->valueHolderd2f5e = $valueHolderd2f5e;

        return $this->valueHolderd2f5e->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer71f4a && ($this->initializer71f4a->__invoke($valueHolderd2f5e, $this, 'getProxyFactory', array(), $this->initializer71f4a) || 1) && $this->valueHolderd2f5e = $valueHolderd2f5e;

        return $this->valueHolderd2f5e->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer71f4a && ($this->initializer71f4a->__invoke($valueHolderd2f5e, $this, 'initializeObject', array('obj' => $obj), $this->initializer71f4a) || 1) && $this->valueHolderd2f5e = $valueHolderd2f5e;

        return $this->valueHolderd2f5e->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer71f4a && ($this->initializer71f4a->__invoke($valueHolderd2f5e, $this, 'getFilters', array(), $this->initializer71f4a) || 1) && $this->valueHolderd2f5e = $valueHolderd2f5e;

        return $this->valueHolderd2f5e->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer71f4a && ($this->initializer71f4a->__invoke($valueHolderd2f5e, $this, 'isFiltersStateClean', array(), $this->initializer71f4a) || 1) && $this->valueHolderd2f5e = $valueHolderd2f5e;

        return $this->valueHolderd2f5e->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer71f4a && ($this->initializer71f4a->__invoke($valueHolderd2f5e, $this, 'hasFilters', array(), $this->initializer71f4a) || 1) && $this->valueHolderd2f5e = $valueHolderd2f5e;

        return $this->valueHolderd2f5e->hasFilters();
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

        $instance->initializer71f4a = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderd2f5e) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderd2f5e = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderd2f5e->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer71f4a && ($this->initializer71f4a->__invoke($valueHolderd2f5e, $this, '__get', ['name' => $name], $this->initializer71f4a) || 1) && $this->valueHolderd2f5e = $valueHolderd2f5e;

        if (isset(self::$publicProperties13281[$name])) {
            return $this->valueHolderd2f5e->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd2f5e;

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

        $targetObject = $this->valueHolderd2f5e;
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
        $this->initializer71f4a && ($this->initializer71f4a->__invoke($valueHolderd2f5e, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer71f4a) || 1) && $this->valueHolderd2f5e = $valueHolderd2f5e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd2f5e;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderd2f5e;
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
        $this->initializer71f4a && ($this->initializer71f4a->__invoke($valueHolderd2f5e, $this, '__isset', array('name' => $name), $this->initializer71f4a) || 1) && $this->valueHolderd2f5e = $valueHolderd2f5e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd2f5e;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderd2f5e;
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
        $this->initializer71f4a && ($this->initializer71f4a->__invoke($valueHolderd2f5e, $this, '__unset', array('name' => $name), $this->initializer71f4a) || 1) && $this->valueHolderd2f5e = $valueHolderd2f5e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd2f5e;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderd2f5e;
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
        $this->initializer71f4a && ($this->initializer71f4a->__invoke($valueHolderd2f5e, $this, '__clone', array(), $this->initializer71f4a) || 1) && $this->valueHolderd2f5e = $valueHolderd2f5e;

        $this->valueHolderd2f5e = clone $this->valueHolderd2f5e;
    }

    public function __sleep()
    {
        $this->initializer71f4a && ($this->initializer71f4a->__invoke($valueHolderd2f5e, $this, '__sleep', array(), $this->initializer71f4a) || 1) && $this->valueHolderd2f5e = $valueHolderd2f5e;

        return array('valueHolderd2f5e');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer71f4a = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer71f4a;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer71f4a && ($this->initializer71f4a->__invoke($valueHolderd2f5e, $this, 'initializeProxy', array(), $this->initializer71f4a) || 1) && $this->valueHolderd2f5e = $valueHolderd2f5e;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderd2f5e;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderd2f5e;
    }
}
