<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrLayeredIndexableFeatureValueLangValue
 */
class TrLayeredIndexableFeatureValueLangValue
{
    /**
     * @var integer
     */
    private $idFeatureValue;

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
     * Set idFeatureValue
     *
     * @param integer $idFeatureValue
     * @return TrLayeredIndexableFeatureValueLangValue
     */
    public function setIdFeatureValue($idFeatureValue)
    {
        $this->idFeatureValue = $idFeatureValue;

        return $this;
    }

    /**
     * Get idFeatureValue
     *
     * @return integer 
     */
    public function getIdFeatureValue()
    {
        return $this->idFeatureValue;
    }

    /**
     * Set idLang
     *
     * @param integer $idLang
     * @return TrLayeredIndexableFeatureValueLangValue
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
     * @return TrLayeredIndexableFeatureValueLangValue
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
     * @return TrLayeredIndexableFeatureValueLangValue
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
