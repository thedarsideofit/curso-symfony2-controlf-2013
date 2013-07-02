<?php

namespace ControlF\CatalogoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Producto
 *
 * @ORM\Table(name="producto")
 * @ORM\Entity(repositoryClass="ControlF\CatalogoBundle\Entity\ProductoRepository")
 */
class Producto
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @Assert\Length(
     *      min = "2",
     *      max = "5",
     *      minMessage = "Nombre por lo menos debe tener {{ limit }} caracteres de largo",
     *      maxMessage = "Nombre no puede tener más de {{ limit }} caracteres de largo"
     * )
     *
     * @ORM\Column(name="nombre", type="string", length=250,nullable=false)
     */
    private $nombre;

    /**
     * @var float
     *
     * @ORM\Column(name="precio", type="decimal")
     */
    private $precio;

    /**
     * @ORM\ManyToOne(targetEntity="Marca", inversedBy="productos",cascade={"persist"})
     * @ORM\JoinColumn(name="marca_id", referencedColumnName="id", nullable=false)
     */
    private $marca;

    
    

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
     * @return Producto
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
     * Set precio
     *
     * @param float $precio
     * @return Producto
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;
    
        return $this;
    }

    /**
     * Get precio
     *
     * @return float 
     */
    public function getPrecio()
    {
        return $this->precio;
    }
    

    /**
     * Set marca
     *
     * @param \ControlF\CatalogoBundle\Entity\Marca $marca
     * @return Producto
     */
    public function setMarca(\ControlF\CatalogoBundle\Entity\Marca $marca = null)
    {
        $this->marca = $marca;
    
        return $this;
    }

    /**
     * Get marca
     *
     * @return \ControlF\CatalogoBundle\Entity\Marca 
     */
    public function getMarca()
    {
        return $this->marca;
    }
}