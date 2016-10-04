<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class TestingEmailController extends Controller
{
    /**
     * @Route("/sendmail")
     */
    public function indexAction()
    {
        $message= \Swift_Message::newInstance()
            ->setSubject('Testing from symonfy')
            ->setFrom('symfony@test.com')
            ->setTo('kevin.wilhelm@outlook.at')
            ->setBody(
                "Hello this is a test!",
                'text/plain'

            );

        $this->get('mailer')->send($message);
        return $this->render("tests/emailsending.html.twig");
    }
}
