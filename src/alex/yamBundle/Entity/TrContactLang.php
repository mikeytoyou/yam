<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrContactLang
 */
class TrContactLang
{
    /**
     * @var integer
     */
    private $idContact;

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
    private $description;


    /**
     * Set idContact
     *
     * @param integer $idContact
     * @return TrContactLang
     */
    public function setIdContact($idContact)
    {
        $this->idContact = $idContact;

        return $this;
    }

    /**
     * Get idContact
     *
     * @return integer 
     */
    public function getIdContact()
    {
        return $this->idContact;
    }

    /**
     * Set idLang
     *
     * @param integer $idLang
     * @return TrContactLang
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
     * @return TrContactLang
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
     * Set description
     *
     * @param string $description
     * @return TrContactLang
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }
}
