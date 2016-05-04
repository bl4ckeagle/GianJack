<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\BrowserKit\Response;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Product;

class TestingController extends Controller


   
{

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @internal param $name
     * @Route("/testing" ,name="testing")
     */
    public function indexAction()
    {


        $product = new Product();
        $product ->setName("Test");
        $product->setPrice("Test");
        $product->setDescription("Test123");

        $em =$this->getDoctrine()->getManager();
        $em->persist($product);
        $em->flush();
        return new Response("saved product with id".$product->getId());
    }
}
