<?php

namespace alex\yamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Paquete
 */
class Paquete
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $idCustomer;

    /**
     * @var \DateTime
     */
    private $fechCreada;

    /**
     * @var string
     */
    private $duracion;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idCustomer
     *
     * @param integer $idCustomer
     * @return Paquete
     */
    public function setIdCustomer($idCustomer)
    {
        $this->idCustomer = $idCustomer;

        return $this;
    }

    /**
     * Get idCustomer
     *
     * @return integer 
     */
    public function getIdCustomer()
    {
        return $this->idCustomer;
    }

    /**
     * Set fechCreada
     *
     * @param \DateTime $fechCreada
     * @return Paquete
     */
    public function setFechCreada($fechCreada)
    {
        $this->fechCreada = $fechCreada;

        return $this;
    }

    /**
     * Get fechCreada
     *
     * @return \DateTime 
     */
    public function getFechCreada()
    {
        return $this->fechCreada;
    }

    /**
     * Set duracion
     *
     * @param string $duracion
     * @return Paquete
     */
    public function setDuracion($duracion)
    {
        $this->duracion = $duracion;

        return $this;
    }

    /**
     * Get duracion
     *
     * @return string 
     */
    public function getDuracion()
    {
        return $this->duracion;
    }
    
    public function getRutas(){
        
        
    }
     public function rutas(){
        
        
    }
     public function isRutas(){
        
        
    }
       public function hasRutas(){
        
        
    }
       public function get(){
        
        
    }
    
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $duraciones;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->duraciones = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add duraciones
     *
     * @param \alex\yamBundle\Entity\duracion $duraciones
     * @return Paquete
     */
    public function addDuracione(\alex\yamBundle\Entity\duracion $duraciones)
    {
        $this->duraciones[] = $duraciones;

        return $this;
    }

    /**
     * Remove duraciones
     *
     * @param \alex\yamBundle\Entity\duracion $duraciones
     */
    public function removeDuracione(\alex\yamBundle\Entity\duracion $duraciones)
    {
        $this->duraciones->removeElement($duraciones);
    }

    /**
     * Get duraciones
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDuraciones()
    {
        return $this->duraciones;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $rutas;


    /**
     * Add rutas
     *
     * @param \alex\yamBundle\Entity\ruta $rutas
     * @return Paquete
     */
    public function addRuta(\alex\yamBundle\Entity\ruta $rutas)
    {
        $this->rutas[] = $rutas;

        return $this;
    }

    /**
     * Remove rutas
     *
     * @param \alex\yamBundle\Entity\ruta $rutas
     */
    public function removeRuta(\alex\yamBundle\Entity\ruta $rutas)
    {
        $this->rutas->removeElement($rutas);
    }
}
