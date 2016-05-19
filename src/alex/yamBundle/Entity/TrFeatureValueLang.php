<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrFeatureValueLang
 */
class TrFeatureValueLang
{
    /**
     * @var integer
     */
    private $idFeatureValue;

    /**
     * @var integer
     */
    private $idLang;

    /**
     * @var string
     */
    private $value;


    /**
     * Set idFeatureValue
     *
     * @param integer $idFeatureValue
     * @return TrFeatureValueLang
     */
    public function setIdFeatureValue($idFeatureValue)
    {
        $this->idFeatureValue = $idFeatureValue;

        return $this;
    }

    /**
     * Get idFeatureValue
     *
     * @return integer 
     */
    public function getIdFeatureValue()
    {
        return $this->idFeatureValue;
    }

    /**
     * Set idLang
     *
     * @param integer $idLang
     * @return TrFeatureValueLang
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
     * Set value
     *
     * @param string $value
     * @return TrFeatureValueLang
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
}
