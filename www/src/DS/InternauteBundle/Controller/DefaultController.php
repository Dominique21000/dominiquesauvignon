<?php

namespace DS\InternauteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('DSInternauteBundle:DS:index.html.twig', array('name' => $name));
    }
}