<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Album;
use AppBundle\Form\AlbumContentInsertType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;


class BackendAlbumController extends Controller
{

    /**
     * @Route("giantcontent/album",name="AlbumBackEnd")
     */


    public function backendAlbumOverviewAction()
    {

        $album = $this->getDoctrine()
            ->getRepository("AppBundle:Album")
            ->findAll();

        return $this->render(":AdminBackend:AlbumBackEnd.html.twig", array("Album" => $album));


    }


    /**
     * @param Request $request
     * @return string|\Symfony\Component\HttpFoundation\Response
     * @Route("giantcontent/album/insert",name="AlbumInsert")
     */

    public function insertAction(Request $request)
    {


        $worked = null;
        $error = null;
        $formEntity = new Album();
        $form = $this->createForm(AlbumContentInsertType::class, $formEntity);
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {

            /**
             * @var UploadedFile $file
             */


            /*
             * Picture Saving
             *
             */
            /*get picture*/
            $file = $formEntity->getPicturepath();
            /*create filename*/
            $filename = $formEntity->getName() .time(). '.' . $file->guessExtension();
            /*save to dir*/
            $filedir = $this->container->getParameter('kernel.root_dir') . '/../web/bundles/framework/images/video_pictures';
            $file->move($filedir, $filename);
            /*set filename to database*/
            $formEntity->setPicturepath($filename);


            /*save whole database*/
            $em = $this->getDoctrine()
                ->getManager();
            $em->persist($formEntity);
            $em->flush();


            $worked = "saved";

            return $this->render('Form/AlbumInsertForm.html.twig', array('form' => $form->createView(), "worked" => $worked,"error"=>$error));


        }

        return $this->render('Form/AlbumInsertForm.html.twig', array('form' => $form->createView(), "worked" => $worked,"error"=>$error));
    }

    /**
     * @param $slug
     * @return string
     * @Route("/giantcontent/album/delete/{slug}")
     */

    public function deleteAction(Album $slug)
    {
        $fs = new Filesystem();
            $em = $this->getDoctrine()->getManager();
            $name= $slug->getName();
       try {
           $fs->remove("../web/bundles/framework/images/video_pictures/".$slug->getPicturepath());
            $em->remove($slug);
            $em->flush();
           return $this->render("::deleted.html.twig",array("item"=>$name));
        } catch (\Exception $e)
        {

            $errorbody="Database Integrity,maybe ".$name." is allready taken or used";
            return $this->render("::AdminErrorPage.html.twig",array("errorbody"=>$errorbody));
        }





    }


    /**
     * @param Request $request
     * @param $slug
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/giantcontent/album/editing/{slug}")
     */
    public function editAction(Request $request ,$slug)
    {
        $fs = new Filesystem();
        $worked=null;
        $failed=null;
        $formEntity = new Album();
        $em = $this->getDoctrine()->getManager();
        $album = $em->getRepository("AppBundle:Album")->find($slug);
        $form = $this->createForm(AlbumContentInsertType::class,$formEntity);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $fs->remove("../web/bundles/framework/images/video_pictures/".$album->getPicturepath());
                /*
                 * Picture Saving
                 *
                 */
                /*get picture*/
                $file = $formEntity->getPicturepath();
                /*create filename*/
                $filename = $formEntity->getName() . '.' . $file->guessExtension();
                /*save to dir*/
                $filedir = $this->container->getParameter('kernel.root_dir') . '/../web/bundles/framework/images/video_pictures';
                $file->move($filedir, $filename);
                /*set filename to database*/
                $formEntity->setPicturepath($filename);


            $album->setName($formEntity->getName());
            $album->setPicturepath($formEntity->getPicturepath());
            $album->setReleasedate($formEntity->getReleasedate());
            $em->flush();
            $worked="worked";


        }
        return $this->render(":Form:AlbumUpdateForm.html.twig", array(
            'form' => $form->createView(), "album" => $album,"worked"=>$worked,"failed"=>$failed,));


    }


}
