<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrModuleAccess
 */
class TrModuleAccess
{
    /**
     * @var integer
     */
    private $idProfile;

    /**
     * @var integer
     */
    private $idModule;

    /**
     * @var boolean
     */
    private $view;

    /**
     * @var boolean
     */
    private $configure;


    /**
     * Set idProfile
     *
     * @param integer $idProfile
     * @return TrModuleAccess
     */
    public function setIdProfile($idProfile)
    {
        $this->idProfile = $idProfile;

        return $this;
    }

    /**
     * Get idProfile
     *
     * @return integer 
     */
    public function getIdProfile()
    {
        return $this->idProfile;
    }

    /**
     * Set idModule
     *
     * @param integer $idModule
     * @return TrModuleAccess
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
     * Set view
     *
     * @param boolean $view
     * @return TrModuleAccess
     */
    public function setView($view)
    {
        $this->view = $view;

        return $this;
    }

    /**
     * Get view
     *
     * @return boolean 
     */
    public function getView()
    {
        return $this->view;
    }

    /**
     * Set configure
     *
     * @param boolean $configure
     * @return TrModuleAccess
     */
    public function setConfigure($configure)
    {
        $this->configure = $configure;

        return $this;
    }

    /**
     * Get configure
     *
     * @return boolean 
     */
    public function getConfigure()
    {
        return $this->configure;
    }
}
