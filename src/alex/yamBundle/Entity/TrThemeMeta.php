<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrThemeMeta
 */
class TrThemeMeta
{
    /**
     * @var integer
     */
    private $idThemeMeta;

    /**
     * @var integer
     */
    private $idTheme;

    /**
     * @var integer
     */
    private $idMeta;

    /**
     * @var boolean
     */
    private $leftColumn;

    /**
     * @var boolean
     */
    private $rightColumn;


    /**
     * Get idThemeMeta
     *
     * @return integer 
     */
    public function getIdThemeMeta()
    {
        return $this->idThemeMeta;
    }

    /**
     * Set idTheme
     *
     * @param integer $idTheme
     * @return TrThemeMeta
     */
    public function setIdTheme($idTheme)
    {
        $this->idTheme = $idTheme;

        return $this;
    }

    /**
     * Get idTheme
     *
     * @return integer 
     */
    public function getIdTheme()
    {
        return $this->idTheme;
    }

    /**
     * Set idMeta
     *
     * @param integer $idMeta
     * @return TrThemeMeta
     */
    public function setIdMeta($idMeta)
    {
        $this->idMeta = $idMeta;

        return $this;
    }

    /**
     * Get idMeta
     *
     * @return integer 
     */
    public function getIdMeta()
    {
        return $this->idMeta;
    }

    /**
     * Set leftColumn
     *
     * @param boolean $leftColumn
     * @return TrThemeMeta
     */
    public function setLeftColumn($leftColumn)
    {
        $this->leftColumn = $leftColumn;

        return $this;
    }

    /**
     * Get leftColumn
     *
     * @return boolean 
     */
    public function getLeftColumn()
    {
        return $this->leftColumn;
    }

    /**
     * Set rightColumn
     *
     * @param boolean $rightColumn
     * @return TrThemeMeta
     */
    public function setRightColumn($rightColumn)
    {
        $this->rightColumn = $rightColumn;

        return $this;
    }

    /**
     * Get rightColumn
     *
     * @return boolean 
     */
    public function getRightColumn()
    {
        return $this->rightColumn;
    }
}
