<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrTaxRulesGroupShop
 */
class TrTaxRulesGroupShop
{
    /**
     * @var integer
     */
    private $idTaxRulesGroup;

    /**
     * @var integer
     */
    private $idShop;


    /**
     * Set idTaxRulesGroup
     *
     * @param integer $idTaxRulesGroup
     * @return TrTaxRulesGroupShop
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
     * @return TrTaxRulesGroupShop
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
