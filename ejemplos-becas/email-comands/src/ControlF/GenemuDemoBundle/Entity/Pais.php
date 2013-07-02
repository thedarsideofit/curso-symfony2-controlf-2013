<?php

namespace ControlF\GenemuDemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Pais
 *
 * @ORM\Table(name="pais")
 * @ORM\Entity(repositoryClass="ControlF\GenemuDemoBundle\Entity\PaisRepository")
 * @UniqueEntity("nombre")
 */
class Pais
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
     * @ORM\Column(name="nombre", type="string", length=255, nullable=false, unique=true)
     */
    private $nombre;
    
    
    /**
     * @var Array
     * 
     * @ORM\OneToMany(targetEntity="Provincia", mappedBy="pais")
     */
    private $provincias;


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
     * @return Pais
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
        $this->provincias = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add provincia
     *
     * @param \Iprodich\RegistroBundle\Entity\Provincia $provincia
     * @return Pais
     */
    public function addProvincia($provincia)
    {
        $this->provincias[] = $provincia;
    
        return $this;
    }

    /**
     * Remove provincias
     *
     * @param \Iprodich\RegistroBundle\Entity\Provincia $provincia
     */
    public function removeProvincia($provincia)
    {
        $this->provincias->removeElement($provincia);
    }

    /**
     * Get _provincias
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProvincias()
    {
        return $this->provincias;
    }
    
    public function __toString()
    {
        return (string)$this->getNombre();
    }
}