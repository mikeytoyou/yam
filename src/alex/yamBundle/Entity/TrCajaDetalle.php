<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrCajaDetalle
 */
class TrCajaDetalle
{
    /**
     * @var integer
     */
    private $idCajaDetalle;

    /**
     * @var integer
     */
    private $idCaja;

    /**
     * @var float
     */
    private $montoVirtual;

    /**
     * @var float
     */
    private $montoReal;

    /**
     * @var float
     */
    private $saldo;

    /**
     * @var string
     */
    private $estado;

    /**
     * @var \DateTime
     */
    private $dateAdd;

    /**
     * @var \DateTime
     */
    private $dateUpd;


    /**
     * Get idCajaDetalle
     *
     * @return integer 
     */
    public function getIdCajaDetalle()
    {
        return $this->idCajaDetalle;
    }

    /**
     * Set idCaja
     *
     * @param integer $idCaja
     * @return TrCajaDetalle
     */
    public function setIdCaja($idCaja)
    {
        $this->idCaja = $idCaja;

        return $this;
    }

    /**
     * Get idCaja
     *
     * @return integer 
     */
    public function getIdCaja()
    {
        return $this->idCaja;
    }

    /**
     * Set montoVirtual
     *
     * @param float $montoVirtual
     * @return TrCajaDetalle
     */
    public function setMontoVirtual($montoVirtual)
    {
        $this->montoVirtual = $montoVirtual;

        return $this;
    }

    /**
     * Get montoVirtual
     *
     * @return float 
     */
    public function getMontoVirtual()
    {
        return $this->montoVirtual;
    }

    /**
     * Set montoReal
     *
     * @param float $montoReal
     * @return TrCajaDetalle
     */
    public function setMontoReal($montoReal)
    {
        $this->montoReal = $montoReal;

        return $this;
    }

    /**
     * Get montoReal
     *
     * @return float 
     */
    public function getMontoReal()
    {
        return $this->montoReal;
    }

    /**
     * Set saldo
     *
     * @param float $saldo
     * @return TrCajaDetalle
     */
    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;

        return $this;
    }

    /**
     * Get saldo
     *
     * @return float 
     */
    public function getSaldo()
    {
        return $this->saldo;
    }

    /**
     * Set estado
     *
     * @param string $estado
     * @return TrCajaDetalle
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return string 
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set dateAdd
     *
     * @param \DateTime $dateAdd
     * @return TrCajaDetalle
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
     * @return TrCajaDetalle
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
}
