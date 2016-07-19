<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Homecontent;
use AppBundle\Form\HomecontentType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;

class InsertContentController extends Controller
{

    /**
     *
     * @param $request
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("giantcontent/content/insert",name="ContentInsert")
     *
     */
    public function indexAction(Request $request)
    {

        $content = new Homecontent();
        $form = $this->createForm(HomecontentType::class, $content);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            /**
             * @var UploadedFile $file
             */

            /*get date and save it in variable*/
            $date = $content->getDate();
            $dateformated = $date->format('Y_m_d');


            /*get picture*/
            $file = $content->getPicturePath();
            /*creat filename*/
            $filename = $content->getTitle() . $dateformated . '.' . $file->guessExtension();
            /* save to dir*/
            $filedir = $this->container->getParameter('kernel.root_dir') . '/../web/bundles/framework/images/News/';
            $file->move($filedir, $filename);
            /*setonlythefilename not the data */
            $content->setPicturePath($filename);

            /*save to database */
            $em = $this->getDoctrine()
                ->getManager();
            $em->persist($content);
            $em->flush();

            $worked = "<p>worked</p>";

            return $worked;

        }
        return $this->render('Form/ContentForm.html.twig', array('form' => $form->createView()));


    }
}
