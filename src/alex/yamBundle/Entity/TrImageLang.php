<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrImageLang
 */
class TrImageLang
{
    /**
     * @var integer
     */
    private $idImage;

    /**
     * @var integer
     */
    private $idLang;

    /**
     * @var string
     */
    private $legend;


    /**
     * Set idImage
     *
     * @param integer $idImage
     * @return TrImageLang
     */
    public function setIdImage($idImage)
    {
        $this->idImage = $idImage;

        return $this;
    }

    /**
     * Get idImage
     *
     * @return integer 
     */
    public function getIdImage()
    {
        return $this->idImage;
    }

    /**
     * Set idLang
     *
     * @param integer $idLang
     * @return TrImageLang
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
     * Set legend
     *
     * @param string $legend
     * @return TrImageLang
     */
    public function setLegend($legend)
    {
        $this->legend = $legend;

        return $this;
    }

    /**
     * Get legend
     *
     * @return string 
     */
    public function getLegend()
    {
        return $this->legend;
    }
}
