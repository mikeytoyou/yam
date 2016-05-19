<?php

namespace Proxies\__CG__\alex\yamBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class TrOrderCarrier extends \alex\yamBundle\Entity\TrOrderCarrier implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'alex\\yamBundle\\Entity\\TrOrderCarrier' . "\0" . 'idOrderCarrier', '' . "\0" . 'alex\\yamBundle\\Entity\\TrOrderCarrier' . "\0" . 'idOrder', '' . "\0" . 'alex\\yamBundle\\Entity\\TrOrderCarrier' . "\0" . 'idCarrier', '' . "\0" . 'alex\\yamBundle\\Entity\\TrOrderCarrier' . "\0" . 'idOrderInvoice', '' . "\0" . 'alex\\yamBundle\\Entity\\TrOrderCarrier' . "\0" . 'weight', '' . "\0" . 'alex\\yamBundle\\Entity\\TrOrderCarrier' . "\0" . 'shippingCostTaxExcl', '' . "\0" . 'alex\\yamBundle\\Entity\\TrOrderCarrier' . "\0" . 'shippingCostTaxIncl', '' . "\0" . 'alex\\yamBundle\\Entity\\TrOrderCarrier' . "\0" . 'trackingNumber', '' . "\0" . 'alex\\yamBundle\\Entity\\TrOrderCarrier' . "\0" . 'dateAdd');
        }

        return array('__isInitialized__', '' . "\0" . 'alex\\yamBundle\\Entity\\TrOrderCarrier' . "\0" . 'idOrderCarrier', '' . "\0" . 'alex\\yamBundle\\Entity\\TrOrderCarrier' . "\0" . 'idOrder', '' . "\0" . 'alex\\yamBundle\\Entity\\TrOrderCarrier' . "\0" . 'idCarrier', '' . "\0" . 'alex\\yamBundle\\Entity\\TrOrderCarrier' . "\0" . 'idOrderInvoice', '' . "\0" . 'alex\\yamBundle\\Entity\\TrOrderCarrier' . "\0" . 'weight', '' . "\0" . 'alex\\yamBundle\\Entity\\TrOrderCarrier' . "\0" . 'shippingCostTaxExcl', '' . "\0" . 'alex\\yamBundle\\Entity\\TrOrderCarrier' . "\0" . 'shippingCostTaxIncl', '' . "\0" . 'alex\\yamBundle\\Entity\\TrOrderCarrier' . "\0" . 'trackingNumber', '' . "\0" . 'alex\\yamBundle\\Entity\\TrOrderCarrier' . "\0" . 'dateAdd');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (TrOrderCarrier $proxy) {
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
    public function getIdOrderCarrier()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIdOrderCarrier();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdOrderCarrier', array());

        return parent::getIdOrderCarrier();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdOrder($idOrder)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdOrder', array($idOrder));

        return parent::setIdOrder($idOrder);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdOrder()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdOrder', array());

        return parent::getIdOrder();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdCarrier($idCarrier)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdCarrier', array($idCarrier));

        return parent::setIdCarrier($idCarrier);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdCarrier()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdCarrier', array());

        return parent::getIdCarrier();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdOrderInvoice($idOrderInvoice)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdOrderInvoice', array($idOrderInvoice));

        return parent::setIdOrderInvoice($idOrderInvoice);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdOrderInvoice()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdOrderInvoice', array());

        return parent::getIdOrderInvoice();
    }

    /**
     * {@inheritDoc}
     */
    public function setWeight($weight)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWeight', array($weight));

        return parent::setWeight($weight);
    }

    /**
     * {@inheritDoc}
     */
    public function getWeight()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWeight', array());

        return parent::getWeight();
    }

    /**
     * {@inheritDoc}
     */
    public function setShippingCostTaxExcl($shippingCostTaxExcl)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setShippingCostTaxExcl', array($shippingCostTaxExcl));

        return parent::setShippingCostTaxExcl($shippingCostTaxExcl);
    }

    /**
     * {@inheritDoc}
     */
    public function getShippingCostTaxExcl()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getShippingCostTaxExcl', array());

        return parent::getShippingCostTaxExcl();
    }

    /**
     * {@inheritDoc}
     */
    public function setShippingCostTaxIncl($shippingCostTaxIncl)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setShippingCostTaxIncl', array($shippingCostTaxIncl));

        return parent::setShippingCostTaxIncl($shippingCostTaxIncl);
    }

    /**
     * {@inheritDoc}
     */
    public function getShippingCostTaxIncl()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getShippingCostTaxIncl', array());

        return parent::getShippingCostTaxIncl();
    }

    /**
     * {@inheritDoc}
     */
    public function setTrackingNumber($trackingNumber)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTrackingNumber', array($trackingNumber));

        return parent::setTrackingNumber($trackingNumber);
    }

    /**
     * {@inheritDoc}
     */
    public function getTrackingNumber()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTrackingNumber', array());

        return parent::getTrackingNumber();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateAdd($dateAdd)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateAdd', array($dateAdd));

        return parent::setDateAdd($dateAdd);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateAdd()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateAdd', array());

        return parent::getDateAdd();
    }

}