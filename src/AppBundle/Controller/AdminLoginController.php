<?php
namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class AdminLoginController extends Controller
{

    /**
     *
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/thelogingiant/login",name="adminlogin")
     */
    public function loginAction(Request $request)
    {

        $authentification =$this->get('security.authentication_utils');
        $error=$authentification->getLastAuthenticationError();
        $lastU=$authentification->getLastUsername();

        return $this->render("AdminLogin/Login.html.twig",array('last_username'=>$lastU,'error'=>$error));


    }
}
