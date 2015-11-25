<?php

namespace DS\InternauteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;

class DSController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('DSInternauteBundle:DS:index.html.twig', array('name' => $name));
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function accueilAction()
    {
        // on instancie l'EntityManager
        $em = $this->get('Doctrine')->getManager();

        $page = "Accueil";
        $res = $this->get('ds_internaute.visite')->addVisite($em, $page);

        // on appel la page
    	return $this->render('DSInternauteBundle:DS:home.html.twig');
    }
    
    
    public function homeAction()
    {
        // on instancie l'EntityManager
        $em = $this->get('Doctrine')->getManager();

        $page = "home";
        $res = $this->get('ds_internaute.visite')->addVisite($em, $page);

        // on appel la page
        return $this->render('DSInternauteBundle:DS:home2.html.twig');
    }
    

    public function cvAction()
    {
        // on instancie l'EntityManager
        $em = $this->get('Doctrine')->getManager();

        $page = "CV";
        $res = $this->get('ds_internaute.visite')->addVisite($em, $page);

        // on appel la page
    	return $this->render('DSInternauteBundle:DS:cv.html.twig');
    }

    public function competencesAction()
    {
        // on instancie l'EntityManager
        $em = $this->get('Doctrine')->getManager();

        $page = "Competences";
        $res = $this->get('ds_internaute.visite')->addVisite($em, $page);

        // on appel la page
        return $this->render('DSInternauteBundle:DS:competences.html.twig');
    }

    public function experienceACtion()
    {
        // on instancie l'EntityManager
        $em = $this->get('Doctrine')->getManager();

        $page = "Experiences";
        $res = $this->get('ds_internaute.visite')->addVisite($em, $page);

        // on appel la page
        return $this->render('DSInternauteBundle:DS:experience.html.twig');
    }

    public function recommandationsAction()
    {
        // on instancie l'EntityManager
        $em = $this->get('Doctrine')->getManager();

        $page = "Recommandations";
        $res = $this->get('ds_internaute.visite')->addVisite($em, $page);

        // on appel la page
        return $this->render('DSInternauteBundle:DS:recommandations.html.twig');
    }

    public function formationAction()
    {
        // on instancie l'EntityManager
        $em = $this->get('Doctrine')->getManager();

        $page = "Formation";
        $res = $this->get('ds_internaute.visite')->addVisite($em, $page);

        // on appel la page
        return $this->render('DSInternauteBundle:DS:formation.html.twig');
    }
    public function viewReferencesAction()
    {
        // on instancie l'EntityManager
        $em = $this->get('Doctrine')->getManager();

        $page = "References";
        $res = $this->get('ds_internaute.visite')->addVisite($em, $page);

        // on appel la page

        // On récupère l'EntityManager
    //    $em = $this->getDoctrine()->getManager();
        // on récupère la liste des références
        $References = $em->getRepository('DSInternauteBundle:Reference')->getReferencesActif();

    //    print var_dump($References);
        // on appelle la vue avec le tableau
         // Puis modifiez la ligne du render comme ceci, pour prendre en compte les variables :
        return $this->render('DSInternauteBundle:DS:references.html.twig', array(
        'references'  => $References,
        
        ));

    }

    public function contactAction()
    {
        // on instancie l'EntityManager
        $em = $this->get('Doctrine')->getManager();

        $page = "Contact";
        $res = $this->get('ds_internaute.visite')->addVisite($em, $page);

        // on appel la page
        return $this->render('DSInternauteBundle:DS:contact.html.twig');
    }

    
    public function viewLiensAction()
    {
          // On récupère l'EntityManager
        $em = $this->getDoctrine()->getManager();
        // on récupère la liste des références
        $Liens = $em->getRepository('DSInternauteBundle:Lien')->getLiensActif();

        // print var_dump($References);
        // on appelle la vue avec le tableau
         // Puis modifiez la ligne du render comme ceci, pour prendre en compte les variables :
        return $this->render('DSInternauteBundle:DS:liens.html.twig', array(
        'liens'  => $Liens,
        ));
    }

    public function diplomesAction()
    {
        // on instancie l'EntityManager
        $em = $this->get('Doctrine')->getManager();

        $page = "Diplomes";
        $res = $this->get('ds_internaute.visite')->addVisite($em, $page);

        // on appel la page
        return $this->render('DSInternauteBundle:DS:diplomes.html.twig');
    }

    public function viewAdminAction()
    {
        return $this->render('DSInternauteBundle:Admin:layout.html.twig');
    }
}
