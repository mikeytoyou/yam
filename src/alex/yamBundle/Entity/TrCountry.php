<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrCountry
 */
class TrCountry
{
    /**
     * @var integer
     */
    private $idCountry;

    /**
     * @var integer
     */
    private $idZone;

    /**
     * @var integer
     */
    private $idCurrency;

    /**
     * @var string
     */
    private $isoCode;

    /**
     * @var integer
     */
    private $callPrefix;

    /**
     * @var boolean
     */
    private $active;

    /**
     * @var boolean
     */
    private $containsStates;

    /**
     * @var boolean
     */
    private $needIdentificationNumber;

    /**
     * @var boolean
     */
    private $needZipCode;

    /**
     * @var string
     */
    private $zipCodeFormat;

    /**
     * @var boolean
     */
    private $displayTaxLabel;


    /**
     * Get idCountry
     *
     * @return integer 
     */
    public function getIdCountry()
    {
        return $this->idCountry;
    }

    /**
     * Set idZone
     *
     * @param integer $idZone
     * @return TrCountry
     */
    public function setIdZone($idZone)
    {
        $this->idZone = $idZone;

        return $this;
    }

    /**
     * Get idZone
     *
     * @return integer 
     */
    public function getIdZone()
    {
        return $this->idZone;
    }

    /**
     * Set idCurrency
     *
     * @param integer $idCurrency
     * @return TrCountry
     */
    public function setIdCurrency($idCurrency)
    {
        $this->idCurrency = $idCurrency;

        return $this;
    }

    /**
     * Get idCurrency
     *
     * @return integer 
     */
    public function getIdCurrency()
    {
        return $this->idCurrency;
    }

    /**
     * Set isoCode
     *
     * @param string $isoCode
     * @return TrCountry
     */
    public function setIsoCode($isoCode)
    {
        $this->isoCode = $isoCode;

        return $this;
    }

    /**
     * Get isoCode
     *
     * @return string 
     */
    public function getIsoCode()
    {
        return $this->isoCode;
    }

    /**
     * Set callPrefix
     *
     * @param integer $callPrefix
     * @return TrCountry
     */
    public function setCallPrefix($callPrefix)
    {
        $this->callPrefix = $callPrefix;

        return $this;
    }

    /**
     * Get callPrefix
     *
     * @return integer 
     */
    public function getCallPrefix()
    {
        return $this->callPrefix;
    }

    /**
     * Set active
     *
     * @param boolean $active
     * @return TrCountry
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
     * Set containsStates
     *
     * @param boolean $containsStates
     * @return TrCountry
     */
    public function setContainsStates($containsStates)
    {
        $this->containsStates = $containsStates;

        return $this;
    }

    /**
     * Get containsStates
     *
     * @return boolean 
     */
    public function getContainsStates()
    {
        return $this->containsStates;
    }

    /**
     * Set needIdentificationNumber
     *
     * @param boolean $needIdentificationNumber
     * @return TrCountry
     */
    public function setNeedIdentificationNumber($needIdentificationNumber)
    {
        $this->needIdentificationNumber = $needIdentificationNumber;

        return $this;
    }

    /**
     * Get needIdentificationNumber
     *
     * @return boolean 
     */
    public function getNeedIdentificationNumber()
    {
        return $this->needIdentificationNumber;
    }

    /**
     * Set needZipCode
     *
     * @param boolean $needZipCode
     * @return TrCountry
     */
    public function setNeedZipCode($needZipCode)
    {
        $this->needZipCode = $needZipCode;

        return $this;
    }

    /**
     * Get needZipCode
     *
     * @return boolean 
     */
    public function getNeedZipCode()
    {
        return $this->needZipCode;
    }

    /**
     * Set zipCodeFormat
     *
     * @param string $zipCodeFormat
     * @return TrCountry
     */
    public function setZipCodeFormat($zipCodeFormat)
    {
        $this->zipCodeFormat = $zipCodeFormat;

        return $this;
    }

    /**
     * Get zipCodeFormat
     *
     * @return string 
     */
    public function getZipCodeFormat()
    {
        return $this->zipCodeFormat;
    }

    /**
     * Set displayTaxLabel
     *
     * @param boolean $displayTaxLabel
     * @return TrCountry
     */
    public function setDisplayTaxLabel($displayTaxLabel)
    {
        $this->displayTaxLabel = $displayTaxLabel;

        return $this;
    }

    /**
     * Get displayTaxLabel
     *
     * @return boolean 
     */
    public function getDisplayTaxLabel()
    {
        return $this->displayTaxLabel;
    }
}
