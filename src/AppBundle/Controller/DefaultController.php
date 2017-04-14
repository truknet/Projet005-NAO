<?php

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;


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
            10/*limit per page*/
        );

        dump($pagination);

        return $this->render('AppBundle:Front:viewAll.html.twig', array(
            'pagination' => $pagination,
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
