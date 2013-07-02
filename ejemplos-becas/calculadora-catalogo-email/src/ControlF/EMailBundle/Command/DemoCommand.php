<?php

namespace ControlF\EMailBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class DemoCommand extends ContainerAwareCommand
{

    protected function configure()
    {
        $this->setName('curso:say-hello')
                ->setDescription('este comando dice hola')
                ->addArgument('nombre', InputArgument::REQUIRED,
                        'nombre de la persona')
                ->addOption('apellido', 'a', InputOption::VALUE_OPTIONAL);
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $nombre = $input->getArgument('nombre');
        $apellido = $input->getOption('apellido');

            $message = \Swift_Message::newInstance()
                            ->setSubject('Demo de contacto')
                            ->setFrom(array('demo@hydras.com.ar' => 'Servicio de Contacto'))
                            ->setTo('alcidesdramirez@gmail.com')                                               
                            ->setContentType('text/plain')
                            ->setBody('salamennnnn');
                         
              $this->getContainer()->get('mailer')->send($message);
        
                         
     $output->writeln('ok');
    }

}

?>
