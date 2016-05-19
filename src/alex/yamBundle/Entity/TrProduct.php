<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrProduct
 */
class TrProduct
{
    /**
     * @var integer
     */
    private $idProduct;

    /**
     * @var integer
     */
    private $idSupplier;

    /**
     * @var integer
     */
    private $idManufacturer;

    /**
     * @var integer
     */
    private $idCategoryDefault;

    /**
     * @var integer
     */
    private $idShopDefault;

    /**
     * @var integer
     */
    private $idTaxRulesGroup;

    /**
     * @var boolean
     */
    private $onSale;

    /**
     * @var boolean
     */
    private $onlineOnly;

    /**
     * @var string
     */
    private $ean13;

    /**
     * @var string
     */
    private $upc;

    /**
     * @var string
     */
    private $ecotax;

    /**
     * @var integer
     */
    private $quantity;

    /**
     * @var integer
     */
    private $minimalQuantity;

    /**
     * @var string
     */
    private $price;

    /**
     * @var string
     */
    private $wholesalePrice;

    /**
     * @var string
     */
    private $unity;

    /**
     * @var string
     */
    private $unitPriceRatio;

    /**
     * @var string
     */
    private $additionalShippingCost;

    /**
     * @var string
     */
    private $reference;

    /**
     * @var string
     */
    private $supplierReference;

    /**
     * @var string
     */
    private $location;

    /**
     * @var string
     */
    private $width;

    /**
     * @var string
     */
    private $height;

    /**
     * @var string
     */
    private $depth;

    /**
     * @var string
     */
    private $weight;

    /**
     * @var integer
     */
    private $outOfStock;

    /**
     * @var boolean
     */
    private $quantityDiscount;

    /**
     * @var boolean
     */
    private $customizable;

    /**
     * @var boolean
     */
    private $uploadableFiles;

    /**
     * @var boolean
     */
    private $textFields;

    /**
     * @var boolean
     */
    private $active;

    /**
     * @var string
     */
    private $redirectType;

    /**
     * @var integer
     */
    private $idProductRedirected;

    /**
     * @var boolean
     */
    private $availableForOrder;

    /**
     * @var \DateTime
     */
    private $availableDate;

    /**
     * @var string
     */
    private $condition;

    /**
     * @var boolean
     */
    private $showPrice;

    /**
     * @var boolean
     */
    private $indexed;

    /**
     * @var string
     */
    private $visibility;

    /**
     * @var boolean
     */
    private $cacheIsPack;

    /**
     * @var boolean
     */
    private $cacheHasAttachments;

    /**
     * @var boolean
     */
    private $isVirtual;

    /**
     * @var integer
     */
    private $cacheDefaultAttribute;

    /**
     * @var \DateTime
     */
    private $dateAdd;

    /**
     * @var \DateTime
     */
    private $dateUpd;

    /**
     * @var boolean
     */
    private $advancedStockManagement;


    /**
     * Get idProduct
     *
     * @return integer 
     */
    public function getIdProduct()
    {
        return $this->idProduct;
    }

    /**
     * Set idSupplier
     *
     * @param integer $idSupplier
     * @return TrProduct
     */
    public function setIdSupplier($idSupplier)
    {
        $this->idSupplier = $idSupplier;

        return $this;
    }

    /**
     * Get idSupplier
     *
     * @return integer 
     */
    public function getIdSupplier()
    {
        return $this->idSupplier;
    }

    /**
     * Set idManufacturer
     *
     * @param integer $idManufacturer
     * @return TrProduct
     */
    public function setIdManufacturer($idManufacturer)
    {
        $this->idManufacturer = $idManufacturer;

        return $this;
    }

    /**
     * Get idManufacturer
     *
     * @return integer 
     */
    public function getIdManufacturer()
    {
        return $this->idManufacturer;
    }

    /**
     * Set idCategoryDefault
     *
     * @param integer $idCategoryDefault
     * @return TrProduct
     */
    public function setIdCategoryDefault($idCategoryDefault)
    {
        $this->idCategoryDefault = $idCategoryDefault;

        return $this;
    }

    /**
     * Get idCategoryDefault
     *
     * @return integer 
     */
    public function getIdCategoryDefault()
    {
        return $this->idCategoryDefault;
    }

    /**
     * Set idShopDefault
     *
     * @param integer $idShopDefault
     * @return TrProduct
     */
    public function setIdShopDefault($idShopDefault)
    {
        $this->idShopDefault = $idShopDefault;

        return $this;
    }

    /**
     * Get idShopDefault
     *
     * @return integer 
     */
    public function getIdShopDefault()
    {
        return $this->idShopDefault;
    }

    /**
     * Set idTaxRulesGroup
     *
     * @param integer $idTaxRulesGroup
     * @return TrProduct
     */
    public function setIdTaxRulesGroup($idTaxRulesGroup)
    {
        $this->idTaxRulesGroup = $idTaxRulesGroup;

        return $this;
    }

    /**
     * Get idTaxRulesGroup
     *
     * @return integer 
     */
    public function getIdTaxRulesGroup()
    {
        return $this->idTaxRulesGroup;
    }

    /**
     * Set onSale
     *
     * @param boolean $onSale
     * @return TrProduct
     */
    public function setOnSale($onSale)
    {
        $this->onSale = $onSale;

        return $this;
    }

    /**
     * Get onSale
     *
     * @return boolean 
     */
    public function getOnSale()
    {
        return $this->onSale;
    }

    /**
     * Set onlineOnly
     *
     * @param boolean $onlineOnly
     * @return TrProduct
     */
    public function setOnlineOnly($onlineOnly)
    {
        $this->onlineOnly = $onlineOnly;

        return $this;
    }

    /**
     * Get onlineOnly
     *
     * @return boolean 
     */
    public function getOnlineOnly()
    {
        return $this->onlineOnly;
    }

    /**
     * Set ean13
     *
     * @param string $ean13
     * @return TrProduct
     */
    public function setEan13($ean13)
    {
        $this->ean13 = $ean13;

        return $this;
    }

    /**
     * Get ean13
     *
     * @return string 
     */
    public function getEan13()
    {
        return $this->ean13;
    }

    /**
     * Set upc
     *
     * @param string $upc
     * @return TrProduct
     */
    public function setUpc($upc)
    {
        $this->upc = $upc;

        return $this;
    }

    /**
     * Get upc
     *
     * @return string 
     */
    public function getUpc()
    {
        return $this->upc;
    }

    /**
     * Set ecotax
     *
     * @param string $ecotax
     * @return TrProduct
     */
    public function setEcotax($ecotax)
    {
        $this->ecotax = $ecotax;

        return $this;
    }

    /**
     * Get ecotax
     *
     * @return string 
     */
    public function getEcotax()
    {
        return $this->ecotax;
    }

    /**
     * Set quantity
     *
     * @param integer $quantity
     * @return TrProduct
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer 
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set minimalQuantity
     *
     * @param integer $minimalQuantity
     * @return TrProduct
     */
    public function setMinimalQuantity($minimalQuantity)
    {
        $this->minimalQuantity = $minimalQuantity;

        return $this;
    }

    /**
     * Get minimalQuantity
     *
     * @return integer 
     */
    public function getMinimalQuantity()
    {
        return $this->minimalQuantity;
    }

    /**
     * Set price
     *
     * @param string $price
     * @return TrProduct
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set wholesalePrice
     *
     * @param string $wholesalePrice
     * @return TrProduct
     */
    public function setWholesalePrice($wholesalePrice)
    {
        $this->wholesalePrice = $wholesalePrice;

        return $this;
    }

    /**
     * Get wholesalePrice
     *
     * @return string 
     */
    public function getWholesalePrice()
    {
        return $this->wholesalePrice;
    }

    /**
     * Set unity
     *
     * @param string $unity
     * @return TrProduct
     */
    public function setUnity($unity)
    {
        $this->unity = $unity;

        return $this;
    }

    /**
     * Get unity
     *
     * @return string 
     */
    public function getUnity()
    {
        return $this->unity;
    }

    /**
     * Set unitPriceRatio
     *
     * @param string $unitPriceRatio
     * @return TrProduct
     */
    public function setUnitPriceRatio($unitPriceRatio)
    {
        $this->unitPriceRatio = $unitPriceRatio;

        return $this;
    }

    /**
     * Get unitPriceRatio
     *
     * @return string 
     */
    public function getUnitPriceRatio()
    {
        return $this->unitPriceRatio;
    }

    /**
     * Set additionalShippingCost
     *
     * @param string $additionalShippingCost
     * @return TrProduct
     */
    public function setAdditionalShippingCost($additionalShippingCost)
    {
        $this->additionalShippingCost = $additionalShippingCost;

        return $this;
    }

    /**
     * Get additionalShippingCost
     *
     * @return string 
     */
    public function getAdditionalShippingCost()
    {
        return $this->additionalShippingCost;
    }

    /**
     * Set reference
     *
     * @param string $reference
     * @return TrProduct
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get reference
     *
     * @return string 
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set supplierReference
     *
     * @param string $supplierReference
     * @return TrProduct
     */
    public function setSupplierReference($supplierReference)
    {
        $this->supplierReference = $supplierReference;

        return $this;
    }

    /**
     * Get supplierReference
     *
     * @return string 
     */
    public function getSupplierReference()
    {
        return $this->supplierReference;
    }

    /**
     * Set location
     *
     * @param string $location
     * @return TrProduct
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return string 
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set width
     *
     * @param string $width
     * @return TrProduct
     */
    public function setWidth($width)
    {
        $this->width = $width;

        return $this;
    }

    /**
     * Get width
     *
     * @return string 
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Set height
     *
     * @param string $height
     * @return TrProduct
     */
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Get height
     *
     * @return string 
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set depth
     *
     * @param string $depth
     * @return TrProduct
     */
    public function setDepth($depth)
    {
        $this->depth = $depth;

        return $this;
    }

    /**
     * Get depth
     *
     * @return string 
     */
    public function getDepth()
    {
        return $this->depth;
    }

    /**
     * Set weight
     *
     * @param string $weight
     * @return TrProduct
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get weight
     *
     * @return string 
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set outOfStock
     *
     * @param integer $outOfStock
     * @return TrProduct
     */
    public function setOutOfStock($outOfStock)
    {
        $this->outOfStock = $outOfStock;

        return $this;
    }

    /**
     * Get outOfStock
     *
     * @return integer 
     */
    public function getOutOfStock()
    {
        return $this->outOfStock;
    }

    /**
     * Set quantityDiscount
     *
     * @param boolean $quantityDiscount
     * @return TrProduct
     */
    public function setQuantityDiscount($quantityDiscount)
    {
        $this->quantityDiscount = $quantityDiscount;

        return $this;
    }

    /**
     * Get quantityDiscount
     *
     * @return boolean 
     */
    public function getQuantityDiscount()
    {
        return $this->quantityDiscount;
    }

    /**
     * Set customizable
     *
     * @param boolean $customizable
     * @return TrProduct
     */
    public function setCustomizable($customizable)
    {
        $this->customizable = $customizable;

        return $this;
    }

    /**
     * Get customizable
     *
     * @return boolean 
     */
    public function getCustomizable()
    {
        return $this->customizable;
    }

    /**
     * Set uploadableFiles
     *
     * @param boolean $uploadableFiles
     * @return TrProduct
     */
    public function setUploadableFiles($uploadableFiles)
    {
        $this->uploadableFiles = $uploadableFiles;

        return $this;
    }

    /**
     * Get uploadableFiles
     *
     * @return boolean 
     */
    public function getUploadableFiles()
    {
        return $this->uploadableFiles;
    }

    /**
     * Set textFields
     *
     * @param boolean $textFields
     * @return TrProduct
     */
    public function setTextFields($textFields)
    {
        $this->textFields = $textFields;

        return $this;
    }

    /**
     * Get textFields
     *
     * @return boolean 
     */
    public function getTextFields()
    {
        return $this->textFields;
    }

    /**
     * Set active
     *
     * @param boolean $active
     * @return TrProduct
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return boolean 
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set redirectType
     *
     * @param string $redirectType
     * @return TrProduct
     */
    public function setRedirectType($redirectType)
    {
        $this->redirectType = $redirectType;

        return $this;
    }

    /**
     * Get redirectType
     *
     * @return string 
     */
    public function getRedirectType()
    {
        return $this->redirectType;
    }

    /**
     * Set idProductRedirected
     *
     * @param integer $idProductRedirected
     * @return TrProduct
     */
    public function setIdProductRedirected($idProductRedirected)
    {
        $this->idProductRedirected = $idProductRedirected;

        return $this;
    }

    /**
     * Get idProductRedirected
     *
     * @return integer 
     */
    public function getIdProductRedirected()
    {
        return $this->idProductRedirected;
    }

    /**
     * Set availableForOrder
     *
     * @param boolean $availableForOrder
     * @return TrProduct
     */
    public function setAvailableForOrder($availableForOrder)
    {
        $this->availableForOrder = $availableForOrder;

        return $this;
    }

    /**
     * Get availableForOrder
     *
     * @return boolean 
     */
    public function getAvailableForOrder()
    {
        return $this->availableForOrder;
    }

    /**
     * Set availableDate
     *
     * @param \DateTime $availableDate
     * @return TrProduct
     */
    public function setAvailableDate($availableDate)
    {
        $this->availableDate = $availableDate;

        return $this;
    }

    /**
     * Get availableDate
     *
     * @return \DateTime 
     */
    public function getAvailableDate()
    {
        return $this->availableDate;
    }

    /**
     * Set condition
     *
     * @param string $condition
     * @return TrProduct
     */
    public function setCondition($condition)
    {
        $this->condition = $condition;

        return $this;
    }

    /**
     * Get condition
     *
     * @return string 
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * Set showPrice
     *
     * @param boolean $showPrice
     * @return TrProduct
     */
    public function setShowPrice($showPrice)
    {
        $this->showPrice = $showPrice;

        return $this;
    }

    /**
     * Get showPrice
     *
     * @return boolean 
     */
    public function getShowPrice()
    {
        return $this->showPrice;
    }

    /**
     * Set indexed
     *
     * @param boolean $indexed
     * @return TrProduct
     */
    public function setIndexed($indexed)
    {
        $this->indexed = $indexed;

        return $this;
    }

    /**
     * Get indexed
     *
     * @return boolean 
     */
    public function getIndexed()
    {
        return $this->indexed;
    }

    /**
     * Set visibility
     *
     * @param string $visibility
     * @return TrProduct
     */
    public function setVisibility($visibility)
    {
        $this->visibility = $visibility;

        return $this;
    }

    /**
     * Get visibility
     *
     * @return string 
     */
    public function getVisibility()
    {
        return $this->visibility;
    }

    /**
     * Set cacheIsPack
     *
     * @param boolean $cacheIsPack
     * @return TrProduct
     */
    public function setCacheIsPack($cacheIsPack)
    {
        $this->cacheIsPack = $cacheIsPack;

        return $this;
    }

    /**
     * Get cacheIsPack
     *
     * @return boolean 
     */
    public function getCacheIsPack()
    {
        return $this->cacheIsPack;
    }

    /**
     * Set cacheHasAttachments
     *
     * @param boolean $cacheHasAttachments
     * @return TrProduct
     */
    public function setCacheHasAttachments($cacheHasAttachments)
    {
        $this->cacheHasAttachments = $cacheHasAttachments;

        return $this;
    }

    /**
     * Get cacheHasAttachments
     *
     * @return boolean 
     */
    public function getCacheHasAttachments()
    {
        return $this->cacheHasAttachments;
    }

    /**
     * Set isVirtual
     *
     * @param boolean $isVirtual
     * @return TrProduct
     */
    public function setIsVirtual($isVirtual)
    {
        $this->isVirtual = $isVirtual;

        return $this;
    }

    /**
     * Get isVirtual
     *
     * @return boolean 
     */
    public function getIsVirtual()
    {
        return $this->isVirtual;
    }

    /**
     * Set cacheDefaultAttribute
     *
     * @param integer $cacheDefaultAttribute
     * @return TrProduct
     */
    public function setCacheDefaultAttribute($cacheDefaultAttribute)
    {
        $this->cacheDefaultAttribute = $cacheDefaultAttribute;

        return $this;
    }

    /**
     * Get cacheDefaultAttribute
     *
     * @return integer 
     */
    public function getCacheDefaultAttribute()
    {
        return $this->cacheDefaultAttribute;
    }

    /**
     * Set dateAdd
     *
     * @param \DateTime $dateAdd
     * @return TrProduct
     */
    public function setDateAdd($dateAdd)
    {
        $this->dateAdd = $dateAdd;

        return $this;
    }

    /**
     * Get dateAdd
     *
     * @return \DateTime 
     */
    public function getDateAdd()
    {
        return $this->dateAdd;
    }

    /**
     * Set dateUpd
     *
     * @param \DateTime $dateUpd
     * @return TrProduct
     */
    public function setDateUpd($dateUpd)
    {
        $this->dateUpd = $dateUpd;

        return $this;
    }

    /**
     * Get dateUpd
     *
     * @return \DateTime 
     */
    public function getDateUpd()
    {
        return $this->dateUpd;
    }

    /**
     * Set advancedStockManagement
     *
     * @param boolean $advancedStockManagement
     * @return TrProduct
     */
    public function setAdvancedStockManagement($advancedStockManagement)
    {
        $this->advancedStockManagement = $advancedStockManagement;

        return $this;
    }

    /**
     * Get advancedStockManagement
     *
     * @return boolean 
     */
    public function getAdvancedStockManagement()
    {
        return $this->advancedStockManagement;
    }
}
