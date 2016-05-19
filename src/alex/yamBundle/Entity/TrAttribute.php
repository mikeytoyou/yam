<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrAttribute
 */
class TrAttribute
{
    /**
     * @var integer
     */
    private $idAttribute;

    /**
     * @var integer
     */
    private $idAttributeGroup;

    /**
     * @var string
     */
    private $color;

    /**
     * @var integer
     */
    private $position;


    /**
     * Get idAttribute
     *
     * @return integer 
     */
    public function getIdAttribute()
    {
        return $this->idAttribute;
    }

    /**
     * Set idAttributeGroup
     *
     * @param integer $idAttributeGroup
     * @return TrAttribute
     */
    public function setIdAttributeGroup($idAttributeGroup)
    {
        $this->idAttributeGroup = $idAttributeGroup;

        return $this;
    }

    /**
     * Get idAttributeGroup
     *
     * @return integer 
     */
    public function getIdAttributeGroup()
    {
        return $this->idAttributeGroup;
    }

    /**
     * Set color
     *
     * @param string $color
     * @return TrAttribute
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get color
     *
     * @return string 
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set position
     *
     * @param integer $position
     * @return TrAttribute
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
