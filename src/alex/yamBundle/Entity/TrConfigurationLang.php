<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrConfigurationLang
 */
class TrConfigurationLang
{
    /**
     * @var integer
     */
    private $idConfiguration;

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
     * Set idConfiguration
     *
     * @param integer $idConfiguration
     * @return TrConfigurationLang
     */
    public function setIdConfiguration($idConfiguration)
    {
        $this->idConfiguration = $idConfiguration;

        return $this;
    }

    /**
     * Get idConfiguration
     *
     * @return integer 
     */
    public function getIdConfiguration()
    {
        return $this->idConfiguration;
    }

    /**
     * Set idLang
     *
     * @param integer $idLang
     * @return TrConfigurationLang
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
     * @return TrConfigurationLang
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
     * @return TrConfigurationLang
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
