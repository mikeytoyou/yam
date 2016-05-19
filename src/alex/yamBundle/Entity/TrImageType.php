<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrImageType
 */
class TrImageType
{
    /**
     * @var integer
     */
    private $idImageType;

    /**
     * @var string
     */
    private $name;

    /**
     * @var integer
     */
    private $width;

    /**
     * @var integer
     */
    private $height;

    /**
     * @var boolean
     */
    private $products;

    /**
     * @var boolean
     */
    private $categories;

    /**
     * @var boolean
     */
    private $manufacturers;

    /**
     * @var boolean
     */
    private $suppliers;

    /**
     * @var boolean
     */
    private $scenes;

    /**
     * @var boolean
     */
    private $stores;


    /**
     * Get idImageType
     *
     * @return integer 
     */
    public function getIdImageType()
    {
        return $this->idImageType;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return TrImageType
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set width
     *
     * @param integer $width
     * @return TrImageType
     */
    public function setWidth($width)
    {
        $this->width = $width;

        return $this;
    }

    /**
     * Get width
     *
     * @return integer 
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Set height
     *
     * @param integer $height
     * @return TrImageType
     */
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Get height
     *
     * @return integer 
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set products
     *
     * @param boolean $products
     * @return TrImageType
     */
    public function setProducts($products)
    {
        $this->products = $products;

        return $this;
    }

    /**
     * Get products
     *
     * @return boolean 
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * Set categories
     *
     * @param boolean $categories
     * @return TrImageType
     */
    public function setCategories($categories)
    {
        $this->categories = $categories;

        return $this;
    }

    /**
     * Get categories
     *
     * @return boolean 
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Set manufacturers
     *
     * @param boolean $manufacturers
     * @return TrImageType
     */
    public function setManufacturers($manufacturers)
    {
        $this->manufacturers = $manufacturers;

        return $this;
    }

    /**
     * Get manufacturers
     *
     * @return boolean 
     */
    public function getManufacturers()
    {
        return $this->manufacturers;
    }

    /**
     * Set suppliers
     *
     * @param boolean $suppliers
     * @return TrImageType
     */
    public function setSuppliers($suppliers)
    {
        $this->suppliers = $suppliers;

        return $this;
    }

    /**
     * Get suppliers
     *
     * @return boolean 
     */
    public function getSuppliers()
    {
        return $this->suppliers;
    }

    /**
     * Set scenes
     *
     * @param boolean $scenes
     * @return TrImageType
     */
    public function setScenes($scenes)
    {
        $this->scenes = $scenes;

        return $this;
    }

    /**
     * Get scenes
     *
     * @return boolean 
     */
    public function getScenes()
    {
        return $this->scenes;
    }

    /**
     * Set stores
     *
     * @param boolean $stores
     * @return TrImageType
     */
    public function setStores($stores)
    {
        $this->stores = $stores;

        return $this;
    }

    /**
     * Get stores
     *
     * @return boolean 
     */
    public function getStores()
    {
        return $this->stores;
    }
}
