<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrOrderReturnStateLang
 */
class TrOrderReturnStateLang
{
    /**
     * @var integer
     */
    private $idOrderReturnState;

    /**
     * @var integer
     */
    private $idLang;

    /**
     * @var string
     */
    private $name;


    /**
     * Set idOrderReturnState
     *
     * @param integer $idOrderReturnState
     * @return TrOrderReturnStateLang
     */
    public function setIdOrderReturnState($idOrderReturnState)
    {
        $this->idOrderReturnState = $idOrderReturnState;

        return $this;
    }

    /**
     * Get idOrderReturnState
     *
     * @return integer 
     */
    public function getIdOrderReturnState()
    {
        return $this->idOrderReturnState;
    }

    /**
     * Set idLang
     *
     * @param integer $idLang
     * @return TrOrderReturnStateLang
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
     * @return TrOrderReturnStateLang
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
