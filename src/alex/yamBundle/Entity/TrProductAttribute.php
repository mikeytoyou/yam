<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrProductAttribute
 */
class TrProductAttribute
{
    /**
     * @var integer
     */
    private $idProductAttribute;

    /**
     * @var integer
     */
    private $idProduct;

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
    private $ean13;

    /**
     * @var string
     */
    private $upc;

    /**
     * @var string
     */
    private $wholesalePrice;

    /**
     * @var string
     */
    private $price;

    /**
     * @var string
     */
    private $ecotax;

    /**
     * @var integer
     */
    private $quantity;

    /**
     * @var string
     */
    private $weight;

    /**
     * @var string
     */
    private $unitPriceImpact;

    /**
     * @var boolean
     */
    private $defaultOn;

    /**
     * @var integer
     */
    private $minimalQuantity;

    /**
     * @var \DateTime
     */
    private $availableDate;


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
     * Set idProduct
     *
     * @param integer $idProduct
     * @return TrProductAttribute
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
     * Set reference
     *
     * @param string $reference
     * @return TrProductAttribute
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
     * @return TrProductAttribute
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
     * @return TrProductAttribute
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
     * Set ean13
     *
     * @param string $ean13
     * @return TrProductAttribute
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
     * @return TrProductAttribute
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
     * Set wholesalePrice
     *
     * @param string $wholesalePrice
     * @return TrProductAttribute
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
     * Set price
     *
     * @param string $price
     * @return TrProductAttribute
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
     * Set ecotax
     *
     * @param string $ecotax
     * @return TrProductAttribute
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
     * @return TrProductAttribute
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
     * Set weight
     *
     * @param string $weight
     * @return TrProductAttribute
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
     * Set unitPriceImpact
     *
     * @param string $unitPriceImpact
     * @return TrProductAttribute
     */
    public function setUnitPriceImpact($unitPriceImpact)
    {
        $this->unitPriceImpact = $unitPriceImpact;

        return $this;
    }

    /**
     * Get unitPriceImpact
     *
     * @return string 
     */
    public function getUnitPriceImpact()
    {
        return $this->unitPriceImpact;
    }

    /**
     * Set defaultOn
     *
     * @param boolean $defaultOn
     * @return TrProductAttribute
     */
    public function setDefaultOn($defaultOn)
    {
        $this->defaultOn = $defaultOn;

        return $this;
    }

    /**
     * Get defaultOn
     *
     * @return boolean 
     */
    public function getDefaultOn()
    {
        return $this->defaultOn;
    }

    /**
     * Set minimalQuantity
     *
     * @param integer $minimalQuantity
     * @return TrProductAttribute
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
     * Set availableDate
     *
     * @param \DateTime $availableDate
     * @return TrProductAttribute
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
}
