<?php

namespace Proxies\__CG__\alex\yamBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class TrSupplyOrder extends \alex\yamBundle\Entity\TrSupplyOrder implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'alex\\yamBundle\\Entity\\TrSupplyOrder' . "\0" . 'idSupplyOrder', '' . "\0" . 'alex\\yamBundle\\Entity\\TrSupplyOrder' . "\0" . 'idSupplier', '' . "\0" . 'alex\\yamBundle\\Entity\\TrSupplyOrder' . "\0" . 'supplierName', '' . "\0" . 'alex\\yamBundle\\Entity\\TrSupplyOrder' . "\0" . 'idLang', '' . "\0" . 'alex\\yamBundle\\Entity\\TrSupplyOrder' . "\0" . 'idWarehouse', '' . "\0" . 'alex\\yamBundle\\Entity\\TrSupplyOrder' . "\0" . 'idSupplyOrderState', '' . "\0" . 'alex\\yamBundle\\Entity\\TrSupplyOrder' . "\0" . 'idCurrency', '' . "\0" . 'alex\\yamBundle\\Entity\\TrSupplyOrder' . "\0" . 'idRefCurrency', '' . "\0" . 'alex\\yamBundle\\Entity\\TrSupplyOrder' . "\0" . 'reference', '' . "\0" . 'alex\\yamBundle\\Entity\\TrSupplyOrder' . "\0" . 'dateAdd', '' . "\0" . 'alex\\yamBundle\\Entity\\TrSupplyOrder' . "\0" . 'dateUpd', '' . "\0" . 'alex\\yamBundle\\Entity\\TrSupplyOrder' . "\0" . 'dateDeliveryExpected', '' . "\0" . 'alex\\yamBundle\\Entity\\TrSupplyOrder' . "\0" . 'totalTe', '' . "\0" . 'alex\\yamBundle\\Entity\\TrSupplyOrder' . "\0" . 'totalWithDiscountTe', '' . "\0" . 'alex\\yamBundle\\Entity\\TrSupplyOrder' . "\0" . 'totalTax', '' . "\0" . 'alex\\yamBundle\\Entity\\TrSupplyOrder' . "\0" . 'totalTi', '' . "\0" . 'alex\\yamBundle\\Entity\\TrSupplyOrder' . "\0" . 'discountRate', '' . "\0" . 'alex\\yamBundle\\Entity\\TrSupplyOrder' . "\0" . 'discountValueTe', '' . "\0" . 'alex\\yamBundle\\Entity\\TrSupplyOrder' . "\0" . 'isTemplate');
        }

        return array('__isInitialized__', '' . "\0" . 'alex\\yamBundle\\Entity\\TrSupplyOrder' . "\0" . 'idSupplyOrder', '' . "\0" . 'alex\\yamBundle\\Entity\\TrSupplyOrder' . "\0" . 'idSupplier', '' . "\0" . 'alex\\yamBundle\\Entity\\TrSupplyOrder' . "\0" . 'supplierName', '' . "\0" . 'alex\\yamBundle\\Entity\\TrSupplyOrder' . "\0" . 'idLang', '' . "\0" . 'alex\\yamBundle\\Entity\\TrSupplyOrder' . "\0" . 'idWarehouse', '' . "\0" . 'alex\\yamBundle\\Entity\\TrSupplyOrder' . "\0" . 'idSupplyOrderState', '' . "\0" . 'alex\\yamBundle\\Entity\\TrSupplyOrder' . "\0" . 'idCurrency', '' . "\0" . 'alex\\yamBundle\\Entity\\TrSupplyOrder' . "\0" . 'idRefCurrency', '' . "\0" . 'alex\\yamBundle\\Entity\\TrSupplyOrder' . "\0" . 'reference', '' . "\0" . 'alex\\yamBundle\\Entity\\TrSupplyOrder' . "\0" . 'dateAdd', '' . "\0" . 'alex\\yamBundle\\Entity\\TrSupplyOrder' . "\0" . 'dateUpd', '' . "\0" . 'alex\\yamBundle\\Entity\\TrSupplyOrder' . "\0" . 'dateDeliveryExpected', '' . "\0" . 'alex\\yamBundle\\Entity\\TrSupplyOrder' . "\0" . 'totalTe', '' . "\0" . 'alex\\yamBundle\\Entity\\TrSupplyOrder' . "\0" . 'totalWithDiscountTe', '' . "\0" . 'alex\\yamBundle\\Entity\\TrSupplyOrder' . "\0" . 'totalTax', '' . "\0" . 'alex\\yamBundle\\Entity\\TrSupplyOrder' . "\0" . 'totalTi', '' . "\0" . 'alex\\yamBundle\\Entity\\TrSupplyOrder' . "\0" . 'discountRate', '' . "\0" . 'alex\\yamBundle\\Entity\\TrSupplyOrder' . "\0" . 'discountValueTe', '' . "\0" . 'alex\\yamBundle\\Entity\\TrSupplyOrder' . "\0" . 'isTemplate');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (TrSupplyOrder $proxy) {
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
    public function getIdSupplyOrder()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIdSupplyOrder();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdSupplyOrder', array());

        return parent::getIdSupplyOrder();
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
    public function setSupplierName($supplierName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSupplierName', array($supplierName));

        return parent::setSupplierName($supplierName);
    }

    /**
     * {@inheritDoc}
     */
    public function getSupplierName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSupplierName', array());

        return parent::getSupplierName();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdLang($idLang)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdLang', array($idLang));

        return parent::setIdLang($idLang);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdLang()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdLang', array());

        return parent::getIdLang();
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
    public function setIdSupplyOrderState($idSupplyOrderState)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdSupplyOrderState', array($idSupplyOrderState));

        return parent::setIdSupplyOrderState($idSupplyOrderState);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdSupplyOrderState()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdSupplyOrderState', array());

        return parent::getIdSupplyOrderState();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdCurrency($idCurrency)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdCurrency', array($idCurrency));

        return parent::setIdCurrency($idCurrency);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdCurrency()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdCurrency', array());

        return parent::getIdCurrency();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdRefCurrency($idRefCurrency)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdRefCurrency', array($idRefCurrency));

        return parent::setIdRefCurrency($idRefCurrency);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdRefCurrency()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdRefCurrency', array());

        return parent::getIdRefCurrency();
    }

    /**
     * {@inheritDoc}
     */
    public function setReference($reference)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReference', array($reference));

        return parent::setReference($reference);
    }

    /**
     * {@inheritDoc}
     */
    public function getReference()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReference', array());

        return parent::getReference();
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
    public function setDateDeliveryExpected($dateDeliveryExpected)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateDeliveryExpected', array($dateDeliveryExpected));

        return parent::setDateDeliveryExpected($dateDeliveryExpected);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateDeliveryExpected()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateDeliveryExpected', array());

        return parent::getDateDeliveryExpected();
    }

    /**
     * {@inheritDoc}
     */
    public function setTotalTe($totalTe)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTotalTe', array($totalTe));

        return parent::setTotalTe($totalTe);
    }

    /**
     * {@inheritDoc}
     */
    public function getTotalTe()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTotalTe', array());

        return parent::getTotalTe();
    }

    /**
     * {@inheritDoc}
     */
    public function setTotalWithDiscountTe($totalWithDiscountTe)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTotalWithDiscountTe', array($totalWithDiscountTe));

        return parent::setTotalWithDiscountTe($totalWithDiscountTe);
    }

    /**
     * {@inheritDoc}
     */
    public function getTotalWithDiscountTe()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTotalWithDiscountTe', array());

        return parent::getTotalWithDiscountTe();
    }

    /**
     * {@inheritDoc}
     */
    public function setTotalTax($totalTax)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTotalTax', array($totalTax));

        return parent::setTotalTax($totalTax);
    }

    /**
     * {@inheritDoc}
     */
    public function getTotalTax()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTotalTax', array());

        return parent::getTotalTax();
    }

    /**
     * {@inheritDoc}
     */
    public function setTotalTi($totalTi)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTotalTi', array($totalTi));

        return parent::setTotalTi($totalTi);
    }

    /**
     * {@inheritDoc}
     */
    public function getTotalTi()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTotalTi', array());

        return parent::getTotalTi();
    }

    /**
     * {@inheritDoc}
     */
    public function setDiscountRate($discountRate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDiscountRate', array($discountRate));

        return parent::setDiscountRate($discountRate);
    }

    /**
     * {@inheritDoc}
     */
    public function getDiscountRate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDiscountRate', array());

        return parent::getDiscountRate();
    }

    /**
     * {@inheritDoc}
     */
    public function setDiscountValueTe($discountValueTe)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDiscountValueTe', array($discountValueTe));

        return parent::setDiscountValueTe($discountValueTe);
    }

    /**
     * {@inheritDoc}
     */
    public function getDiscountValueTe()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDiscountValueTe', array());

        return parent::getDiscountValueTe();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsTemplate($isTemplate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsTemplate', array($isTemplate));

        return parent::setIsTemplate($isTemplate);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsTemplate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsTemplate', array());

        return parent::getIsTemplate();
    }

}
