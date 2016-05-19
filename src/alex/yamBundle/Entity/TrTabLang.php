<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrTabLang
 */
class TrTabLang
{
    /**
     * @var integer
     */
    private $idTab;

    /**
     * @var integer
     */
    private $idLang;

    /**
     * @var string
     */
    private $name;


    /**
     * Set idTab
     *
     * @param integer $idTab
     * @return TrTabLang
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
     * Set idLang
     *
     * @param integer $idLang
     * @return TrTabLang
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
     * @return TrTabLang
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
