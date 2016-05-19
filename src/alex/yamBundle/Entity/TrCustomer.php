<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrCustomer
 */
class TrCustomer
{
    /**
     * @var integer
     */
    private $idCustomer;

    /**
     * @var integer
     */
    private $idShopGroup;

    /**
     * @var integer
     */
    private $idShop;

    /**
     * @var integer
     */
    private $idGender;

    /**
     * @var integer
     */
    private $idDefaultGroup;

    /**
     * @var integer
     */
    private $idLang;

    /**
     * @var integer
     */
    private $idRisk;

    /**
     * @var string
     */
    private $company;

    /**
     * @var string
     */
    private $siret;

    /**
     * @var string
     */
    private $ape;

    /**
     * @var string
     */
    private $firstname;

    /**
     * @var string
     */
    private $lastname;

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
    private $birthday;

    /**
     * @var boolean
     */
    private $newsletter;

    /**
     * @var string
     */
    private $ipRegistrationNewsletter;

    /**
     * @var \DateTime
     */
    private $newsletterDateAdd;

    /**
     * @var boolean
     */
    private $optin;

    /**
     * @var string
     */
    private $website;

    /**
     * @var string
     */
    private $outstandingAllowAmount;

    /**
     * @var boolean
     */
    private $showPublicPrices;

    /**
     * @var integer
     */
    private $maxPaymentDays;

    /**
     * @var string
     */
    private $secureKey;

    /**
     * @var string
     */
    private $note;

    /**
     * @var boolean
     */
    private $active;

    /**
     * @var boolean
     */
    private $isGuest;

    /**
     * @var boolean
     */
    private $deleted;

    /**
     * @var \DateTime
     */
    private $dateAdd;

    /**
     * @var \DateTime
     */
    private $dateUpd;

    /**
     * @var string
     */
    private $secondname;

    /**
     * @var string
     */
    private $thirdname;

    /**
     * @var string
     */
    private $cellphone;

    /**
     * @var string
     */
    private $phone;

    /**
     * @var integer
     */
    private $idDocument;

    /**
     * @var string
     */
    private $numDocument;

    /**
     * @var integer
     */
    private $idSupplier;

    /**
     * @var integer
     */
    private $idPadre;


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
     * Set idShopGroup
     *
     * @param integer $idShopGroup
     * @return TrCustomer
     */
    public function setIdShopGroup($idShopGroup)
    {
        $this->idShopGroup = $idShopGroup;

        return $this;
    }

    /**
     * Get idShopGroup
     *
     * @return integer 
     */
    public function getIdShopGroup()
    {
        return $this->idShopGroup;
    }

    /**
     * Set idShop
     *
     * @param integer $idShop
     * @return TrCustomer
     */
    public function setIdShop($idShop)
    {
        $this->idShop = $idShop;

        return $this;
    }

    /**
     * Get idShop
     *
     * @return integer 
     */
    public function getIdShop()
    {
        return $this->idShop;
    }

    /**
     * Set idGender
     *
     * @param integer $idGender
     * @return TrCustomer
     */
    public function setIdGender($idGender)
    {
        $this->idGender = $idGender;

        return $this;
    }

    /**
     * Get idGender
     *
     * @return integer 
     */
    public function getIdGender()
    {
        return $this->idGender;
    }

    /**
     * Set idDefaultGroup
     *
     * @param integer $idDefaultGroup
     * @return TrCustomer
     */
    public function setIdDefaultGroup($idDefaultGroup)
    {
        $this->idDefaultGroup = $idDefaultGroup;

        return $this;
    }

    /**
     * Get idDefaultGroup
     *
     * @return integer 
     */
    public function getIdDefaultGroup()
    {
        return $this->idDefaultGroup;
    }

    /**
     * Set idLang
     *
     * @param integer $idLang
     * @return TrCustomer
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
     * Set idRisk
     *
     * @param integer $idRisk
     * @return TrCustomer
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
     * Set company
     *
     * @param string $company
     * @return TrCustomer
     */
    public function setCompany($company)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * Get company
     *
     * @return string 
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Set siret
     *
     * @param string $siret
     * @return TrCustomer
     */
    public function setSiret($siret)
    {
        $this->siret = $siret;

        return $this;
    }

    /**
     * Get siret
     *
     * @return string 
     */
    public function getSiret()
    {
        return $this->siret;
    }

    /**
     * Set ape
     *
     * @param string $ape
     * @return TrCustomer
     */
    public function setApe($ape)
    {
        $this->ape = $ape;

        return $this;
    }

    /**
     * Get ape
     *
     * @return string 
     */
    public function getApe()
    {
        return $this->ape;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     * @return TrCustomer
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
     * Set lastname
     *
     * @param string $lastname
     * @return TrCustomer
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
     * Set email
     *
     * @param string $email
     * @return TrCustomer
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
     * @return TrCustomer
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
     * @return TrCustomer
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
     * Set birthday
     *
     * @param \DateTime $birthday
     * @return TrCustomer
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;

        return $this;
    }

    /**
     * Get birthday
     *
     * @return \DateTime 
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * Set newsletter
     *
     * @param boolean $newsletter
     * @return TrCustomer
     */
    public function setNewsletter($newsletter)
    {
        $this->newsletter = $newsletter;

        return $this;
    }

    /**
     * Get newsletter
     *
     * @return boolean 
     */
    public function getNewsletter()
    {
        return $this->newsletter;
    }

    /**
     * Set ipRegistrationNewsletter
     *
     * @param string $ipRegistrationNewsletter
     * @return TrCustomer
     */
    public function setIpRegistrationNewsletter($ipRegistrationNewsletter)
    {
        $this->ipRegistrationNewsletter = $ipRegistrationNewsletter;

        return $this;
    }

    /**
     * Get ipRegistrationNewsletter
     *
     * @return string 
     */
    public function getIpRegistrationNewsletter()
    {
        return $this->ipRegistrationNewsletter;
    }

    /**
     * Set newsletterDateAdd
     *
     * @param \DateTime $newsletterDateAdd
     * @return TrCustomer
     */
    public function setNewsletterDateAdd($newsletterDateAdd)
    {
        $this->newsletterDateAdd = $newsletterDateAdd;

        return $this;
    }

    /**
     * Get newsletterDateAdd
     *
     * @return \DateTime 
     */
    public function getNewsletterDateAdd()
    {
        return $this->newsletterDateAdd;
    }

    /**
     * Set optin
     *
     * @param boolean $optin
     * @return TrCustomer
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
     * Set website
     *
     * @param string $website
     * @return TrCustomer
     */
    public function setWebsite($website)
    {
        $this->website = $website;

        return $this;
    }

    /**
     * Get website
     *
     * @return string 
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * Set outstandingAllowAmount
     *
     * @param string $outstandingAllowAmount
     * @return TrCustomer
     */
    public function setOutstandingAllowAmount($outstandingAllowAmount)
    {
        $this->outstandingAllowAmount = $outstandingAllowAmount;

        return $this;
    }

    /**
     * Get outstandingAllowAmount
     *
     * @return string 
     */
    public function getOutstandingAllowAmount()
    {
        return $this->outstandingAllowAmount;
    }

    /**
     * Set showPublicPrices
     *
     * @param boolean $showPublicPrices
     * @return TrCustomer
     */
    public function setShowPublicPrices($showPublicPrices)
    {
        $this->showPublicPrices = $showPublicPrices;

        return $this;
    }

    /**
     * Get showPublicPrices
     *
     * @return boolean 
     */
    public function getShowPublicPrices()
    {
        return $this->showPublicPrices;
    }

    /**
     * Set maxPaymentDays
     *
     * @param integer $maxPaymentDays
     * @return TrCustomer
     */
    public function setMaxPaymentDays($maxPaymentDays)
    {
        $this->maxPaymentDays = $maxPaymentDays;

        return $this;
    }

    /**
     * Get maxPaymentDays
     *
     * @return integer 
     */
    public function getMaxPaymentDays()
    {
        return $this->maxPaymentDays;
    }

    /**
     * Set secureKey
     *
     * @param string $secureKey
     * @return TrCustomer
     */
    public function setSecureKey($secureKey)
    {
        $this->secureKey = $secureKey;

        return $this;
    }

    /**
     * Get secureKey
     *
     * @return string 
     */
    public function getSecureKey()
    {
        return $this->secureKey;
    }

    /**
     * Set note
     *
     * @param string $note
     * @return TrCustomer
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return string 
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set active
     *
     * @param boolean $active
     * @return TrCustomer
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
     * Set isGuest
     *
     * @param boolean $isGuest
     * @return TrCustomer
     */
    public function setIsGuest($isGuest)
    {
        $this->isGuest = $isGuest;

        return $this;
    }

    /**
     * Get isGuest
     *
     * @return boolean 
     */
    public function getIsGuest()
    {
        return $this->isGuest;
    }

    /**
     * Set deleted
     *
     * @param boolean $deleted
     * @return TrCustomer
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
     * Set dateAdd
     *
     * @param \DateTime $dateAdd
     * @return TrCustomer
     */
    public function setDateAdd($dateAdd)
    {
        $this->dateAdd = $dateAdd;

        return $this;
    }

    /**
     * Get dateAdd
     *
     * @return \DateTime 
     */
    public function getDateAdd()
    {
        return $this->dateAdd;
    }

    /**
     * Set dateUpd
     *
     * @param \DateTime $dateUpd
     * @return TrCustomer
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

    /**
     * Set secondname
     *
     * @param string $secondname
     * @return TrCustomer
     */
    public function setSecondname($secondname)
    {
        $this->secondname = $secondname;

        return $this;
    }

    /**
     * Get secondname
     *
     * @return string 
     */
    public function getSecondname()
    {
        return $this->secondname;
    }

    /**
     * Set thirdname
     *
     * @param string $thirdname
     * @return TrCustomer
     */
    public function setThirdname($thirdname)
    {
        $this->thirdname = $thirdname;

        return $this;
    }

    /**
     * Get thirdname
     *
     * @return string 
     */
    public function getThirdname()
    {
        return $this->thirdname;
    }

    /**
     * Set cellphone
     *
     * @param string $cellphone
     * @return TrCustomer
     */
    public function setCellphone($cellphone)
    {
        $this->cellphone = $cellphone;

        return $this;
    }

    /**
     * Get cellphone
     *
     * @return string 
     */
    public function getCellphone()
    {
        return $this->cellphone;
    }

    /**
     * Set phone
     *
     * @param string $phone
     * @return TrCustomer
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string 
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set idDocument
     *
     * @param integer $idDocument
     * @return TrCustomer
     */
    public function setIdDocument($idDocument)
    {
        $this->idDocument = $idDocument;

        return $this;
    }

    /**
     * Get idDocument
     *
     * @return integer 
     */
    public function getIdDocument()
    {
        return $this->idDocument;
    }

    /**
     * Set numDocument
     *
     * @param string $numDocument
     * @return TrCustomer
     */
    public function setNumDocument($numDocument)
    {
        $this->numDocument = $numDocument;

        return $this;
    }

    /**
     * Get numDocument
     *
     * @return string 
     */
    public function getNumDocument()
    {
        return $this->numDocument;
    }

    /**
     * Set idSupplier
     *
     * @param integer $idSupplier
     * @return TrCustomer
     */
    public function setIdSupplier($idSupplier)
    {
        $this->idSupplier = $idSupplier;

        return $this;
    }

    /**
     * Get idSupplier
     *
     * @return integer 
     */
    public function getIdSupplier()
    {
        return $this->idSupplier;
    }

    /**
     * Set idPadre
     *
     * @param integer $idPadre
     * @return TrCustomer
     */
    public function setIdPadre($idPadre)
    {
        $this->idPadre = $idPadre;

        return $this;
    }

    /**
     * Get idPadre
     *
     * @return integer 
     */
    public function getIdPadre()
    {
        return $this->idPadre;
    }
}
