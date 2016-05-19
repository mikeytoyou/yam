<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrHomesliderSlidesLang
 */
class TrHomesliderSlidesLang
{
    /**
     * @var integer
     */
    private $idHomesliderSlides;

    /**
     * @var integer
     */
    private $idLang;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $legend;

    /**
     * @var string
     */
    private $url;

    /**
     * @var string
     */
    private $image;


    /**
     * Set idHomesliderSlides
     *
     * @param integer $idHomesliderSlides
     * @return TrHomesliderSlidesLang
     */
    public function setIdHomesliderSlides($idHomesliderSlides)
    {
        $this->idHomesliderSlides = $idHomesliderSlides;

        return $this;
    }

    /**
     * Get idHomesliderSlides
     *
     * @return integer 
     */
    public function getIdHomesliderSlides()
    {
        return $this->idHomesliderSlides;
    }

    /**
     * Set idLang
     *
     * @param integer $idLang
     * @return TrHomesliderSlidesLang
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
     * Set title
     *
     * @param string $title
     * @return TrHomesliderSlidesLang
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return TrHomesliderSlidesLang
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set legend
     *
     * @param string $legend
     * @return TrHomesliderSlidesLang
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

    /**
     * Set url
     *
     * @param string $url
     * @return TrHomesliderSlidesLang
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set image
     *
     * @param string $image
     * @return TrHomesliderSlidesLang
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage()
    {
        return $this->image;
    }
}
