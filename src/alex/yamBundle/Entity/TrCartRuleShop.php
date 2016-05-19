<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrCartRuleShop
 */
class TrCartRuleShop
{
    /**
     * @var integer
     */
    private $idCartRule;

    /**
     * @var integer
     */
    private $idShop;


    /**
     * Set idCartRule
     *
     * @param integer $idCartRule
     * @return TrCartRuleShop
     */
    public function setIdCartRule($idCartRule)
    {
        $this->idCartRule = $idCartRule;

        return $this;
    }

    /**
     * Get idCartRule
     *
     * @return integer 
     */
    public function getIdCartRule()
    {
        return $this->idCartRule;
    }

    /**
     * Set idShop
     *
     * @param integer $idShop
     * @return TrCartRuleShop
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
