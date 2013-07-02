<?php

namespace ControlF\GenemuDemoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class LocalidadType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('codigoPostal')
            ->add('departamento', 'genemu_jqueryselect2_entity', array(            
                'class' => 'ControlF\GenemuDemoBundle\Entity\Departamento',
                'property'    => 'nombre',                               
                'group_by'    => 'provincia.nombre',
                'required'    => true,
                'attr'        => array('style'=>'width:300px')
            ))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ControlF\GenemuDemoBundle\Entity\Localidad'
        ));
    }

    public function getName()
    {
        return 'controlf_genemudemobundle_localidadtype';
    }
}
