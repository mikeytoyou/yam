<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrLinksmenutop
 */
class TrLinksmenutop
{
    /**
     * @var integer
     */
    private $idLinksmenutop;

    /**
     * @var integer
     */
    private $idShop;

    /**
     * @var boolean
     */
    private $newWindow;


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
     * Set idShop
     *
     * @param integer $idShop
     * @return TrLinksmenutop
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
     * Set newWindow
     *
     * @param boolean $newWindow
     * @return TrLinksmenutop
     */
    public function setNewWindow($newWindow)
    {
        $this->newWindow = $newWindow;

        return $this;
    }

    /**
     * Get newWindow
     *
     * @return boolean 
     */
    public function getNewWindow()
    {
        return $this->newWindow;
    }
}
