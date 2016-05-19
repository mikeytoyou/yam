<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrCategoryLang
 */
class TrCategoryLang
{
    /**
     * @var integer
     */
    private $idCategory;

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
    private $name;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $linkRewrite;

    /**
     * @var string
     */
    private $metaTitle;

    /**
     * @var string
     */
    private $metaKeywords;

    /**
     * @var string
     */
    private $metaDescription;


    /**
     * Set idCategory
     *
     * @param integer $idCategory
     * @return TrCategoryLang
     */
    public function setIdCategory($idCategory)
    {
        $this->idCategory = $idCategory;

        return $this;
    }

    /**
     * Get idCategory
     *
     * @return integer 
     */
    public function getIdCategory()
    {
        return $this->idCategory;
    }

    /**
     * Set idShop
     *
     * @param integer $idShop
     * @return TrCategoryLang
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
     * @return TrCategoryLang
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
     * @return TrCategoryLang
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

    /**
     * Set description
     *
     * @param string $description
     * @return TrCategoryLang
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
     * Set linkRewrite
     *
     * @param string $linkRewrite
     * @return TrCategoryLang
     */
    public function setLinkRewrite($linkRewrite)
    {
        $this->linkRewrite = $linkRewrite;

        return $this;
    }

    /**
     * Get linkRewrite
     *
     * @return string 
     */
    public function getLinkRewrite()
    {
        return $this->linkRewrite;
    }

    /**
     * Set metaTitle
     *
     * @param string $metaTitle
     * @return TrCategoryLang
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

    /**
     * Set metaKeywords
     *
     * @param string $metaKeywords
     * @return TrCategoryLang
     */
    public function setMetaKeywords($metaKeywords)
    {
        $this->metaKeywords = $metaKeywords;

        return $this;
    }

    /**
     * Get metaKeywords
     *
     * @return string 
     */
    public function getMetaKeywords()
    {
        return $this->metaKeywords;
    }

    /**
     * Set metaDescription
     *
     * @param string $metaDescription
     * @return TrCategoryLang
     */
    public function setMetaDescription($metaDescription)
    {
        $this->metaDescription = $metaDescription;

        return $this;
    }

    /**
     * Get metaDescription
     *
     * @return string 
     */
    public function getMetaDescription()
    {
        return $this->metaDescription;
    }
}
