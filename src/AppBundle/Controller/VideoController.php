<?php

namespace AppBundle\Controller;


use AppBundle\AppBundle;
use AppBundle\Entity\Video;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;



class VideoController extends Controller
{

    /**
     *
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/videos",name="videos")
     */
    public function indexAction()
    {
        $em=$this->getDoctrine()
            ->getRepository("AppBundle:Album")
            ->findAll();






        return $this->render(':Videos:video.html.twig', array('name' => $em));
    }


    /**
     * @Route("/videos/{slug}")
     *
     *
     */
        public function getContainer($slug)
        {
            $em=$this->getDoctrine()
                ->getRepository("AppBundle:Video");
            $results=$em->findByalbum($slug);

            $te3st1=$this->getDoctrine()
                ->getRepository("AppBundle:Video")
            ->VideoLeftJoin($slug);



            



            return $this->render(':Videos:video.html.twig', array('name' => $results));



        }

}
