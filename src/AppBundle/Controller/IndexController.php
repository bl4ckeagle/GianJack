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

            $newData= $this->getDoctrine()->getRepository("AppBundle:Homecontent")->contentJoin();
            $paginator = $this->get('knp_paginator');
            $pagination = $paginator->paginate(
                $newData, $request->query->getInt('page', 1), 5);



            if (!$paginator) {
                throw $this->createNotFoundException(
                    'Error occurred please call your administrator immediately');
            }


            return $this->render("index/index.html.twig", array("pagination" => $pagination,"data"=>$newData));
        } catch (NoResultException $e) {
            return $this->render("FrontEndErrorPage.html.twig");
        }
    }
}