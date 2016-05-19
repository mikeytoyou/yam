<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrNewsletter
 */
class TrNewsletter
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $idShop;

    /**
     * @var integer
     */
    private $idShopGroup;

    /**
     * @var string
     */
    private $email;

    /**
     * @var \DateTime
     */
    private $newsletterDateAdd;

    /**
     * @var string
     */
    private $ipRegistrationNewsletter;

    /**
     * @var string
     */
    private $httpReferer;

    /**
     * @var boolean
     */
    private $active;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idShop
     *
     * @param integer $idShop
     * @return TrNewsletter
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
     * Set idShopGroup
     *
     * @param integer $idShopGroup
     * @return TrNewsletter
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
     * Set email
     *
     * @param string $email
     * @return TrNewsletter
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
     * Set newsletterDateAdd
     *
     * @param \DateTime $newsletterDateAdd
     * @return TrNewsletter
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
     * Set ipRegistrationNewsletter
     *
     * @param string $ipRegistrationNewsletter
     * @return TrNewsletter
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
     * Set httpReferer
     *
     * @param string $httpReferer
     * @return TrNewsletter
     */
    public function setHttpReferer($httpReferer)
    {
        $this->httpReferer = $httpReferer;

        return $this;
    }

    /**
     * Get httpReferer
     *
     * @return string 
     */
    public function getHttpReferer()
    {
        return $this->httpReferer;
    }

    /**
     * Set active
     *
     * @param boolean $active
     * @return TrNewsletter
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
