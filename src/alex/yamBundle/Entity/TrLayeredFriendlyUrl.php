<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrLayeredFriendlyUrl
 */
class TrLayeredFriendlyUrl
{
    /**
     * @var integer
     */
    private $idLayeredFriendlyUrl;

    /**
     * @var string
     */
    private $urlKey;

    /**
     * @var string
     */
    private $data;

    /**
     * @var integer
     */
    private $idLang;


    /**
     * Get idLayeredFriendlyUrl
     *
     * @return integer 
     */
    public function getIdLayeredFriendlyUrl()
    {
        return $this->idLayeredFriendlyUrl;
    }

    /**
     * Set urlKey
     *
     * @param string $urlKey
     * @return TrLayeredFriendlyUrl
     */
    public function setUrlKey($urlKey)
    {
        $this->urlKey = $urlKey;

        return $this;
    }

    /**
     * Get urlKey
     *
     * @return string 
     */
    public function getUrlKey()
    {
        return $this->urlKey;
    }

    /**
     * Set data
     *
     * @param string $data
     * @return TrLayeredFriendlyUrl
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get data
     *
     * @return string 
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set idLang
     *
     * @param integer $idLang
     * @return TrLayeredFriendlyUrl
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
}
