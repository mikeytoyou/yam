<?php

namespace Proxies\__CG__\alex\yamBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class TrTheme extends \alex\yamBundle\Entity\TrTheme implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'alex\\yamBundle\\Entity\\TrTheme' . "\0" . 'idTheme', '' . "\0" . 'alex\\yamBundle\\Entity\\TrTheme' . "\0" . 'name', '' . "\0" . 'alex\\yamBundle\\Entity\\TrTheme' . "\0" . 'directory', '' . "\0" . 'alex\\yamBundle\\Entity\\TrTheme' . "\0" . 'responsive', '' . "\0" . 'alex\\yamBundle\\Entity\\TrTheme' . "\0" . 'defaultLeftColumn', '' . "\0" . 'alex\\yamBundle\\Entity\\TrTheme' . "\0" . 'defaultRightColumn', '' . "\0" . 'alex\\yamBundle\\Entity\\TrTheme' . "\0" . 'productPerPage');
        }

        return array('__isInitialized__', '' . "\0" . 'alex\\yamBundle\\Entity\\TrTheme' . "\0" . 'idTheme', '' . "\0" . 'alex\\yamBundle\\Entity\\TrTheme' . "\0" . 'name', '' . "\0" . 'alex\\yamBundle\\Entity\\TrTheme' . "\0" . 'directory', '' . "\0" . 'alex\\yamBundle\\Entity\\TrTheme' . "\0" . 'responsive', '' . "\0" . 'alex\\yamBundle\\Entity\\TrTheme' . "\0" . 'defaultLeftColumn', '' . "\0" . 'alex\\yamBundle\\Entity\\TrTheme' . "\0" . 'defaultRightColumn', '' . "\0" . 'alex\\yamBundle\\Entity\\TrTheme' . "\0" . 'productPerPage');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (TrTheme $proxy) {
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
    public function getIdTheme()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIdTheme();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdTheme', array());

        return parent::getIdTheme();
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
    public function setDirectory($directory)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDirectory', array($directory));

        return parent::setDirectory($directory);
    }

    /**
     * {@inheritDoc}
     */
    public function getDirectory()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDirectory', array());

        return parent::getDirectory();
    }

    /**
     * {@inheritDoc}
     */
    public function setResponsive($responsive)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setResponsive', array($responsive));

        return parent::setResponsive($responsive);
    }

    /**
     * {@inheritDoc}
     */
    public function getResponsive()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getResponsive', array());

        return parent::getResponsive();
    }

    /**
     * {@inheritDoc}
     */
    public function setDefaultLeftColumn($defaultLeftColumn)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDefaultLeftColumn', array($defaultLeftColumn));

        return parent::setDefaultLeftColumn($defaultLeftColumn);
    }

    /**
     * {@inheritDoc}
     */
    public function getDefaultLeftColumn()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDefaultLeftColumn', array());

        return parent::getDefaultLeftColumn();
    }

    /**
     * {@inheritDoc}
     */
    public function setDefaultRightColumn($defaultRightColumn)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDefaultRightColumn', array($defaultRightColumn));

        return parent::setDefaultRightColumn($defaultRightColumn);
    }

    /**
     * {@inheritDoc}
     */
    public function getDefaultRightColumn()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDefaultRightColumn', array());

        return parent::getDefaultRightColumn();
    }

    /**
     * {@inheritDoc}
     */
    public function setProductPerPage($productPerPage)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProductPerPage', array($productPerPage));

        return parent::setProductPerPage($productPerPage);
    }

    /**
     * {@inheritDoc}
     */
    public function getProductPerPage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProductPerPage', array());

        return parent::getProductPerPage();
    }

}
