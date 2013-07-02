<?php

namespace ControlF\GenemuDemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\UniqueConstraint;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Provincia
 *
 * @ORM\Table(name="provincia",
 *     uniqueConstraints={@UniqueConstraint(name="nompais_idx", columns={"nombre", "pais_id"})}
 * )
 * @ORM\Entity(repositoryClass="ControlF\GenemuDemoBundle\Entity\ProvinciaRepository")
 * @UniqueEntity({"nombre", "pais"})
 */
class Provincia
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
     * @Assert\NotNull
     */
    private $nombre;

     /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="Pais", inversedBy="provincias")
     * @ORM\JoinColumn(name="pais_id", referencedColumnName="id", nullable=false)
     * @Assert\NotNull
     */
    private $pais;
    
    /**
     * @var Array
     * 
     * @ORM\OneToMany(targetEntity="Departamento", mappedBy="provincia")
     */
    private $departamentos;

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
     * @return Provincia
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
        $this->departamentos = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Set _pais
     *
     * @param \Iprodich\RegistroBundle\Entity\Pais $pais
     * @return Provincia
     */
    public function setPais($pais = null)
    {
        $this->pais = $pais;
    
        return $this;
    }

    /**
     * Get _pais
     *
     * @return \Iprodich\RegistroBundle\Entity\Pais 
     */
    public function getPais()
    {
        return $this->pais;
    }

    /**
     * Add departamento
     *
     * @param \Iprodich\RegistroBundle\Entity\Departamento $departamento
     * @return Provincia
     */
    public function addDepartamento($departamento)
    {
        $this->departamentos[] = $departamento;
    
        return $this;
    }

    /**
     * Remove departamento
     *
     * @param \Iprodich\RegistroBundle\Entity\Departamento $departamento
     */
    public function removeDepartamento($departamento)
    {
        $this->departamentos->removeElement($departamento);
    }

    /**
     * Get departamentos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDepartamentos()
    {
        return $this->departamentos;
    }
    
    public function __toString()
    {
        return (string)$this->getNombre();
    }
}