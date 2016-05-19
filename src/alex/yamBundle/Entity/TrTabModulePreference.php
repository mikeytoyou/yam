<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrTabModulePreference
 */
class TrTabModulePreference
{
    /**
     * @var integer
     */
    private $idTabModulePreference;

    /**
     * @var integer
     */
    private $idEmployee;

    /**
     * @var integer
     */
    private $idTab;

    /**
     * @var string
     */
    private $module;


    /**
     * Get idTabModulePreference
     *
     * @return integer 
     */
    public function getIdTabModulePreference()
    {
        return $this->idTabModulePreference;
    }

    /**
     * Set idEmployee
     *
     * @param integer $idEmployee
     * @return TrTabModulePreference
     */
    public function setIdEmployee($idEmployee)
    {
        $this->idEmployee = $idEmployee;

        return $this;
    }

    /**
     * Get idEmployee
     *
     * @return integer 
     */
    public function getIdEmployee()
    {
        return $this->idEmployee;
    }

    /**
     * Set idTab
     *
     * @param integer $idTab
     * @return TrTabModulePreference
     */
    public function setIdTab($idTab)
    {
        $this->idTab = $idTab;

        return $this;
    }

    /**
     * Get idTab
     *
     * @return integer 
     */
    public function getIdTab()
    {
        return $this->idTab;
    }

    /**
     * Set module
     *
     * @param string $module
     * @return TrTabModulePreference
     */
    public function setModule($module)
    {
        $this->module = $module;

        return $this;
    }

    /**
     * Get module
     *
     * @return string 
     */
    public function getModule()
    {
        return $this->module;
    }
}
