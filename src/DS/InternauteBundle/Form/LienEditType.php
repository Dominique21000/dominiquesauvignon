<?php
// src/DS/InternauteBundle/Form/LienEditType.php

namespace DS\InternauteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use DS\InternauteBundle\Entity\LienRepository;
use DS\InternauteBundle\Form\LienType;

class LienEditType extends abstractType
{
    /**
     * @return string
     */
    public function getName()
    {
        return 'ds_admin_lien_edit';
    }


    public function getParent()
    {
        return new LienType();
    }
}
