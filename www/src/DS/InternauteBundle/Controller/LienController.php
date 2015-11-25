<?php
/**
 * Created by PhpStorm.
 * User: dominique
 * Date: 28/10/15
 * Time: 17:05
 */

namespace DS\InternauteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use DS\InternauteBundle\Entity\Lien;
use DS\InternauteBundle\Form\LienType;
use DS\InternauteBundle\Form\LienEditType;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class LienController extends Controller
{
    // affiche la liste des liens dans l'administration
    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function viewAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        // On récupère les liens
        $liens = $em->getRepository('DSInternauteBundle:Lien')->findAll();

        // on retourne le résultat
        // on envoie la formulaire
        return $this->render('DSInternauteBundle:Admin/Lien:liste.html.twig', array(
            'liens' => $liens,
        ));
    }

    /**
     *
     */
    public function addAction(Request $request)
    {
        // si les droits, on peut ajouter une annonce
        $lien = new Lien();
        $form = $this->get('form.factory')->create(new LienType(), $lien);

        if ($form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($lien);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Lien bien enregistré.');

            return $this->redirect($this->generateUrl('ds_admin_liens_liste', array('id' => $lien->getId())));
        }

        // on envoie la formulaire
        return $this->render('DSInternauteBundle:Admin/Lien:add.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function editAction(Request $request,$id)
    {
        $em = $this->getDoctrine()->getManager();

        // On récupère l'annonce $id
        $link = $em->getRepository('DSInternauteBundle:Lien')->find($id);

        if (null === $link) {
            throw new NotFoundHttpException("Le lien d'id ".$id." n'existe pas.");
        }

        $form = $this->createForm(new LienEditType(), $link);

        if ($form->handleRequest($request)->isValid()) {
            // Inutile de persister ici, Doctrine connait déjà notre annonce
            $em->flush();
            $request->getSession()->getFlashBag()->add('notice', 'Ce lien a bien été modifié.');

            return $this->redirect($this->generateUrl('ds_admin_lien_edit', array('id' => $link->getId())));
        }

        return $this->render('DSInternauteBundle:Admin/Lien:edit.html.twig', array(
            'form'   => $form->createView(),
            'lien'   => $link // Je passe également l'annonce à la vue si jamais elle veut l'afficher
        ));
    }

    public function deleteAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        // On récupère l'annonce $id
        $lien = $em->getRepository('DSInternauteBundle:Lien')->find($id);

        if (null === $lien) {
            throw new NotFoundHttpException("Le lien d'id ".$id." n'existe pas.");
        }

        // On crée un formulaire vide, qui ne contiendra que le champ CSRF
        // Cela permet de protéger la suppression d'annonce contre cette faille
        $form = $this->createFormBuilder()->getForm();

        if ($form->handleRequest($request)->isValid()) {
            $em->remove($lien);
            $em->flush();

            $request->getSession()->getFlashBag()->add('info', "Le lien a bien été supprimé.");

            return $this->redirect($this->generateUrl('ds_admin_liens_liste'));
        }

        // Si la requête est en GET, on affiche une page de confirmation avant de supprimer
        return $this->render('DSInternauteBundle:Admin/Lien:delete.html.twig', array(
            'lien' => $lien,
            'form'   => $form->createView()
        ));
    }

}