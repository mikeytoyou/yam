<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrTab
 */
class TrTab
{
    /**
     * @var integer
     */
    private $idTab;

    /**
     * @var integer
     */
    private $idParent;

    /**
     * @var string
     */
    private $className;

    /**
     * @var string
     */
    private $module;

    /**
     * @var integer
     */
    private $position;

    /**
     * @var boolean
     */
    private $active;

    /**
     * @var boolean
     */
    private $hideHostMode;


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
     * Set idParent
     *
     * @param integer $idParent
     * @return TrTab
     */
    public function setIdParent($idParent)
    {
        $this->idParent = $idParent;

        return $this;
    }

    /**
     * Get idParent
     *
     * @return integer 
     */
    public function getIdParent()
    {
        return $this->idParent;
    }

    /**
     * Set className
     *
     * @param string $className
     * @return TrTab
     */
    public function setClassName($className)
    {
        $this->className = $className;

        return $this;
    }

    /**
     * Get className
     *
     * @return string 
     */
    public function getClassName()
    {
        return $this->className;
    }

    /**
     * Set module
     *
     * @param string $module
     * @return TrTab
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
     * Set position
     *
     * @param integer $position
     * @return TrTab
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return integer 
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set active
     *
     * @param boolean $active
     * @return TrTab
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return boolean 
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set hideHostMode
     *
     * @param boolean $hideHostMode
     * @return TrTab
     */
    public function setHideHostMode($hideHostMode)
    {
        $this->hideHostMode = $hideHostMode;

        return $this;
    }

    /**
     * Get hideHostMode
     *
     * @return boolean 
     */
    public function getHideHostMode()
    {
        return $this->hideHostMode;
    }
}
