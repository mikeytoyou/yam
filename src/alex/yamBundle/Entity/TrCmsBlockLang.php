<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrCmsBlockLang
 */
class TrCmsBlockLang
{
    /**
     * @var integer
     */
    private $idCmsBlock;

    /**
     * @var integer
     */
    private $idLang;

    /**
     * @var string
     */
    private $name;


    /**
     * Set idCmsBlock
     *
     * @param integer $idCmsBlock
     * @return TrCmsBlockLang
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
     * Set idLang
     *
     * @param integer $idLang
     * @return TrCmsBlockLang
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
     * @return TrCmsBlockLang
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
