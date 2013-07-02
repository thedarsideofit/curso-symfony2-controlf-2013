<?php

namespace ControlF\GenemuDemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\UniqueConstraint;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;


/**
 * Localidad
 *
 * @ORM\Table(name="localidad",
 *     uniqueConstraints={@UniqueConstraint(name="nomdep_idx", columns={"nombre", "departamento_id"})}
 * )
 * @ORM\Entity(repositoryClass="ControlF\GenemuDemoBundle\Entity\LocalidadRepository")
 * @UniqueEntity({"nombre", "departamento"})
 */
class Localidad
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
     * @ORM\Column(name="nombre", type="string", length=255, nullable=false)
     */
    private $nombre;
    
    /**
     * @var string
     *
     * @ORM\Column(name="nombre_largo", type="string", length=400, nullable=true)
     */
    private $nombreLargo;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="Departamento", inversedBy="localidades")
     * @ORM\JoinColumn(name="departamento_id", referencedColumnName="id", nullable=false)
     */
    private $departamento;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo_postal", type="string", length=50, nullable=true)
     */
    private $codigoPostal;
    
    
    
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
     * @return Localidad
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
     * Set codigoPostal
     *
     * @param string $codigoPostal
     * @return Localidad
     */
    public function setCodigoPostal($codigoPostal)
    {
        $this->codigoPostal = $codigoPostal;
    
        return $this;
    }

    /**
     * Get codigoPostal
     *
     * @return string 
     */
    public function getCodigoPostal()
    {
        return $this->codigoPostal;
    }

    /**
     * Set departamento
     *
     * @param \Iprodich\RegistroBundle\Entity\Departamento $departamento
     * @return Localidad
     */
    public function setDepartamento($departamento = null)
    {
        $this->departamento = $departamento;
    
        return $this;
    }

    /**
     * Get departamento
     *
     * @return \Iprodich\RegistroBundle\Entity\Departamento 
     */
    public function getDepartamento()
    {
        return $this->departamento;
    }

    public function __toString()
    {
        return (string)$this->getNombre();
    }    
}