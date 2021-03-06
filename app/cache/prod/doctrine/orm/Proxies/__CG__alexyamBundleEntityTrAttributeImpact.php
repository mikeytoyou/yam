<?php

namespace Proxies\__CG__\alex\yamBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class TrAttributeImpact extends \alex\yamBundle\Entity\TrAttributeImpact implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'alex\\yamBundle\\Entity\\TrAttributeImpact' . "\0" . 'idAttributeImpact', '' . "\0" . 'alex\\yamBundle\\Entity\\TrAttributeImpact' . "\0" . 'idProduct', '' . "\0" . 'alex\\yamBundle\\Entity\\TrAttributeImpact' . "\0" . 'idAttribute', '' . "\0" . 'alex\\yamBundle\\Entity\\TrAttributeImpact' . "\0" . 'weight', '' . "\0" . 'alex\\yamBundle\\Entity\\TrAttributeImpact' . "\0" . 'price');
        }

        return array('__isInitialized__', '' . "\0" . 'alex\\yamBundle\\Entity\\TrAttributeImpact' . "\0" . 'idAttributeImpact', '' . "\0" . 'alex\\yamBundle\\Entity\\TrAttributeImpact' . "\0" . 'idProduct', '' . "\0" . 'alex\\yamBundle\\Entity\\TrAttributeImpact' . "\0" . 'idAttribute', '' . "\0" . 'alex\\yamBundle\\Entity\\TrAttributeImpact' . "\0" . 'weight', '' . "\0" . 'alex\\yamBundle\\Entity\\TrAttributeImpact' . "\0" . 'price');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (TrAttributeImpact $proxy) {
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
    public function getIdAttributeImpact()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIdAttributeImpact();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdAttributeImpact', array());

        return parent::getIdAttributeImpact();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdProduct($idProduct)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdProduct', array($idProduct));

        return parent::setIdProduct($idProduct);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdProduct()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdProduct', array());

        return parent::getIdProduct();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdAttribute($idAttribute)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdAttribute', array($idAttribute));

        return parent::setIdAttribute($idAttribute);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdAttribute()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdAttribute', array());

        return parent::getIdAttribute();
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
    public function setPrice($price)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrice', array($price));

        return parent::setPrice($price);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrice()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrice', array());

        return parent::getPrice();
    }

}
