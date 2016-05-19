<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrOrderMessageLang
 */
class TrOrderMessageLang
{
    /**
     * @var integer
     */
    private $idOrderMessage;

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
    private $message;


    /**
     * Set idOrderMessage
     *
     * @param integer $idOrderMessage
     * @return TrOrderMessageLang
     */
    public function setIdOrderMessage($idOrderMessage)
    {
        $this->idOrderMessage = $idOrderMessage;

        return $this;
    }

    /**
     * Get idOrderMessage
     *
     * @return integer 
     */
    public function getIdOrderMessage()
    {
        return $this->idOrderMessage;
    }

    /**
     * Set idLang
     *
     * @param integer $idLang
     * @return TrOrderMessageLang
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
     * @return TrOrderMessageLang
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
     * Set message
     *
     * @param string $message
     * @return TrOrderMessageLang
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string 
     */
    public function getMessage()
    {
        return $this->message;
    }
}
