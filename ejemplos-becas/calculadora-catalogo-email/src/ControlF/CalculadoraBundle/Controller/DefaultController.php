<?php

namespace ControlF\CalculadoraBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/hello/{name}")
     * @Template()
     */
    public function indexAction($name)
    {
        return array('name' => $name);
    }
    
    /**
     * @Route("/{operador}/{operando1}/{operando2}",name="suma")
     * @Template()
     */
    public function sumaAction($operador,$operando1,$operando2)
    {
        $result = $operando1 + $operando2;
        print_r( $result );
        die();        
    }
}
