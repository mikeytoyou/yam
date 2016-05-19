<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrAttributeGroupLang
 */
class TrAttributeGroupLang
{
    /**
     * @var integer
     */
    private $idAttributeGroup;

    /**
     * @var integer
     */
    private $idLang;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $publicName;


    /**
     * Set idAttributeGroup
     *
     * @param integer $idAttributeGroup
     * @return TrAttributeGroupLang
     */
    public function setIdAttributeGroup($idAttributeGroup)
    {
        $this->idAttributeGroup = $idAttributeGroup;

        return $this;
    }

    /**
     * Get idAttributeGroup
     *
     * @return integer 
     */
    public function getIdAttributeGroup()
    {
        return $this->idAttributeGroup;
    }

    /**
     * Set idLang
     *
     * @param integer $idLang
     * @return TrAttributeGroupLang
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
     * @return TrAttributeGroupLang
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

    /**
     * Set publicName
     *
     * @param string $publicName
     * @return TrAttributeGroupLang
     */
    public function setPublicName($publicName)
    {
        $this->publicName = $publicName;

        return $this;
    }

    /**
     * Get publicName
     *
     * @return string 
     */
    public function getPublicName()
    {
        return $this->publicName;
    }
}
