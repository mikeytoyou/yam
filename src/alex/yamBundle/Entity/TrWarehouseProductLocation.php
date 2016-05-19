<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrWarehouseProductLocation
 */
class TrWarehouseProductLocation
{
    /**
     * @var integer
     */
    private $idWarehouseProductLocation;

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
    private $idWarehouse;

    /**
     * @var string
     */
    private $location;


    /**
     * Get idWarehouseProductLocation
     *
     * @return integer 
     */
    public function getIdWarehouseProductLocation()
    {
        return $this->idWarehouseProductLocation;
    }

    /**
     * Set idProduct
     *
     * @param integer $idProduct
     * @return TrWarehouseProductLocation
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
     * @return TrWarehouseProductLocation
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
     * Set idWarehouse
     *
     * @param integer $idWarehouse
     * @return TrWarehouseProductLocation
     */
    public function setIdWarehouse($idWarehouse)
    {
        $this->idWarehouse = $idWarehouse;

        return $this;
    }

    /**
     * Get idWarehouse
     *
     * @return integer 
     */
    public function getIdWarehouse()
    {
        return $this->idWarehouse;
    }

    /**
     * Set location
     *
     * @param string $location
     * @return TrWarehouseProductLocation
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
}
