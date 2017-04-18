<?php

namespace AppBundle\Controller;


use AppBundle\Entity\Contact;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Form\ContactType;


class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('AppBundle:Front:index.html.twig');
    }

    /**
     * @Route("/viewall/{page}", name="view_all")
     * @param $page
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function viewAllAction($page)
    {
        $em = $this->getDoctrine()->getManager();

        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $em->getRepository('AppBundle:Taxrefv10')->getAll(), /* query NOT result */
            $page/*page number*/,
            25/*limit per page*/
        );

        dump($pagination);

        return $this->render('AppBundle:Front:viewAll.html.twig', array(
            'pagination' => $pagination,
        ));
    }

    /**
     * @Route("/contact", name="modal_contact")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function modalContactAction(Request $request)
    {
        $contact = new Contact();
        $form = $this->get('form.factory')->create(ContactType::class, $contact);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // Affichage d'un message flash
            $request->getSession()->getFlashBag()->add('success', 'Votre message à bien été envoyé !');
            // Sauvegarder en Base de données
            $em = $this->getDoctrine()->getManager();
            $em->persist($contact);
            $em->flush();
            // Envoyer le mail
            $this->container->get('app.sendEmail')->sendEmail($contact);
            // Vider l'objet contact
            $contact = null;
            // Retour à la page d'accueil
            return $this->render('AppBundle:Front:index.html.twig');
        }
        return $this->render('AppBundle:Front:modalContact.html.twig', array(
            'form' => $form->createView(),
        ));
    }




    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/sidebarlast") name="side_bar_last")
     */
    public function sideBarLastAction()
    {
        return $this->render('AppBundle:Front:sideBarLast.html.twig');
    }

}
