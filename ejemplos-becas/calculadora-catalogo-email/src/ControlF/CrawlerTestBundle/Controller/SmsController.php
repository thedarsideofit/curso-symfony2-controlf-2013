<?php

namespace ControlF\CrawlerTestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class SmsController extends Controller
{
    /**
     * @Route("/smssender/{compania}")
     * @Template()
     */
    public function indexAction($compania)
    {
         $urlContent= $this->tratarUrlCompania($compania);
         $captchaSrc= $this->obtenerCaptcha($compania, $urlContent);
        //retornar el resultado
         return array(
            'captcha' => $captchaSrc
        );        
    }
    
    private function tratarUrlCompania($compania){        
        switch ($compania) {
           case 'personal':
               $link = 'http://sms2.personal.com.ar/Mensajes/sms.php';
               break;
           case 'claro':
               $link = 'http://puntodeventa.claro.com.ar/sms/default.aspx?mensajito=prueba&dequien=diego&numerito=3624553514';
               break;
           default:
               throw new \Exception('Compañia no contemplada');
               break;
        }        
        
        $cc = curl_init($link);
        curl_setopt($cc, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($cc, CURLOPT_CONNECTTIMEOUT, 60);
        curl_setopt($cc, CURLOPT_TIMEOUT, 60);
        $urlContent = curl_exec($cc);
        curl_close($cc);         
         
        return $urlContent;
    }
    
    private function obtenerCaptcha($compania,$urlContent){
        //inspeccionar con el crawler
         $crawler = new \Symfony\Component\DomCrawler\Crawler;          
         $captchaSrc='';
         switch ($compania) {
             case 'personal':
                 $crawler->addHtmlContent($urlContent, 'ISO-8859-1');         
                 //mas orientado a objetos
                 $captchaSrc = $crawler->filter('#img_Captcha')->attr('src');
                 break;
             case 'claro':
                 $crawler->addHtmlContent($urlContent, 'utf-8');         
                 //mas orientado a objetos
                 //$captchaSrc = $crawler->filter('#Image1')->attr('src');
                 $captchaSrc = 'http://puntodeventa.claro.com.ar/sms/captcha.aspx';
                 break;
             default:
                 throw new \Exception('Compañia no contemplada');
                 break;
         }
         
         return $captchaSrc;
    }
}
