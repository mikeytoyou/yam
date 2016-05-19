<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrModulePreference
 */
class TrModulePreference
{
    /**
     * @var integer
     */
    private $idModulePreference;

    /**
     * @var integer
     */
    private $idEmployee;

    /**
     * @var string
     */
    private $module;

    /**
     * @var boolean
     */
    private $interest;

    /**
     * @var boolean
     */
    private $favorite;


    /**
     * Get idModulePreference
     *
     * @return integer 
     */
    public function getIdModulePreference()
    {
        return $this->idModulePreference;
    }

    /**
     * Set idEmployee
     *
     * @param integer $idEmployee
     * @return TrModulePreference
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
     * Set module
     *
     * @param string $module
     * @return TrModulePreference
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

    /**
     * Set interest
     *
     * @param boolean $interest
     * @return TrModulePreference
     */
    public function setInterest($interest)
    {
        $this->interest = $interest;

        return $this;
    }

    /**
     * Get interest
     *
     * @return boolean 
     */
    public function getInterest()
    {
        return $this->interest;
    }

    /**
     * Set favorite
     *
     * @param boolean $favorite
     * @return TrModulePreference
     */
    public function setFavorite($favorite)
    {
        $this->favorite = $favorite;

        return $this;
    }

    /**
     * Get favorite
     *
     * @return boolean 
     */
    public function getFavorite()
    {
        return $this->favorite;
    }
}
