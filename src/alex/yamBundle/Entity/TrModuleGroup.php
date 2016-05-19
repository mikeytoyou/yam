<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrModuleGroup
 */
class TrModuleGroup
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
    private $idGroup;


    /**
     * Set idModule
     *
     * @param integer $idModule
     * @return TrModuleGroup
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
     * @return TrModuleGroup
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
     * Set idGroup
     *
     * @param integer $idGroup
     * @return TrModuleGroup
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
