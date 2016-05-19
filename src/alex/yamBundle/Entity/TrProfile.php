<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrProfile
 */
class TrProfile
{
    /**
     * @var integer
     */
    private $idProfile;

    /**
     * @var boolean
     */
    private $supervicion;


    /**
     * Get idProfile
     *
     * @return integer 
     */
    public function getIdProfile()
    {
        return $this->idProfile;
    }

    /**
     * Set supervicion
     *
     * @param boolean $supervicion
     * @return TrProfile
     */
    public function setSupervicion($supervicion)
    {
        $this->supervicion = $supervicion;

        return $this;
    }

    /**
     * Get supervicion
     *
     * @return boolean 
     */
    public function getSupervicion()
    {
        return $this->supervicion;
    }
}
