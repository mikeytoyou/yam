<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrWebserviceAccount
 */
class TrWebserviceAccount
{
    /**
     * @var integer
     */
    private $idWebserviceAccount;

    /**
     * @var string
     */
    private $key;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $className;

    /**
     * @var boolean
     */
    private $isModule;

    /**
     * @var string
     */
    private $moduleName;

    /**
     * @var boolean
     */
    private $active;


    /**
     * Get idWebserviceAccount
     *
     * @return integer 
     */
    public function getIdWebserviceAccount()
    {
        return $this->idWebserviceAccount;
    }

    /**
     * Set key
     *
     * @param string $key
     * @return TrWebserviceAccount
     */
    public function setKey($key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * Get key
     *
     * @return string 
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return TrWebserviceAccount
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set className
     *
     * @param string $className
     * @return TrWebserviceAccount
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
     * Set isModule
     *
     * @param boolean $isModule
     * @return TrWebserviceAccount
     */
    public function setIsModule($isModule)
    {
        $this->isModule = $isModule;

        return $this;
    }

    /**
     * Get isModule
     *
     * @return boolean 
     */
    public function getIsModule()
    {
        return $this->isModule;
    }

    /**
     * Set moduleName
     *
     * @param string $moduleName
     * @return TrWebserviceAccount
     */
    public function setModuleName($moduleName)
    {
        $this->moduleName = $moduleName;

        return $this;
    }

    /**
     * Get moduleName
     *
     * @return string 
     */
    public function getModuleName()
    {
        return $this->moduleName;
    }

    /**
     * Set active
     *
     * @param boolean $active
     * @return TrWebserviceAccount
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
}
