<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrSearchWord
 */
class TrSearchWord
{
    /**
     * @var integer
     */
    private $idWord;

    /**
     * @var integer
     */
    private $idShop;

    /**
     * @var integer
     */
    private $idLang;

    /**
     * @var string
     */
    private $word;


    /**
     * Get idWord
     *
     * @return integer 
     */
    public function getIdWord()
    {
        return $this->idWord;
    }

    /**
     * Set idShop
     *
     * @param integer $idShop
     * @return TrSearchWord
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

    /**
     * Set idLang
     *
     * @param integer $idLang
     * @return TrSearchWord
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
     * Set word
     *
     * @param string $word
     * @return TrSearchWord
     */
    public function setWord($word)
    {
        $this->word = $word;

        return $this;
    }

    /**
     * Get word
     *
     * @return string 
     */
    public function getWord()
    {
        return $this->word;
    }
}
