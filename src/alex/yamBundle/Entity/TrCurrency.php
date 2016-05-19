<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrCurrency
 */
class TrCurrency
{
    /**
     * @var integer
     */
    private $idCurrency;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $isoCode;

    /**
     * @var string
     */
    private $isoCodeNum;

    /**
     * @var string
     */
    private $sign;

    /**
     * @var boolean
     */
    private $blank;

    /**
     * @var boolean
     */
    private $format;

    /**
     * @var boolean
     */
    private $decimals;

    /**
     * @var string
     */
    private $conversionRate;

    /**
     * @var boolean
     */
    private $deleted;

    /**
     * @var boolean
     */
    private $active;


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
     * Set name
     *
     * @param string $name
     * @return TrCurrency
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

    /**
     * Set isoCode
     *
     * @param string $isoCode
     * @return TrCurrency
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
     * Set isoCodeNum
     *
     * @param string $isoCodeNum
     * @return TrCurrency
     */
    public function setIsoCodeNum($isoCodeNum)
    {
        $this->isoCodeNum = $isoCodeNum;

        return $this;
    }

    /**
     * Get isoCodeNum
     *
     * @return string 
     */
    public function getIsoCodeNum()
    {
        return $this->isoCodeNum;
    }

    /**
     * Set sign
     *
     * @param string $sign
     * @return TrCurrency
     */
    public function setSign($sign)
    {
        $this->sign = $sign;

        return $this;
    }

    /**
     * Get sign
     *
     * @return string 
     */
    public function getSign()
    {
        return $this->sign;
    }

    /**
     * Set blank
     *
     * @param boolean $blank
     * @return TrCurrency
     */
    public function setBlank($blank)
    {
        $this->blank = $blank;

        return $this;
    }

    /**
     * Get blank
     *
     * @return boolean 
     */
    public function getBlank()
    {
        return $this->blank;
    }

    /**
     * Set format
     *
     * @param boolean $format
     * @return TrCurrency
     */
    public function setFormat($format)
    {
        $this->format = $format;

        return $this;
    }

    /**
     * Get format
     *
     * @return boolean 
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * Set decimals
     *
     * @param boolean $decimals
     * @return TrCurrency
     */
    public function setDecimals($decimals)
    {
        $this->decimals = $decimals;

        return $this;
    }

    /**
     * Get decimals
     *
     * @return boolean 
     */
    public function getDecimals()
    {
        return $this->decimals;
    }

    /**
     * Set conversionRate
     *
     * @param string $conversionRate
     * @return TrCurrency
     */
    public function setConversionRate($conversionRate)
    {
        $this->conversionRate = $conversionRate;

        return $this;
    }

    /**
     * Get conversionRate
     *
     * @return string 
     */
    public function getConversionRate()
    {
        return $this->conversionRate;
    }

    /**
     * Set deleted
     *
     * @param boolean $deleted
     * @return TrCurrency
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;

        return $this;
    }

    /**
     * Get deleted
     *
     * @return boolean 
     */
    public function getDeleted()
    {
        return $this->deleted;
    }

    /**
     * Set active
     *
     * @param boolean $active
     * @return TrCurrency
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
