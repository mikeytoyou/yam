<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrConnections
 */
class TrConnections
{
    /**
     * @var integer
     */
    private $idConnections;

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
    private $idGuest;

    /**
     * @var integer
     */
    private $idPage;

    /**
     * @var integer
     */
    private $ipAddress;

    /**
     * @var \DateTime
     */
    private $dateAdd;

    /**
     * @var string
     */
    private $httpReferer;


    /**
     * Get idConnections
     *
     * @return integer 
     */
    public function getIdConnections()
    {
        return $this->idConnections;
    }

    /**
     * Set idShopGroup
     *
     * @param integer $idShopGroup
     * @return TrConnections
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
     * @return TrConnections
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
     * Set idGuest
     *
     * @param integer $idGuest
     * @return TrConnections
     */
    public function setIdGuest($idGuest)
    {
        $this->idGuest = $idGuest;

        return $this;
    }

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
     * Set idPage
     *
     * @param integer $idPage
     * @return TrConnections
     */
    public function setIdPage($idPage)
    {
        $this->idPage = $idPage;

        return $this;
    }

    /**
     * Get idPage
     *
     * @return integer 
     */
    public function getIdPage()
    {
        return $this->idPage;
    }

    /**
     * Set ipAddress
     *
     * @param integer $ipAddress
     * @return TrConnections
     */
    public function setIpAddress($ipAddress)
    {
        $this->ipAddress = $ipAddress;

        return $this;
    }

    /**
     * Get ipAddress
     *
     * @return integer 
     */
    public function getIpAddress()
    {
        return $this->ipAddress;
    }

    /**
     * Set dateAdd
     *
     * @param \DateTime $dateAdd
     * @return TrConnections
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
     * Set httpReferer
     *
     * @param string $httpReferer
     * @return TrConnections
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
}
