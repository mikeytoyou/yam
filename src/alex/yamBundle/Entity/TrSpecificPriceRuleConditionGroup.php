<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrSpecificPriceRuleConditionGroup
 */
class TrSpecificPriceRuleConditionGroup
{
    /**
     * @var integer
     */
    private $idSpecificPriceRuleConditionGroup;

    /**
     * @var integer
     */
    private $idSpecificPriceRule;


    /**
     * Set idSpecificPriceRuleConditionGroup
     *
     * @param integer $idSpecificPriceRuleConditionGroup
     * @return TrSpecificPriceRuleConditionGroup
     */
    public function setIdSpecificPriceRuleConditionGroup($idSpecificPriceRuleConditionGroup)
    {
        $this->idSpecificPriceRuleConditionGroup = $idSpecificPriceRuleConditionGroup;

        return $this;
    }

    /**
     * Get idSpecificPriceRuleConditionGroup
     *
     * @return integer 
     */
    public function getIdSpecificPriceRuleConditionGroup()
    {
        return $this->idSpecificPriceRuleConditionGroup;
    }

    /**
     * Set idSpecificPriceRule
     *
     * @param integer $idSpecificPriceRule
     * @return TrSpecificPriceRuleConditionGroup
     */
    public function setIdSpecificPriceRule($idSpecificPriceRule)
    {
        $this->idSpecificPriceRule = $idSpecificPriceRule;

        return $this;
    }

    /**
     * Get idSpecificPriceRule
     *
     * @return integer 
     */
    public function getIdSpecificPriceRule()
    {
        return $this->idSpecificPriceRule;
    }
}
