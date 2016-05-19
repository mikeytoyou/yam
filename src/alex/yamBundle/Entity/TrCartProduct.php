<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrCartProduct
 */
class TrCartProduct
{
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
    private $idAddressDelivery;

    /**
     * @var integer
     */
    private $idShop;

    /**
     * @var integer
     */
    private $idProductAttribute;

    /**
     * @var integer
     */
    private $quantity;

    /**
     * @var \DateTime
     */
    private $dateAdd;


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
     * @return TrCartProduct
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
     * Set idAddressDelivery
     *
     * @param integer $idAddressDelivery
     * @return TrCartProduct
     */
    public function setIdAddressDelivery($idAddressDelivery)
    {
        $this->idAddressDelivery = $idAddressDelivery;

        return $this;
    }

    /**
     * Get idAddressDelivery
     *
     * @return integer 
     */
    public function getIdAddressDelivery()
    {
        return $this->idAddressDelivery;
    }

    /**
     * Set idShop
     *
     * @param integer $idShop
     * @return TrCartProduct
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
     * Set idProductAttribute
     *
     * @param integer $idProductAttribute
     * @return TrCartProduct
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
     * Set quantity
     *
     * @param integer $quantity
     * @return TrCartProduct
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
     * Set dateAdd
     *
     * @param \DateTime $dateAdd
     * @return TrCartProduct
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
}
