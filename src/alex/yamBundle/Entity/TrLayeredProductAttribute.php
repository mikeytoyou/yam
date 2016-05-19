<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrLayeredProductAttribute
 */
class TrLayeredProductAttribute
{
    /**
     * @var integer
     */
    private $idAttribute;

    /**
     * @var integer
     */
    private $idProduct;

    /**
     * @var integer
     */
    private $idAttributeGroup;

    /**
     * @var integer
     */
    private $idShop;


    /**
     * Set idAttribute
     *
     * @param integer $idAttribute
     * @return TrLayeredProductAttribute
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
     * Set idProduct
     *
     * @param integer $idProduct
     * @return TrLayeredProductAttribute
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
     * Set idAttributeGroup
     *
     * @param integer $idAttributeGroup
     * @return TrLayeredProductAttribute
     */
    public function setIdAttributeGroup($idAttributeGroup)
    {
        $this->idAttributeGroup = $idAttributeGroup;

        return $this;
    }

    /**
     * Get idAttributeGroup
     *
     * @return integer 
     */
    public function getIdAttributeGroup()
    {
        return $this->idAttributeGroup;
    }

    /**
     * Set idShop
     *
     * @param integer $idShop
     * @return TrLayeredProductAttribute
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
}
