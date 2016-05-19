<?php

namespace Proxies\__CG__\alex\yamBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class TrCarrier extends \alex\yamBundle\Entity\TrCarrier implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCarrier' . "\0" . 'idCarrier', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCarrier' . "\0" . 'idReference', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCarrier' . "\0" . 'idTaxRulesGroup', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCarrier' . "\0" . 'name', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCarrier' . "\0" . 'url', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCarrier' . "\0" . 'active', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCarrier' . "\0" . 'deleted', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCarrier' . "\0" . 'shippingHandling', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCarrier' . "\0" . 'rangeBehavior', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCarrier' . "\0" . 'isModule', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCarrier' . "\0" . 'isFree', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCarrier' . "\0" . 'shippingExternal', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCarrier' . "\0" . 'needRange', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCarrier' . "\0" . 'externalModuleName', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCarrier' . "\0" . 'shippingMethod', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCarrier' . "\0" . 'position', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCarrier' . "\0" . 'maxWidth', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCarrier' . "\0" . 'maxHeight', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCarrier' . "\0" . 'maxDepth', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCarrier' . "\0" . 'maxWeight', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCarrier' . "\0" . 'grade');
        }

        return array('__isInitialized__', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCarrier' . "\0" . 'idCarrier', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCarrier' . "\0" . 'idReference', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCarrier' . "\0" . 'idTaxRulesGroup', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCarrier' . "\0" . 'name', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCarrier' . "\0" . 'url', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCarrier' . "\0" . 'active', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCarrier' . "\0" . 'deleted', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCarrier' . "\0" . 'shippingHandling', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCarrier' . "\0" . 'rangeBehavior', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCarrier' . "\0" . 'isModule', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCarrier' . "\0" . 'isFree', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCarrier' . "\0" . 'shippingExternal', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCarrier' . "\0" . 'needRange', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCarrier' . "\0" . 'externalModuleName', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCarrier' . "\0" . 'shippingMethod', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCarrier' . "\0" . 'position', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCarrier' . "\0" . 'maxWidth', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCarrier' . "\0" . 'maxHeight', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCarrier' . "\0" . 'maxDepth', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCarrier' . "\0" . 'maxWeight', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCarrier' . "\0" . 'grade');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (TrCarrier $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getIdCarrier()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIdCarrier();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdCarrier', array());

        return parent::getIdCarrier();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdReference($idReference)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdReference', array($idReference));

        return parent::setIdReference($idReference);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdReference()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdReference', array());

        return parent::getIdReference();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdTaxRulesGroup($idTaxRulesGroup)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdTaxRulesGroup', array($idTaxRulesGroup));

        return parent::setIdTaxRulesGroup($idTaxRulesGroup);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdTaxRulesGroup()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdTaxRulesGroup', array());

        return parent::getIdTaxRulesGroup();
    }

    /**
     * {@inheritDoc}
     */
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', array($name));

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', array());

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setUrl($url)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUrl', array($url));

        return parent::setUrl($url);
    }

    /**
     * {@inheritDoc}
     */
    public function getUrl()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUrl', array());

        return parent::getUrl();
    }

    /**
     * {@inheritDoc}
     */
    public function setActive($active)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setActive', array($active));

        return parent::setActive($active);
    }

    /**
     * {@inheritDoc}
     */
    public function getActive()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getActive', array());

        return parent::getActive();
    }

    /**
     * {@inheritDoc}
     */
    public function setDeleted($deleted)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDeleted', array($deleted));

        return parent::setDeleted($deleted);
    }

    /**
     * {@inheritDoc}
     */
    public function getDeleted()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDeleted', array());

        return parent::getDeleted();
    }

    /**
     * {@inheritDoc}
     */
    public function setShippingHandling($shippingHandling)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setShippingHandling', array($shippingHandling));

        return parent::setShippingHandling($shippingHandling);
    }

    /**
     * {@inheritDoc}
     */
    public function getShippingHandling()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getShippingHandling', array());

        return parent::getShippingHandling();
    }

    /**
     * {@inheritDoc}
     */
    public function setRangeBehavior($rangeBehavior)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRangeBehavior', array($rangeBehavior));

        return parent::setRangeBehavior($rangeBehavior);
    }

    /**
     * {@inheritDoc}
     */
    public function getRangeBehavior()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRangeBehavior', array());

        return parent::getRangeBehavior();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsModule($isModule)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsModule', array($isModule));

        return parent::setIsModule($isModule);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsModule()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsModule', array());

        return parent::getIsModule();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsFree($isFree)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsFree', array($isFree));

        return parent::setIsFree($isFree);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsFree()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsFree', array());

        return parent::getIsFree();
    }

    /**
     * {@inheritDoc}
     */
    public function setShippingExternal($shippingExternal)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setShippingExternal', array($shippingExternal));

        return parent::setShippingExternal($shippingExternal);
    }

    /**
     * {@inheritDoc}
     */
    public function getShippingExternal()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getShippingExternal', array());

        return parent::getShippingExternal();
    }

    /**
     * {@inheritDoc}
     */
    public function setNeedRange($needRange)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNeedRange', array($needRange));

        return parent::setNeedRange($needRange);
    }

    /**
     * {@inheritDoc}
     */
    public function getNeedRange()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNeedRange', array());

        return parent::getNeedRange();
    }

    /**
     * {@inheritDoc}
     */
    public function setExternalModuleName($externalModuleName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setExternalModuleName', array($externalModuleName));

        return parent::setExternalModuleName($externalModuleName);
    }

    /**
     * {@inheritDoc}
     */
    public function getExternalModuleName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getExternalModuleName', array());

        return parent::getExternalModuleName();
    }

    /**
     * {@inheritDoc}
     */
    public function setShippingMethod($shippingMethod)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setShippingMethod', array($shippingMethod));

        return parent::setShippingMethod($shippingMethod);
    }

    /**
     * {@inheritDoc}
     */
    public function getShippingMethod()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getShippingMethod', array());

        return parent::getShippingMethod();
    }

    /**
     * {@inheritDoc}
     */
    public function setPosition($position)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPosition', array($position));

        return parent::setPosition($position);
    }

    /**
     * {@inheritDoc}
     */
    public function getPosition()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPosition', array());

        return parent::getPosition();
    }

    /**
     * {@inheritDoc}
     */
    public function setMaxWidth($maxWidth)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMaxWidth', array($maxWidth));

        return parent::setMaxWidth($maxWidth);
    }

    /**
     * {@inheritDoc}
     */
    public function getMaxWidth()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMaxWidth', array());

        return parent::getMaxWidth();
    }

    /**
     * {@inheritDoc}
     */
    public function setMaxHeight($maxHeight)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMaxHeight', array($maxHeight));

        return parent::setMaxHeight($maxHeight);
    }

    /**
     * {@inheritDoc}
     */
    public function getMaxHeight()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMaxHeight', array());

        return parent::getMaxHeight();
    }

    /**
     * {@inheritDoc}
     */
    public function setMaxDepth($maxDepth)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMaxDepth', array($maxDepth));

        return parent::setMaxDepth($maxDepth);
    }

    /**
     * {@inheritDoc}
     */
    public function getMaxDepth()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMaxDepth', array());

        return parent::getMaxDepth();
    }

    /**
     * {@inheritDoc}
     */
    public function setMaxWeight($maxWeight)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMaxWeight', array($maxWeight));

        return parent::setMaxWeight($maxWeight);
    }

    /**
     * {@inheritDoc}
     */
    public function getMaxWeight()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMaxWeight', array());

        return parent::getMaxWeight();
    }

    /**
     * {@inheritDoc}
     */
    public function setGrade($grade)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGrade', array($grade));

        return parent::setGrade($grade);
    }

    /**
     * {@inheritDoc}
     */
    public function getGrade()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGrade', array());

        return parent::getGrade();
    }

}