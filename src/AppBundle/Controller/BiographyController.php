<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Console\Tests\Fixtures\DummyOutput;

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


        return $this->render('Biography/BandBiography.html.twig', array('band' => $biography, 'members'=>$member));
    }


    /**
     *
     * @Route("/biography/{slug}")
     */
    public function memberAction($slug)
    {

        $allmember = $this->getDoctrine()
            ->getManager()
            ->getRepository("AppBundle:Biographymember")
            ->findAll();

        $specificMember = $this->getDoctrine()
            ->getManager()
            ->getRepository("AppBundle:Biographymember")
            ->findByfirstName($slug);


        dump($specificMember);

        return $this->render('Biography/Member.html.twig', array('members' => $allmember,'spMember'=>$specificMember));


    }


}
