<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrCartRuleProductRuleGroup
 */
class TrCartRuleProductRuleGroup
{
    /**
     * @var integer
     */
    private $idProductRuleGroup;

    /**
     * @var integer
     */
    private $idCartRule;

    /**
     * @var integer
     */
    private $quantity;


    /**
     * Get idProductRuleGroup
     *
     * @return integer 
     */
    public function getIdProductRuleGroup()
    {
        return $this->idProductRuleGroup;
    }

    /**
     * Set idCartRule
     *
     * @param integer $idCartRule
     * @return TrCartRuleProductRuleGroup
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
     * Set quantity
     *
     * @param integer $quantity
     * @return TrCartRuleProductRuleGroup
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer 
     */
    public function getQuantity()
    {
        return $this->quantity;
    }
}
