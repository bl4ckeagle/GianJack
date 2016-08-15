<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class WelcomeBackendController extends Controller
{

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/giantcontent/home", name="Backendhome")
     */

    public function indexAction()
    {

        $user = $this->get("security.token_storage")->getToken()->getUser();


        return $this->render('AdminBackend/WelcomeAdmin.html.twig', array('name' => $user));
    }
}
