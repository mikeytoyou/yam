<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrLayeredIndexableFeatureLangValue
 */
class TrLayeredIndexableFeatureLangValue
{
    /**
     * @var integer
     */
    private $idFeature;

    /**
     * @var integer
     */
    private $idLang;

    /**
     * @var string
     */
    private $urlName;

    /**
     * @var string
     */
    private $metaTitle;


    /**
     * Set idFeature
     *
     * @param integer $idFeature
     * @return TrLayeredIndexableFeatureLangValue
     */
    public function setIdFeature($idFeature)
    {
        $this->idFeature = $idFeature;

        return $this;
    }

    /**
     * Get idFeature
     *
     * @return integer 
     */
    public function getIdFeature()
    {
        return $this->idFeature;
    }

    /**
     * Set idLang
     *
     * @param integer $idLang
     * @return TrLayeredIndexableFeatureLangValue
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
     * Set urlName
     *
     * @param string $urlName
     * @return TrLayeredIndexableFeatureLangValue
     */
    public function setUrlName($urlName)
    {
        $this->urlName = $urlName;

        return $this;
    }

    /**
     * Get urlName
     *
     * @return string 
     */
    public function getUrlName()
    {
        return $this->urlName;
    }

    /**
     * Set metaTitle
     *
     * @param string $metaTitle
     * @return TrLayeredIndexableFeatureLangValue
     */
    public function setMetaTitle($metaTitle)
    {
        $this->metaTitle = $metaTitle;

        return $this;
    }

    /**
     * Get metaTitle
     *
     * @return string 
     */
    public function getMetaTitle()
    {
        return $this->metaTitle;
    }
}
