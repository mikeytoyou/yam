<?php

namespace Proxies\__CG__\alex\yamBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class TrCurrency extends \alex\yamBundle\Entity\TrCurrency implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCurrency' . "\0" . 'idCurrency', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCurrency' . "\0" . 'name', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCurrency' . "\0" . 'isoCode', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCurrency' . "\0" . 'isoCodeNum', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCurrency' . "\0" . 'sign', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCurrency' . "\0" . 'blank', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCurrency' . "\0" . 'format', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCurrency' . "\0" . 'decimals', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCurrency' . "\0" . 'conversionRate', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCurrency' . "\0" . 'deleted', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCurrency' . "\0" . 'active');
        }

        return array('__isInitialized__', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCurrency' . "\0" . 'idCurrency', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCurrency' . "\0" . 'name', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCurrency' . "\0" . 'isoCode', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCurrency' . "\0" . 'isoCodeNum', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCurrency' . "\0" . 'sign', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCurrency' . "\0" . 'blank', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCurrency' . "\0" . 'format', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCurrency' . "\0" . 'decimals', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCurrency' . "\0" . 'conversionRate', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCurrency' . "\0" . 'deleted', '' . "\0" . 'alex\\yamBundle\\Entity\\TrCurrency' . "\0" . 'active');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (TrCurrency $proxy) {
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
    public function getIdCurrency()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIdCurrency();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdCurrency', array());

        return parent::getIdCurrency();
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
    public function setIsoCodeNum($isoCodeNum)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsoCodeNum', array($isoCodeNum));

        return parent::setIsoCodeNum($isoCodeNum);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsoCodeNum()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsoCodeNum', array());

        return parent::getIsoCodeNum();
    }

    /**
     * {@inheritDoc}
     */
    public function setSign($sign)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSign', array($sign));

        return parent::setSign($sign);
    }

    /**
     * {@inheritDoc}
     */
    public function getSign()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSign', array());

        return parent::getSign();
    }

    /**
     * {@inheritDoc}
     */
    public function setBlank($blank)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBlank', array($blank));

        return parent::setBlank($blank);
    }

    /**
     * {@inheritDoc}
     */
    public function getBlank()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBlank', array());

        return parent::getBlank();
    }

    /**
     * {@inheritDoc}
     */
    public function setFormat($format)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFormat', array($format));

        return parent::setFormat($format);
    }

    /**
     * {@inheritDoc}
     */
    public function getFormat()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFormat', array());

        return parent::getFormat();
    }

    /**
     * {@inheritDoc}
     */
    public function setDecimals($decimals)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDecimals', array($decimals));

        return parent::setDecimals($decimals);
    }

    /**
     * {@inheritDoc}
     */
    public function getDecimals()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDecimals', array());

        return parent::getDecimals();
    }

    /**
     * {@inheritDoc}
     */
    public function setConversionRate($conversionRate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setConversionRate', array($conversionRate));

        return parent::setConversionRate($conversionRate);
    }

    /**
     * {@inheritDoc}
     */
    public function getConversionRate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getConversionRate', array());

        return parent::getConversionRate();
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
