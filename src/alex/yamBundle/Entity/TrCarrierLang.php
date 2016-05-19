<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrCarrierLang
 */
class TrCarrierLang
{
    /**
     * @var integer
     */
    private $idLang;

    /**
     * @var integer
     */
    private $idShop;

    /**
     * @var integer
     */
    private $idCarrier;

    /**
     * @var string
     */
    private $delay;


    /**
     * Set idLang
     *
     * @param integer $idLang
     * @return TrCarrierLang
     */
    public function setIdLang($idLang)
    {
        $this->idLang = $idLang;

        return $this;
    }

    /**
     * Get idLang
     *
     * @return integer 
     */
    public function getIdLang()
    {
        return $this->idLang;
    }

    /**
     * Set idShop
     *
     * @param integer $idShop
     * @return TrCarrierLang
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
     * Set idCarrier
     *
     * @param integer $idCarrier
     * @return TrCarrierLang
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
     * Set delay
     *
     * @param string $delay
     * @return TrCarrierLang
     */
    public function setDelay($delay)
    {
        $this->delay = $delay;

        return $this;
    }

    /**
     * Get delay
     *
     * @return string 
     */
    public function getDelay()
    {
        return $this->delay;
    }
}
