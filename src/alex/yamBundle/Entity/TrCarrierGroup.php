<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrCarrierGroup
 */
class TrCarrierGroup
{
    /**
     * @var integer
     */
    private $idCarrier;

    /**
     * @var integer
     */
    private $idGroup;


    /**
     * Set idCarrier
     *
     * @param integer $idCarrier
     * @return TrCarrierGroup
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
     * Set idGroup
     *
     * @param integer $idGroup
     * @return TrCarrierGroup
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
