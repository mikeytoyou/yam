<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrMetaLang
 */
class TrMetaLang
{
    /**
     * @var integer
     */
    private $idMeta;

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
    private $title;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $keywords;

    /**
     * @var string
     */
    private $urlRewrite;


    /**
     * Set idMeta
     *
     * @param integer $idMeta
     * @return TrMetaLang
     */
    public function setIdMeta($idMeta)
    {
        $this->idMeta = $idMeta;

        return $this;
    }

    /**
     * Get idMeta
     *
     * @return integer 
     */
    public function getIdMeta()
    {
        return $this->idMeta;
    }

    /**
     * Set idShop
     *
     * @param integer $idShop
     * @return TrMetaLang
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
     * @return TrMetaLang
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
     * @return TrMetaLang
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
     * @return TrMetaLang
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
     * Set keywords
     *
     * @param string $keywords
     * @return TrMetaLang
     */
    public function setKeywords($keywords)
    {
        $this->keywords = $keywords;

        return $this;
    }

    /**
     * Get keywords
     *
     * @return string 
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * Set urlRewrite
     *
     * @param string $urlRewrite
     * @return TrMetaLang
     */
    public function setUrlRewrite($urlRewrite)
    {
        $this->urlRewrite = $urlRewrite;

        return $this;
    }

    /**
     * Get urlRewrite
     *
     * @return string 
     */
    public function getUrlRewrite()
    {
        return $this->urlRewrite;
    }
}
