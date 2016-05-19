<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrHookModuleExceptions
 */
class TrHookModuleExceptions
{
    /**
     * @var integer
     */
    private $idHookModuleExceptions;

    /**
     * @var integer
     */
    private $idShop;

    /**
     * @var integer
     */
    private $idModule;

    /**
     * @var integer
     */
    private $idHook;

    /**
     * @var string
     */
    private $fileName;


    /**
     * Get idHookModuleExceptions
     *
     * @return integer 
     */
    public function getIdHookModuleExceptions()
    {
        return $this->idHookModuleExceptions;
    }

    /**
     * Set idShop
     *
     * @param integer $idShop
     * @return TrHookModuleExceptions
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
     * Set idModule
     *
     * @param integer $idModule
     * @return TrHookModuleExceptions
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
     * @return TrHookModuleExceptions
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
     * Set fileName
     *
     * @param string $fileName
     * @return TrHookModuleExceptions
     */
    public function setFileName($fileName)
    {
        $this->fileName = $fileName;

        return $this;
    }

    /**
     * Get fileName
     *
     * @return string 
     */
    public function getFileName()
    {
        return $this->fileName;
    }
}
