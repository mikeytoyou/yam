<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrModuleShop
 */
class TrModuleShop
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
     * @var boolean
     */
    private $enableDevice;


    /**
     * Set idModule
     *
     * @param integer $idModule
     * @return TrModuleShop
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
     * @return TrModuleShop
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
     * Set enableDevice
     *
     * @param boolean $enableDevice
     * @return TrModuleShop
     */
    public function setEnableDevice($enableDevice)
    {
        $this->enableDevice = $enableDevice;

        return $this;
    }

    /**
     * Get enableDevice
     *
     * @return boolean 
     */
    public function getEnableDevice()
    {
        return $this->enableDevice;
    }
}
