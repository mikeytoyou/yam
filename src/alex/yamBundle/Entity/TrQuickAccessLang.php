<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrQuickAccessLang
 */
class TrQuickAccessLang
{
    /**
     * @var integer
     */
    private $idQuickAccess;

    /**
     * @var integer
     */
    private $idLang;

    /**
     * @var string
     */
    private $name;


    /**
     * Set idQuickAccess
     *
     * @param integer $idQuickAccess
     * @return TrQuickAccessLang
     */
    public function setIdQuickAccess($idQuickAccess)
    {
        $this->idQuickAccess = $idQuickAccess;

        return $this;
    }

    /**
     * Get idQuickAccess
     *
     * @return integer 
     */
    public function getIdQuickAccess()
    {
        return $this->idQuickAccess;
    }

    /**
     * Set idLang
     *
     * @param integer $idLang
     * @return TrQuickAccessLang
     */
    public function setIdLang($idLang)
    {
        $this->idLang = $idLang;

        return $this;
    }

    /**
     * Get idLang
     *
     * @return integer 
     */
    public function getIdLang()
    {
        return $this->idLang;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return TrQuickAccessLang
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }
}
