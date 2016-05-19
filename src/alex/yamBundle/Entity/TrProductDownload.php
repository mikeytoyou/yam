<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrProductDownload
 */
class TrProductDownload
{
    /**
     * @var integer
     */
    private $idProductDownload;

    /**
     * @var integer
     */
    private $idProduct;

    /**
     * @var string
     */
    private $displayFilename;

    /**
     * @var string
     */
    private $filename;

    /**
     * @var \DateTime
     */
    private $dateAdd;

    /**
     * @var \DateTime
     */
    private $dateExpiration;

    /**
     * @var integer
     */
    private $nbDaysAccessible;

    /**
     * @var integer
     */
    private $nbDownloadable;

    /**
     * @var boolean
     */
    private $active;

    /**
     * @var boolean
     */
    private $isShareable;


    /**
     * Get idProductDownload
     *
     * @return integer 
     */
    public function getIdProductDownload()
    {
        return $this->idProductDownload;
    }

    /**
     * Set idProduct
     *
     * @param integer $idProduct
     * @return TrProductDownload
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
     * Set displayFilename
     *
     * @param string $displayFilename
     * @return TrProductDownload
     */
    public function setDisplayFilename($displayFilename)
    {
        $this->displayFilename = $displayFilename;

        return $this;
    }

    /**
     * Get displayFilename
     *
     * @return string 
     */
    public function getDisplayFilename()
    {
        return $this->displayFilename;
    }

    /**
     * Set filename
     *
     * @param string $filename
     * @return TrProductDownload
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;

        return $this;
    }

    /**
     * Get filename
     *
     * @return string 
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * Set dateAdd
     *
     * @param \DateTime $dateAdd
     * @return TrProductDownload
     */
    public function setDateAdd($dateAdd)
    {
        $this->dateAdd = $dateAdd;

        return $this;
    }

    /**
     * Get dateAdd
     *
     * @return \DateTime 
     */
    public function getDateAdd()
    {
        return $this->dateAdd;
    }

    /**
     * Set dateExpiration
     *
     * @param \DateTime $dateExpiration
     * @return TrProductDownload
     */
    public function setDateExpiration($dateExpiration)
    {
        $this->dateExpiration = $dateExpiration;

        return $this;
    }

    /**
     * Get dateExpiration
     *
     * @return \DateTime 
     */
    public function getDateExpiration()
    {
        return $this->dateExpiration;
    }

    /**
     * Set nbDaysAccessible
     *
     * @param integer $nbDaysAccessible
     * @return TrProductDownload
     */
    public function setNbDaysAccessible($nbDaysAccessible)
    {
        $this->nbDaysAccessible = $nbDaysAccessible;

        return $this;
    }

    /**
     * Get nbDaysAccessible
     *
     * @return integer 
     */
    public function getNbDaysAccessible()
    {
        return $this->nbDaysAccessible;
    }

    /**
     * Set nbDownloadable
     *
     * @param integer $nbDownloadable
     * @return TrProductDownload
     */
    public function setNbDownloadable($nbDownloadable)
    {
        $this->nbDownloadable = $nbDownloadable;

        return $this;
    }

    /**
     * Get nbDownloadable
     *
     * @return integer 
     */
    public function getNbDownloadable()
    {
        return $this->nbDownloadable;
    }

    /**
     * Set active
     *
     * @param boolean $active
     * @return TrProductDownload
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

    /**
     * Set isShareable
     *
     * @param boolean $isShareable
     * @return TrProductDownload
     */
    public function setIsShareable($isShareable)
    {
        $this->isShareable = $isShareable;

        return $this;
    }

    /**
     * Get isShareable
     *
     * @return boolean 
     */
    public function getIsShareable()
    {
        return $this->isShareable;
    }
}
