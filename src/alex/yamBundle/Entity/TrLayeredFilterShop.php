<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrLayeredFilterShop
 */
class TrLayeredFilterShop
{
    /**
     * @var integer
     */
    private $idLayeredFilter;

    /**
     * @var integer
     */
    private $idShop;


    /**
     * Set idLayeredFilter
     *
     * @param integer $idLayeredFilter
     * @return TrLayeredFilterShop
     */
    public function setIdLayeredFilter($idLayeredFilter)
    {
        $this->idLayeredFilter = $idLayeredFilter;

        return $this;
    }

    /**
     * Get idLayeredFilter
     *
     * @return integer 
     */
    public function getIdLayeredFilter()
    {
        return $this->idLayeredFilter;
    }

    /**
     * Set idShop
     *
     * @param integer $idShop
     * @return TrLayeredFilterShop
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
