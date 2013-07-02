<?php

namespace ControlF\GenemuDemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\UniqueConstraint;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Departamento
 *
 * @ORM\Table(name="departamento",
 *     uniqueConstraints={@UniqueConstraint(name="nomprov_idx", columns={"nombre", "provincia_id"})}
 * )
 * @ORM\Entity(repositoryClass="ControlF\GenemuDemoBundle\Entity\DepartamentoRepository")
 * @UniqueEntity({"nombre", "provincia"})
 */
class Departamento
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
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="Provincia", inversedBy="departamentos")
     * @ORM\JoinColumn(name="provincia_id", referencedColumnName="id", nullable=false)
     */
    private $provincia;

    /**
     * @var Array
     *
     * @ORM\OneToMany(targetEntity="Localidad", mappedBy="departamento")
     */
    private $localidades;


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
     * @return Departamento
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
     * Constructor
     */
    public function __construct()
    {
        $this->localidades = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Set provincia
     *
     * @param \Iprodich\RegistroBundle\Entity\Provincia $provincia
     * @return Departamento
     */
    public function setProvincia($provincia = null)
    {
        $this->provincia = $provincia;
    
        return $this;
    }

    /**
     * Get provincia
     *
     * @return \Iprodich\RegistroBundle\Entity\Provincia 
     */
    public function getProvincia()
    {
        return $this->provincia;
    }

    /**
     * Add localidad
     *
     * @param \Iprodich\RegistroBundle\Entity\Localidad $localidad
     * @return Departamento
     */
    public function addLocalidade($localidad)
    {
        $this->localidades[] = $localidad;
    
        return $this;
    }

    /**
     * Remove localidad
     *
     * @param \Iprodich\RegistroBundle\Entity\Localidad $localidad
     */
    public function removeLocalidade($localidad)
    {
        $this->localidades->removeElement($localidad);
    }

    /**
     * Get localidades
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLocalidades()
    {
        return $this->localidades;
    }

    public function __toString()
    {
        return (string)$this->getNombre();
    }
}