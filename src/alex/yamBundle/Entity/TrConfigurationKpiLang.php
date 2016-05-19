<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrConfigurationKpiLang
 */
class TrConfigurationKpiLang
{
    /**
     * @var integer
     */
    private $idConfigurationKpi;

    /**
     * @var integer
     */
    private $idLang;

    /**
     * @var string
     */
    private $value;

    /**
     * @var \DateTime
     */
    private $dateUpd;


    /**
     * Set idConfigurationKpi
     *
     * @param integer $idConfigurationKpi
     * @return TrConfigurationKpiLang
     */
    public function setIdConfigurationKpi($idConfigurationKpi)
    {
        $this->idConfigurationKpi = $idConfigurationKpi;

        return $this;
    }

    /**
     * Get idConfigurationKpi
     *
     * @return integer 
     */
    public function getIdConfigurationKpi()
    {
        return $this->idConfigurationKpi;
    }

    /**
     * Set idLang
     *
     * @param integer $idLang
     * @return TrConfigurationKpiLang
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
     * Set value
     *
     * @param string $value
     * @return TrConfigurationKpiLang
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return string 
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set dateUpd
     *
     * @param \DateTime $dateUpd
     * @return TrConfigurationKpiLang
     */
    public function setDateUpd($dateUpd)
    {
        $this->dateUpd = $dateUpd;

        return $this;
    }

    /**
     * Get dateUpd
     *
     * @return \DateTime 
     */
    public function getDateUpd()
    {
        return $this->dateUpd;
    }
}
