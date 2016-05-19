<?php

namespace Proxies\__CG__\alex\yamBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class TrProductDownload extends \alex\yamBundle\Entity\TrProductDownload implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProductDownload' . "\0" . 'idProductDownload', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProductDownload' . "\0" . 'idProduct', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProductDownload' . "\0" . 'displayFilename', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProductDownload' . "\0" . 'filename', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProductDownload' . "\0" . 'dateAdd', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProductDownload' . "\0" . 'dateExpiration', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProductDownload' . "\0" . 'nbDaysAccessible', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProductDownload' . "\0" . 'nbDownloadable', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProductDownload' . "\0" . 'active', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProductDownload' . "\0" . 'isShareable');
        }

        return array('__isInitialized__', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProductDownload' . "\0" . 'idProductDownload', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProductDownload' . "\0" . 'idProduct', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProductDownload' . "\0" . 'displayFilename', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProductDownload' . "\0" . 'filename', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProductDownload' . "\0" . 'dateAdd', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProductDownload' . "\0" . 'dateExpiration', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProductDownload' . "\0" . 'nbDaysAccessible', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProductDownload' . "\0" . 'nbDownloadable', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProductDownload' . "\0" . 'active', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProductDownload' . "\0" . 'isShareable');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (TrProductDownload $proxy) {
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
    public function getIdProductDownload()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIdProductDownload();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdProductDownload', array());

        return parent::getIdProductDownload();
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
    public function setDisplayFilename($displayFilename)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDisplayFilename', array($displayFilename));

        return parent::setDisplayFilename($displayFilename);
    }

    /**
     * {@inheritDoc}
     */
    public function getDisplayFilename()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDisplayFilename', array());

        return parent::getDisplayFilename();
    }

    /**
     * {@inheritDoc}
     */
    public function setFilename($filename)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFilename', array($filename));

        return parent::setFilename($filename);
    }

    /**
     * {@inheritDoc}
     */
    public function getFilename()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFilename', array());

        return parent::getFilename();
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

    /**
     * {@inheritDoc}
     */
    public function setDateExpiration($dateExpiration)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateExpiration', array($dateExpiration));

        return parent::setDateExpiration($dateExpiration);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateExpiration()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateExpiration', array());

        return parent::getDateExpiration();
    }

    /**
     * {@inheritDoc}
     */
    public function setNbDaysAccessible($nbDaysAccessible)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNbDaysAccessible', array($nbDaysAccessible));

        return parent::setNbDaysAccessible($nbDaysAccessible);
    }

    /**
     * {@inheritDoc}
     */
    public function getNbDaysAccessible()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNbDaysAccessible', array());

        return parent::getNbDaysAccessible();
    }

    /**
     * {@inheritDoc}
     */
    public function setNbDownloadable($nbDownloadable)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNbDownloadable', array($nbDownloadable));

        return parent::setNbDownloadable($nbDownloadable);
    }

    /**
     * {@inheritDoc}
     */
    public function getNbDownloadable()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNbDownloadable', array());

        return parent::getNbDownloadable();
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
    public function setIsShareable($isShareable)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsShareable', array($isShareable));

        return parent::setIsShareable($isShareable);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsShareable()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsShareable', array());

        return parent::getIsShareable();
    }

}
