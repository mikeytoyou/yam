<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrProductLang
 */
class TrProductLang
{
    /**
     * @var integer
     */
    private $idProduct;

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
    private $description;

    /**
     * @var string
     */
    private $descriptionShort;

    /**
     * @var string
     */
    private $linkRewrite;

    /**
     * @var string
     */
    private $metaDescription;

    /**
     * @var string
     */
    private $metaKeywords;

    /**
     * @var string
     */
    private $metaTitle;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $availableNow;

    /**
     * @var string
     */
    private $availableLater;


    /**
     * Set idProduct
     *
     * @param integer $idProduct
     * @return TrProductLang
     */
    public function setIdProduct($idProduct)
    {
        $this->idProduct = $idProduct;

        return $this;
    }

    /**
     * Get idProduct
     *
     * @return integer 
     */
    public function getIdProduct()
    {
        return $this->idProduct;
    }

    /**
     * Set idShop
     *
     * @param integer $idShop
     * @return TrProductLang
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
     * @return TrProductLang
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
     * Set description
     *
     * @param string $description
     * @return TrProductLang
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
     * Set descriptionShort
     *
     * @param string $descriptionShort
     * @return TrProductLang
     */
    public function setDescriptionShort($descriptionShort)
    {
        $this->descriptionShort = $descriptionShort;

        return $this;
    }

    /**
     * Get descriptionShort
     *
     * @return string 
     */
    public function getDescriptionShort()
    {
        return $this->descriptionShort;
    }

    /**
     * Set linkRewrite
     *
     * @param string $linkRewrite
     * @return TrProductLang
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
     * Set metaDescription
     *
     * @param string $metaDescription
     * @return TrProductLang
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

    /**
     * Set metaKeywords
     *
     * @param string $metaKeywords
     * @return TrProductLang
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
     * Set metaTitle
     *
     * @param string $metaTitle
     * @return TrProductLang
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
     * Set name
     *
     * @param string $name
     * @return TrProductLang
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
     * Set availableNow
     *
     * @param string $availableNow
     * @return TrProductLang
     */
    public function setAvailableNow($availableNow)
    {
        $this->availableNow = $availableNow;

        return $this;
    }

    /**
     * Get availableNow
     *
     * @return string 
     */
    public function getAvailableNow()
    {
        return $this->availableNow;
    }

    /**
     * Set availableLater
     *
     * @param string $availableLater
     * @return TrProductLang
     */
    public function setAvailableLater($availableLater)
    {
        $this->availableLater = $availableLater;

        return $this;
    }

    /**
     * Get availableLater
     *
     * @return string 
     */
    public function getAvailableLater()
    {
        return $this->availableLater;
    }
}
