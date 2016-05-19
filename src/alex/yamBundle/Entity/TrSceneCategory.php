<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrSceneCategory
 */
class TrSceneCategory
{
    /**
     * @var integer
     */
    private $idScene;

    /**
     * @var integer
     */
    private $idCategory;


    /**
     * Set idScene
     *
     * @param integer $idScene
     * @return TrSceneCategory
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
     * Set idCategory
     *
     * @param integer $idCategory
     * @return TrSceneCategory
     */
    public function setIdCategory($idCategory)
    {
        $this->idCategory = $idCategory;

        return $this;
    }

    /**
     * Get idCategory
     *
     * @return integer 
     */
    public function getIdCategory()
    {
        return $this->idCategory;
    }
}
