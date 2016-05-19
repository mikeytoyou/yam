<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrCartRuleProductRuleValue
 */
class TrCartRuleProductRuleValue
{
    /**
     * @var integer
     */
    private $idProductRule;

    /**
     * @var integer
     */
    private $idItem;


    /**
     * Set idProductRule
     *
     * @param integer $idProductRule
     * @return TrCartRuleProductRuleValue
     */
    public function setIdProductRule($idProductRule)
    {
        $this->idProductRule = $idProductRule;

        return $this;
    }

    /**
     * Get idProductRule
     *
     * @return integer 
     */
    public function getIdProductRule()
    {
        return $this->idProductRule;
    }

    /**
     * Set idItem
     *
     * @param integer $idItem
     * @return TrCartRuleProductRuleValue
     */
    public function setIdItem($idItem)
    {
        $this->idItem = $idItem;

        return $this;
    }

    /**
     * Get idItem
     *
     * @return integer 
     */
    public function getIdItem()
    {
        return $this->idItem;
    }
}
