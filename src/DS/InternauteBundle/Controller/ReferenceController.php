<?php
namespace DS\InternauteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use DS\InternauteBundle\Entity\Reference;
use DS\InternauteBundle\Form\ReferenceType;
use DS\InternauteBundle\Form\ReferenceEditType;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

/**
 * Description of ReferenceController
 *
 * @author dominique
 */
class ReferenceController  extends Controller{
     // affiche la liste des références dans l'administration
    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function viewAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        // On récupère les liens
        $references = $em->getRepository('DSInternauteBundle:Reference')->findAll();

        // on retourne le résultat
        // on envoie la formulaire
        return $this->render('DSInternauteBundle:Admin/Reference:liste.html.twig', array(
            'references' => $references,
        ));
    }
    
    public function addAction(Request $request)
    {
        // si les droits, on peut ajouter une références
        $reference = new Reference();
        $form = $this->get('form.factory')->create(new ReferenceType(), $reference);

        if ($form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($reference);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Référence bien enregistrée.');

            return $this->redirect($this->generateUrl('ds_admin_references_liste', array('id' => $reference->getId())));
        }

        // on envoie la formulaire
        return $this->render('DSInternauteBundle:Admin/Reference:add.html.twig', array(
            'form' => $form->createView(),
        ));
    }
    
    public function editAction(Request $request,$id)
    {
        $em = $this->getDoctrine()->getManager();

        // On récupère l'annonce $id
        $reference = $em->getRepository('DSInternauteBundle:Reference')->find($id);

        if (null === $reference) {
            throw new NotFoundHttpException("La référence d'id ".$id." n'existe pas.");
        }

        $form = $this->createForm(new ReferenceEditType(), $reference);

        if ($form->handleRequest($request)->isValid()) {
            // Inutile de persister ici, Doctrine connait déjà notre annonce
            $em->flush();
            $request->getSession()->getFlashBag()->add('notice', 'Cette référence a bien été modifiée.');

            return $this->redirect($this->generateUrl('ds_admin_reference_edit', array('id' => $reference->getId())));
        }

        return $this->render('DSInternauteBundle:Admin/Reference:edit.html.twig', array(
            'form'   => $form->createView(),
            'reference'   => $reference // Je passe également l'annonce à la vue si jamais elle veut l'afficher
        ));
    }

    public function deleteAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        // On récupère l'annonce $id
        $reference = $em->getRepository('DSInternauteBundle:Reference')->find($id);

        if (null === $reference) {
            throw new NotFoundHttpException("La référence d'id ".$id." n'existe pas.");
        }

        // On crée un formulaire vide, qui ne contiendra que le champ CSRF
        // Cela permet de protéger la suppression d'annonce contre cette faille
        $form = $this->createFormBuilder()->getForm();

        if ($form->handleRequest($request)->isValid()) {
            $em->remove($reference);
            $em->flush();

            $request->getSession()->getFlashBag()->add('info', "La référence a bien été supprimée.");

            return $this->redirect($this->generateUrl('ds_admin_references_liste'));
        }

        // Si la requête est en GET, on affiche une page de confirmation avant de supprimer
        return $this->render('DSInternauteBundle:Admin/Reference:delete.html.twig', array(
            'reference'   => $reference,
            'form'   => $form->createView()
        ));
    }
}
