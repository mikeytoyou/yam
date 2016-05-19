<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrGenderLang
 */
class TrGenderLang
{
    /**
     * @var integer
     */
    private $idGender;

    /**
     * @var integer
     */
    private $idLang;

    /**
     * @var string
     */
    private $name;


    /**
     * Set idGender
     *
     * @param integer $idGender
     * @return TrGenderLang
     */
    public function setIdGender($idGender)
    {
        $this->idGender = $idGender;

        return $this;
    }

    /**
     * Get idGender
     *
     * @return integer 
     */
    public function getIdGender()
    {
        return $this->idGender;
    }

    /**
     * Set idLang
     *
     * @param integer $idLang
     * @return TrGenderLang
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
     * @return TrGenderLang
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
