<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrCategoryGroup
 */
class TrCategoryGroup
{
    /**
     * @var integer
     */
    private $idCategory;

    /**
     * @var integer
     */
    private $idGroup;


    /**
     * Set idCategory
     *
     * @param integer $idCategory
     * @return TrCategoryGroup
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
     * Set idGroup
     *
     * @param integer $idGroup
     * @return TrCategoryGroup
     */
    public function setIdGroup($idGroup)
    {
        $this->idGroup = $idGroup;

        return $this;
    }

    /**
     * Get idGroup
     *
     * @return integer 
     */
    public function getIdGroup()
    {
        return $this->idGroup;
    }
}
