<?php

namespace G4\Inventory\InventoryBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Imagenes
 */
class Imagenes
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $ruta;

    /**
     * @var string
     */
    private $item;


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
     * Set ruta
     *
     * @param string $ruta
     * @return Imagenes
     */
    public function setRuta($ruta)
    {
        $this->ruta = $ruta;
    
        return $this;
    }

    /**
     * Get ruta
     *
     * @return string 
     */
    public function getRuta()
    {
        return $this->ruta;
    }

    /**
     * Set item
     *
     * @param string $item
     * @return Imagenes
     */
    public function setItem($item)
    {
        $this->item = $item;
    
        return $this;
    }

    /**
     * Get item
     *
     * @return string 
     */
    public function getItem()
    {
        return $this->item;
    }
}
