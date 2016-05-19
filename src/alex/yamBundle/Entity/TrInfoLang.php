<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrInfoLang
 */
class TrInfoLang
{
    /**
     * @var integer
     */
    private $idInfo;

    /**
     * @var integer
     */
    private $idLang;

    /**
     * @var string
     */
    private $text;


    /**
     * Set idInfo
     *
     * @param integer $idInfo
     * @return TrInfoLang
     */
    public function setIdInfo($idInfo)
    {
        $this->idInfo = $idInfo;

        return $this;
    }

    /**
     * Get idInfo
     *
     * @return integer 
     */
    public function getIdInfo()
    {
        return $this->idInfo;
    }

    /**
     * Set idLang
     *
     * @param integer $idLang
     * @return TrInfoLang
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
     * Set text
     *
     * @param string $text
     * @return TrInfoLang
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string 
     */
    public function getText()
    {
        return $this->text;
    }
}
