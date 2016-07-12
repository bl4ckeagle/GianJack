<?php
namespace AppBundle\Controller;

use AppBundle\Entity\Contentuser;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\BrowserKit\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class AdminLoginController extends Controller
{

    /**
     * @param $name
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/thelogingiant/login",name="adminlogin")
     */
    public function loginAction(Request $request)
    {
        $user = new Contentuser();
        //get the error
        $authActionUtil = $this->get('security.authentication_utils');
        

        return $this->render('', array('name' => 1));
    }
}
