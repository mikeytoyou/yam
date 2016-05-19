<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrShopUrl
 */
class TrShopUrl
{
    /**
     * @var integer
     */
    private $idShopUrl;

    /**
     * @var integer
     */
    private $idShop;

    /**
     * @var string
     */
    private $domain;

    /**
     * @var string
     */
    private $domainSsl;

    /**
     * @var string
     */
    private $physicalUri;

    /**
     * @var string
     */
    private $virtualUri;

    /**
     * @var boolean
     */
    private $main;

    /**
     * @var boolean
     */
    private $active;


    /**
     * Get idShopUrl
     *
     * @return integer 
     */
    public function getIdShopUrl()
    {
        return $this->idShopUrl;
    }

    /**
     * Set idShop
     *
     * @param integer $idShop
     * @return TrShopUrl
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
     * Set domain
     *
     * @param string $domain
     * @return TrShopUrl
     */
    public function setDomain($domain)
    {
        $this->domain = $domain;

        return $this;
    }

    /**
     * Get domain
     *
     * @return string 
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * Set domainSsl
     *
     * @param string $domainSsl
     * @return TrShopUrl
     */
    public function setDomainSsl($domainSsl)
    {
        $this->domainSsl = $domainSsl;

        return $this;
    }

    /**
     * Get domainSsl
     *
     * @return string 
     */
    public function getDomainSsl()
    {
        return $this->domainSsl;
    }

    /**
     * Set physicalUri
     *
     * @param string $physicalUri
     * @return TrShopUrl
     */
    public function setPhysicalUri($physicalUri)
    {
        $this->physicalUri = $physicalUri;

        return $this;
    }

    /**
     * Get physicalUri
     *
     * @return string 
     */
    public function getPhysicalUri()
    {
        return $this->physicalUri;
    }

    /**
     * Set virtualUri
     *
     * @param string $virtualUri
     * @return TrShopUrl
     */
    public function setVirtualUri($virtualUri)
    {
        $this->virtualUri = $virtualUri;

        return $this;
    }

    /**
     * Get virtualUri
     *
     * @return string 
     */
    public function getVirtualUri()
    {
        return $this->virtualUri;
    }

    /**
     * Set main
     *
     * @param boolean $main
     * @return TrShopUrl
     */
    public function setMain($main)
    {
        $this->main = $main;

        return $this;
    }

    /**
     * Get main
     *
     * @return boolean 
     */
    public function getMain()
    {
        return $this->main;
    }

    /**
     * Set active
     *
     * @param boolean $active
     * @return TrShopUrl
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
