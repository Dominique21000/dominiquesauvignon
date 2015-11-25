<?php
// src/DS/InternauteBundle/Form/LienType.php

namespace DS\InternauteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class LienType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre', 'text')
            ->add('adresse', 'text')
            ->add('logo', 'text')
            ->add('description', 'textarea')
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
            'data_class' => 'DS\InternauteBundle\Entity\Lien'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ds_admin_lien_add';
    }
}
