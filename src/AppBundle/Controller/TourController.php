<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Tour;

class TourController extends Controller

{
    /**
     * @Route("/tour",name="Tour")
     */

    public function tourAction()
    {


        $tour=$this->getDoctrine()
            ->getRepository('AppBundle:Tour')
            ->findAll();


        if (!$tour){
            $tour=null;


        }


        return $this->render('Tour/tour.html.twig', array('Tour' => $tour));
    }
}
