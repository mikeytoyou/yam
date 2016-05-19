<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrState
 */
class TrState
{
    /**
     * @var integer
     */
    private $idState;

    /**
     * @var integer
     */
    private $idCountry;

    /**
     * @var integer
     */
    private $idZone;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $isoCode;

    /**
     * @var integer
     */
    private $taxBehavior;

    /**
     * @var boolean
     */
    private $active;


    /**
     * Get idState
     *
     * @return integer 
     */
    public function getIdState()
    {
        return $this->idState;
    }

    /**
     * Set idCountry
     *
     * @param integer $idCountry
     * @return TrState
     */
    public function setIdCountry($idCountry)
    {
        $this->idCountry = $idCountry;

        return $this;
    }

    /**
     * Get idCountry
     *
     * @return integer 
     */
    public function getIdCountry()
    {
        return $this->idCountry;
    }

    /**
     * Set idZone
     *
     * @param integer $idZone
     * @return TrState
     */
    public function setIdZone($idZone)
    {
        $this->idZone = $idZone;

        return $this;
    }

    /**
     * Get idZone
     *
     * @return integer 
     */
    public function getIdZone()
    {
        return $this->idZone;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return TrState
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
     * Set isoCode
     *
     * @param string $isoCode
     * @return TrState
     */
    public function setIsoCode($isoCode)
    {
        $this->isoCode = $isoCode;

        return $this;
    }

    /**
     * Get isoCode
     *
     * @return string 
     */
    public function getIsoCode()
    {
        return $this->isoCode;
    }

    /**
     * Set taxBehavior
     *
     * @param integer $taxBehavior
     * @return TrState
     */
    public function setTaxBehavior($taxBehavior)
    {
        $this->taxBehavior = $taxBehavior;

        return $this;
    }

    /**
     * Get taxBehavior
     *
     * @return integer 
     */
    public function getTaxBehavior()
    {
        return $this->taxBehavior;
    }

    /**
     * Set active
     *
     * @param boolean $active
     * @return TrState
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return boolean 
     */
    public function getActive()
    {
        return $this->active;
    }
}
