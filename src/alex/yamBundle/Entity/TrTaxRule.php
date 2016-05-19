<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrTaxRule
 */
class TrTaxRule
{
    /**
     * @var integer
     */
    private $idTaxRule;

    /**
     * @var integer
     */
    private $idTaxRulesGroup;

    /**
     * @var integer
     */
    private $idCountry;

    /**
     * @var integer
     */
    private $idState;

    /**
     * @var string
     */
    private $zipcodeFrom;

    /**
     * @var string
     */
    private $zipcodeTo;

    /**
     * @var integer
     */
    private $idTax;

    /**
     * @var integer
     */
    private $behavior;

    /**
     * @var string
     */
    private $description;


    /**
     * Get idTaxRule
     *
     * @return integer 
     */
    public function getIdTaxRule()
    {
        return $this->idTaxRule;
    }

    /**
     * Set idTaxRulesGroup
     *
     * @param integer $idTaxRulesGroup
     * @return TrTaxRule
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
     * Set idCountry
     *
     * @param integer $idCountry
     * @return TrTaxRule
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
     * Set idState
     *
     * @param integer $idState
     * @return TrTaxRule
     */
    public function setIdState($idState)
    {
        $this->idState = $idState;

        return $this;
    }

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
     * Set zipcodeFrom
     *
     * @param string $zipcodeFrom
     * @return TrTaxRule
     */
    public function setZipcodeFrom($zipcodeFrom)
    {
        $this->zipcodeFrom = $zipcodeFrom;

        return $this;
    }

    /**
     * Get zipcodeFrom
     *
     * @return string 
     */
    public function getZipcodeFrom()
    {
        return $this->zipcodeFrom;
    }

    /**
     * Set zipcodeTo
     *
     * @param string $zipcodeTo
     * @return TrTaxRule
     */
    public function setZipcodeTo($zipcodeTo)
    {
        $this->zipcodeTo = $zipcodeTo;

        return $this;
    }

    /**
     * Get zipcodeTo
     *
     * @return string 
     */
    public function getZipcodeTo()
    {
        return $this->zipcodeTo;
    }

    /**
     * Set idTax
     *
     * @param integer $idTax
     * @return TrTaxRule
     */
    public function setIdTax($idTax)
    {
        $this->idTax = $idTax;

        return $this;
    }

    /**
     * Get idTax
     *
     * @return integer 
     */
    public function getIdTax()
    {
        return $this->idTax;
    }

    /**
     * Set behavior
     *
     * @param integer $behavior
     * @return TrTaxRule
     */
    public function setBehavior($behavior)
    {
        $this->behavior = $behavior;

        return $this;
    }

    /**
     * Get behavior
     *
     * @return integer 
     */
    public function getBehavior()
    {
        return $this->behavior;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return TrTaxRule
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }
}
