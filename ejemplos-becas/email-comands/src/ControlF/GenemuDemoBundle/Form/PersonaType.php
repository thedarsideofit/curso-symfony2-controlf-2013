<?php

namespace ControlF\GenemuDemoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PersonaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('apellido')
            ->add('fechaNacimiento', 'genemu_jquerydate'
            )
            ->add('domicilio', 'genemu_jquerygeolocation',
                    array('map'=>true)
            )
            ->add('imagen')
//            ->add('imagen', 'genemu_jqueryimage',
//                    array('configs'=> array(
//                        'folder' =>'images',
//                        'swf'=>'uploadify/uploadify.swf',
//                        'cancelImg' => 'uploadify/cancel.png',
//                        'script' => 'upload.php',
//                        )))
            ->add('rate', 'genemu_jqueryrating')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ControlF\GenemuDemoBundle\Entity\Persona'
        ));
    }

    public function getName()
    {
        return 'controlf_genemudemobundle_personatype';
    }
}
