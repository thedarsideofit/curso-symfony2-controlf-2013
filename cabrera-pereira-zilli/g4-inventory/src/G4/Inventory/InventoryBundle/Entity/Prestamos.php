<?php

namespace G4\Inventory\InventoryBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Prestamos
 */
class Prestamos
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $apellido;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $dni;

    /**
     * @var \DateTime
     */
    private $fechaPrestamo;

    /**
     * @var \DateTime
     */
    private $fechaDevolucion;

    /**
     * @var string
     */
    private $observaciones;


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
     * Set apellido
     *
     * @param string $apellido
     * @return Prestamos
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    
        return $this;
    }

    /**
     * Get apellido
     *
     * @return string 
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Prestamos
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    
        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set dni
     *
     * @param string $dni
     * @return Prestamos
     */
    public function setDni($dni)
    {
        $this->dni = $dni;
    
        return $this;
    }

    /**
     * Get dni
     *
     * @return string 
     */
    public function getDni()
    {
        return $this->dni;
    }

    /**
     * Set fechaPrestamo
     *
     * @param \DateTime $fechaPrestamo
     * @return Prestamos
     */
    public function setFechaPrestamo($fechaPrestamo)
    {
        $this->fechaPrestamo = $fechaPrestamo;
    
        return $this;
    }

    /**
     * Get fechaPrestamo
     *
     * @return \DateTime 
     */
    public function getFechaPrestamo()
    {
        return $this->fechaPrestamo;
    }

    /**
     * Set fechaDevolucion
     *
     * @param \DateTime $fechaDevolucion
     * @return Prestamos
     */
    public function setFechaDevolucion($fechaDevolucion)
    {
        $this->fechaDevolucion = $fechaDevolucion;
    
        return $this;
    }

    /**
     * Get fechaDevolucion
     *
     * @return \DateTime 
     */
    public function getFechaDevolucion()
    {
        return $this->fechaDevolucion;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     * @return Prestamos
     */
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;
    
        return $this;
    }

    /**
     * Get observaciones
     *
     * @return string 
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }
}
