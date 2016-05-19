<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrCmsBlockPage
 */
class TrCmsBlockPage
{
    /**
     * @var integer
     */
    private $idCmsBlockPage;

    /**
     * @var integer
     */
    private $idCmsBlock;

    /**
     * @var integer
     */
    private $idCms;

    /**
     * @var boolean
     */
    private $isCategory;


    /**
     * Get idCmsBlockPage
     *
     * @return integer 
     */
    public function getIdCmsBlockPage()
    {
        return $this->idCmsBlockPage;
    }

    /**
     * Set idCmsBlock
     *
     * @param integer $idCmsBlock
     * @return TrCmsBlockPage
     */
    public function setIdCmsBlock($idCmsBlock)
    {
        $this->idCmsBlock = $idCmsBlock;

        return $this;
    }

    /**
     * Get idCmsBlock
     *
     * @return integer 
     */
    public function getIdCmsBlock()
    {
        return $this->idCmsBlock;
    }

    /**
     * Set idCms
     *
     * @param integer $idCms
     * @return TrCmsBlockPage
     */
    public function setIdCms($idCms)
    {
        $this->idCms = $idCms;

        return $this;
    }

    /**
     * Get idCms
     *
     * @return integer 
     */
    public function getIdCms()
    {
        return $this->idCms;
    }

    /**
     * Set isCategory
     *
     * @param boolean $isCategory
     * @return TrCmsBlockPage
     */
    public function setIsCategory($isCategory)
    {
        $this->isCategory = $isCategory;

        return $this;
    }

    /**
     * Get isCategory
     *
     * @return boolean 
     */
    public function getIsCategory()
    {
        return $this->isCategory;
    }
}
