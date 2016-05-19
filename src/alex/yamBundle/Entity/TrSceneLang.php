<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrSceneLang
 */
class TrSceneLang
{
    /**
     * @var integer
     */
    private $idScene;

    /**
     * @var integer
     */
    private $idLang;

    /**
     * @var string
     */
    private $name;


    /**
     * Set idScene
     *
     * @param integer $idScene
     * @return TrSceneLang
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
     * Set idLang
     *
     * @param integer $idLang
     * @return TrSceneLang
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
     * Set name
     *
     * @param string $name
     * @return TrSceneLang
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }
}
