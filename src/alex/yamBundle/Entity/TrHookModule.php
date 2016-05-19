<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrHookModule
 */
class TrHookModule
{
    /**
     * @var integer
     */
    private $idModule;

    /**
     * @var integer
     */
    private $idHook;

    /**
     * @var integer
     */
    private $idShop;

    /**
     * @var boolean
     */
    private $position;


    /**
     * Set idModule
     *
     * @param integer $idModule
     * @return TrHookModule
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
     * Set idHook
     *
     * @param integer $idHook
     * @return TrHookModule
     */
    public function setIdHook($idHook)
    {
        $this->idHook = $idHook;

        return $this;
    }

    /**
     * Get idHook
     *
     * @return integer 
     */
    public function getIdHook()
    {
        return $this->idHook;
    }

    /**
     * Set idShop
     *
     * @param integer $idShop
     * @return TrHookModule
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
     * Set position
     *
     * @param boolean $position
     * @return TrHookModule
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return boolean 
     */
    public function getPosition()
    {
        return $this->position;
    }
}
