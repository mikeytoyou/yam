<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrManufacturer
 */
class TrManufacturer
{
    /**
     * @var integer
     */
    private $idManufacturer;

    /**
     * @var string
     */
    private $name;

    /**
     * @var \DateTime
     */
    private $dateAdd;

    /**
     * @var \DateTime
     */
    private $dateUpd;

    /**
     * @var boolean
     */
    private $active;


    /**
     * Get idManufacturer
     *
     * @return integer 
     */
    public function getIdManufacturer()
    {
        return $this->idManufacturer;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return TrManufacturer
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
     * Set dateAdd
     *
     * @param \DateTime $dateAdd
     * @return TrManufacturer
     */
    public function setDateAdd($dateAdd)
    {
        $this->dateAdd = $dateAdd;

        return $this;
    }

    /**
     * Get dateAdd
     *
     * @return \DateTime 
     */
    public function getDateAdd()
    {
        return $this->dateAdd;
    }

    /**
     * Set dateUpd
     *
     * @param \DateTime $dateUpd
     * @return TrManufacturer
     */
    public function setDateUpd($dateUpd)
    {
        $this->dateUpd = $dateUpd;

        return $this;
    }

    /**
     * Get dateUpd
     *
     * @return \DateTime 
     */
    public function getDateUpd()
    {
        return $this->dateUpd;
    }

    /**
     * Set active
     *
     * @param boolean $active
     * @return TrManufacturer
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return boolean 
     */
    public function getActive()
    {
        return $this->active;
    }
}
