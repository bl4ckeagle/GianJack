<?php
namespace AppBundle\Controller;

use Doctrine\ORM\NoResultException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class IndexController extends Controller
{
    /**
     *
     * @Route("/",name="Index")
     *
     */
    public function indexAction(Request $request)
    {
        try {
            $em = $this->get('doctrine.orm.entity_manager');
            $dql = "SELECT a FROM AppBundle:Homecontent a";
            $query = $em->createQuery($dql);
            $paginator = $this->get('knp_paginator');
            $pagination = $paginator->paginate(
                $query, $request->query->getInt('page', 1), 5);
            if (!$paginator) {
                throw $this->createNotFoundException(
                    'Error occurred please call your administrator immediately');
            }

            dump($paginator);
            return $this->render("index/index.html.twig", array("pagination" => $pagination));
        } catch (NoResultException $e) {
            return $this->render("FrontEndErrorPage.html.twig");
        }
    }
}