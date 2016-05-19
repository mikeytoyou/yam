<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrLayeredCategory
 */
class TrLayeredCategory
{
    /**
     * @var integer
     */
    private $idLayeredCategory;

    /**
     * @var integer
     */
    private $idShop;

    /**
     * @var integer
     */
    private $idCategory;

    /**
     * @var integer
     */
    private $idValue;

    /**
     * @var string
     */
    private $type;

    /**
     * @var integer
     */
    private $position;

    /**
     * @var integer
     */
    private $filterType;

    /**
     * @var integer
     */
    private $filterShowLimit;


    /**
     * Get idLayeredCategory
     *
     * @return integer 
     */
    public function getIdLayeredCategory()
    {
        return $this->idLayeredCategory;
    }

    /**
     * Set idShop
     *
     * @param integer $idShop
     * @return TrLayeredCategory
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
     * Set idCategory
     *
     * @param integer $idCategory
     * @return TrLayeredCategory
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
     * Set idValue
     *
     * @param integer $idValue
     * @return TrLayeredCategory
     */
    public function setIdValue($idValue)
    {
        $this->idValue = $idValue;

        return $this;
    }

    /**
     * Get idValue
     *
     * @return integer 
     */
    public function getIdValue()
    {
        return $this->idValue;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return TrLayeredCategory
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set position
     *
     * @param integer $position
     * @return TrLayeredCategory
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

    /**
     * Set filterType
     *
     * @param integer $filterType
     * @return TrLayeredCategory
     */
    public function setFilterType($filterType)
    {
        $this->filterType = $filterType;

        return $this;
    }

    /**
     * Get filterType
     *
     * @return integer 
     */
    public function getFilterType()
    {
        return $this->filterType;
    }

    /**
     * Set filterShowLimit
     *
     * @param integer $filterShowLimit
     * @return TrLayeredCategory
     */
    public function setFilterShowLimit($filterShowLimit)
    {
        $this->filterShowLimit = $filterShowLimit;

        return $this;
    }

    /**
     * Get filterShowLimit
     *
     * @return integer 
     */
    public function getFilterShowLimit()
    {
        return $this->filterShowLimit;
    }
}
