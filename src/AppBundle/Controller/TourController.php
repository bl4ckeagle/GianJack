<?php

namespace AppBundle\Controller;

use AppBundle\AppBundle;
use AppBundle\Entity\Tour;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TourController extends Controller

{
    /**
     * @Route("/tour",name="Tour")
     */

    public function tourAction()
    {


        $tour=$this->getDoctrine()->getRepository("AppBundle:Tour")->dateSorted();


        if (!$tour){
            $tour=null;


        }


        return $this->render('Tour/tour.html.twig', array('Tour' => $tour));
    }
}
