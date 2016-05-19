<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrCarrierTaxRulesGroupShop
 */
class TrCarrierTaxRulesGroupShop
{
    /**
     * @var integer
     */
    private $idCarrier;

    /**
     * @var integer
     */
    private $idTaxRulesGroup;

    /**
     * @var integer
     */
    private $idShop;


    /**
     * Set idCarrier
     *
     * @param integer $idCarrier
     * @return TrCarrierTaxRulesGroupShop
     */
    public function setIdCarrier($idCarrier)
    {
        $this->idCarrier = $idCarrier;

        return $this;
    }

    /**
     * Get idCarrier
     *
     * @return integer 
     */
    public function getIdCarrier()
    {
        return $this->idCarrier;
    }

    /**
     * Set idTaxRulesGroup
     *
     * @param integer $idTaxRulesGroup
     * @return TrCarrierTaxRulesGroupShop
     */
    public function setIdTaxRulesGroup($idTaxRulesGroup)
    {
        $this->idTaxRulesGroup = $idTaxRulesGroup;

        return $this;
    }

    /**
     * Get idTaxRulesGroup
     *
     * @return integer 
     */
    public function getIdTaxRulesGroup()
    {
        return $this->idTaxRulesGroup;
    }

    /**
     * Set idShop
     *
     * @param integer $idShop
     * @return TrCarrierTaxRulesGroupShop
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
}
