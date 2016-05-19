<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrCarrierShop
 */
class TrCarrierShop
{
    /**
     * @var integer
     */
    private $idCarrier;

    /**
     * @var integer
     */
    private $idShop;


    /**
     * Set idCarrier
     *
     * @param integer $idCarrier
     * @return TrCarrierShop
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
     * Set idShop
     *
     * @param integer $idShop
     * @return TrCarrierShop
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
