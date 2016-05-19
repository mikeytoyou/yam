<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrStockAvailable
 */
class TrStockAvailable
{
    /**
     * @var integer
     */
    private $idStockAvailable;

    /**
     * @var integer
     */
    private $idProduct;

    /**
     * @var integer
     */
    private $idProductAttribute;

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
    private $quantity;

    /**
     * @var boolean
     */
    private $dependsOnStock;

    /**
     * @var boolean
     */
    private $outOfStock;


    /**
     * Get idStockAvailable
     *
     * @return integer 
     */
    public function getIdStockAvailable()
    {
        return $this->idStockAvailable;
    }

    /**
     * Set idProduct
     *
     * @param integer $idProduct
     * @return TrStockAvailable
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
     * Set idProductAttribute
     *
     * @param integer $idProductAttribute
     * @return TrStockAvailable
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
     * @return TrStockAvailable
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
     * @return TrStockAvailable
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
     * Set quantity
     *
     * @param integer $quantity
     * @return TrStockAvailable
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
     * Set dependsOnStock
     *
     * @param boolean $dependsOnStock
     * @return TrStockAvailable
     */
    public function setDependsOnStock($dependsOnStock)
    {
        $this->dependsOnStock = $dependsOnStock;

        return $this;
    }

    /**
     * Get dependsOnStock
     *
     * @return boolean 
     */
    public function getDependsOnStock()
    {
        return $this->dependsOnStock;
    }

    /**
     * Set outOfStock
     *
     * @param boolean $outOfStock
     * @return TrStockAvailable
     */
    public function setOutOfStock($outOfStock)
    {
        $this->outOfStock = $outOfStock;

        return $this;
    }

    /**
     * Get outOfStock
     *
     * @return boolean 
     */
    public function getOutOfStock()
    {
        return $this->outOfStock;
    }
}
