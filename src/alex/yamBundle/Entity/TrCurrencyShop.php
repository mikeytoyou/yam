<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrCurrencyShop
 */
class TrCurrencyShop
{
    /**
     * @var integer
     */
    private $idCurrency;

    /**
     * @var integer
     */
    private $idShop;

    /**
     * @var string
     */
    private $conversionRate;


    /**
     * Set idCurrency
     *
     * @param integer $idCurrency
     * @return TrCurrencyShop
     */
    public function setIdCurrency($idCurrency)
    {
        $this->idCurrency = $idCurrency;

        return $this;
    }

    /**
     * Get idCurrency
     *
     * @return integer 
     */
    public function getIdCurrency()
    {
        return $this->idCurrency;
    }

    /**
     * Set idShop
     *
     * @param integer $idShop
     * @return TrCurrencyShop
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
     * Set conversionRate
     *
     * @param string $conversionRate
     * @return TrCurrencyShop
     */
    public function setConversionRate($conversionRate)
    {
        $this->conversionRate = $conversionRate;

        return $this;
    }

    /**
     * Get conversionRate
     *
     * @return string 
     */
    public function getConversionRate()
    {
        return $this->conversionRate;
    }
}
