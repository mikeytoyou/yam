<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrHomesliderSlides
 */
class TrHomesliderSlides
{
    /**
     * @var integer
     */
    private $idHomesliderSlides;

    /**
     * @var integer
     */
    private $position;

    /**
     * @var boolean
     */
    private $active;


    /**
     * Get idHomesliderSlides
     *
     * @return integer 
     */
    public function getIdHomesliderSlides()
    {
        return $this->idHomesliderSlides;
    }

    /**
     * Set position
     *
     * @param integer $position
     * @return TrHomesliderSlides
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
     * Set active
     *
     * @param boolean $active
     * @return TrHomesliderSlides
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return boolean 
     */
    public function getActive()
    {
        return $this->active;
    }
}
