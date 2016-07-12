<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;


class passwordDumpController extends Controller
{
    /**
     *
     * @Route("password")
     */
    public function indexAction()
    {
        dump(password_hash(123456789,PASSWORD_DEFAULT));
        die();
        

    }
}
