<?php

namespace ControlF\EMailBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ContactoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('email')
            ->add('asunto')
            ->add('cuerpo')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ControlF\EMailBundle\Entity\Contacto'
        ));
    }

    public function getName()
    {
        return 'controlf_emailbundle_contactotype';
    }
}
