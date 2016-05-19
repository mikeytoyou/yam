<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrPage
 */
class TrPage
{
    /**
     * @var integer
     */
    private $idPage;

    /**
     * @var integer
     */
    private $idPageType;

    /**
     * @var integer
     */
    private $idObject;


    /**
     * Get idPage
     *
     * @return integer 
     */
    public function getIdPage()
    {
        return $this->idPage;
    }

    /**
     * Set idPageType
     *
     * @param integer $idPageType
     * @return TrPage
     */
    public function setIdPageType($idPageType)
    {
        $this->idPageType = $idPageType;

        return $this;
    }

    /**
     * Get idPageType
     *
     * @return integer 
     */
    public function getIdPageType()
    {
        return $this->idPageType;
    }

    /**
     * Set idObject
     *
     * @param integer $idObject
     * @return TrPage
     */
    public function setIdObject($idObject)
    {
        $this->idObject = $idObject;

        return $this;
    }

    /**
     * Get idObject
     *
     * @return integer 
     */
    public function getIdObject()
    {
        return $this->idObject;
    }
}
