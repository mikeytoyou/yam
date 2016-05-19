<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrCmsShop
 */
class TrCmsShop
{
    /**
     * @var integer
     */
    private $idCms;

    /**
     * @var integer
     */
    private $idShop;


    /**
     * Set idCms
     *
     * @param integer $idCms
     * @return TrCmsShop
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
     * Set idShop
     *
     * @param integer $idShop
     * @return TrCmsShop
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
