<?php

namespace G4\Inventory\InventoryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UsuariosController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('G4InventoryInventoryBundle:Usuarios:index.html.twig', array('name' => $name));
    }
}
