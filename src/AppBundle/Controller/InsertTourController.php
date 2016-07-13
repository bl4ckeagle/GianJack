<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Tour;
use AppBundle\Form\TourContentType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class InsertTourController extends Controller
{

    /**
     * @param $request
     * @return  \Symfony\Component\HttpFoundation\Response
     * @Route("giantcontent/tour/insert",name="InsertTour")
     */

    public function indexAction(Request $request)
    {
        
        $content = new Tour();
        $form= $this->createForm(TourContentType::class,$content);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {


            $em =$this->getDoctrine()
            ->getManager();
            $em->persist($content);
            $em->flush();
            return $this->redirectToRoute("Worked check index");


        }

        return $this->render('Form/TourForm.html.twig', array('form' => $form->createView()));
    }
}
