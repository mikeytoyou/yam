<?php

namespace Proxies\__CG__\alex\yamBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class TrAddress extends \alex\yamBundle\Entity\TrAddress implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'alex\\yamBundle\\Entity\\TrAddress' . "\0" . 'idAddress', '' . "\0" . 'alex\\yamBundle\\Entity\\TrAddress' . "\0" . 'idCountry', '' . "\0" . 'alex\\yamBundle\\Entity\\TrAddress' . "\0" . 'idState', '' . "\0" . 'alex\\yamBundle\\Entity\\TrAddress' . "\0" . 'idCustomer', '' . "\0" . 'alex\\yamBundle\\Entity\\TrAddress' . "\0" . 'idManufacturer', '' . "\0" . 'alex\\yamBundle\\Entity\\TrAddress' . "\0" . 'idSupplier', '' . "\0" . 'alex\\yamBundle\\Entity\\TrAddress' . "\0" . 'idWarehouse', '' . "\0" . 'alex\\yamBundle\\Entity\\TrAddress' . "\0" . 'alias', '' . "\0" . 'alex\\yamBundle\\Entity\\TrAddress' . "\0" . 'company', '' . "\0" . 'alex\\yamBundle\\Entity\\TrAddress' . "\0" . 'lastname', '' . "\0" . 'alex\\yamBundle\\Entity\\TrAddress' . "\0" . 'firstname', '' . "\0" . 'alex\\yamBundle\\Entity\\TrAddress' . "\0" . 'address1', '' . "\0" . 'alex\\yamBundle\\Entity\\TrAddress' . "\0" . 'address2', '' . "\0" . 'alex\\yamBundle\\Entity\\TrAddress' . "\0" . 'postcode', '' . "\0" . 'alex\\yamBundle\\Entity\\TrAddress' . "\0" . 'city', '' . "\0" . 'alex\\yamBundle\\Entity\\TrAddress' . "\0" . 'other', '' . "\0" . 'alex\\yamBundle\\Entity\\TrAddress' . "\0" . 'phone', '' . "\0" . 'alex\\yamBundle\\Entity\\TrAddress' . "\0" . 'phoneMobile', '' . "\0" . 'alex\\yamBundle\\Entity\\TrAddress' . "\0" . 'vatNumber', '' . "\0" . 'alex\\yamBundle\\Entity\\TrAddress' . "\0" . 'dni', '' . "\0" . 'alex\\yamBundle\\Entity\\TrAddress' . "\0" . 'dateAdd', '' . "\0" . 'alex\\yamBundle\\Entity\\TrAddress' . "\0" . 'dateUpd', '' . "\0" . 'alex\\yamBundle\\Entity\\TrAddress' . "\0" . 'active', '' . "\0" . 'alex\\yamBundle\\Entity\\TrAddress' . "\0" . 'deleted');
        }

        return array('__isInitialized__', '' . "\0" . 'alex\\yamBundle\\Entity\\TrAddress' . "\0" . 'idAddress', '' . "\0" . 'alex\\yamBundle\\Entity\\TrAddress' . "\0" . 'idCountry', '' . "\0" . 'alex\\yamBundle\\Entity\\TrAddress' . "\0" . 'idState', '' . "\0" . 'alex\\yamBundle\\Entity\\TrAddress' . "\0" . 'idCustomer', '' . "\0" . 'alex\\yamBundle\\Entity\\TrAddress' . "\0" . 'idManufacturer', '' . "\0" . 'alex\\yamBundle\\Entity\\TrAddress' . "\0" . 'idSupplier', '' . "\0" . 'alex\\yamBundle\\Entity\\TrAddress' . "\0" . 'idWarehouse', '' . "\0" . 'alex\\yamBundle\\Entity\\TrAddress' . "\0" . 'alias', '' . "\0" . 'alex\\yamBundle\\Entity\\TrAddress' . "\0" . 'company', '' . "\0" . 'alex\\yamBundle\\Entity\\TrAddress' . "\0" . 'lastname', '' . "\0" . 'alex\\yamBundle\\Entity\\TrAddress' . "\0" . 'firstname', '' . "\0" . 'alex\\yamBundle\\Entity\\TrAddress' . "\0" . 'address1', '' . "\0" . 'alex\\yamBundle\\Entity\\TrAddress' . "\0" . 'address2', '' . "\0" . 'alex\\yamBundle\\Entity\\TrAddress' . "\0" . 'postcode', '' . "\0" . 'alex\\yamBundle\\Entity\\TrAddress' . "\0" . 'city', '' . "\0" . 'alex\\yamBundle\\Entity\\TrAddress' . "\0" . 'other', '' . "\0" . 'alex\\yamBundle\\Entity\\TrAddress' . "\0" . 'phone', '' . "\0" . 'alex\\yamBundle\\Entity\\TrAddress' . "\0" . 'phoneMobile', '' . "\0" . 'alex\\yamBundle\\Entity\\TrAddress' . "\0" . 'vatNumber', '' . "\0" . 'alex\\yamBundle\\Entity\\TrAddress' . "\0" . 'dni', '' . "\0" . 'alex\\yamBundle\\Entity\\TrAddress' . "\0" . 'dateAdd', '' . "\0" . 'alex\\yamBundle\\Entity\\TrAddress' . "\0" . 'dateUpd', '' . "\0" . 'alex\\yamBundle\\Entity\\TrAddress' . "\0" . 'active', '' . "\0" . 'alex\\yamBundle\\Entity\\TrAddress' . "\0" . 'deleted');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (TrAddress $proxy) {
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
    public function getIdAddress()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIdAddress();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdAddress', array());

        return parent::getIdAddress();
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
    public function setIdState($idState)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdState', array($idState));

        return parent::setIdState($idState);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdState()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdState', array());

        return parent::getIdState();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdCustomer($idCustomer)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdCustomer', array($idCustomer));

        return parent::setIdCustomer($idCustomer);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdCustomer()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdCustomer', array());

        return parent::getIdCustomer();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdManufacturer($idManufacturer)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdManufacturer', array($idManufacturer));

        return parent::setIdManufacturer($idManufacturer);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdManufacturer()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdManufacturer', array());

        return parent::getIdManufacturer();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdSupplier($idSupplier)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdSupplier', array($idSupplier));

        return parent::setIdSupplier($idSupplier);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdSupplier()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdSupplier', array());

        return parent::getIdSupplier();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdWarehouse($idWarehouse)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdWarehouse', array($idWarehouse));

        return parent::setIdWarehouse($idWarehouse);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdWarehouse()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdWarehouse', array());

        return parent::getIdWarehouse();
    }

    /**
     * {@inheritDoc}
     */
    public function setAlias($alias)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAlias', array($alias));

        return parent::setAlias($alias);
    }

    /**
     * {@inheritDoc}
     */
    public function getAlias()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAlias', array());

        return parent::getAlias();
    }

    /**
     * {@inheritDoc}
     */
    public function setCompany($company)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCompany', array($company));

        return parent::setCompany($company);
    }

    /**
     * {@inheritDoc}
     */
    public function getCompany()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCompany', array());

        return parent::getCompany();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastname($lastname)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastname', array($lastname));

        return parent::setLastname($lastname);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastname()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastname', array());

        return parent::getLastname();
    }

    /**
     * {@inheritDoc}
     */
    public function setFirstname($firstname)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFirstname', array($firstname));

        return parent::setFirstname($firstname);
    }

    /**
     * {@inheritDoc}
     */
    public function getFirstname()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFirstname', array());

        return parent::getFirstname();
    }

    /**
     * {@inheritDoc}
     */
    public function setAddress1($address1)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAddress1', array($address1));

        return parent::setAddress1($address1);
    }

    /**
     * {@inheritDoc}
     */
    public function getAddress1()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAddress1', array());

        return parent::getAddress1();
    }

    /**
     * {@inheritDoc}
     */
    public function setAddress2($address2)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAddress2', array($address2));

        return parent::setAddress2($address2);
    }

    /**
     * {@inheritDoc}
     */
    public function getAddress2()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAddress2', array());

        return parent::getAddress2();
    }

    /**
     * {@inheritDoc}
     */
    public function setPostcode($postcode)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPostcode', array($postcode));

        return parent::setPostcode($postcode);
    }

    /**
     * {@inheritDoc}
     */
    public function getPostcode()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPostcode', array());

        return parent::getPostcode();
    }

    /**
     * {@inheritDoc}
     */
    public function setCity($city)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCity', array($city));

        return parent::setCity($city);
    }

    /**
     * {@inheritDoc}
     */
    public function getCity()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCity', array());

        return parent::getCity();
    }

    /**
     * {@inheritDoc}
     */
    public function setOther($other)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOther', array($other));

        return parent::setOther($other);
    }

    /**
     * {@inheritDoc}
     */
    public function getOther()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOther', array());

        return parent::getOther();
    }

    /**
     * {@inheritDoc}
     */
    public function setPhone($phone)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPhone', array($phone));

        return parent::setPhone($phone);
    }

    /**
     * {@inheritDoc}
     */
    public function getPhone()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPhone', array());

        return parent::getPhone();
    }

    /**
     * {@inheritDoc}
     */
    public function setPhoneMobile($phoneMobile)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPhoneMobile', array($phoneMobile));

        return parent::setPhoneMobile($phoneMobile);
    }

    /**
     * {@inheritDoc}
     */
    public function getPhoneMobile()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPhoneMobile', array());

        return parent::getPhoneMobile();
    }

    /**
     * {@inheritDoc}
     */
    public function setVatNumber($vatNumber)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVatNumber', array($vatNumber));

        return parent::setVatNumber($vatNumber);
    }

    /**
     * {@inheritDoc}
     */
    public function getVatNumber()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVatNumber', array());

        return parent::getVatNumber();
    }

    /**
     * {@inheritDoc}
     */
    public function setDni($dni)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDni', array($dni));

        return parent::setDni($dni);
    }

    /**
     * {@inheritDoc}
     */
    public function getDni()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDni', array());

        return parent::getDni();
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
    public function setDateUpd($dateUpd)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateUpd', array($dateUpd));

        return parent::setDateUpd($dateUpd);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateUpd()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateUpd', array());

        return parent::getDateUpd();
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

}