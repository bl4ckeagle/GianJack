<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Homecontent;

use AppBundle\Form\HomeContentInsertType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;

class BackEndHomeContentController extends Controller
{



    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("giantcontent/homecontent",name="HContentBackEnd")
     */
    public function backendHomeContentOverviewAction()
    {
        $homeContent = $this->getDoctrine()->getRepository('AppBundle:Homecontent')->findAll();
        return $this->render('AdminBackend/HomeContentBackEnd.twig', array("Content" => $homeContent));


    }

    /**
     *
     * @param $request
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("giantcontent/homecontent/insert",name="ContentInsert")
     *
     */
    public function insertAction(Request $request)
    {

        $worked=null;
        $error=null;
        $content = new Homecontent();
        $form = $this->createForm(HomeContentInsertType::class, $content);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            /**
             * @var UploadedFile $file
             */

            /*get date and save it in variable*/
            $date = $content->getDate();
            $dateformated = $date->format('Y_m_d_H_M');


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
            try {
                $em->flush();
                $worked="saved";
                return $this->render('Form/ContentInsertForm.twig', array('form' => $form->createView(),"worked"=>$worked,"error"=>$error));
            } catch (Exception $e) {
                $errorbody="something went wrong check Database or call administrator";
                return $this->render('AdminErrorPage.html.twig', array('form' => $form->createView(),"errorbody"=>$errorbody));
            }




        }
        return $this->render('Form/ContentInsertForm.twig', array('form' => $form->createView(),"error"=>$error,"worked"=>$worked));


    }


    /**
     * @param Homecontent $slug
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/giantcontent/homecontent/delete/{slug}")
     */
    public function deleteAction(Homecontent $slug)
    {
        $fs=new Filesystem();
        $em = $this->getDoctrine()->getManager();
        $name= $slug->getTitle();


        try {
            $fs->remove("../web/bundles/framework/images/News/".$slug->getPicturePath());
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
     * @Route("/giantcontent/homecontent/editing/{slug}")
     */
    public function editAction(Request $request,$slug)
    {

        $fs =new Filesystem();
        $worked="";
        $failed="";
        $formEntity = new Homecontent();
        $em = $this->getDoctrine()->getManager();
        $content = $em->getRepository("AppBundle:Homecontent")->find($slug);

        $form=$this->createForm(HomeContentInsertType::class,$formEntity);
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {


            $fs->remove("../web/bundles/framework/images/News/".$content->getPicturePath());

            /**
             * @var UploadedFile $file
             */

            /*get date and save it in variable*/
            $date = $content->getDate();
            $dateformated = $date->format('Y_m_d_H_M');


            /*get picture*/
            $file = $formEntity->getPicturePath();
            /*creat filename*/
            $filename = $formEntity->getTitle() . $dateformated . '.' . $file->guessExtension();
            /* save to dir*/
            $filedir = $this->container->getParameter('kernel.root_dir') . '/../web/bundles/framework/images/News/';
            $file->move($filedir, $filename);
            /*setonlythefilename not the data */
            $formEntity->setPicturePath($filename);





            $content->setTitle($formEntity->getTitle());
            $content->setContent($formEntity->getContent());
            $content->setPicturePath($formEntity->getPicturePath());

            $content->setDate($formEntity->getDate());
            $content->getAuthor($formEntity->getAuthor());
            try {
                $em->flush();
                $worked="saved";
                return $this->render("Form/ContentUpdateForm.html.twig", array(
                    'form' => $form->createView(), "content" => $content,"worked"=>$worked,"failed"=>$failed));
            }catch (\Exception $e){
                $failed=$e;
            return $this->render("Form/ContentUpdateForm.html.twig", array(
                'form' => $form->createView(), "content" => $content,"worked"=>$worked,"failed"=>$failed));}




        }

        return $this->render("Form/ContentUpdateForm.html.twig", array(
            'form' => $form->createView(), "content" => $content,"worked"=>$worked,"failed"=>$failed));}





}
