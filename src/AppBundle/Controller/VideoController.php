<?php

namespace AppBundle\Controller;


use AppBundle\Entity\Video;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;



class VideoController extends Controller
{

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/videos",name="Videos")
     */
    public function indexAction()
    {
        $album = $this->getDoctrine()->getManager()
            ->getRepository("AppBundle:Album")
            ->findAll();
        dump($album);

        


        return $this->render('Videos/video.html.twig', array('album' => $album));
    }


    /**
     * @Route("/videos/{slug}")
     *
     *
     */
    public function getContainer($slug)
    {


        $title = $this->getDoctrine()
            ->getRepository("AppBundle:Video")
            ->VideoLeftJoin($slug);





        return $this->render('Videos/albumVideo.html.twig', array('videos' => $title));


    }

}
