<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrAttributeImpact
 */
class TrAttributeImpact
{
    /**
     * @var integer
     */
    private $idAttributeImpact;

    /**
     * @var integer
     */
    private $idProduct;

    /**
     * @var integer
     */
    private $idAttribute;

    /**
     * @var string
     */
    private $weight;

    /**
     * @var string
     */
    private $price;


    /**
     * Get idAttributeImpact
     *
     * @return integer 
     */
    public function getIdAttributeImpact()
    {
        return $this->idAttributeImpact;
    }

    /**
     * Set idProduct
     *
     * @param integer $idProduct
     * @return TrAttributeImpact
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
     * Set idAttribute
     *
     * @param integer $idAttribute
     * @return TrAttributeImpact
     */
    public function setIdAttribute($idAttribute)
    {
        $this->idAttribute = $idAttribute;

        return $this;
    }

    /**
     * Get idAttribute
     *
     * @return integer 
     */
    public function getIdAttribute()
    {
        return $this->idAttribute;
    }

    /**
     * Set weight
     *
     * @param string $weight
     * @return TrAttributeImpact
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
     * Set price
     *
     * @param string $price
     * @return TrAttributeImpact
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
}
