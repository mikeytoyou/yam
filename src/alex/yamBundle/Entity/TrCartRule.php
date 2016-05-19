<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrCartRule
 */
class TrCartRule
{
    /**
     * @var integer
     */
    private $idCartRule;

    /**
     * @var integer
     */
    private $idCustomer;

    /**
     * @var \DateTime
     */
    private $dateFrom;

    /**
     * @var \DateTime
     */
    private $dateTo;

    /**
     * @var string
     */
    private $description;

    /**
     * @var integer
     */
    private $quantity;

    /**
     * @var integer
     */
    private $quantityPerUser;

    /**
     * @var integer
     */
    private $priority;

    /**
     * @var boolean
     */
    private $partialUse;

    /**
     * @var string
     */
    private $code;

    /**
     * @var string
     */
    private $minimumAmount;

    /**
     * @var boolean
     */
    private $minimumAmountTax;

    /**
     * @var integer
     */
    private $minimumAmountCurrency;

    /**
     * @var boolean
     */
    private $minimumAmountShipping;

    /**
     * @var boolean
     */
    private $countryRestriction;

    /**
     * @var boolean
     */
    private $carrierRestriction;

    /**
     * @var boolean
     */
    private $groupRestriction;

    /**
     * @var boolean
     */
    private $cartRuleRestriction;

    /**
     * @var boolean
     */
    private $productRestriction;

    /**
     * @var boolean
     */
    private $shopRestriction;

    /**
     * @var boolean
     */
    private $freeShipping;

    /**
     * @var string
     */
    private $reductionPercent;

    /**
     * @var string
     */
    private $reductionAmount;

    /**
     * @var boolean
     */
    private $reductionTax;

    /**
     * @var integer
     */
    private $reductionCurrency;

    /**
     * @var integer
     */
    private $reductionProduct;

    /**
     * @var integer
     */
    private $giftProduct;

    /**
     * @var integer
     */
    private $giftProductAttribute;

    /**
     * @var boolean
     */
    private $highlight;

    /**
     * @var boolean
     */
    private $active;

    /**
     * @var \DateTime
     */
    private $dateAdd;

    /**
     * @var \DateTime
     */
    private $dateUpd;


    /**
     * Get idCartRule
     *
     * @return integer 
     */
    public function getIdCartRule()
    {
        return $this->idCartRule;
    }

    /**
     * Set idCustomer
     *
     * @param integer $idCustomer
     * @return TrCartRule
     */
    public function setIdCustomer($idCustomer)
    {
        $this->idCustomer = $idCustomer;

        return $this;
    }

    /**
     * Get idCustomer
     *
     * @return integer 
     */
    public function getIdCustomer()
    {
        return $this->idCustomer;
    }

    /**
     * Set dateFrom
     *
     * @param \DateTime $dateFrom
     * @return TrCartRule
     */
    public function setDateFrom($dateFrom)
    {
        $this->dateFrom = $dateFrom;

        return $this;
    }

    /**
     * Get dateFrom
     *
     * @return \DateTime 
     */
    public function getDateFrom()
    {
        return $this->dateFrom;
    }

    /**
     * Set dateTo
     *
     * @param \DateTime $dateTo
     * @return TrCartRule
     */
    public function setDateTo($dateTo)
    {
        $this->dateTo = $dateTo;

        return $this;
    }

    /**
     * Get dateTo
     *
     * @return \DateTime 
     */
    public function getDateTo()
    {
        return $this->dateTo;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return TrCartRule
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set quantity
     *
     * @param integer $quantity
     * @return TrCartRule
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
     * Set quantityPerUser
     *
     * @param integer $quantityPerUser
     * @return TrCartRule
     */
    public function setQuantityPerUser($quantityPerUser)
    {
        $this->quantityPerUser = $quantityPerUser;

        return $this;
    }

    /**
     * Get quantityPerUser
     *
     * @return integer 
     */
    public function getQuantityPerUser()
    {
        return $this->quantityPerUser;
    }

    /**
     * Set priority
     *
     * @param integer $priority
     * @return TrCartRule
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;

        return $this;
    }

    /**
     * Get priority
     *
     * @return integer 
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Set partialUse
     *
     * @param boolean $partialUse
     * @return TrCartRule
     */
    public function setPartialUse($partialUse)
    {
        $this->partialUse = $partialUse;

        return $this;
    }

    /**
     * Get partialUse
     *
     * @return boolean 
     */
    public function getPartialUse()
    {
        return $this->partialUse;
    }

    /**
     * Set code
     *
     * @param string $code
     * @return TrCartRule
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string 
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set minimumAmount
     *
     * @param string $minimumAmount
     * @return TrCartRule
     */
    public function setMinimumAmount($minimumAmount)
    {
        $this->minimumAmount = $minimumAmount;

        return $this;
    }

    /**
     * Get minimumAmount
     *
     * @return string 
     */
    public function getMinimumAmount()
    {
        return $this->minimumAmount;
    }

    /**
     * Set minimumAmountTax
     *
     * @param boolean $minimumAmountTax
     * @return TrCartRule
     */
    public function setMinimumAmountTax($minimumAmountTax)
    {
        $this->minimumAmountTax = $minimumAmountTax;

        return $this;
    }

    /**
     * Get minimumAmountTax
     *
     * @return boolean 
     */
    public function getMinimumAmountTax()
    {
        return $this->minimumAmountTax;
    }

    /**
     * Set minimumAmountCurrency
     *
     * @param integer $minimumAmountCurrency
     * @return TrCartRule
     */
    public function setMinimumAmountCurrency($minimumAmountCurrency)
    {
        $this->minimumAmountCurrency = $minimumAmountCurrency;

        return $this;
    }

    /**
     * Get minimumAmountCurrency
     *
     * @return integer 
     */
    public function getMinimumAmountCurrency()
    {
        return $this->minimumAmountCurrency;
    }

    /**
     * Set minimumAmountShipping
     *
     * @param boolean $minimumAmountShipping
     * @return TrCartRule
     */
    public function setMinimumAmountShipping($minimumAmountShipping)
    {
        $this->minimumAmountShipping = $minimumAmountShipping;

        return $this;
    }

    /**
     * Get minimumAmountShipping
     *
     * @return boolean 
     */
    public function getMinimumAmountShipping()
    {
        return $this->minimumAmountShipping;
    }

    /**
     * Set countryRestriction
     *
     * @param boolean $countryRestriction
     * @return TrCartRule
     */
    public function setCountryRestriction($countryRestriction)
    {
        $this->countryRestriction = $countryRestriction;

        return $this;
    }

    /**
     * Get countryRestriction
     *
     * @return boolean 
     */
    public function getCountryRestriction()
    {
        return $this->countryRestriction;
    }

    /**
     * Set carrierRestriction
     *
     * @param boolean $carrierRestriction
     * @return TrCartRule
     */
    public function setCarrierRestriction($carrierRestriction)
    {
        $this->carrierRestriction = $carrierRestriction;

        return $this;
    }

    /**
     * Get carrierRestriction
     *
     * @return boolean 
     */
    public function getCarrierRestriction()
    {
        return $this->carrierRestriction;
    }

    /**
     * Set groupRestriction
     *
     * @param boolean $groupRestriction
     * @return TrCartRule
     */
    public function setGroupRestriction($groupRestriction)
    {
        $this->groupRestriction = $groupRestriction;

        return $this;
    }

    /**
     * Get groupRestriction
     *
     * @return boolean 
     */
    public function getGroupRestriction()
    {
        return $this->groupRestriction;
    }

    /**
     * Set cartRuleRestriction
     *
     * @param boolean $cartRuleRestriction
     * @return TrCartRule
     */
    public function setCartRuleRestriction($cartRuleRestriction)
    {
        $this->cartRuleRestriction = $cartRuleRestriction;

        return $this;
    }

    /**
     * Get cartRuleRestriction
     *
     * @return boolean 
     */
    public function getCartRuleRestriction()
    {
        return $this->cartRuleRestriction;
    }

    /**
     * Set productRestriction
     *
     * @param boolean $productRestriction
     * @return TrCartRule
     */
    public function setProductRestriction($productRestriction)
    {
        $this->productRestriction = $productRestriction;

        return $this;
    }

    /**
     * Get productRestriction
     *
     * @return boolean 
     */
    public function getProductRestriction()
    {
        return $this->productRestriction;
    }

    /**
     * Set shopRestriction
     *
     * @param boolean $shopRestriction
     * @return TrCartRule
     */
    public function setShopRestriction($shopRestriction)
    {
        $this->shopRestriction = $shopRestriction;

        return $this;
    }

    /**
     * Get shopRestriction
     *
     * @return boolean 
     */
    public function getShopRestriction()
    {
        return $this->shopRestriction;
    }

    /**
     * Set freeShipping
     *
     * @param boolean $freeShipping
     * @return TrCartRule
     */
    public function setFreeShipping($freeShipping)
    {
        $this->freeShipping = $freeShipping;

        return $this;
    }

    /**
     * Get freeShipping
     *
     * @return boolean 
     */
    public function getFreeShipping()
    {
        return $this->freeShipping;
    }

    /**
     * Set reductionPercent
     *
     * @param string $reductionPercent
     * @return TrCartRule
     */
    public function setReductionPercent($reductionPercent)
    {
        $this->reductionPercent = $reductionPercent;

        return $this;
    }

    /**
     * Get reductionPercent
     *
     * @return string 
     */
    public function getReductionPercent()
    {
        return $this->reductionPercent;
    }

    /**
     * Set reductionAmount
     *
     * @param string $reductionAmount
     * @return TrCartRule
     */
    public function setReductionAmount($reductionAmount)
    {
        $this->reductionAmount = $reductionAmount;

        return $this;
    }

    /**
     * Get reductionAmount
     *
     * @return string 
     */
    public function getReductionAmount()
    {
        return $this->reductionAmount;
    }

    /**
     * Set reductionTax
     *
     * @param boolean $reductionTax
     * @return TrCartRule
     */
    public function setReductionTax($reductionTax)
    {
        $this->reductionTax = $reductionTax;

        return $this;
    }

    /**
     * Get reductionTax
     *
     * @return boolean 
     */
    public function getReductionTax()
    {
        return $this->reductionTax;
    }

    /**
     * Set reductionCurrency
     *
     * @param integer $reductionCurrency
     * @return TrCartRule
     */
    public function setReductionCurrency($reductionCurrency)
    {
        $this->reductionCurrency = $reductionCurrency;

        return $this;
    }

    /**
     * Get reductionCurrency
     *
     * @return integer 
     */
    public function getReductionCurrency()
    {
        return $this->reductionCurrency;
    }

    /**
     * Set reductionProduct
     *
     * @param integer $reductionProduct
     * @return TrCartRule
     */
    public function setReductionProduct($reductionProduct)
    {
        $this->reductionProduct = $reductionProduct;

        return $this;
    }

    /**
     * Get reductionProduct
     *
     * @return integer 
     */
    public function getReductionProduct()
    {
        return $this->reductionProduct;
    }

    /**
     * Set giftProduct
     *
     * @param integer $giftProduct
     * @return TrCartRule
     */
    public function setGiftProduct($giftProduct)
    {
        $this->giftProduct = $giftProduct;

        return $this;
    }

    /**
     * Get giftProduct
     *
     * @return integer 
     */
    public function getGiftProduct()
    {
        return $this->giftProduct;
    }

    /**
     * Set giftProductAttribute
     *
     * @param integer $giftProductAttribute
     * @return TrCartRule
     */
    public function setGiftProductAttribute($giftProductAttribute)
    {
        $this->giftProductAttribute = $giftProductAttribute;

        return $this;
    }

    /**
     * Get giftProductAttribute
     *
     * @return integer 
     */
    public function getGiftProductAttribute()
    {
        return $this->giftProductAttribute;
    }

    /**
     * Set highlight
     *
     * @param boolean $highlight
     * @return TrCartRule
     */
    public function setHighlight($highlight)
    {
        $this->highlight = $highlight;

        return $this;
    }

    /**
     * Get highlight
     *
     * @return boolean 
     */
    public function getHighlight()
    {
        return $this->highlight;
    }

    /**
     * Set active
     *
     * @param boolean $active
     * @return TrCartRule
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
     * Set dateAdd
     *
     * @param \DateTime $dateAdd
     * @return TrCartRule
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
     * @return TrCartRule
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
