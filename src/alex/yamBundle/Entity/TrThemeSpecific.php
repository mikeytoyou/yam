<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrThemeSpecific
 */
class TrThemeSpecific
{
    /**
     * @var integer
     */
    private $idTheme;

    /**
     * @var integer
     */
    private $idShop;

    /**
     * @var integer
     */
    private $entity;

    /**
     * @var integer
     */
    private $idObject;


    /**
     * Set idTheme
     *
     * @param integer $idTheme
     * @return TrThemeSpecific
     */
    public function setIdTheme($idTheme)
    {
        $this->idTheme = $idTheme;

        return $this;
    }

    /**
     * Get idTheme
     *
     * @return integer 
     */
    public function getIdTheme()
    {
        return $this->idTheme;
    }

    /**
     * Set idShop
     *
     * @param integer $idShop
     * @return TrThemeSpecific
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
     * Set entity
     *
     * @param integer $entity
     * @return TrThemeSpecific
     */
    public function setEntity($entity)
    {
        $this->entity = $entity;

        return $this;
    }

    /**
     * Get entity
     *
     * @return integer 
     */
    public function getEntity()
    {
        return $this->entity;
    }

    /**
     * Set idObject
     *
     * @param integer $idObject
     * @return TrThemeSpecific
     */
    public function setIdObject($idObject)
    {
        $this->idObject = $idObject;

        return $this;
    }

    /**
     * Get idObject
     *
     * @return integer 
     */
    public function getIdObject()
    {
        return $this->idObject;
    }
}
