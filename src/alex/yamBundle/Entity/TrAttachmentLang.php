<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrAttachmentLang
 */
class TrAttachmentLang
{
    /**
     * @var integer
     */
    private $idAttachment;

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
     * Set idAttachment
     *
     * @param integer $idAttachment
     * @return TrAttachmentLang
     */
    public function setIdAttachment($idAttachment)
    {
        $this->idAttachment = $idAttachment;

        return $this;
    }

    /**
     * Get idAttachment
     *
     * @return integer 
     */
    public function getIdAttachment()
    {
        return $this->idAttachment;
    }

    /**
     * Set idLang
     *
     * @param integer $idLang
     * @return TrAttachmentLang
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
     * @return TrAttachmentLang
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
     * @return TrAttachmentLang
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
