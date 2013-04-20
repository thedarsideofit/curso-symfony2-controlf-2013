<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of holaCommand
 *
 * @author diego
 */

namespace ControlF\EmailBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class holaCommand extends ContainerAwareCommand
{

    protected function configure()
    {
        $this->setName('demo:hola')
                ->setDescription('Este es un comando que va a decir ...hola')
                ->addArgument(
                        'nombre',
                        \Symfony\Component\Console\Input\InputArgument::REQUIRED,
                        'Nombre de la persona a la que quiere saludar'
                )
                ->addArgument(
                        'cortesia',
                        \Symfony\Component\Console\Input\InputArgument::OPTIONAL,
                        'cortesia...')
                ->addOption(
                        'diremail', 'mail',
                        \Symfony\Component\Console\Input\InputOption::VALUE_OPTIONAL,
                        'e-mail');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        try {
            $nombre = $input->getArgument('nombre');
            $cortesia = $input->getArgument('cortesia');
            $email = $input->getOption('diremail');

            $message = \Swift_Message::newInstance()
                    ->setSubject('Demo de contacto')
                    ->setFrom(array('demo@hydras.com.ar' => 'Servicio de Contacto'))
                    ->setTo($email)
                    //->setContentType('text/html')
                    ->setBody(
                    'Hola ' . $cortesia . ' ' . $nombre . ' Email: ' . $email);
            

            $this->getContainer()->get('mailer')->send($message);

            $output->writeln('<info>Hola ' . $cortesia . ' ' . $nombre . ' Email: ' . $email . '</info>');
        } catch (Exception $exc) {
            $output->writeln('<error>No se envío mail a ' . $nombre . ' email: ' . $email . ' motivo '.  $exc->getMessage(). '</infor>');            
        }        
    }

}