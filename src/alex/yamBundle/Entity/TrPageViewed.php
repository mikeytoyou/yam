<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrPageViewed
 */
class TrPageViewed
{
    /**
     * @var integer
     */
    private $idPage;

    /**
     * @var integer
     */
    private $idDateRange;

    /**
     * @var integer
     */
    private $idShop;

    /**
     * @var integer
     */
    private $idShopGroup;

    /**
     * @var integer
     */
    private $counter;


    /**
     * Set idPage
     *
     * @param integer $idPage
     * @return TrPageViewed
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
     * Set idDateRange
     *
     * @param integer $idDateRange
     * @return TrPageViewed
     */
    public function setIdDateRange($idDateRange)
    {
        $this->idDateRange = $idDateRange;

        return $this;
    }

    /**
     * Get idDateRange
     *
     * @return integer 
     */
    public function getIdDateRange()
    {
        return $this->idDateRange;
    }

    /**
     * Set idShop
     *
     * @param integer $idShop
     * @return TrPageViewed
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
     * @return TrPageViewed
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
     * Set counter
     *
     * @param integer $counter
     * @return TrPageViewed
     */
    public function setCounter($counter)
    {
        $this->counter = $counter;

        return $this;
    }

    /**
     * Get counter
     *
     * @return integer 
     */
    public function getCounter()
    {
        return $this->counter;
    }
}
