<?php

namespace Proxies\__CG__\alex\yamBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class TrState extends \alex\yamBundle\Entity\TrState implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'alex\\yamBundle\\Entity\\TrState' . "\0" . 'idState', '' . "\0" . 'alex\\yamBundle\\Entity\\TrState' . "\0" . 'idCountry', '' . "\0" . 'alex\\yamBundle\\Entity\\TrState' . "\0" . 'idZone', '' . "\0" . 'alex\\yamBundle\\Entity\\TrState' . "\0" . 'name', '' . "\0" . 'alex\\yamBundle\\Entity\\TrState' . "\0" . 'isoCode', '' . "\0" . 'alex\\yamBundle\\Entity\\TrState' . "\0" . 'taxBehavior', '' . "\0" . 'alex\\yamBundle\\Entity\\TrState' . "\0" . 'active');
        }

        return array('__isInitialized__', '' . "\0" . 'alex\\yamBundle\\Entity\\TrState' . "\0" . 'idState', '' . "\0" . 'alex\\yamBundle\\Entity\\TrState' . "\0" . 'idCountry', '' . "\0" . 'alex\\yamBundle\\Entity\\TrState' . "\0" . 'idZone', '' . "\0" . 'alex\\yamBundle\\Entity\\TrState' . "\0" . 'name', '' . "\0" . 'alex\\yamBundle\\Entity\\TrState' . "\0" . 'isoCode', '' . "\0" . 'alex\\yamBundle\\Entity\\TrState' . "\0" . 'taxBehavior', '' . "\0" . 'alex\\yamBundle\\Entity\\TrState' . "\0" . 'active');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (TrState $proxy) {
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
    public function getIdState()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIdState();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdState', array());

        return parent::getIdState();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdCountry($idCountry)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdCountry', array($idCountry));

        return parent::setIdCountry($idCountry);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdCountry()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdCountry', array());

        return parent::getIdCountry();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdZone($idZone)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdZone', array($idZone));

        return parent::setIdZone($idZone);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdZone()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdZone', array());

        return parent::getIdZone();
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
    public function setIsoCode($isoCode)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsoCode', array($isoCode));

        return parent::setIsoCode($isoCode);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsoCode()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsoCode', array());

        return parent::getIsoCode();
    }

    /**
     * {@inheritDoc}
     */
    public function setTaxBehavior($taxBehavior)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTaxBehavior', array($taxBehavior));

        return parent::setTaxBehavior($taxBehavior);
    }

    /**
     * {@inheritDoc}
     */
    public function getTaxBehavior()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTaxBehavior', array());

        return parent::getTaxBehavior();
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

}
