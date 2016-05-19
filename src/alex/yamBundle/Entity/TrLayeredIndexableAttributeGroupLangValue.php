<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrLayeredIndexableAttributeGroupLangValue
 */
class TrLayeredIndexableAttributeGroupLangValue
{
    /**
     * @var integer
     */
    private $idAttributeGroup;

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
     * Set idAttributeGroup
     *
     * @param integer $idAttributeGroup
     * @return TrLayeredIndexableAttributeGroupLangValue
     */
    public function setIdAttributeGroup($idAttributeGroup)
    {
        $this->idAttributeGroup = $idAttributeGroup;

        return $this;
    }

    /**
     * Get idAttributeGroup
     *
     * @return integer 
     */
    public function getIdAttributeGroup()
    {
        return $this->idAttributeGroup;
    }

    /**
     * Set idLang
     *
     * @param integer $idLang
     * @return TrLayeredIndexableAttributeGroupLangValue
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
     * @return TrLayeredIndexableAttributeGroupLangValue
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
     * @return TrLayeredIndexableAttributeGroupLangValue
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
