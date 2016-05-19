<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrLayeredIndexableAttributeLangValue
 */
class TrLayeredIndexableAttributeLangValue
{
    /**
     * @var integer
     */
    private $idAttribute;

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
     * Set idAttribute
     *
     * @param integer $idAttribute
     * @return TrLayeredIndexableAttributeLangValue
     */
    public function setIdAttribute($idAttribute)
    {
        $this->idAttribute = $idAttribute;

        return $this;
    }

    /**
     * Get idAttribute
     *
     * @return integer 
     */
    public function getIdAttribute()
    {
        return $this->idAttribute;
    }

    /**
     * Set idLang
     *
     * @param integer $idLang
     * @return TrLayeredIndexableAttributeLangValue
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
     * @return TrLayeredIndexableAttributeLangValue
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
     * @return TrLayeredIndexableAttributeLangValue
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
