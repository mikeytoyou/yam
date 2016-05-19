<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrTheme
 */
class TrTheme
{
    /**
     * @var integer
     */
    private $idTheme;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $directory;

    /**
     * @var boolean
     */
    private $responsive;

    /**
     * @var boolean
     */
    private $defaultLeftColumn;

    /**
     * @var boolean
     */
    private $defaultRightColumn;

    /**
     * @var integer
     */
    private $productPerPage;


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
     * Set name
     *
     * @param string $name
     * @return TrTheme
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
     * Set directory
     *
     * @param string $directory
     * @return TrTheme
     */
    public function setDirectory($directory)
    {
        $this->directory = $directory;

        return $this;
    }

    /**
     * Get directory
     *
     * @return string 
     */
    public function getDirectory()
    {
        return $this->directory;
    }

    /**
     * Set responsive
     *
     * @param boolean $responsive
     * @return TrTheme
     */
    public function setResponsive($responsive)
    {
        $this->responsive = $responsive;

        return $this;
    }

    /**
     * Get responsive
     *
     * @return boolean 
     */
    public function getResponsive()
    {
        return $this->responsive;
    }

    /**
     * Set defaultLeftColumn
     *
     * @param boolean $defaultLeftColumn
     * @return TrTheme
     */
    public function setDefaultLeftColumn($defaultLeftColumn)
    {
        $this->defaultLeftColumn = $defaultLeftColumn;

        return $this;
    }

    /**
     * Get defaultLeftColumn
     *
     * @return boolean 
     */
    public function getDefaultLeftColumn()
    {
        return $this->defaultLeftColumn;
    }

    /**
     * Set defaultRightColumn
     *
     * @param boolean $defaultRightColumn
     * @return TrTheme
     */
    public function setDefaultRightColumn($defaultRightColumn)
    {
        $this->defaultRightColumn = $defaultRightColumn;

        return $this;
    }

    /**
     * Get defaultRightColumn
     *
     * @return boolean 
     */
    public function getDefaultRightColumn()
    {
        return $this->defaultRightColumn;
    }

    /**
     * Set productPerPage
     *
     * @param integer $productPerPage
     * @return TrTheme
     */
    public function setProductPerPage($productPerPage)
    {
        $this->productPerPage = $productPerPage;

        return $this;
    }

    /**
     * Get productPerPage
     *
     * @return integer 
     */
    public function getProductPerPage()
    {
        return $this->productPerPage;
    }
}
