<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrSupplyOrderStateLang
 */
class TrSupplyOrderStateLang
{
    /**
     * @var integer
     */
    private $idSupplyOrderState;

    /**
     * @var integer
     */
    private $idLang;

    /**
     * @var string
     */
    private $name;


    /**
     * Set idSupplyOrderState
     *
     * @param integer $idSupplyOrderState
     * @return TrSupplyOrderStateLang
     */
    public function setIdSupplyOrderState($idSupplyOrderState)
    {
        $this->idSupplyOrderState = $idSupplyOrderState;

        return $this;
    }

    /**
     * Get idSupplyOrderState
     *
     * @return integer 
     */
    public function getIdSupplyOrderState()
    {
        return $this->idSupplyOrderState;
    }

    /**
     * Set idLang
     *
     * @param integer $idLang
     * @return TrSupplyOrderStateLang
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
     * @return TrSupplyOrderStateLang
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
