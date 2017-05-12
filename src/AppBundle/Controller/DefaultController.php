<?php

namespace AppBundle\Controller;


use AppBundle\Entity\Contact;
use AppBundle\Entity\Taxrefv10;
use AppBundle\Entity\Observation;
use AppBundle\Form\ObservationFrontType;
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
        $em = $this->getDoctrine()->getManager();
        $listLastObservations = $em->getRepository('AppBundle:Observation')->findLastObservations(3);

        return $this->render('AppBundle:Front:index.html.twig', array(
            'listLastObservations' => $listLastObservations
        ));
    }

    /**
     * @Route("/viewallspecies/{page}", name="view_all_species")
     * @param $page
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function viewAllSpeciesAction($page)
    {
        $em = $this->getDoctrine()->getManager();
        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $em->getRepository('AppBundle:Taxrefv10')->getAll(), /* query NOT result */
            $page/*page number*/,
            25/*limit per page*/
        );
        return $this->render('AppBundle:Front:viewAllSpecies.html.twig', array(
            'pagination' => $pagination,
        ));
    }

    /**
     * @Route("/viewallobservations/{page}", name="view_all_observations")
     * @param $page
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function viewAllObservationsAction($page)
    {
        $em = $this->getDoctrine()->getManager();
        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $em->getRepository('AppBundle:Observation')->getAllValid(), /* query NOT result */
            $page/*page number*/,
            25/*limit per page*/
        );
        return $this->render('AppBundle:Front:viewAllObservations.html.twig', array(
            'pagination' => $pagination,
        ));
    }

    /**
     * @Route("/viewonespecies/{id}", name="view_one_species")
     * @param $taxrefv10
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function viewOneSpeciesAction(Taxrefv10 $taxrefv10)
    {
        $em = $this->getDoctrine()->getManager();
        $listObservations = $em->getRepository('AppBundle:Observation')->findBy(array('espece' => $taxrefv10));
        return $this->render('AppBundle:Front:viewOneSpecies.html.twig', array(
            'taxrefv10' => $taxrefv10,
            'listObservations' => $listObservations,
        ));
    }

    /**
     * @Route("/viewoneobservation/{id}", name="view_one_observation")
     * @param $observation
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function viewOneObservationAction(Observation $observation)
    {
        return $this->render('AppBundle:Front:viewOneObservation.html.twig', array(
            'observation' => $observation,
        ));
    }

    /**
     * @Route("/createobservation", name="create_observation")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function createObservationAction(Request $request)
    {
        $observation = new Observation();
        $form   = $this->get('form.factory')->create(ObservationFrontType::class, $observation);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($observation);
            $em->flush();
            $request->getSession()->getFlashBag()->add('success', 'Observation bien enregistrée.');

            return $this->redirectToRoute('view_one_observation', array('id' => $observation->getId()));
        }
        return $this->render('AppBundle:Front:createObservation.html.twig', array(
            'form' => $form->createView(),
            'observation' => $observation,
        ));

    }




    /**
     * @Route("/learnmore", name="learn_more")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function learnMoreAction()
    {
        return $this->render('AppBundle:Front:learnMore.html.twig');
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
            $this->container->get('app.sendEmail')->sendEmailContact($contact);
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
     * @Route("/sidebarsearch", name="side_bar_search")
     */
    public function sideBarSearchAction()
    {
        return $this->render('AppBundle:Front:sideBarSearch.html.twig');
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/sidebarnewsletter", name="side_bar_newsletter")
     */
    public function sideBarNewsletterAction()
    {
        return $this->render('AppBundle:Front:sideBarNewsletter.html.twig');
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/sidebarlast", name="side_bar_last")
     */
    public function sideBarLastAction()
    {
        $em = $this->getDoctrine()->getManager();
        $listLastObservations = $em->getRepository('AppBundle:Observation')->findLastObservations(10);
        return $this->render('AppBundle:Front:sideBarLast.html.twig', array(
            'listLastObservations' => $listLastObservations
        ));
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/googlemap", name="google_map")
     */
    public function googleMapAction()
    {
        return $this->render('AppBundle:Front:googleMap.html.twig');
    }

}
