<?php

namespace DS\InternauteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DepannageController extends Controller
{
    public function indexAction()
    {
        return $this->render('DSInternauteBundle:Depannage:index.html.twig');
    }

    public function viewLogicielsAction()
    {
        return $this->render('DSInternauteBundle:Depannage:logiciels.html.twig');
    }
}