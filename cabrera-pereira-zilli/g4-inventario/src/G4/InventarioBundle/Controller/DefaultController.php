<?php

namespace G4\InventarioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('G4InventarioBundle:Default:index.html.twig', array('name' => $name));
    }
}
