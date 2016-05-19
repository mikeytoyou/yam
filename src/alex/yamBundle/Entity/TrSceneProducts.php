<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrSceneProducts
 */
class TrSceneProducts
{
    /**
     * @var integer
     */
    private $idScene;

    /**
     * @var integer
     */
    private $idProduct;

    /**
     * @var integer
     */
    private $xAxis;

    /**
     * @var integer
     */
    private $yAxis;

    /**
     * @var integer
     */
    private $zoneWidth;

    /**
     * @var integer
     */
    private $zoneHeight;


    /**
     * Set idScene
     *
     * @param integer $idScene
     * @return TrSceneProducts
     */
    public function setIdScene($idScene)
    {
        $this->idScene = $idScene;

        return $this;
    }

    /**
     * Get idScene
     *
     * @return integer 
     */
    public function getIdScene()
    {
        return $this->idScene;
    }

    /**
     * Set idProduct
     *
     * @param integer $idProduct
     * @return TrSceneProducts
     */
    public function setIdProduct($idProduct)
    {
        $this->idProduct = $idProduct;

        return $this;
    }

    /**
     * Get idProduct
     *
     * @return integer 
     */
    public function getIdProduct()
    {
        return $this->idProduct;
    }

    /**
     * Set xAxis
     *
     * @param integer $xAxis
     * @return TrSceneProducts
     */
    public function setXAxis($xAxis)
    {
        $this->xAxis = $xAxis;

        return $this;
    }

    /**
     * Get xAxis
     *
     * @return integer 
     */
    public function getXAxis()
    {
        return $this->xAxis;
    }

    /**
     * Set yAxis
     *
     * @param integer $yAxis
     * @return TrSceneProducts
     */
    public function setYAxis($yAxis)
    {
        $this->yAxis = $yAxis;

        return $this;
    }

    /**
     * Get yAxis
     *
     * @return integer 
     */
    public function getYAxis()
    {
        return $this->yAxis;
    }

    /**
     * Set zoneWidth
     *
     * @param integer $zoneWidth
     * @return TrSceneProducts
     */
    public function setZoneWidth($zoneWidth)
    {
        $this->zoneWidth = $zoneWidth;

        return $this;
    }

    /**
     * Get zoneWidth
     *
     * @return integer 
     */
    public function getZoneWidth()
    {
        return $this->zoneWidth;
    }

    /**
     * Set zoneHeight
     *
     * @param integer $zoneHeight
     * @return TrSceneProducts
     */
    public function setZoneHeight($zoneHeight)
    {
        $this->zoneHeight = $zoneHeight;

        return $this;
    }

    /**
     * Get zoneHeight
     *
     * @return integer 
     */
    public function getZoneHeight()
    {
        return $this->zoneHeight;
    }
}
