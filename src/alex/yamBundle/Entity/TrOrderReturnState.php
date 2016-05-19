<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrOrderReturnState
 */
class TrOrderReturnState
{
    /**
     * @var integer
     */
    private $idOrderReturnState;

    /**
     * @var string
     */
    private $color;


    /**
     * Get idOrderReturnState
     *
     * @return integer 
     */
    public function getIdOrderReturnState()
    {
        return $this->idOrderReturnState;
    }

    /**
     * Set color
     *
     * @param string $color
     * @return TrOrderReturnState
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
