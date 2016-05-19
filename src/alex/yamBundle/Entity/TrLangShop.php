<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrLangShop
 */
class TrLangShop
{
    /**
     * @var integer
     */
    private $idLang;

    /**
     * @var integer
     */
    private $idShop;


    /**
     * Set idLang
     *
     * @param integer $idLang
     * @return TrLangShop
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
     * Set idShop
     *
     * @param integer $idShop
     * @return TrLangShop
     */
    public function setIdShop($idShop)
    {
        $this->idShop = $idShop;

        return $this;
    }

    /**
     * Get idShop
     *
     * @return integer 
     */
    public function getIdShop()
    {
        return $this->idShop;
    }
}
