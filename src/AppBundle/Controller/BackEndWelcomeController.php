<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BackEndWelcomeController extends Controller
{

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/giantcontent/home", name="Backendhome")
     * @Route("/giantcontent", name="Backendhome")
     */

    public function indexAction()
    {

        $user = $this->get("security.token_storage")->getToken()->getUser();


        return $this->render('AdminBackend/WelcomeAdmin.html.twig', array('name' => $user));
    }
}
