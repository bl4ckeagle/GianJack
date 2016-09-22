<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BiographyController extends Controller
{
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/biography",name="Biography")
     */
    public function indexAction()
    {

        $biography = $this->getDoctrine()
            ->getManager()
            ->getRepository('AppBundle:Biographyband')
            ->findAll();

        $member = $this->getDoctrine()
            ->getManager()
            ->getRepository("AppBundle:Biographymember")
            ->findAll();


        return $this->render(':Biography:bandbiography.html.twig', array('band' => $biography, 'members'=>$member));
    }


    /**
     *
     * @Route("/biography/{slug}")
     */
    public function memberAction($slug)
    {
        $member = $this->getDoctrine()
            ->getManager()
            ->getRepository("AppBundle:Biographymember")
            ->findBy($slug);

        return $this->render(':Biography:member.html.twig', array('member' => $member));


    }


}
