<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrRisk
 */
class TrRisk
{
    /**
     * @var integer
     */
    private $idRisk;

    /**
     * @var boolean
     */
    private $percent;

    /**
     * @var string
     */
    private $color;


    /**
     * Get idRisk
     *
     * @return integer 
     */
    public function getIdRisk()
    {
        return $this->idRisk;
    }

    /**
     * Set percent
     *
     * @param boolean $percent
     * @return TrRisk
     */
    public function setPercent($percent)
    {
        $this->percent = $percent;

        return $this;
    }

    /**
     * Get percent
     *
     * @return boolean 
     */
    public function getPercent()
    {
        return $this->percent;
    }

    /**
     * Set color
     *
     * @param string $color
     * @return TrRisk
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
}
