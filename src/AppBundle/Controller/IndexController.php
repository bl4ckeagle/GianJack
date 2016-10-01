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
            $data = $this->getDoctrine()->getManager()->getRepository("AppBundle:Homecontent")->findAll();
            $em = $this->get('doctrine.orm.entity_manager');
            $dql = "SELECT a FROM AppBundle:Homecontent a";
            $query = $em->createQuery($dql);
            $paginator = $this->get('knp_paginator');
            $pagination = $paginator->paginate(
                $query, $request->query->getInt('page', 1), 5);
            dump($data);

            if (!$paginator) {
                throw $this->createNotFoundException(
                    'Error occurred please call your administrator immediately');
            }


            return $this->render("index/index.html.twig", array("pagination" => $pagination,"data"=>$data));
        } catch (NoResultException $e) {
            return $this->render("FrontEndErrorPage.html.twig");
        }
    }
}