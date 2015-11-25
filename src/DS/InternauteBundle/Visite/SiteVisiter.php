<?php

namespace DS\InternauteBundle\Visite;

use DS\InternauteBundle\Entity\VisiteRepository;
use DS\InternauteBundle\Entity\Visite;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityManager;
use Symfony\Component\HttpFoundation\Session\Session;
use Doctrine\Bundle\DoctrineCacheBundle\DependencyInjection\SymfonyBridgeAdapter;

class SiteVisiter
{
    protected $em;
    protected $maDate;
    protected $ip;
    protected $page;
    protected $langue;

 //   public function __construct(EntityManager $em, $DateHeure, $ip, $page, $langue )
    public function __construct(EntityManager $em, $page)
    {
        $this->em = $em;
    //    $this->date = $DateHeure;
    //    $this->ip = $ip;
        $this->page = $page;
    //    $this->langue = $langue;
    }

   // public function addVisite(EntityManager $em, $page)
    public function addVisite(EntityManager $em, $page)
    {
        // on récupére le données
        // pour la langue
        if (isset($session))
        {
            if (!$session->isStarted())
            {
                $session = new Session();
                $session->start();
            }
        }
        else
        {
            $session = new Session();
            //$session->start();
            $session->set('langue','FR');
        }

        // pour la visite
        // on instancie l'EntityManager
    //    $em = $this->get('Doctrine')->getManager();

        // on récupère les données
        $dateHeure = new \DateTime();
        $ip = $_SERVER['REMOTE_ADDR'];
        //$page = "Accueil";
        $langue = $session->get('langue');


        // on insère les données
        // appel du nouveau service
        // on insert les données
        $data = $em->getRepository('DSInternauteBundle:Visite')
            ->majVisite($em, $dateHeure, $ip, $page, $langue);

        // on renvoit si ok ou non
        return $data;
    }
}