<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrOrderStateLang
 */
class TrOrderStateLang
{
    /**
     * @var integer
     */
    private $idOrderState;

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
    private $template;


    /**
     * Set idOrderState
     *
     * @param integer $idOrderState
     * @return TrOrderStateLang
     */
    public function setIdOrderState($idOrderState)
    {
        $this->idOrderState = $idOrderState;

        return $this;
    }

    /**
     * Get idOrderState
     *
     * @return integer 
     */
    public function getIdOrderState()
    {
        return $this->idOrderState;
    }

    /**
     * Set idLang
     *
     * @param integer $idLang
     * @return TrOrderStateLang
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
     * @return TrOrderStateLang
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
     * Set template
     *
     * @param string $template
     * @return TrOrderStateLang
     */
    public function setTemplate($template)
    {
        $this->template = $template;

        return $this;
    }

    /**
     * Get template
     *
     * @return string 
     */
    public function getTemplate()
    {
        return $this->template;
    }
}
