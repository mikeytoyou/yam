<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrHook
 */
class TrHook
{
    /**
     * @var integer
     */
    private $idHook;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $description;

    /**
     * @var boolean
     */
    private $position;

    /**
     * @var boolean
     */
    private $liveEdit;


    /**
     * Get idHook
     *
     * @return integer 
     */
    public function getIdHook()
    {
        return $this->idHook;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return TrHook
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
     * Set title
     *
     * @param string $title
     * @return TrHook
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return TrHook
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

    /**
     * Set position
     *
     * @param boolean $position
     * @return TrHook
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return boolean 
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set liveEdit
     *
     * @param boolean $liveEdit
     * @return TrHook
     */
    public function setLiveEdit($liveEdit)
    {
        $this->liveEdit = $liveEdit;

        return $this;
    }

    /**
     * Get liveEdit
     *
     * @return boolean 
     */
    public function getLiveEdit()
    {
        return $this->liveEdit;
    }
}
