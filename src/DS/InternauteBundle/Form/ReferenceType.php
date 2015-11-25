<?php
// src/DS/InternauteBundle/Form/ReferenceType.php

namespace DS\InternauteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ReferenceType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre', 'text')
            ->add('description', 'textarea')    
            ->add('adresse', 'text')
            ->add('logo', 'text')
            ->add('ordre', 'integer')
            ->add('actif', 'checkbox',array('required'=> false))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'DS\InternauteBundle\Entity\Reference'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ds_admin_reference_add';
    }
}
