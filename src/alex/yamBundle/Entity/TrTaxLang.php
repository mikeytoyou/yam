<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrTaxLang
 */
class TrTaxLang
{
    /**
     * @var integer
     */
    private $idTax;

    /**
     * @var integer
     */
    private $idLang;

    /**
     * @var string
     */
    private $name;


    /**
     * Set idTax
     *
     * @param integer $idTax
     * @return TrTaxLang
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
     * Set idLang
     *
     * @param integer $idLang
     * @return TrTaxLang
     */
    public function setIdLang($idLang)
    {
        $this->idLang = $idLang;

        return $this;
    }

    /**
     * Get idLang
     *
     * @return integer 
     */
    public function getIdLang()
    {
        return $this->idLang;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return TrTaxLang
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
}
