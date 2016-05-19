<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrCustomizationFieldLang
 */
class TrCustomizationFieldLang
{
    /**
     * @var integer
     */
    private $idCustomizationField;

    /**
     * @var integer
     */
    private $idLang;

    /**
     * @var string
     */
    private $name;


    /**
     * Set idCustomizationField
     *
     * @param integer $idCustomizationField
     * @return TrCustomizationFieldLang
     */
    public function setIdCustomizationField($idCustomizationField)
    {
        $this->idCustomizationField = $idCustomizationField;

        return $this;
    }

    /**
     * Get idCustomizationField
     *
     * @return integer 
     */
    public function getIdCustomizationField()
    {
        return $this->idCustomizationField;
    }

    /**
     * Set idLang
     *
     * @param integer $idLang
     * @return TrCustomizationFieldLang
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
     * @return TrCustomizationFieldLang
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
