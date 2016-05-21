<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrSupplier
 */
class TrSupplier
{
    /**
     * @var integer
     */
    private $idSupplier;

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
     * @var string
     */
    private $rucSupplier;


    /**
     * Get idSupplier
     *
     * @return integer 
     */
    public function getIdSupplier()
    {
        return $this->idSupplier;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return TrSupplier
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
     * @return TrSupplier
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
     * @return TrSupplier
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
     * @return TrSupplier
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

    /**
     * Set rucSupplier
     *
     * @param string $rucSupplier
     * @return TrSupplier
     */
    public function setRucSupplier($rucSupplier)
    {
        $this->rucSupplier = $rucSupplier;

        return $this;
    }

    /**
     * Get rucSupplier
     *
     * @return string 
     */
    public function getRucSupplier()
    {
        return $this->rucSupplier;
    }
    /**
     * @var string
     */
    private $emailSupplier;


    /**
     * Set emailSupplier
     *
     * @param string $emailSupplier
     * @return TrSupplier
     */
    public function setEmailSupplier($emailSupplier)
    {
        $this->emailSupplier = $emailSupplier;

        return $this;
    }

    /**
     * Get emailSupplier
     *
     * @return string 
     */
    public function getEmailSupplier()
    {
        return $this->emailSupplier;
    }
}
