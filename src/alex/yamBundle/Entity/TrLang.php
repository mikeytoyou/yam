<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrLang
 */
class TrLang
{
    /**
     * @var integer
     */
    private $idLang;

    /**
     * @var string
     */
    private $name;

    /**
     * @var boolean
     */
    private $active;

    /**
     * @var string
     */
    private $isoCode;

    /**
     * @var string
     */
    private $languageCode;

    /**
     * @var string
     */
    private $dateFormatLite;

    /**
     * @var string
     */
    private $dateFormatFull;

    /**
     * @var boolean
     */
    private $isRtl;


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
     * @return TrLang
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
     * Set active
     *
     * @param boolean $active
     * @return TrLang
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
     * Set isoCode
     *
     * @param string $isoCode
     * @return TrLang
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
     * Set languageCode
     *
     * @param string $languageCode
     * @return TrLang
     */
    public function setLanguageCode($languageCode)
    {
        $this->languageCode = $languageCode;

        return $this;
    }

    /**
     * Get languageCode
     *
     * @return string 
     */
    public function getLanguageCode()
    {
        return $this->languageCode;
    }

    /**
     * Set dateFormatLite
     *
     * @param string $dateFormatLite
     * @return TrLang
     */
    public function setDateFormatLite($dateFormatLite)
    {
        $this->dateFormatLite = $dateFormatLite;

        return $this;
    }

    /**
     * Get dateFormatLite
     *
     * @return string 
     */
    public function getDateFormatLite()
    {
        return $this->dateFormatLite;
    }

    /**
     * Set dateFormatFull
     *
     * @param string $dateFormatFull
     * @return TrLang
     */
    public function setDateFormatFull($dateFormatFull)
    {
        $this->dateFormatFull = $dateFormatFull;

        return $this;
    }

    /**
     * Get dateFormatFull
     *
     * @return string 
     */
    public function getDateFormatFull()
    {
        return $this->dateFormatFull;
    }

    /**
     * Set isRtl
     *
     * @param boolean $isRtl
     * @return TrLang
     */
    public function setIsRtl($isRtl)
    {
        $this->isRtl = $isRtl;

        return $this;
    }

    /**
     * Get isRtl
     *
     * @return boolean 
     */
    public function getIsRtl()
    {
        return $this->isRtl;
    }
}
