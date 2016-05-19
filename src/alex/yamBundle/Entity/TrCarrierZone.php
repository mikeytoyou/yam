<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrCarrierZone
 */
class TrCarrierZone
{
    /**
     * @var integer
     */
    private $idCarrier;

    /**
     * @var integer
     */
    private $idZone;


    /**
     * Set idCarrier
     *
     * @param integer $idCarrier
     * @return TrCarrierZone
     */
    public function setIdCarrier($idCarrier)
    {
        $this->idCarrier = $idCarrier;

        return $this;
    }

    /**
     * Get idCarrier
     *
     * @return integer 
     */
    public function getIdCarrier()
    {
        return $this->idCarrier;
    }

    /**
     * Set idZone
     *
     * @param integer $idZone
     * @return TrCarrierZone
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
}
