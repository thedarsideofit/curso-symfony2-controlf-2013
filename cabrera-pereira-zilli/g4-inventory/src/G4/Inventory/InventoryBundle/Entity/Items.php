<?php

namespace G4\Inventory\InventoryBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Items
 */
class Items
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var \DateTime
     */
    private $fechaAdquisicion;

    /**
     * @var string
     */
    private $marca;

    /**
     * @var string
     */
    private $modelo;

    /**
     * @var string
     */
    private $serialNumber;

    /**
     * @var string
     */
    private $garantia;

    /**
     * @var string
     */
    private $categoria;

    /**
     * @var float
     */
    private $costo;

    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var string
     */
    private $ubicacion;

    /**
     * @var string
     */
    private $estado;

    /**
     * @var string
     */
    private $condicion;

    /**
     * @var string
     */
    private $codigoInventario;

    /**
     * @var string
     */
    private $itemCodigo;


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
     * Set nombre
     *
     * @param string $nombre
     * @return Items
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
     * Set fechaAdquisicion
     *
     * @param \DateTime $fechaAdquisicion
     * @return Items
     */
    public function setFechaAdquisicion($fechaAdquisicion)
    {
        $this->fechaAdquisicion = $fechaAdquisicion;
    
        return $this;
    }

    /**
     * Get fechaAdquisicion
     *
     * @return \DateTime 
     */
    public function getFechaAdquisicion()
    {
        return $this->fechaAdquisicion;
    }

    /**
     * Set marca
     *
     * @param string $marca
     * @return Items
     */
    public function setMarca($marca)
    {
        $this->marca = $marca;
    
        return $this;
    }

    /**
     * Get marca
     *
     * @return string 
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Set modelo
     *
     * @param string $modelo
     * @return Items
     */
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    
        return $this;
    }

    /**
     * Get modelo
     *
     * @return string 
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * Set serialNumber
     *
     * @param string $serialNumber
     * @return Items
     */
    public function setSerialNumber($serialNumber)
    {
        $this->serialNumber = $serialNumber;
    
        return $this;
    }

    /**
     * Get serialNumber
     *
     * @return string 
     */
    public function getSerialNumber()
    {
        return $this->serialNumber;
    }

    /**
     * Set garantia
     *
     * @param string $garantia
     * @return Items
     */
    public function setGarantia($garantia)
    {
        $this->garantia = $garantia;
    
        return $this;
    }

    /**
     * Get garantia
     *
     * @return string 
     */
    public function getGarantia()
    {
        return $this->garantia;
    }

    /**
     * Set categoria
     *
     * @param string $categoria
     * @return Items
     */
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;
    
        return $this;
    }

    /**
     * Get categoria
     *
     * @return string 
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * Set costo
     *
     * @param float $costo
     * @return Items
     */
    public function setCosto($costo)
    {
        $this->costo = $costo;
    
        return $this;
    }

    /**
     * Get costo
     *
     * @return float 
     */
    public function getCosto()
    {
        return $this->costo;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Items
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    
        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set ubicacion
     *
     * @param string $ubicacion
     * @return Items
     */
    public function setUbicacion($ubicacion)
    {
        $this->ubicacion = $ubicacion;
    
        return $this;
    }

    /**
     * Get ubicacion
     *
     * @return string 
     */
    public function getUbicacion()
    {
        return $this->ubicacion;
    }

    /**
     * Set estado
     *
     * @param string $estado
     * @return Items
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
     * Set condicion
     *
     * @param string $condicion
     * @return Items
     */
    public function setCondicion($condicion)
    {
        $this->condicion = $condicion;
    
        return $this;
    }

    /**
     * Get condicion
     *
     * @return string 
     */
    public function getCondicion()
    {
        return $this->condicion;
    }

    /**
     * Set codigoInventario
     *
     * @param string $codigoInventario
     * @return Items
     */
    public function setCodigoInventario($codigoInventario)
    {
        $this->codigoInventario = $codigoInventario;
    
        return $this;
    }

    /**
     * Get codigoInventario
     *
     * @return string 
     */
    public function getCodigoInventario()
    {
        return $this->codigoInventario;
    }

    /**
     * Set itemCodigo
     *
     * @param string $itemCodigo
     * @return Items
     */
    public function setItemCodigo($itemCodigo)
    {
        $this->itemCodigo = $itemCodigo;
    
        return $this;
    }

    /**
     * Get itemCodigo
     *
     * @return string 
     */
    public function getItemCodigo()
    {
        return $this->itemCodigo;
    }
}
