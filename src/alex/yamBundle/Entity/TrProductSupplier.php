<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrProductSupplier
 */
class TrProductSupplier
{
    /**
     * @var integer
     */
    private $idProductSupplier;

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
    private $idSupplier;

    /**
     * @var string
     */
    private $productSupplierReference;

    /**
     * @var string
     */
    private $productSupplierPriceTe;

    /**
     * @var integer
     */
    private $idCurrency;


    /**
     * Get idProductSupplier
     *
     * @return integer 
     */
    public function getIdProductSupplier()
    {
        return $this->idProductSupplier;
    }

    /**
     * Set idProduct
     *
     * @param integer $idProduct
     * @return TrProductSupplier
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
     * @return TrProductSupplier
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
     * Set idSupplier
     *
     * @param integer $idSupplier
     * @return TrProductSupplier
     */
    public function setIdSupplier($idSupplier)
    {
        $this->idSupplier = $idSupplier;

        return $this;
    }

    /**
     * Get idSupplier
     *
     * @return integer 
     */
    public function getIdSupplier()
    {
        return $this->idSupplier;
    }

    /**
     * Set productSupplierReference
     *
     * @param string $productSupplierReference
     * @return TrProductSupplier
     */
    public function setProductSupplierReference($productSupplierReference)
    {
        $this->productSupplierReference = $productSupplierReference;

        return $this;
    }

    /**
     * Get productSupplierReference
     *
     * @return string 
     */
    public function getProductSupplierReference()
    {
        return $this->productSupplierReference;
    }

    /**
     * Set productSupplierPriceTe
     *
     * @param string $productSupplierPriceTe
     * @return TrProductSupplier
     */
    public function setProductSupplierPriceTe($productSupplierPriceTe)
    {
        $this->productSupplierPriceTe = $productSupplierPriceTe;

        return $this;
    }

    /**
     * Get productSupplierPriceTe
     *
     * @return string 
     */
    public function getProductSupplierPriceTe()
    {
        return $this->productSupplierPriceTe;
    }

    /**
     * Set idCurrency
     *
     * @param integer $idCurrency
     * @return TrProductSupplier
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
}
