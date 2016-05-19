<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrCategoryProduct
 */
class TrCategoryProduct
{
    /**
     * @var integer
     */
    private $idCategory;

    /**
     * @var integer
     */
    private $idProduct;

    /**
     * @var integer
     */
    private $position;


    /**
     * Set idCategory
     *
     * @param integer $idCategory
     * @return TrCategoryProduct
     */
    public function setIdCategory($idCategory)
    {
        $this->idCategory = $idCategory;

        return $this;
    }

    /**
     * Get idCategory
     *
     * @return integer 
     */
    public function getIdCategory()
    {
        return $this->idCategory;
    }

    /**
     * Set idProduct
     *
     * @param integer $idProduct
     * @return TrCategoryProduct
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
     * Set position
     *
     * @param integer $position
     * @return TrCategoryProduct
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return integer 
     */
    public function getPosition()
    {
        return $this->position;
    }
}
