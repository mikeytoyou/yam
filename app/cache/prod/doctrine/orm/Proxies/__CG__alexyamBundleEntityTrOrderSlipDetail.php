<?php

namespace Proxies\__CG__\alex\yamBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class TrOrderSlipDetail extends \alex\yamBundle\Entity\TrOrderSlipDetail implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'alex\\yamBundle\\Entity\\TrOrderSlipDetail' . "\0" . 'idOrderSlip', '' . "\0" . 'alex\\yamBundle\\Entity\\TrOrderSlipDetail' . "\0" . 'idOrderDetail', '' . "\0" . 'alex\\yamBundle\\Entity\\TrOrderSlipDetail' . "\0" . 'productQuantity', '' . "\0" . 'alex\\yamBundle\\Entity\\TrOrderSlipDetail' . "\0" . 'amountTaxExcl', '' . "\0" . 'alex\\yamBundle\\Entity\\TrOrderSlipDetail' . "\0" . 'amountTaxIncl');
        }

        return array('__isInitialized__', '' . "\0" . 'alex\\yamBundle\\Entity\\TrOrderSlipDetail' . "\0" . 'idOrderSlip', '' . "\0" . 'alex\\yamBundle\\Entity\\TrOrderSlipDetail' . "\0" . 'idOrderDetail', '' . "\0" . 'alex\\yamBundle\\Entity\\TrOrderSlipDetail' . "\0" . 'productQuantity', '' . "\0" . 'alex\\yamBundle\\Entity\\TrOrderSlipDetail' . "\0" . 'amountTaxExcl', '' . "\0" . 'alex\\yamBundle\\Entity\\TrOrderSlipDetail' . "\0" . 'amountTaxIncl');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (TrOrderSlipDetail $proxy) {
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
    public function setIdOrderSlip($idOrderSlip)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdOrderSlip', array($idOrderSlip));

        return parent::setIdOrderSlip($idOrderSlip);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdOrderSlip()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIdOrderSlip();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdOrderSlip', array());

        return parent::getIdOrderSlip();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdOrderDetail($idOrderDetail)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdOrderDetail', array($idOrderDetail));

        return parent::setIdOrderDetail($idOrderDetail);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdOrderDetail()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIdOrderDetail();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdOrderDetail', array());

        return parent::getIdOrderDetail();
    }

    /**
     * {@inheritDoc}
     */
    public function setProductQuantity($productQuantity)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProductQuantity', array($productQuantity));

        return parent::setProductQuantity($productQuantity);
    }

    /**
     * {@inheritDoc}
     */
    public function getProductQuantity()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProductQuantity', array());

        return parent::getProductQuantity();
    }

    /**
     * {@inheritDoc}
     */
    public function setAmountTaxExcl($amountTaxExcl)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAmountTaxExcl', array($amountTaxExcl));

        return parent::setAmountTaxExcl($amountTaxExcl);
    }

    /**
     * {@inheritDoc}
     */
    public function getAmountTaxExcl()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAmountTaxExcl', array());

        return parent::getAmountTaxExcl();
    }

    /**
     * {@inheritDoc}
     */
    public function setAmountTaxIncl($amountTaxIncl)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAmountTaxIncl', array($amountTaxIncl));

        return parent::setAmountTaxIncl($amountTaxIncl);
    }

    /**
     * {@inheritDoc}
     */
    public function getAmountTaxIncl()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAmountTaxIncl', array());

        return parent::getAmountTaxIncl();
    }

}
