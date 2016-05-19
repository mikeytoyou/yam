<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrModuleCountry
 */
class TrModuleCountry
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
    private $idCountry;


    /**
     * Set idModule
     *
     * @param integer $idModule
     * @return TrModuleCountry
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
     * @return TrModuleCountry
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
     * Set idCountry
     *
     * @param integer $idCountry
     * @return TrModuleCountry
     */
    public function setIdCountry($idCountry)
    {
        $this->idCountry = $idCountry;

        return $this;
    }

    /**
     * Get idCountry
     *
     * @return integer 
     */
    public function getIdCountry()
    {
        return $this->idCountry;
    }
}
