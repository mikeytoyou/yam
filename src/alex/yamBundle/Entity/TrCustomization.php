<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrCustomization
 */
class TrCustomization
{
    /**
     * @var integer
     */
    private $idCustomization;

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
    private $idProductAttribute;

    /**
     * @var integer
     */
    private $quantity;

    /**
     * @var integer
     */
    private $quantityRefunded;

    /**
     * @var integer
     */
    private $quantityReturned;

    /**
     * @var boolean
     */
    private $inCart;


    /**
     * Set idCustomization
     *
     * @param integer $idCustomization
     * @return TrCustomization
     */
    public function setIdCustomization($idCustomization)
    {
        $this->idCustomization = $idCustomization;

        return $this;
    }

    /**
     * Get idCustomization
     *
     * @return integer 
     */
    public function getIdCustomization()
    {
        return $this->idCustomization;
    }

    /**
     * Set idCart
     *
     * @param integer $idCart
     * @return TrCustomization
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
     * @return TrCustomization
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
     * @return TrCustomization
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
     * Set idProductAttribute
     *
     * @param integer $idProductAttribute
     * @return TrCustomization
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
     * @return TrCustomization
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
     * Set quantityRefunded
     *
     * @param integer $quantityRefunded
     * @return TrCustomization
     */
    public function setQuantityRefunded($quantityRefunded)
    {
        $this->quantityRefunded = $quantityRefunded;

        return $this;
    }

    /**
     * Get quantityRefunded
     *
     * @return integer 
     */
    public function getQuantityRefunded()
    {
        return $this->quantityRefunded;
    }

    /**
     * Set quantityReturned
     *
     * @param integer $quantityReturned
     * @return TrCustomization
     */
    public function setQuantityReturned($quantityReturned)
    {
        $this->quantityReturned = $quantityReturned;

        return $this;
    }

    /**
     * Get quantityReturned
     *
     * @return integer 
     */
    public function getQuantityReturned()
    {
        return $this->quantityReturned;
    }

    /**
     * Set inCart
     *
     * @param boolean $inCart
     * @return TrCustomization
     */
    public function setInCart($inCart)
    {
        $this->inCart = $inCart;

        return $this;
    }

    /**
     * Get inCart
     *
     * @return boolean 
     */
    public function getInCart()
    {
        return $this->inCart;
    }
}
