<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrGroupReduction
 */
class TrGroupReduction
{
    /**
     * @var integer
     */
    private $idGroupReduction;

    /**
     * @var integer
     */
    private $idGroup;

    /**
     * @var integer
     */
    private $idCategory;

    /**
     * @var string
     */
    private $reduction;


    /**
     * Get idGroupReduction
     *
     * @return integer 
     */
    public function getIdGroupReduction()
    {
        return $this->idGroupReduction;
    }

    /**
     * Set idGroup
     *
     * @param integer $idGroup
     * @return TrGroupReduction
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

    /**
     * Set idCategory
     *
     * @param integer $idCategory
     * @return TrGroupReduction
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
     * Set reduction
     *
     * @param string $reduction
     * @return TrGroupReduction
     */
    public function setReduction($reduction)
    {
        $this->reduction = $reduction;

        return $this;
    }

    /**
     * Get reduction
     *
     * @return string 
     */
    public function getReduction()
    {
        return $this->reduction;
    }
}
