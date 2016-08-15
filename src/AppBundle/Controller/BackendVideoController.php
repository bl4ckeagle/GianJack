<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Video;
use AppBundle\Form\VideoContentType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class BackendVideoController extends Controller
{
    /**
     * @Route("giantcontent/video",name="VideoBackEnd")
     *
     */
    public function backendVideoOverviewAction()
    {


        return $this->render();

    }








    /**
     * @param Request $request
     * @return string|\Symfony\Component\HttpFoundation\Response
     * @Route("giantcontent/video/insert",name="VideoInsert")
     */
    public function insertVideoAction(Request $request)
    {

        $worked=null;
        $youtubeError=null;

        $content = new Video();
        $form = $this->createForm(VideoContentType::class, $content);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {


            //get the youtube link
            $youtubeLink = $content->getLink();
            //check if the address is from youtube and have a video in it
            if (strpos($youtubeLink, 'youtube') !== false && strpos($youtubeLink, '?v=') !== false) {
                $videocode = explode("?v=", $youtubeLink);
                if (empty($videocode[1]) !== true) {
                    $content->setLink($videocode[1]);

                } else {
                    $youtubeError = "please provide the right and full youtube link";
                    return $this->render('Form/VideoInsert.html.twig', array('form' => $form->createView(), "youtubeError" => $youtubeError, "worked" => $worked));


                }


            } else {

                $youtubeError = "please provide the right and full youtube link";
                return $this->render('Form/VideoInsert.html.twig', array('form' => $form->createView(), "youtubeError" => "$youtubeError", "worked" => $worked));

            }

            /*save to database */
            $em = $this->getDoctrine()
                ->getManager();
            $em->persist($content);
            $em->flush();

            $worked = "<p>worked</p>";

            return $this->render('Form/VideoInsert.html.twig', array('form' => $form->createView(),"youtubeError" => $youtubeError, "worked" => $worked));


        }


        return $this->render('Form/VideoInsert.html.twig', array('form' => $form->createView(), "youtubeError" => $youtubeError,"worked" => $worked));
    }
}