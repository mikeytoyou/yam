<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrStatssearch
 */
class TrStatssearch
{
    /**
     * @var integer
     */
    private $idStatssearch;

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
    private $keywords;

    /**
     * @var integer
     */
    private $results;

    /**
     * @var \DateTime
     */
    private $dateAdd;


    /**
     * Get idStatssearch
     *
     * @return integer 
     */
    public function getIdStatssearch()
    {
        return $this->idStatssearch;
    }

    /**
     * Set idShop
     *
     * @param integer $idShop
     * @return TrStatssearch
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
     * @return TrStatssearch
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
     * Set keywords
     *
     * @param string $keywords
     * @return TrStatssearch
     */
    public function setKeywords($keywords)
    {
        $this->keywords = $keywords;

        return $this;
    }

    /**
     * Get keywords
     *
     * @return string 
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * Set results
     *
     * @param integer $results
     * @return TrStatssearch
     */
    public function setResults($results)
    {
        $this->results = $results;

        return $this;
    }

    /**
     * Get results
     *
     * @return integer 
     */
    public function getResults()
    {
        return $this->results;
    }

    /**
     * Set dateAdd
     *
     * @param \DateTime $dateAdd
     * @return TrStatssearch
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
