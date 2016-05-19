<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrRiskLang
 */
class TrRiskLang
{
    /**
     * @var integer
     */
    private $idRisk;

    /**
     * @var integer
     */
    private $idLang;

    /**
     * @var string
     */
    private $name;


    /**
     * Set idRisk
     *
     * @param integer $idRisk
     * @return TrRiskLang
     */
    public function setIdRisk($idRisk)
    {
        $this->idRisk = $idRisk;

        return $this;
    }

    /**
     * Get idRisk
     *
     * @return integer 
     */
    public function getIdRisk()
    {
        return $this->idRisk;
    }

    /**
     * Set idLang
     *
     * @param integer $idLang
     * @return TrRiskLang
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
     * @return TrRiskLang
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
