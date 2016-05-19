<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrZoneShop
 */
class TrZoneShop
{
    /**
     * @var integer
     */
    private $idZone;

    /**
     * @var integer
     */
    private $idShop;


    /**
     * Set idZone
     *
     * @param integer $idZone
     * @return TrZoneShop
     */
    public function setIdZone($idZone)
    {
        $this->idZone = $idZone;

        return $this;
    }

    /**
     * Get idZone
     *
     * @return integer 
     */
    public function getIdZone()
    {
        return $this->idZone;
    }

    /**
     * Set idShop
     *
     * @param integer $idShop
     * @return TrZoneShop
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
}
