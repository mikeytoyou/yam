<?php

namespace Proxies\__CG__\alex\yamBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class TrProduct extends \alex\yamBundle\Entity\TrProduct implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProduct' . "\0" . 'idProduct', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProduct' . "\0" . 'idSupplier', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProduct' . "\0" . 'idManufacturer', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProduct' . "\0" . 'idCategoryDefault', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProduct' . "\0" . 'idShopDefault', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProduct' . "\0" . 'idTaxRulesGroup', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProduct' . "\0" . 'onSale', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProduct' . "\0" . 'onlineOnly', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProduct' . "\0" . 'ean13', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProduct' . "\0" . 'upc', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProduct' . "\0" . 'ecotax', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProduct' . "\0" . 'quantity', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProduct' . "\0" . 'minimalQuantity', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProduct' . "\0" . 'price', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProduct' . "\0" . 'wholesalePrice', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProduct' . "\0" . 'unity', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProduct' . "\0" . 'unitPriceRatio', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProduct' . "\0" . 'additionalShippingCost', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProduct' . "\0" . 'reference', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProduct' . "\0" . 'supplierReference', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProduct' . "\0" . 'location', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProduct' . "\0" . 'width', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProduct' . "\0" . 'height', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProduct' . "\0" . 'depth', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProduct' . "\0" . 'weight', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProduct' . "\0" . 'outOfStock', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProduct' . "\0" . 'quantityDiscount', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProduct' . "\0" . 'customizable', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProduct' . "\0" . 'uploadableFiles', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProduct' . "\0" . 'textFields', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProduct' . "\0" . 'active', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProduct' . "\0" . 'redirectType', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProduct' . "\0" . 'idProductRedirected', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProduct' . "\0" . 'availableForOrder', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProduct' . "\0" . 'availableDate', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProduct' . "\0" . 'condition', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProduct' . "\0" . 'showPrice', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProduct' . "\0" . 'indexed', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProduct' . "\0" . 'visibility', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProduct' . "\0" . 'cacheIsPack', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProduct' . "\0" . 'cacheHasAttachments', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProduct' . "\0" . 'isVirtual', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProduct' . "\0" . 'cacheDefaultAttribute', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProduct' . "\0" . 'dateAdd', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProduct' . "\0" . 'dateUpd', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProduct' . "\0" . 'advancedStockManagement');
        }

        return array('__isInitialized__', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProduct' . "\0" . 'idProduct', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProduct' . "\0" . 'idSupplier', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProduct' . "\0" . 'idManufacturer', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProduct' . "\0" . 'idCategoryDefault', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProduct' . "\0" . 'idShopDefault', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProduct' . "\0" . 'idTaxRulesGroup', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProduct' . "\0" . 'onSale', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProduct' . "\0" . 'onlineOnly', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProduct' . "\0" . 'ean13', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProduct' . "\0" . 'upc', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProduct' . "\0" . 'ecotax', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProduct' . "\0" . 'quantity', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProduct' . "\0" . 'minimalQuantity', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProduct' . "\0" . 'price', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProduct' . "\0" . 'wholesalePrice', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProduct' . "\0" . 'unity', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProduct' . "\0" . 'unitPriceRatio', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProduct' . "\0" . 'additionalShippingCost', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProduct' . "\0" . 'reference', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProduct' . "\0" . 'supplierReference', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProduct' . "\0" . 'location', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProduct' . "\0" . 'width', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProduct' . "\0" . 'height', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProduct' . "\0" . 'depth', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProduct' . "\0" . 'weight', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProduct' . "\0" . 'outOfStock', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProduct' . "\0" . 'quantityDiscount', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProduct' . "\0" . 'customizable', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProduct' . "\0" . 'uploadableFiles', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProduct' . "\0" . 'textFields', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProduct' . "\0" . 'active', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProduct' . "\0" . 'redirectType', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProduct' . "\0" . 'idProductRedirected', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProduct' . "\0" . 'availableForOrder', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProduct' . "\0" . 'availableDate', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProduct' . "\0" . 'condition', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProduct' . "\0" . 'showPrice', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProduct' . "\0" . 'indexed', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProduct' . "\0" . 'visibility', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProduct' . "\0" . 'cacheIsPack', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProduct' . "\0" . 'cacheHasAttachments', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProduct' . "\0" . 'isVirtual', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProduct' . "\0" . 'cacheDefaultAttribute', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProduct' . "\0" . 'dateAdd', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProduct' . "\0" . 'dateUpd', '' . "\0" . 'alex\\yamBundle\\Entity\\TrProduct' . "\0" . 'advancedStockManagement');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (TrProduct $proxy) {
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
    public function getIdProduct()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIdProduct();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdProduct', array());

        return parent::getIdProduct();
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
    public function setIdCategoryDefault($idCategoryDefault)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdCategoryDefault', array($idCategoryDefault));

        return parent::setIdCategoryDefault($idCategoryDefault);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdCategoryDefault()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdCategoryDefault', array());

        return parent::getIdCategoryDefault();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdShopDefault($idShopDefault)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdShopDefault', array($idShopDefault));

        return parent::setIdShopDefault($idShopDefault);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdShopDefault()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdShopDefault', array());

        return parent::getIdShopDefault();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdTaxRulesGroup($idTaxRulesGroup)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdTaxRulesGroup', array($idTaxRulesGroup));

        return parent::setIdTaxRulesGroup($idTaxRulesGroup);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdTaxRulesGroup()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdTaxRulesGroup', array());

        return parent::getIdTaxRulesGroup();
    }

    /**
     * {@inheritDoc}
     */
    public function setOnSale($onSale)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOnSale', array($onSale));

        return parent::setOnSale($onSale);
    }

    /**
     * {@inheritDoc}
     */
    public function getOnSale()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOnSale', array());

        return parent::getOnSale();
    }

    /**
     * {@inheritDoc}
     */
    public function setOnlineOnly($onlineOnly)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOnlineOnly', array($onlineOnly));

        return parent::setOnlineOnly($onlineOnly);
    }

    /**
     * {@inheritDoc}
     */
    public function getOnlineOnly()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOnlineOnly', array());

        return parent::getOnlineOnly();
    }

    /**
     * {@inheritDoc}
     */
    public function setEan13($ean13)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEan13', array($ean13));

        return parent::setEan13($ean13);
    }

    /**
     * {@inheritDoc}
     */
    public function getEan13()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEan13', array());

        return parent::getEan13();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpc($upc)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpc', array($upc));

        return parent::setUpc($upc);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpc()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpc', array());

        return parent::getUpc();
    }

    /**
     * {@inheritDoc}
     */
    public function setEcotax($ecotax)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEcotax', array($ecotax));

        return parent::setEcotax($ecotax);
    }

    /**
     * {@inheritDoc}
     */
    public function getEcotax()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEcotax', array());

        return parent::getEcotax();
    }

    /**
     * {@inheritDoc}
     */
    public function setQuantity($quantity)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setQuantity', array($quantity));

        return parent::setQuantity($quantity);
    }

    /**
     * {@inheritDoc}
     */
    public function getQuantity()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getQuantity', array());

        return parent::getQuantity();
    }

    /**
     * {@inheritDoc}
     */
    public function setMinimalQuantity($minimalQuantity)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMinimalQuantity', array($minimalQuantity));

        return parent::setMinimalQuantity($minimalQuantity);
    }

    /**
     * {@inheritDoc}
     */
    public function getMinimalQuantity()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMinimalQuantity', array());

        return parent::getMinimalQuantity();
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

    /**
     * {@inheritDoc}
     */
    public function setWholesalePrice($wholesalePrice)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWholesalePrice', array($wholesalePrice));

        return parent::setWholesalePrice($wholesalePrice);
    }

    /**
     * {@inheritDoc}
     */
    public function getWholesalePrice()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWholesalePrice', array());

        return parent::getWholesalePrice();
    }

    /**
     * {@inheritDoc}
     */
    public function setUnity($unity)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUnity', array($unity));

        return parent::setUnity($unity);
    }

    /**
     * {@inheritDoc}
     */
    public function getUnity()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUnity', array());

        return parent::getUnity();
    }

    /**
     * {@inheritDoc}
     */
    public function setUnitPriceRatio($unitPriceRatio)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUnitPriceRatio', array($unitPriceRatio));

        return parent::setUnitPriceRatio($unitPriceRatio);
    }

    /**
     * {@inheritDoc}
     */
    public function getUnitPriceRatio()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUnitPriceRatio', array());

        return parent::getUnitPriceRatio();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdditionalShippingCost($additionalShippingCost)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdditionalShippingCost', array($additionalShippingCost));

        return parent::setAdditionalShippingCost($additionalShippingCost);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdditionalShippingCost()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdditionalShippingCost', array());

        return parent::getAdditionalShippingCost();
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
    public function setSupplierReference($supplierReference)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSupplierReference', array($supplierReference));

        return parent::setSupplierReference($supplierReference);
    }

    /**
     * {@inheritDoc}
     */
    public function getSupplierReference()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSupplierReference', array());

        return parent::getSupplierReference();
    }

    /**
     * {@inheritDoc}
     */
    public function setLocation($location)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLocation', array($location));

        return parent::setLocation($location);
    }

    /**
     * {@inheritDoc}
     */
    public function getLocation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLocation', array());

        return parent::getLocation();
    }

    /**
     * {@inheritDoc}
     */
    public function setWidth($width)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWidth', array($width));

        return parent::setWidth($width);
    }

    /**
     * {@inheritDoc}
     */
    public function getWidth()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWidth', array());

        return parent::getWidth();
    }

    /**
     * {@inheritDoc}
     */
    public function setHeight($height)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHeight', array($height));

        return parent::setHeight($height);
    }

    /**
     * {@inheritDoc}
     */
    public function getHeight()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHeight', array());

        return parent::getHeight();
    }

    /**
     * {@inheritDoc}
     */
    public function setDepth($depth)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDepth', array($depth));

        return parent::setDepth($depth);
    }

    /**
     * {@inheritDoc}
     */
    public function getDepth()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDepth', array());

        return parent::getDepth();
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
    public function setOutOfStock($outOfStock)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOutOfStock', array($outOfStock));

        return parent::setOutOfStock($outOfStock);
    }

    /**
     * {@inheritDoc}
     */
    public function getOutOfStock()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOutOfStock', array());

        return parent::getOutOfStock();
    }

    /**
     * {@inheritDoc}
     */
    public function setQuantityDiscount($quantityDiscount)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setQuantityDiscount', array($quantityDiscount));

        return parent::setQuantityDiscount($quantityDiscount);
    }

    /**
     * {@inheritDoc}
     */
    public function getQuantityDiscount()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getQuantityDiscount', array());

        return parent::getQuantityDiscount();
    }

    /**
     * {@inheritDoc}
     */
    public function setCustomizable($customizable)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCustomizable', array($customizable));

        return parent::setCustomizable($customizable);
    }

    /**
     * {@inheritDoc}
     */
    public function getCustomizable()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCustomizable', array());

        return parent::getCustomizable();
    }

    /**
     * {@inheritDoc}
     */
    public function setUploadableFiles($uploadableFiles)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUploadableFiles', array($uploadableFiles));

        return parent::setUploadableFiles($uploadableFiles);
    }

    /**
     * {@inheritDoc}
     */
    public function getUploadableFiles()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUploadableFiles', array());

        return parent::getUploadableFiles();
    }

    /**
     * {@inheritDoc}
     */
    public function setTextFields($textFields)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTextFields', array($textFields));

        return parent::setTextFields($textFields);
    }

    /**
     * {@inheritDoc}
     */
    public function getTextFields()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTextFields', array());

        return parent::getTextFields();
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
    public function setRedirectType($redirectType)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRedirectType', array($redirectType));

        return parent::setRedirectType($redirectType);
    }

    /**
     * {@inheritDoc}
     */
    public function getRedirectType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRedirectType', array());

        return parent::getRedirectType();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdProductRedirected($idProductRedirected)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdProductRedirected', array($idProductRedirected));

        return parent::setIdProductRedirected($idProductRedirected);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdProductRedirected()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdProductRedirected', array());

        return parent::getIdProductRedirected();
    }

    /**
     * {@inheritDoc}
     */
    public function setAvailableForOrder($availableForOrder)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAvailableForOrder', array($availableForOrder));

        return parent::setAvailableForOrder($availableForOrder);
    }

    /**
     * {@inheritDoc}
     */
    public function getAvailableForOrder()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAvailableForOrder', array());

        return parent::getAvailableForOrder();
    }

    /**
     * {@inheritDoc}
     */
    public function setAvailableDate($availableDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAvailableDate', array($availableDate));

        return parent::setAvailableDate($availableDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getAvailableDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAvailableDate', array());

        return parent::getAvailableDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setCondition($condition)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCondition', array($condition));

        return parent::setCondition($condition);
    }

    /**
     * {@inheritDoc}
     */
    public function getCondition()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCondition', array());

        return parent::getCondition();
    }

    /**
     * {@inheritDoc}
     */
    public function setShowPrice($showPrice)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setShowPrice', array($showPrice));

        return parent::setShowPrice($showPrice);
    }

    /**
     * {@inheritDoc}
     */
    public function getShowPrice()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getShowPrice', array());

        return parent::getShowPrice();
    }

    /**
     * {@inheritDoc}
     */
    public function setIndexed($indexed)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIndexed', array($indexed));

        return parent::setIndexed($indexed);
    }

    /**
     * {@inheritDoc}
     */
    public function getIndexed()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIndexed', array());

        return parent::getIndexed();
    }

    /**
     * {@inheritDoc}
     */
    public function setVisibility($visibility)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVisibility', array($visibility));

        return parent::setVisibility($visibility);
    }

    /**
     * {@inheritDoc}
     */
    public function getVisibility()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVisibility', array());

        return parent::getVisibility();
    }

    /**
     * {@inheritDoc}
     */
    public function setCacheIsPack($cacheIsPack)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCacheIsPack', array($cacheIsPack));

        return parent::setCacheIsPack($cacheIsPack);
    }

    /**
     * {@inheritDoc}
     */
    public function getCacheIsPack()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCacheIsPack', array());

        return parent::getCacheIsPack();
    }

    /**
     * {@inheritDoc}
     */
    public function setCacheHasAttachments($cacheHasAttachments)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCacheHasAttachments', array($cacheHasAttachments));

        return parent::setCacheHasAttachments($cacheHasAttachments);
    }

    /**
     * {@inheritDoc}
     */
    public function getCacheHasAttachments()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCacheHasAttachments', array());

        return parent::getCacheHasAttachments();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsVirtual($isVirtual)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsVirtual', array($isVirtual));

        return parent::setIsVirtual($isVirtual);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsVirtual()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsVirtual', array());

        return parent::getIsVirtual();
    }

    /**
     * {@inheritDoc}
     */
    public function setCacheDefaultAttribute($cacheDefaultAttribute)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCacheDefaultAttribute', array($cacheDefaultAttribute));

        return parent::setCacheDefaultAttribute($cacheDefaultAttribute);
    }

    /**
     * {@inheritDoc}
     */
    public function getCacheDefaultAttribute()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCacheDefaultAttribute', array());

        return parent::getCacheDefaultAttribute();
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
    public function setAdvancedStockManagement($advancedStockManagement)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdvancedStockManagement', array($advancedStockManagement));

        return parent::setAdvancedStockManagement($advancedStockManagement);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdvancedStockManagement()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdvancedStockManagement', array());

        return parent::getAdvancedStockManagement();
    }

}
