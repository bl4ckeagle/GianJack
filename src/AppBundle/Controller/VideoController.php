<?php

namespace AppBundle\Controller;


use AppBundle\Entity\Video;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\ORM\Tools\Console\Command\RunDqlCommand



class VideoController extends Controller
{

    /**
     *
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/videos",name="videos")
     */
    public function indexAction()
    {
        $em=$this->getDoctrine();
        $qb=$em->createQueryBuilder();
        $





        return $this->render(':Videos:video.html.twig', array('name' => $igor));
    }
}
