<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrEmployee
 */
class TrEmployee
{
    /**
     * @var integer
     */
    private $idEmployee;

    /**
     * @var integer
     */
    private $idProfile;

    /**
     * @var integer
     */
    private $idLang;

    /**
     * @var string
     */
    private $lastname;

    /**
     * @var string
     */
    private $firstname;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $passwd;

    /**
     * @var \DateTime
     */
    private $lastPasswdGen;

    /**
     * @var \DateTime
     */
    private $statsDateFrom;

    /**
     * @var \DateTime
     */
    private $statsDateTo;

    /**
     * @var \DateTime
     */
    private $statsCompareFrom;

    /**
     * @var \DateTime
     */
    private $statsCompareTo;

    /**
     * @var integer
     */
    private $statsCompareOption;

    /**
     * @var string
     */
    private $preselectDateRange;

    /**
     * @var string
     */
    private $boColor;

    /**
     * @var string
     */
    private $boTheme;

    /**
     * @var string
     */
    private $boCss;

    /**
     * @var integer
     */
    private $defaultTab;

    /**
     * @var integer
     */
    private $boWidth;

    /**
     * @var boolean
     */
    private $boMenu;

    /**
     * @var boolean
     */
    private $active;

    /**
     * @var boolean
     */
    private $optin;

    /**
     * @var integer
     */
    private $idLastOrder;

    /**
     * @var integer
     */
    private $idLastCustomerMessage;

    /**
     * @var integer
     */
    private $idLastCustomer;

    /**
     * @var boolean
     */
    private $employeeTaxe;

    /**
     * @var boolean
     */
    private $boMenuVentas;

    /**
     * @var integer
     */
    private $supervisa;


    /**
     * Get idEmployee
     *
     * @return integer 
     */
    public function getIdEmployee()
    {
        return $this->idEmployee;
    }

    /**
     * Set idProfile
     *
     * @param integer $idProfile
     * @return TrEmployee
     */
    public function setIdProfile($idProfile)
    {
        $this->idProfile = $idProfile;

        return $this;
    }

    /**
     * Get idProfile
     *
     * @return integer 
     */
    public function getIdProfile()
    {
        return $this->idProfile;
    }

    /**
     * Set idLang
     *
     * @param integer $idLang
     * @return TrEmployee
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
     * Set lastname
     *
     * @param string $lastname
     * @return TrEmployee
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string 
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     * @return TrEmployee
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string 
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return TrEmployee
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set passwd
     *
     * @param string $passwd
     * @return TrEmployee
     */
    public function setPasswd($passwd)
    {
        $this->passwd = $passwd;

        return $this;
    }

    /**
     * Get passwd
     *
     * @return string 
     */
    public function getPasswd()
    {
        return $this->passwd;
    }

    /**
     * Set lastPasswdGen
     *
     * @param \DateTime $lastPasswdGen
     * @return TrEmployee
     */
    public function setLastPasswdGen($lastPasswdGen)
    {
        $this->lastPasswdGen = $lastPasswdGen;

        return $this;
    }

    /**
     * Get lastPasswdGen
     *
     * @return \DateTime 
     */
    public function getLastPasswdGen()
    {
        return $this->lastPasswdGen;
    }

    /**
     * Set statsDateFrom
     *
     * @param \DateTime $statsDateFrom
     * @return TrEmployee
     */
    public function setStatsDateFrom($statsDateFrom)
    {
        $this->statsDateFrom = $statsDateFrom;

        return $this;
    }

    /**
     * Get statsDateFrom
     *
     * @return \DateTime 
     */
    public function getStatsDateFrom()
    {
        return $this->statsDateFrom;
    }

    /**
     * Set statsDateTo
     *
     * @param \DateTime $statsDateTo
     * @return TrEmployee
     */
    public function setStatsDateTo($statsDateTo)
    {
        $this->statsDateTo = $statsDateTo;

        return $this;
    }

    /**
     * Get statsDateTo
     *
     * @return \DateTime 
     */
    public function getStatsDateTo()
    {
        return $this->statsDateTo;
    }

    /**
     * Set statsCompareFrom
     *
     * @param \DateTime $statsCompareFrom
     * @return TrEmployee
     */
    public function setStatsCompareFrom($statsCompareFrom)
    {
        $this->statsCompareFrom = $statsCompareFrom;

        return $this;
    }

    /**
     * Get statsCompareFrom
     *
     * @return \DateTime 
     */
    public function getStatsCompareFrom()
    {
        return $this->statsCompareFrom;
    }

    /**
     * Set statsCompareTo
     *
     * @param \DateTime $statsCompareTo
     * @return TrEmployee
     */
    public function setStatsCompareTo($statsCompareTo)
    {
        $this->statsCompareTo = $statsCompareTo;

        return $this;
    }

    /**
     * Get statsCompareTo
     *
     * @return \DateTime 
     */
    public function getStatsCompareTo()
    {
        return $this->statsCompareTo;
    }

    /**
     * Set statsCompareOption
     *
     * @param integer $statsCompareOption
     * @return TrEmployee
     */
    public function setStatsCompareOption($statsCompareOption)
    {
        $this->statsCompareOption = $statsCompareOption;

        return $this;
    }

    /**
     * Get statsCompareOption
     *
     * @return integer 
     */
    public function getStatsCompareOption()
    {
        return $this->statsCompareOption;
    }

    /**
     * Set preselectDateRange
     *
     * @param string $preselectDateRange
     * @return TrEmployee
     */
    public function setPreselectDateRange($preselectDateRange)
    {
        $this->preselectDateRange = $preselectDateRange;

        return $this;
    }

    /**
     * Get preselectDateRange
     *
     * @return string 
     */
    public function getPreselectDateRange()
    {
        return $this->preselectDateRange;
    }

    /**
     * Set boColor
     *
     * @param string $boColor
     * @return TrEmployee
     */
    public function setBoColor($boColor)
    {
        $this->boColor = $boColor;

        return $this;
    }

    /**
     * Get boColor
     *
     * @return string 
     */
    public function getBoColor()
    {
        return $this->boColor;
    }

    /**
     * Set boTheme
     *
     * @param string $boTheme
     * @return TrEmployee
     */
    public function setBoTheme($boTheme)
    {
        $this->boTheme = $boTheme;

        return $this;
    }

    /**
     * Get boTheme
     *
     * @return string 
     */
    public function getBoTheme()
    {
        return $this->boTheme;
    }

    /**
     * Set boCss
     *
     * @param string $boCss
     * @return TrEmployee
     */
    public function setBoCss($boCss)
    {
        $this->boCss = $boCss;

        return $this;
    }

    /**
     * Get boCss
     *
     * @return string 
     */
    public function getBoCss()
    {
        return $this->boCss;
    }

    /**
     * Set defaultTab
     *
     * @param integer $defaultTab
     * @return TrEmployee
     */
    public function setDefaultTab($defaultTab)
    {
        $this->defaultTab = $defaultTab;

        return $this;
    }

    /**
     * Get defaultTab
     *
     * @return integer 
     */
    public function getDefaultTab()
    {
        return $this->defaultTab;
    }

    /**
     * Set boWidth
     *
     * @param integer $boWidth
     * @return TrEmployee
     */
    public function setBoWidth($boWidth)
    {
        $this->boWidth = $boWidth;

        return $this;
    }

    /**
     * Get boWidth
     *
     * @return integer 
     */
    public function getBoWidth()
    {
        return $this->boWidth;
    }

    /**
     * Set boMenu
     *
     * @param boolean $boMenu
     * @return TrEmployee
     */
    public function setBoMenu($boMenu)
    {
        $this->boMenu = $boMenu;

        return $this;
    }

    /**
     * Get boMenu
     *
     * @return boolean 
     */
    public function getBoMenu()
    {
        return $this->boMenu;
    }

    /**
     * Set active
     *
     * @param boolean $active
     * @return TrEmployee
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
     * Set optin
     *
     * @param boolean $optin
     * @return TrEmployee
     */
    public function setOptin($optin)
    {
        $this->optin = $optin;

        return $this;
    }

    /**
     * Get optin
     *
     * @return boolean 
     */
    public function getOptin()
    {
        return $this->optin;
    }

    /**
     * Set idLastOrder
     *
     * @param integer $idLastOrder
     * @return TrEmployee
     */
    public function setIdLastOrder($idLastOrder)
    {
        $this->idLastOrder = $idLastOrder;

        return $this;
    }

    /**
     * Get idLastOrder
     *
     * @return integer 
     */
    public function getIdLastOrder()
    {
        return $this->idLastOrder;
    }

    /**
     * Set idLastCustomerMessage
     *
     * @param integer $idLastCustomerMessage
     * @return TrEmployee
     */
    public function setIdLastCustomerMessage($idLastCustomerMessage)
    {
        $this->idLastCustomerMessage = $idLastCustomerMessage;

        return $this;
    }

    /**
     * Get idLastCustomerMessage
     *
     * @return integer 
     */
    public function getIdLastCustomerMessage()
    {
        return $this->idLastCustomerMessage;
    }

    /**
     * Set idLastCustomer
     *
     * @param integer $idLastCustomer
     * @return TrEmployee
     */
    public function setIdLastCustomer($idLastCustomer)
    {
        $this->idLastCustomer = $idLastCustomer;

        return $this;
    }

    /**
     * Get idLastCustomer
     *
     * @return integer 
     */
    public function getIdLastCustomer()
    {
        return $this->idLastCustomer;
    }

    /**
     * Set employeeTaxe
     *
     * @param boolean $employeeTaxe
     * @return TrEmployee
     */
    public function setEmployeeTaxe($employeeTaxe)
    {
        $this->employeeTaxe = $employeeTaxe;

        return $this;
    }

    /**
     * Get employeeTaxe
     *
     * @return boolean 
     */
    public function getEmployeeTaxe()
    {
        return $this->employeeTaxe;
    }

    /**
     * Set boMenuVentas
     *
     * @param boolean $boMenuVentas
     * @return TrEmployee
     */
    public function setBoMenuVentas($boMenuVentas)
    {
        $this->boMenuVentas = $boMenuVentas;

        return $this;
    }

    /**
     * Get boMenuVentas
     *
     * @return boolean 
     */
    public function getBoMenuVentas()
    {
        return $this->boMenuVentas;
    }

    /**
     * Set supervisa
     *
     * @param integer $supervisa
     * @return TrEmployee
     */
    public function setSupervisa($supervisa)
    {
        $this->supervisa = $supervisa;

        return $this;
    }

    /**
     * Get supervisa
     *
     * @return integer 
     */
    public function getSupervisa()
    {
        return $this->supervisa;
    }
}
