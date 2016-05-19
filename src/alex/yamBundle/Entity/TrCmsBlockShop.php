<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrCmsBlockShop
 */
class TrCmsBlockShop
{
    /**
     * @var integer
     */
    private $idCmsBlock;

    /**
     * @var integer
     */
    private $idShop;


    /**
     * Set idCmsBlock
     *
     * @param integer $idCmsBlock
     * @return TrCmsBlockShop
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
     * Set idShop
     *
     * @param integer $idShop
     * @return TrCmsBlockShop
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
}
