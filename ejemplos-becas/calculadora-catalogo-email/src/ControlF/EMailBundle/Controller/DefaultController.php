<?php

namespace ControlF\EMailBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use ControlF\EMailBundle\Entity\Contacto;
use ControlF\EMailBundle\Form\ContactoType;

class DefaultController extends Controller
{
    /**
     * @Route("/",name="email_contacto")
     * @Template()
     */
    public function indexAction()
    {
        $contacto = new Contacto();
        $form = $this->createForm(new ContactoType(), $contacto);
        $request = $this->getRequest();
            if ($request->getMethod() == 'POST') {
                $form->bind($request);
                if($form->isValid()){
                        //hacer algo mandar mail
                         $contacto= $form->getData();
                         
                         $body=$this->renderView(
                                    'ControlFEMailBundle:Default:email.saludo.html.twig',
                                    array(
                                        'nombre' => $contacto->getNombre()
                                    )
                                );
                         
                         $message = \Swift_Message::newInstance()
                            ->setSubject('Demo de contacto')
                            ->setFrom(array('demo@hydras.com.ar' => 'Servicio de Contacto'))
                            ->setTo($contacto->getEmail())                                               
                            ->setContentType('text/html')
                            ->setBody($body);
                         
                         $this->get('mailer')->send($message);
                         
                         $this->get('session')->setFlash('notice',
                            'Tu mensaje ha sido enviado, recibirás un email en la brevedad. Gracias');
                         
                         return $this->redirect($this->generateUrl('email_contacto'));
                }
            }

        
        return array('form' => $form->createView());
    }
}
