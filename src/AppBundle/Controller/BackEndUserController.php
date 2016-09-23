<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class BackEndUserController extends Controller
{
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/test")
     */
    public function userOverview()
    {

        $users=$this->getDoctrine()->getRepository('AppBundle:Contentuser')->findAll();


        return $this->render('', array('users' => $users));
    }
}
