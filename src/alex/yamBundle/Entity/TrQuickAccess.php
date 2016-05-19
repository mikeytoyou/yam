<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrQuickAccess
 */
class TrQuickAccess
{
    /**
     * @var integer
     */
    private $idQuickAccess;

    /**
     * @var boolean
     */
    private $newWindow;

    /**
     * @var string
     */
    private $link;


    /**
     * Get idQuickAccess
     *
     * @return integer 
     */
    public function getIdQuickAccess()
    {
        return $this->idQuickAccess;
    }

    /**
     * Set newWindow
     *
     * @param boolean $newWindow
     * @return TrQuickAccess
     */
    public function setNewWindow($newWindow)
    {
        $this->newWindow = $newWindow;

        return $this;
    }

    /**
     * Get newWindow
     *
     * @return boolean 
     */
    public function getNewWindow()
    {
        return $this->newWindow;
    }

    /**
     * Set link
     *
     * @param string $link
     * @return TrQuickAccess
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get link
     *
     * @return string 
     */
    public function getLink()
    {
        return $this->link;
    }
}
