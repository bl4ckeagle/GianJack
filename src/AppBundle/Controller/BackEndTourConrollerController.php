<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Tour;
use AppBundle\Form\TourContentInsertType;
use Ivory\CKEditorBundle\Exception\Exception;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

class BackEndTourConrollerController extends Controller
{

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("giantcontent/tour",name="TourBackend")
     */
    public function tourOverview()
    {


        

        $tour = $this->getDoctrine()
            ->getRepository("AppBundle:Tour")
            ->findAll();


        return $this->render('AdminBackend/TourBackEnd.html.twig', array("tour" => $tour));
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("giantcontent/tour/insert")
     */

    public function tourInsert(Request $request)
    {
        $worked = null;
        $error=null;
        $youtubeError = null;

        $tour = new Tour();
        $form = $this->createForm(TourContentInsertType::class, $tour);
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {


            $em = $this->getDoctrine()
                ->getManager();
            $em->persist($tour);
            try {
                $em->flush();
                $worked = "saved";
            } catch (Exception $e) {
                $error = "Error please check";
            }
            return $this->render('Form/TourInsertForm.twig', array('form' => $form->createView(), "error" => $error, "worked" => $worked));

        }
        return $this->render('Form/TourInsertForm.twig', array('form' => $form->createView(), "error" => $error, "worked" => $worked));

    }


    /**
     * @param Tour $slug
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("giantcontent/tour/delete/{slug}")
     */
    public function deleteTour(Tour $slug)
    {
        try {
            $em = $this->getDoctrine()->getManager();
            $name = $slug->getTourId();
            $em->remove($slug);
            $em->flush();

            return $this->render("deleted.html.twig", array("item" => $name));
        }
        catch (\Exception $e)
        {
            $errorbody="Database Integrity,maybe ".$name." is allready taken or used";
            return $this->render("::AdminErrorPage.html.twig",array("errorbody"=>$errorbody));
        }

    }

    /**
     * @param Request $request
     * @param $slug
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("giantcontent/tour/editing/{slug}")
     */
    public function editTour(Request $request ,$slug)
    {
        $worked="";
        $failed="";
        $formEntity = new Tour();
        $em = $this->getDoctrine()->getManager();
        $tour = $em->getRepository("AppBundle:Tour")->find($slug);


        $form = $this->createForm(TourContentInsertType::class, $formEntity);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {




            $tour->setLocation($formEntity->getLocation());
            $tour->setDate($formEntity->getDate());
            $tour->setCountry($formEntity->getCountry());
            $tour->setTicketLink($formEntity->getTicketLink());
            $tour->setLocationLink($formEntity->getLocationLink());
            $tour->setPrice($formEntity->getPrice());
                try{
                    $em->flush();
                    $worked="saved";

                }catch (Exception $e)
                {

                }



        }



        return $this->render("Form/TourUpdateForm.html.twig", array(
            'form' => $form->createView(), "tour" => $tour,"worked"=>$worked,"failed"=>$failed));



    }
}
