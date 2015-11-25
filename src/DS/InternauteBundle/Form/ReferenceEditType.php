<?php
// src/DS/InternauteBundle/Form/ReferenceEditType.php

namespace DS\InternauteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use DS\InternauteBundle\Entity\ReferenceRepository;
use DS\InternauteBundle\Form\ReferenceType;

class ReferenceEditType extends abstractType
{
    /**
     * @return string
     */
    public function getName()
    {
        return 'ds_admin_reference_edit';
    }


    public function getParent()
    {
        return new ReferenceType();
    }
}
