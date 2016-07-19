<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Album;
use AppBundle\Form\AlbumContentType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;


class InsertAlbumController extends Controller
{

    /**
     * @param Request $request
     * @return string|\Symfony\Component\HttpFoundation\Response
     * @Route("giantcontent/album/insert",name="AlbumInsert")
     */

    public function indexAction(Request $request)
    {
        $content = new Album();
        $form = $this->createForm(AlbumContentType::class, $content);
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
            $file = $content->getPicturepath();
            /*create filename*/
            $filename = $content->getName() .'.'. $file->guessExtension();
            /*save to dir*/
            $filedir = $this->container->getParameter('kernel.root_dir') . '/../web/bundles/framework/images/video_pictures';
            $file->move($filedir, $filename);
            /*set filename to database*/
            $content->setPicturepath($filename);




            /*save whole database*/
            $em = $this->getDoctrine()
                ->getManager();
            $em->persist($content);
            $em->flush();


            $worked = "<p>worked</p>";

            return $worked;

        }

        return $this->render('Form/AlbumInsertForm.html.twig', array('form' => $form->createView()));
    }
}
