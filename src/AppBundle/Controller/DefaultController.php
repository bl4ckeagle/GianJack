<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Product;

class DefaultController extends Controller
{
    /**
     *
     * @Route("/",name="index")
     *
     */
    public function indexAction()
    {



        $homecontent= $this->getDoctrine()
        ->getRepository('AppBundle:Homecontent')
        ->findAll();
        if (!$homecontent){
            throw $this->createNotFoundException(
                'Error occurred please call your administrator immediately');


        }




          return $this->render("default/index.html.twig" ,array("homecontent"=>$homecontent));
    }





}
