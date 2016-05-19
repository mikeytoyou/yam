<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrCartRuleCarrier
 */
class TrCartRuleCarrier
{
    /**
     * @var integer
     */
    private $idCartRule;

    /**
     * @var integer
     */
    private $idCarrier;


    /**
     * Set idCartRule
     *
     * @param integer $idCartRule
     * @return TrCartRuleCarrier
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
     * Set idCarrier
     *
     * @param integer $idCarrier
     * @return TrCartRuleCarrier
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
}
