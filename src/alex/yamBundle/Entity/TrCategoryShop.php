<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrCategoryShop
 */
class TrCategoryShop
{
    /**
     * @var integer
     */
    private $idCategory;

    /**
     * @var integer
     */
    private $idShop;

    /**
     * @var integer
     */
    private $position;


    /**
     * Set idCategory
     *
     * @param integer $idCategory
     * @return TrCategoryShop
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
     * Set idShop
     *
     * @param integer $idShop
     * @return TrCategoryShop
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
     * Set position
     *
     * @param integer $position
     * @return TrCategoryShop
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
