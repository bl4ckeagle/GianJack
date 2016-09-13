<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Video;
use AppBundle\Entity\VideoCollection;
use AppBundle\Form\VideoContentInsertType;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints\Collection;

class BackendVideoController extends Controller
{
    /**
     * @Route("giantcontent/video",name="VideoBackEnd")
     *
     */
    public function backendVideoOverviewAction()
    {

        $videos = $this->getDoctrine()
            ->getRepository("AppBundle:Video")
            ->findAll();


        return $this->render(":AdminBackend:VideoBackEnd.html.twig", array("Video" => $videos));

    }

    /**
     * @return redirect
     * @param $slug
     * @Route("/giantcontent/video/delete/{slug}")
     */
    public function deleteVideoAction(Video $slug)
    {

        try {
            $em = $this->getDoctrine()->getManager();
            $name = $slug->getTitle();
            $em->remove($slug);
            $em->flush();

            return $this->render("deleted.html.twig", array("item" => $name));
        }
        catch (\Exception $e)
        {
            $errorbody="Database Integrity,maybe ".$name." is allready taken or used";
            return $this->render("::AdminErrorPage.html.twig",array("errorbody"=>$errorbody));
        }


    }

    /**
     * @param Request $request
     * @param $slug
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/giantcontent/video/editing/{slug}")
     */
    public function editVideoForm(Request $request, $slug)
    {

        $worked="";
        $failed="";
        $formEntity = new Video();
        $em = $this->getDoctrine()->getManager();
        $video = $em->getRepository("AppBundle:Video")->find($slug);


        $form = $this->createForm(VideoContentInsertType::class, $formEntity);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {




            $video->setLink($formEntity->getLink());
            $video->setAlbum($formEntity->getAlbum());
            $video->setTitle($formEntity->getTitle());
            $em->flush();
            $worked="saved";


        }



        return $this->render("Form/VideoUpdateForm.twig", array(
            'form' => $form->createView(), "videos" => $video,"worked"=>$worked,"failed"=>$failed));
    }


    /**
     * @param Request $request
     * @return string|\Symfony\Component\HttpFoundation\Response
     * @Route("giantcontent/video/insert",name="VideoInsert")
     */
    public function insertVideoAction(Request $request)
    {

        $worked = null;
        $youtubeError = null;

        $content = new Video();
        $form = $this->createForm(VideoContentInsertType::class, $content);
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

            $worked = "saved";

            return $this->render('Form/VideoInsert.html.twig', array('form' => $form->createView(), "youtubeError" => $youtubeError, "worked" => $worked));


        }


        return $this->render('Form/VideoInsert.html.twig', array('form' => $form->createView(), "youtubeError" => $youtubeError, "worked" => $worked));
    }
}
