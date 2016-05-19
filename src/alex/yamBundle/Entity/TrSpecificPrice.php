<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrSpecificPrice
 */
class TrSpecificPrice
{
    /**
     * @var integer
     */
    private $idSpecificPrice;

    /**
     * @var integer
     */
    private $idSpecificPriceRule;

    /**
     * @var integer
     */
    private $idCart;

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
    private $idShopGroup;

    /**
     * @var integer
     */
    private $idCurrency;

    /**
     * @var integer
     */
    private $idCountry;

    /**
     * @var integer
     */
    private $idGroup;

    /**
     * @var integer
     */
    private $idCustomer;

    /**
     * @var integer
     */
    private $idProductAttribute;

    /**
     * @var string
     */
    private $price;

    /**
     * @var integer
     */
    private $fromQuantity;

    /**
     * @var string
     */
    private $reduction;

    /**
     * @var string
     */
    private $reductionType;

    /**
     * @var \DateTime
     */
    private $from;

    /**
     * @var \DateTime
     */
    private $to;


    /**
     * Get idSpecificPrice
     *
     * @return integer 
     */
    public function getIdSpecificPrice()
    {
        return $this->idSpecificPrice;
    }

    /**
     * Set idSpecificPriceRule
     *
     * @param integer $idSpecificPriceRule
     * @return TrSpecificPrice
     */
    public function setIdSpecificPriceRule($idSpecificPriceRule)
    {
        $this->idSpecificPriceRule = $idSpecificPriceRule;

        return $this;
    }

    /**
     * Get idSpecificPriceRule
     *
     * @return integer 
     */
    public function getIdSpecificPriceRule()
    {
        return $this->idSpecificPriceRule;
    }

    /**
     * Set idCart
     *
     * @param integer $idCart
     * @return TrSpecificPrice
     */
    public function setIdCart($idCart)
    {
        $this->idCart = $idCart;

        return $this;
    }

    /**
     * Get idCart
     *
     * @return integer 
     */
    public function getIdCart()
    {
        return $this->idCart;
    }

    /**
     * Set idProduct
     *
     * @param integer $idProduct
     * @return TrSpecificPrice
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
     * @return TrSpecificPrice
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
     * Set idShopGroup
     *
     * @param integer $idShopGroup
     * @return TrSpecificPrice
     */
    public function setIdShopGroup($idShopGroup)
    {
        $this->idShopGroup = $idShopGroup;

        return $this;
    }

    /**
     * Get idShopGroup
     *
     * @return integer 
     */
    public function getIdShopGroup()
    {
        return $this->idShopGroup;
    }

    /**
     * Set idCurrency
     *
     * @param integer $idCurrency
     * @return TrSpecificPrice
     */
    public function setIdCurrency($idCurrency)
    {
        $this->idCurrency = $idCurrency;

        return $this;
    }

    /**
     * Get idCurrency
     *
     * @return integer 
     */
    public function getIdCurrency()
    {
        return $this->idCurrency;
    }

    /**
     * Set idCountry
     *
     * @param integer $idCountry
     * @return TrSpecificPrice
     */
    public function setIdCountry($idCountry)
    {
        $this->idCountry = $idCountry;

        return $this;
    }

    /**
     * Get idCountry
     *
     * @return integer 
     */
    public function getIdCountry()
    {
        return $this->idCountry;
    }

    /**
     * Set idGroup
     *
     * @param integer $idGroup
     * @return TrSpecificPrice
     */
    public function setIdGroup($idGroup)
    {
        $this->idGroup = $idGroup;

        return $this;
    }

    /**
     * Get idGroup
     *
     * @return integer 
     */
    public function getIdGroup()
    {
        return $this->idGroup;
    }

    /**
     * Set idCustomer
     *
     * @param integer $idCustomer
     * @return TrSpecificPrice
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
     * Set idProductAttribute
     *
     * @param integer $idProductAttribute
     * @return TrSpecificPrice
     */
    public function setIdProductAttribute($idProductAttribute)
    {
        $this->idProductAttribute = $idProductAttribute;

        return $this;
    }

    /**
     * Get idProductAttribute
     *
     * @return integer 
     */
    public function getIdProductAttribute()
    {
        return $this->idProductAttribute;
    }

    /**
     * Set price
     *
     * @param string $price
     * @return TrSpecificPrice
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
     * Set fromQuantity
     *
     * @param integer $fromQuantity
     * @return TrSpecificPrice
     */
    public function setFromQuantity($fromQuantity)
    {
        $this->fromQuantity = $fromQuantity;

        return $this;
    }

    /**
     * Get fromQuantity
     *
     * @return integer 
     */
    public function getFromQuantity()
    {
        return $this->fromQuantity;
    }

    /**
     * Set reduction
     *
     * @param string $reduction
     * @return TrSpecificPrice
     */
    public function setReduction($reduction)
    {
        $this->reduction = $reduction;

        return $this;
    }

    /**
     * Get reduction
     *
     * @return string 
     */
    public function getReduction()
    {
        return $this->reduction;
    }

    /**
     * Set reductionType
     *
     * @param string $reductionType
     * @return TrSpecificPrice
     */
    public function setReductionType($reductionType)
    {
        $this->reductionType = $reductionType;

        return $this;
    }

    /**
     * Get reductionType
     *
     * @return string 
     */
    public function getReductionType()
    {
        return $this->reductionType;
    }

    /**
     * Set from
     *
     * @param \DateTime $from
     * @return TrSpecificPrice
     */
    public function setFrom($from)
    {
        $this->from = $from;

        return $this;
    }

    /**
     * Get from
     *
     * @return \DateTime 
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * Set to
     *
     * @param \DateTime $to
     * @return TrSpecificPrice
     */
    public function setTo($to)
    {
        $this->to = $to;

        return $this;
    }

    /**
     * Get to
     *
     * @return \DateTime 
     */
    public function getTo()
    {
        return $this->to;
    }
}
