<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrCartCartRule
 */
class TrCartCartRule
{
    /**
     * @var integer
     */
    private $idCart;

    /**
     * @var integer
     */
    private $idCartRule;


    /**
     * Set idCart
     *
     * @param integer $idCart
     * @return TrCartCartRule
     */
    public function setIdCart($idCart)
    {
        $this->idCart = $idCart;

        return $this;
    }

    /**
     * Get idCart
     *
     * @return integer 
     */
    public function getIdCart()
    {
        return $this->idCart;
    }

    /**
     * Set idCartRule
     *
     * @param integer $idCartRule
     * @return TrCartCartRule
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
}
