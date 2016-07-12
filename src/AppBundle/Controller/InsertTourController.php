<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Tour;
use AppBundle\Form\TourContentType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class InsertTourController extends Controller
{
    public function indexAction(Request $request)
    {
        
        $content = new Tour();
        $form= $this->createForm(TourContentType::class,$content);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {

            $country=$content->getCountry();
            $date=$content->getDate();
            $location=$content->getLocation();
            $ticketLink=$content->getTicketLink();

            $em =$this->getDoctrine()
            ->getManager();
            $em->persist($content);
            $em->flush();
            return $this->redirectToRoute("Worked check index");


        }

        return $this->render('Forms/TourForm.html.twig', array('form' => $form->createView()));
    }
}
