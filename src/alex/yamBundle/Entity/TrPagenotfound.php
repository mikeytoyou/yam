<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrPagenotfound
 */
class TrPagenotfound
{
    /**
     * @var integer
     */
    private $idPagenotfound;

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
    private $requestUri;

    /**
     * @var string
     */
    private $httpReferer;

    /**
     * @var \DateTime
     */
    private $dateAdd;


    /**
     * Get idPagenotfound
     *
     * @return integer 
     */
    public function getIdPagenotfound()
    {
        return $this->idPagenotfound;
    }

    /**
     * Set idShop
     *
     * @param integer $idShop
     * @return TrPagenotfound
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
     * @return TrPagenotfound
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
     * Set requestUri
     *
     * @param string $requestUri
     * @return TrPagenotfound
     */
    public function setRequestUri($requestUri)
    {
        $this->requestUri = $requestUri;

        return $this;
    }

    /**
     * Get requestUri
     *
     * @return string 
     */
    public function getRequestUri()
    {
        return $this->requestUri;
    }

    /**
     * Set httpReferer
     *
     * @param string $httpReferer
     * @return TrPagenotfound
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
     * Set dateAdd
     *
     * @param \DateTime $dateAdd
     * @return TrPagenotfound
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
}
