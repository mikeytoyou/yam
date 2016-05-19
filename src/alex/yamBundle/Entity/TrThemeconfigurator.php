<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrThemeconfigurator
 */
class TrThemeconfigurator
{
    /**
     * @var integer
     */
    private $idItem;

    /**
     * @var integer
     */
    private $idShop;

    /**
     * @var integer
     */
    private $idLang;

    /**
     * @var integer
     */
    private $itemOrder;

    /**
     * @var string
     */
    private $title;

    /**
     * @var boolean
     */
    private $titleUse;

    /**
     * @var string
     */
    private $hook;

    /**
     * @var string
     */
    private $url;

    /**
     * @var boolean
     */
    private $target;

    /**
     * @var string
     */
    private $image;

    /**
     * @var string
     */
    private $imageW;

    /**
     * @var string
     */
    private $imageH;

    /**
     * @var string
     */
    private $html;

    /**
     * @var boolean
     */
    private $active;


    /**
     * Get idItem
     *
     * @return integer 
     */
    public function getIdItem()
    {
        return $this->idItem;
    }

    /**
     * Set idShop
     *
     * @param integer $idShop
     * @return TrThemeconfigurator
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
     * @return TrThemeconfigurator
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
     * Set itemOrder
     *
     * @param integer $itemOrder
     * @return TrThemeconfigurator
     */
    public function setItemOrder($itemOrder)
    {
        $this->itemOrder = $itemOrder;

        return $this;
    }

    /**
     * Get itemOrder
     *
     * @return integer 
     */
    public function getItemOrder()
    {
        return $this->itemOrder;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return TrThemeconfigurator
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
     * Set titleUse
     *
     * @param boolean $titleUse
     * @return TrThemeconfigurator
     */
    public function setTitleUse($titleUse)
    {
        $this->titleUse = $titleUse;

        return $this;
    }

    /**
     * Get titleUse
     *
     * @return boolean 
     */
    public function getTitleUse()
    {
        return $this->titleUse;
    }

    /**
     * Set hook
     *
     * @param string $hook
     * @return TrThemeconfigurator
     */
    public function setHook($hook)
    {
        $this->hook = $hook;

        return $this;
    }

    /**
     * Get hook
     *
     * @return string 
     */
    public function getHook()
    {
        return $this->hook;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return TrThemeconfigurator
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
     * Set target
     *
     * @param boolean $target
     * @return TrThemeconfigurator
     */
    public function setTarget($target)
    {
        $this->target = $target;

        return $this;
    }

    /**
     * Get target
     *
     * @return boolean 
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * Set image
     *
     * @param string $image
     * @return TrThemeconfigurator
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

    /**
     * Set imageW
     *
     * @param string $imageW
     * @return TrThemeconfigurator
     */
    public function setImageW($imageW)
    {
        $this->imageW = $imageW;

        return $this;
    }

    /**
     * Get imageW
     *
     * @return string 
     */
    public function getImageW()
    {
        return $this->imageW;
    }

    /**
     * Set imageH
     *
     * @param string $imageH
     * @return TrThemeconfigurator
     */
    public function setImageH($imageH)
    {
        $this->imageH = $imageH;

        return $this;
    }

    /**
     * Get imageH
     *
     * @return string 
     */
    public function getImageH()
    {
        return $this->imageH;
    }

    /**
     * Set html
     *
     * @param string $html
     * @return TrThemeconfigurator
     */
    public function setHtml($html)
    {
        $this->html = $html;

        return $this;
    }

    /**
     * Get html
     *
     * @return string 
     */
    public function getHtml()
    {
        return $this->html;
    }

    /**
     * Set active
     *
     * @param boolean $active
     * @return TrThemeconfigurator
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return boolean 
     */
    public function getActive()
    {
        return $this->active;
    }
}
