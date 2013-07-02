<?php

namespace ControlF\CatalogoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     * @Template()
     */
    public function indexAction()
    {
        $producto = new \ControlF\CatalogoBundle\Entity\Producto();
        $producto->setNombre('un producto');
        $producto->setPrecio('19.99');
        
        $marca = new \ControlF\CatalogoBundle\Entity\Marca();
        $marca->setNombre('una marca');        
        
        $producto->setMarca($marca);

        $em = $this->getDoctrine()->getManager();
        
        //$em->persist($marca);
        $em->persist($producto);
        $em->flush();
        
        return array('name' => $producto->getId());
    }
}
