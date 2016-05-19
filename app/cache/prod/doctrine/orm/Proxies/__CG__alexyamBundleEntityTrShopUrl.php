<?php

namespace Proxies\__CG__\alex\yamBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class TrShopUrl extends \alex\yamBundle\Entity\TrShopUrl implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'alex\\yamBundle\\Entity\\TrShopUrl' . "\0" . 'idShopUrl', '' . "\0" . 'alex\\yamBundle\\Entity\\TrShopUrl' . "\0" . 'idShop', '' . "\0" . 'alex\\yamBundle\\Entity\\TrShopUrl' . "\0" . 'domain', '' . "\0" . 'alex\\yamBundle\\Entity\\TrShopUrl' . "\0" . 'domainSsl', '' . "\0" . 'alex\\yamBundle\\Entity\\TrShopUrl' . "\0" . 'physicalUri', '' . "\0" . 'alex\\yamBundle\\Entity\\TrShopUrl' . "\0" . 'virtualUri', '' . "\0" . 'alex\\yamBundle\\Entity\\TrShopUrl' . "\0" . 'main', '' . "\0" . 'alex\\yamBundle\\Entity\\TrShopUrl' . "\0" . 'active');
        }

        return array('__isInitialized__', '' . "\0" . 'alex\\yamBundle\\Entity\\TrShopUrl' . "\0" . 'idShopUrl', '' . "\0" . 'alex\\yamBundle\\Entity\\TrShopUrl' . "\0" . 'idShop', '' . "\0" . 'alex\\yamBundle\\Entity\\TrShopUrl' . "\0" . 'domain', '' . "\0" . 'alex\\yamBundle\\Entity\\TrShopUrl' . "\0" . 'domainSsl', '' . "\0" . 'alex\\yamBundle\\Entity\\TrShopUrl' . "\0" . 'physicalUri', '' . "\0" . 'alex\\yamBundle\\Entity\\TrShopUrl' . "\0" . 'virtualUri', '' . "\0" . 'alex\\yamBundle\\Entity\\TrShopUrl' . "\0" . 'main', '' . "\0" . 'alex\\yamBundle\\Entity\\TrShopUrl' . "\0" . 'active');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (TrShopUrl $proxy) {
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
    public function getIdShopUrl()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIdShopUrl();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdShopUrl', array());

        return parent::getIdShopUrl();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdShop($idShop)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdShop', array($idShop));

        return parent::setIdShop($idShop);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdShop()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdShop', array());

        return parent::getIdShop();
    }

    /**
     * {@inheritDoc}
     */
    public function setDomain($domain)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDomain', array($domain));

        return parent::setDomain($domain);
    }

    /**
     * {@inheritDoc}
     */
    public function getDomain()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDomain', array());

        return parent::getDomain();
    }

    /**
     * {@inheritDoc}
     */
    public function setDomainSsl($domainSsl)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDomainSsl', array($domainSsl));

        return parent::setDomainSsl($domainSsl);
    }

    /**
     * {@inheritDoc}
     */
    public function getDomainSsl()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDomainSsl', array());

        return parent::getDomainSsl();
    }

    /**
     * {@inheritDoc}
     */
    public function setPhysicalUri($physicalUri)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPhysicalUri', array($physicalUri));

        return parent::setPhysicalUri($physicalUri);
    }

    /**
     * {@inheritDoc}
     */
    public function getPhysicalUri()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPhysicalUri', array());

        return parent::getPhysicalUri();
    }

    /**
     * {@inheritDoc}
     */
    public function setVirtualUri($virtualUri)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVirtualUri', array($virtualUri));

        return parent::setVirtualUri($virtualUri);
    }

    /**
     * {@inheritDoc}
     */
    public function getVirtualUri()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVirtualUri', array());

        return parent::getVirtualUri();
    }

    /**
     * {@inheritDoc}
     */
    public function setMain($main)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMain', array($main));

        return parent::setMain($main);
    }

    /**
     * {@inheritDoc}
     */
    public function getMain()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMain', array());

        return parent::getMain();
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