<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrSceneShop
 */
class TrSceneShop
{
    /**
     * @var integer
     */
    private $idScene;

    /**
     * @var integer
     */
    private $idShop;


    /**
     * Set idScene
     *
     * @param integer $idScene
     * @return TrSceneShop
     */
    public function setIdScene($idScene)
    {
        $this->idScene = $idScene;

        return $this;
    }

    /**
     * Get idScene
     *
     * @return integer 
     */
    public function getIdScene()
    {
        return $this->idScene;
    }

    /**
     * Set idShop
     *
     * @param integer $idShop
     * @return TrSceneShop
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
