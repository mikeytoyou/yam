<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrOrderCartRule
 */
class TrOrderCartRule
{
    /**
     * @var integer
     */
    private $idOrderCartRule;

    /**
     * @var integer
     */
    private $idOrder;

    /**
     * @var integer
     */
    private $idCartRule;

    /**
     * @var integer
     */
    private $idOrderInvoice;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $value;

    /**
     * @var string
     */
    private $valueTaxExcl;

    /**
     * @var boolean
     */
    private $freeShipping;


    /**
     * Get idOrderCartRule
     *
     * @return integer 
     */
    public function getIdOrderCartRule()
    {
        return $this->idOrderCartRule;
    }

    /**
     * Set idOrder
     *
     * @param integer $idOrder
     * @return TrOrderCartRule
     */
    public function setIdOrder($idOrder)
    {
        $this->idOrder = $idOrder;

        return $this;
    }

    /**
     * Get idOrder
     *
     * @return integer 
     */
    public function getIdOrder()
    {
        return $this->idOrder;
    }

    /**
     * Set idCartRule
     *
     * @param integer $idCartRule
     * @return TrOrderCartRule
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
     * Set idOrderInvoice
     *
     * @param integer $idOrderInvoice
     * @return TrOrderCartRule
     */
    public function setIdOrderInvoice($idOrderInvoice)
    {
        $this->idOrderInvoice = $idOrderInvoice;

        return $this;
    }

    /**
     * Get idOrderInvoice
     *
     * @return integer 
     */
    public function getIdOrderInvoice()
    {
        return $this->idOrderInvoice;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return TrOrderCartRule
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set value
     *
     * @param string $value
     * @return TrOrderCartRule
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return string 
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set valueTaxExcl
     *
     * @param string $valueTaxExcl
     * @return TrOrderCartRule
     */
    public function setValueTaxExcl($valueTaxExcl)
    {
        $this->valueTaxExcl = $valueTaxExcl;

        return $this;
    }

    /**
     * Get valueTaxExcl
     *
     * @return string 
     */
    public function getValueTaxExcl()
    {
        return $this->valueTaxExcl;
    }

    /**
     * Set freeShipping
     *
     * @param boolean $freeShipping
     * @return TrOrderCartRule
     */
    public function setFreeShipping($freeShipping)
    {
        $this->freeShipping = $freeShipping;

        return $this;
    }

    /**
     * Get freeShipping
     *
     * @return boolean 
     */
    public function getFreeShipping()
    {
        return $this->freeShipping;
    }
}
