<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrModuleCurrency
 */
class TrModuleCurrency
{
    /**
     * @var integer
     */
    private $idModule;

    /**
     * @var integer
     */
    private $idShop;

    /**
     * @var integer
     */
    private $idCurrency;


    /**
     * Set idModule
     *
     * @param integer $idModule
     * @return TrModuleCurrency
     */
    public function setIdModule($idModule)
    {
        $this->idModule = $idModule;

        return $this;
    }

    /**
     * Get idModule
     *
     * @return integer 
     */
    public function getIdModule()
    {
        return $this->idModule;
    }

    /**
     * Set idShop
     *
     * @param integer $idShop
     * @return TrModuleCurrency
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
     * Set idCurrency
     *
     * @param integer $idCurrency
     * @return TrModuleCurrency
     */
    public function setIdCurrency($idCurrency)
    {
        $this->idCurrency = $idCurrency;

        return $this;
    }

    /**
     * Get idCurrency
     *
     * @return integer 
     */
    public function getIdCurrency()
    {
        return $this->idCurrency;
    }
}
