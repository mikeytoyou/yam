<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrStock
 */
class TrStock
{
    /**
     * @var integer
     */
    private $idStock;

    /**
     * @var integer
     */
    private $idWarehouse;

    /**
     * @var integer
     */
    private $idProduct;

    /**
     * @var integer
     */
    private $idProductAttribute;

    /**
     * @var string
     */
    private $reference;

    /**
     * @var string
     */
    private $ean13;

    /**
     * @var string
     */
    private $upc;

    /**
     * @var integer
     */
    private $physicalQuantity;

    /**
     * @var integer
     */
    private $usableQuantity;

    /**
     * @var string
     */
    private $priceTe;


    /**
     * Get idStock
     *
     * @return integer 
     */
    public function getIdStock()
    {
        return $this->idStock;
    }

    /**
     * Set idWarehouse
     *
     * @param integer $idWarehouse
     * @return TrStock
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
     * Set idProduct
     *
     * @param integer $idProduct
     * @return TrStock
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
     * @return TrStock
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
     * Set reference
     *
     * @param string $reference
     * @return TrStock
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
     * Set ean13
     *
     * @param string $ean13
     * @return TrStock
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
     * @return TrStock
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
     * Set physicalQuantity
     *
     * @param integer $physicalQuantity
     * @return TrStock
     */
    public function setPhysicalQuantity($physicalQuantity)
    {
        $this->physicalQuantity = $physicalQuantity;

        return $this;
    }

    /**
     * Get physicalQuantity
     *
     * @return integer 
     */
    public function getPhysicalQuantity()
    {
        return $this->physicalQuantity;
    }

    /**
     * Set usableQuantity
     *
     * @param integer $usableQuantity
     * @return TrStock
     */
    public function setUsableQuantity($usableQuantity)
    {
        $this->usableQuantity = $usableQuantity;

        return $this;
    }

    /**
     * Get usableQuantity
     *
     * @return integer 
     */
    public function getUsableQuantity()
    {
        return $this->usableQuantity;
    }

    /**
     * Set priceTe
     *
     * @param string $priceTe
     * @return TrStock
     */
    public function setPriceTe($priceTe)
    {
        $this->priceTe = $priceTe;

        return $this;
    }

    /**
     * Get priceTe
     *
     * @return string 
     */
    public function getPriceTe()
    {
        return $this->priceTe;
    }
}
