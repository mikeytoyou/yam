<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrReferrerShop
 */
class TrReferrerShop
{
    /**
     * @var integer
     */
    private $idReferrer;

    /**
     * @var integer
     */
    private $idShop;

    /**
     * @var integer
     */
    private $cacheVisitors;

    /**
     * @var integer
     */
    private $cacheVisits;

    /**
     * @var integer
     */
    private $cachePages;

    /**
     * @var integer
     */
    private $cacheRegistrations;

    /**
     * @var integer
     */
    private $cacheOrders;

    /**
     * @var string
     */
    private $cacheSales;

    /**
     * @var string
     */
    private $cacheRegRate;

    /**
     * @var string
     */
    private $cacheOrderRate;


    /**
     * Set idReferrer
     *
     * @param integer $idReferrer
     * @return TrReferrerShop
     */
    public function setIdReferrer($idReferrer)
    {
        $this->idReferrer = $idReferrer;

        return $this;
    }

    /**
     * Get idReferrer
     *
     * @return integer 
     */
    public function getIdReferrer()
    {
        return $this->idReferrer;
    }

    /**
     * Set idShop
     *
     * @param integer $idShop
     * @return TrReferrerShop
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
     * Set cacheVisitors
     *
     * @param integer $cacheVisitors
     * @return TrReferrerShop
     */
    public function setCacheVisitors($cacheVisitors)
    {
        $this->cacheVisitors = $cacheVisitors;

        return $this;
    }

    /**
     * Get cacheVisitors
     *
     * @return integer 
     */
    public function getCacheVisitors()
    {
        return $this->cacheVisitors;
    }

    /**
     * Set cacheVisits
     *
     * @param integer $cacheVisits
     * @return TrReferrerShop
     */
    public function setCacheVisits($cacheVisits)
    {
        $this->cacheVisits = $cacheVisits;

        return $this;
    }

    /**
     * Get cacheVisits
     *
     * @return integer 
     */
    public function getCacheVisits()
    {
        return $this->cacheVisits;
    }

    /**
     * Set cachePages
     *
     * @param integer $cachePages
     * @return TrReferrerShop
     */
    public function setCachePages($cachePages)
    {
        $this->cachePages = $cachePages;

        return $this;
    }

    /**
     * Get cachePages
     *
     * @return integer 
     */
    public function getCachePages()
    {
        return $this->cachePages;
    }

    /**
     * Set cacheRegistrations
     *
     * @param integer $cacheRegistrations
     * @return TrReferrerShop
     */
    public function setCacheRegistrations($cacheRegistrations)
    {
        $this->cacheRegistrations = $cacheRegistrations;

        return $this;
    }

    /**
     * Get cacheRegistrations
     *
     * @return integer 
     */
    public function getCacheRegistrations()
    {
        return $this->cacheRegistrations;
    }

    /**
     * Set cacheOrders
     *
     * @param integer $cacheOrders
     * @return TrReferrerShop
     */
    public function setCacheOrders($cacheOrders)
    {
        $this->cacheOrders = $cacheOrders;

        return $this;
    }

    /**
     * Get cacheOrders
     *
     * @return integer 
     */
    public function getCacheOrders()
    {
        return $this->cacheOrders;
    }

    /**
     * Set cacheSales
     *
     * @param string $cacheSales
     * @return TrReferrerShop
     */
    public function setCacheSales($cacheSales)
    {
        $this->cacheSales = $cacheSales;

        return $this;
    }

    /**
     * Get cacheSales
     *
     * @return string 
     */
    public function getCacheSales()
    {
        return $this->cacheSales;
    }

    /**
     * Set cacheRegRate
     *
     * @param string $cacheRegRate
     * @return TrReferrerShop
     */
    public function setCacheRegRate($cacheRegRate)
    {
        $this->cacheRegRate = $cacheRegRate;

        return $this;
    }

    /**
     * Get cacheRegRate
     *
     * @return string 
     */
    public function getCacheRegRate()
    {
        return $this->cacheRegRate;
    }

    /**
     * Set cacheOrderRate
     *
     * @param string $cacheOrderRate
     * @return TrReferrerShop
     */
    public function setCacheOrderRate($cacheOrderRate)
    {
        $this->cacheOrderRate = $cacheOrderRate;

        return $this;
    }

    /**
     * Get cacheOrderRate
     *
     * @return string 
     */
    public function getCacheOrderRate()
    {
        return $this->cacheOrderRate;
    }
}
