<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrProductShop
 */
class TrProductShop
{
    /**
     * @var integer
     */
    private $idProduct;

    /**
     * @var integer
     */
    private $idShop;

    /**
     * @var integer
     */
    private $idCategoryDefault;

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
    private $ecotax;

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
     * @var integer
     */
    private $cacheDefaultAttribute;

    /**
     * @var boolean
     */
    private $advancedStockManagement;

    /**
     * @var \DateTime
     */
    private $dateAdd;

    /**
     * @var \DateTime
     */
    private $dateUpd;


    /**
     * Set idProduct
     *
     * @param integer $idProduct
     * @return TrProductShop
     */
    public function setIdProduct($idProduct)
    {
        $this->idProduct = $idProduct;

        return $this;
    }

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
     * Set idShop
     *
     * @param integer $idShop
     * @return TrProductShop
     */
    public function setIdShop($idShop)
    {
        $this->idShop = $idShop;

        return $this;
    }

    /**
     * Get idShop
     *
     * @return integer 
     */
    public function getIdShop()
    {
        return $this->idShop;
    }

    /**
     * Set idCategoryDefault
     *
     * @param integer $idCategoryDefault
     * @return TrProductShop
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
     * Set idTaxRulesGroup
     *
     * @param integer $idTaxRulesGroup
     * @return TrProductShop
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
     * @return TrProductShop
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
     * @return TrProductShop
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
     * Set ecotax
     *
     * @param string $ecotax
     * @return TrProductShop
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
     * Set minimalQuantity
     *
     * @param integer $minimalQuantity
     * @return TrProductShop
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
     * @return TrProductShop
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
     * @return TrProductShop
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
     * @return TrProductShop
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
     * @return TrProductShop
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
     * @return TrProductShop
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
     * Set customizable
     *
     * @param boolean $customizable
     * @return TrProductShop
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
     * @return TrProductShop
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
     * @return TrProductShop
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
     * @return TrProductShop
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
     * @return TrProductShop
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
     * @return TrProductShop
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
     * @return TrProductShop
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
     * @return TrProductShop
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
     * @return TrProductShop
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
     * @return TrProductShop
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
     * @return TrProductShop
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
     * @return TrProductShop
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
     * Set cacheDefaultAttribute
     *
     * @param integer $cacheDefaultAttribute
     * @return TrProductShop
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
     * Set advancedStockManagement
     *
     * @param boolean $advancedStockManagement
     * @return TrProductShop
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

    /**
     * Set dateAdd
     *
     * @param \DateTime $dateAdd
     * @return TrProductShop
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
     * @return TrProductShop
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
}
