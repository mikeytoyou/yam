<?php

namespace alex\yamBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use alex\yamBundle\Entity\Ruta;

class PaqueteConstructorType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('idCustomer')
            ->add('fechCreada', 'date')
            ->add('duracion')
            ->add('rutas','collection', array(
                'type'           => new RutaType(),
                'label'          => 'Rutas',
                'by_reference'   => false,
                'prototype_data' => new Ruta(),
                'allow_delete'   => true,
                'allow_add'      => true,
                'attr'           => array(
                    'class' => 'row ruta'
                )))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'alex\yamBundle\Entity\Paquete'
        ));
    }
}
