<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrGuest
 */
class TrGuest
{
    /**
     * @var integer
     */
    private $idGuest;

    /**
     * @var integer
     */
    private $idOperatingSystem;

    /**
     * @var integer
     */
    private $idWebBrowser;

    /**
     * @var integer
     */
    private $idCustomer;

    /**
     * @var boolean
     */
    private $javascript;

    /**
     * @var integer
     */
    private $screenResolutionX;

    /**
     * @var integer
     */
    private $screenResolutionY;

    /**
     * @var boolean
     */
    private $screenColor;

    /**
     * @var boolean
     */
    private $sunJava;

    /**
     * @var boolean
     */
    private $adobeFlash;

    /**
     * @var boolean
     */
    private $adobeDirector;

    /**
     * @var boolean
     */
    private $appleQuicktime;

    /**
     * @var boolean
     */
    private $realPlayer;

    /**
     * @var boolean
     */
    private $windowsMedia;

    /**
     * @var string
     */
    private $acceptLanguage;

    /**
     * @var boolean
     */
    private $mobileTheme;


    /**
     * Get idGuest
     *
     * @return integer 
     */
    public function getIdGuest()
    {
        return $this->idGuest;
    }

    /**
     * Set idOperatingSystem
     *
     * @param integer $idOperatingSystem
     * @return TrGuest
     */
    public function setIdOperatingSystem($idOperatingSystem)
    {
        $this->idOperatingSystem = $idOperatingSystem;

        return $this;
    }

    /**
     * Get idOperatingSystem
     *
     * @return integer 
     */
    public function getIdOperatingSystem()
    {
        return $this->idOperatingSystem;
    }

    /**
     * Set idWebBrowser
     *
     * @param integer $idWebBrowser
     * @return TrGuest
     */
    public function setIdWebBrowser($idWebBrowser)
    {
        $this->idWebBrowser = $idWebBrowser;

        return $this;
    }

    /**
     * Get idWebBrowser
     *
     * @return integer 
     */
    public function getIdWebBrowser()
    {
        return $this->idWebBrowser;
    }

    /**
     * Set idCustomer
     *
     * @param integer $idCustomer
     * @return TrGuest
     */
    public function setIdCustomer($idCustomer)
    {
        $this->idCustomer = $idCustomer;

        return $this;
    }

    /**
     * Get idCustomer
     *
     * @return integer 
     */
    public function getIdCustomer()
    {
        return $this->idCustomer;
    }

    /**
     * Set javascript
     *
     * @param boolean $javascript
     * @return TrGuest
     */
    public function setJavascript($javascript)
    {
        $this->javascript = $javascript;

        return $this;
    }

    /**
     * Get javascript
     *
     * @return boolean 
     */
    public function getJavascript()
    {
        return $this->javascript;
    }

    /**
     * Set screenResolutionX
     *
     * @param integer $screenResolutionX
     * @return TrGuest
     */
    public function setScreenResolutionX($screenResolutionX)
    {
        $this->screenResolutionX = $screenResolutionX;

        return $this;
    }

    /**
     * Get screenResolutionX
     *
     * @return integer 
     */
    public function getScreenResolutionX()
    {
        return $this->screenResolutionX;
    }

    /**
     * Set screenResolutionY
     *
     * @param integer $screenResolutionY
     * @return TrGuest
     */
    public function setScreenResolutionY($screenResolutionY)
    {
        $this->screenResolutionY = $screenResolutionY;

        return $this;
    }

    /**
     * Get screenResolutionY
     *
     * @return integer 
     */
    public function getScreenResolutionY()
    {
        return $this->screenResolutionY;
    }

    /**
     * Set screenColor
     *
     * @param boolean $screenColor
     * @return TrGuest
     */
    public function setScreenColor($screenColor)
    {
        $this->screenColor = $screenColor;

        return $this;
    }

    /**
     * Get screenColor
     *
     * @return boolean 
     */
    public function getScreenColor()
    {
        return $this->screenColor;
    }

    /**
     * Set sunJava
     *
     * @param boolean $sunJava
     * @return TrGuest
     */
    public function setSunJava($sunJava)
    {
        $this->sunJava = $sunJava;

        return $this;
    }

    /**
     * Get sunJava
     *
     * @return boolean 
     */
    public function getSunJava()
    {
        return $this->sunJava;
    }

    /**
     * Set adobeFlash
     *
     * @param boolean $adobeFlash
     * @return TrGuest
     */
    public function setAdobeFlash($adobeFlash)
    {
        $this->adobeFlash = $adobeFlash;

        return $this;
    }

    /**
     * Get adobeFlash
     *
     * @return boolean 
     */
    public function getAdobeFlash()
    {
        return $this->adobeFlash;
    }

    /**
     * Set adobeDirector
     *
     * @param boolean $adobeDirector
     * @return TrGuest
     */
    public function setAdobeDirector($adobeDirector)
    {
        $this->adobeDirector = $adobeDirector;

        return $this;
    }

    /**
     * Get adobeDirector
     *
     * @return boolean 
     */
    public function getAdobeDirector()
    {
        return $this->adobeDirector;
    }

    /**
     * Set appleQuicktime
     *
     * @param boolean $appleQuicktime
     * @return TrGuest
     */
    public function setAppleQuicktime($appleQuicktime)
    {
        $this->appleQuicktime = $appleQuicktime;

        return $this;
    }

    /**
     * Get appleQuicktime
     *
     * @return boolean 
     */
    public function getAppleQuicktime()
    {
        return $this->appleQuicktime;
    }

    /**
     * Set realPlayer
     *
     * @param boolean $realPlayer
     * @return TrGuest
     */
    public function setRealPlayer($realPlayer)
    {
        $this->realPlayer = $realPlayer;

        return $this;
    }

    /**
     * Get realPlayer
     *
     * @return boolean 
     */
    public function getRealPlayer()
    {
        return $this->realPlayer;
    }

    /**
     * Set windowsMedia
     *
     * @param boolean $windowsMedia
     * @return TrGuest
     */
    public function setWindowsMedia($windowsMedia)
    {
        $this->windowsMedia = $windowsMedia;

        return $this;
    }

    /**
     * Get windowsMedia
     *
     * @return boolean 
     */
    public function getWindowsMedia()
    {
        return $this->windowsMedia;
    }

    /**
     * Set acceptLanguage
     *
     * @param string $acceptLanguage
     * @return TrGuest
     */
    public function setAcceptLanguage($acceptLanguage)
    {
        $this->acceptLanguage = $acceptLanguage;

        return $this;
    }

    /**
     * Get acceptLanguage
     *
     * @return string 
     */
    public function getAcceptLanguage()
    {
        return $this->acceptLanguage;
    }

    /**
     * Set mobileTheme
     *
     * @param boolean $mobileTheme
     * @return TrGuest
     */
    public function setMobileTheme($mobileTheme)
    {
        $this->mobileTheme = $mobileTheme;

        return $this;
    }

    /**
     * Get mobileTheme
     *
     * @return boolean 
     */
    public function getMobileTheme()
    {
        return $this->mobileTheme;
    }
}
