<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrProductAttributeShop
 */
class TrProductAttributeShop
{
    /**
     * @var integer
     */
    private $idProductAttribute;

    /**
     * @var integer
     */
    private $idShop;

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
     * Set idProductAttribute
     *
     * @param integer $idProductAttribute
     * @return TrProductAttributeShop
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
     * Set idShop
     *
     * @param integer $idShop
     * @return TrProductAttributeShop
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
     * Set wholesalePrice
     *
     * @param string $wholesalePrice
     * @return TrProductAttributeShop
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
     * @return TrProductAttributeShop
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
     * @return TrProductAttributeShop
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
     * Set weight
     *
     * @param string $weight
     * @return TrProductAttributeShop
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
     * @return TrProductAttributeShop
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
     * @return TrProductAttributeShop
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
     * @return TrProductAttributeShop
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
     * @return TrProductAttributeShop
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
