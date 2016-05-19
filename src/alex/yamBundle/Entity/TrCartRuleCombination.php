<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrCartRuleCombination
 */
class TrCartRuleCombination
{
    /**
     * @var integer
     */
    private $idCartRule1;

    /**
     * @var integer
     */
    private $idCartRule2;


    /**
     * Set idCartRule1
     *
     * @param integer $idCartRule1
     * @return TrCartRuleCombination
     */
    public function setIdCartRule1($idCartRule1)
    {
        $this->idCartRule1 = $idCartRule1;

        return $this;
    }

    /**
     * Get idCartRule1
     *
     * @return integer 
     */
    public function getIdCartRule1()
    {
        return $this->idCartRule1;
    }

    /**
     * Set idCartRule2
     *
     * @param integer $idCartRule2
     * @return TrCartRuleCombination
     */
    public function setIdCartRule2($idCartRule2)
    {
        $this->idCartRule2 = $idCartRule2;

        return $this;
    }

    /**
     * Get idCartRule2
     *
     * @return integer 
     */
    public function getIdCartRule2()
    {
        return $this->idCartRule2;
    }
}
