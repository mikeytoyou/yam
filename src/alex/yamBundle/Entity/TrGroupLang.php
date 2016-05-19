<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrGroupLang
 */
class TrGroupLang
{
    /**
     * @var integer
     */
    private $idGroup;

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
    private $typeData;


    /**
     * Set idGroup
     *
     * @param integer $idGroup
     * @return TrGroupLang
     */
    public function setIdGroup($idGroup)
    {
        $this->idGroup = $idGroup;

        return $this;
    }

    /**
     * Get idGroup
     *
     * @return integer 
     */
    public function getIdGroup()
    {
        return $this->idGroup;
    }

    /**
     * Set idLang
     *
     * @param integer $idLang
     * @return TrGroupLang
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
     * @return TrGroupLang
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
     * Set typeData
     *
     * @param string $typeData
     * @return TrGroupLang
     */
    public function setTypeData($typeData)
    {
        $this->typeData = $typeData;

        return $this;
    }

    /**
     * Get typeData
     *
     * @return string 
     */
    public function getTypeData()
    {
        return $this->typeData;
    }
}
