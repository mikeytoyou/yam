<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrLinksmenutopLang
 */
class TrLinksmenutopLang
{
    /**
     * @var integer
     */
    private $idLinksmenutop;

    /**
     * @var integer
     */
    private $idLang;

    /**
     * @var integer
     */
    private $idShop;

    /**
     * @var string
     */
    private $label;

    /**
     * @var string
     */
    private $link;


    /**
     * Get idLinksmenutop
     *
     * @return integer 
     */
    public function getIdLinksmenutop()
    {
        return $this->idLinksmenutop;
    }

    /**
     * Set idLang
     *
     * @param integer $idLang
     * @return TrLinksmenutopLang
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
     * Set idShop
     *
     * @param integer $idShop
     * @return TrLinksmenutopLang
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
     * Set label
     *
     * @param string $label
     * @return TrLinksmenutopLang
     */
    public function setLabel($label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * Get label
     *
     * @return string 
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Set link
     *
     * @param string $link
     * @return TrLinksmenutopLang
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get link
     *
     * @return string 
     */
    public function getLink()
    {
        return $this->link;
    }
}
