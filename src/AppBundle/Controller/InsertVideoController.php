<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Video;
use AppBundle\Form\VideoContentType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class InsertVideoController extends Controller
{
    /**
     * @param Request $request
     * @return string|\Symfony\Component\HttpFoundation\Response
     * @Route("giantcontent/video/insert",name="VideoInsert")
     */
    public function indexAction(Request $request)
    {

        $content = new Video();
        $form = $this->createForm(VideoContentType::class, $content);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            /*save to database */
            $em = $this->getDoctrine()
                ->getManager();
            $em->persist($content);
            $em->flush();

            $worked = "<p>worked</p>";

            return $worked;


        }


        return $this->render('Form/VideoInsert.html.twig', array('form' => $form->createView()));
    }
}
