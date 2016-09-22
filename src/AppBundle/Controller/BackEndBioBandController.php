<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Biographyband;
use AppBundle\Entity\Biographymember;
use AppBundle\Form\BandMemberType;
use AppBundle\Form\BioBandType;
use Ivory\CKEditorBundle\Exception\Exception;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class BackEndBioBandController extends Controller
{
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/giantcontent/bioband",name="bioband")
     */
    public function bioBackendOverview()
    {

        $band = $this->getDoctrine()->getRepository("AppBundle:Biographyband")->findAll();


        return $this->render('AdminBackend/BioBandOverview.html.twig', array('band' => $band));
    }

    /**
     * @param Request $request
     * @param $slug
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/giantcontent/bioband/editing/{slug}")
     */
    public function bioEdit(Request $request, $slug)
    {

        $worked = "";
        $failed = "";
        $formEntity = new Biographyband();
        $em = $this->getDoctrine()->getManager();
        $biocontent = $em->getRepository('AppBundle:Biographyband')->find($slug);

        $form = $this->createForm(BioBandType::class, $formEntity);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {


            $biocontent->setTitle($formEntity->getTitle());
            $biocontent->setContent($formEntity->getContent());

            try {
                $em->flush();
                $worked = "saved";
                return $this->render("Form/BioBandInsertForm.html.twig", array(
                    'form' => $form->createView(), "content" => $biocontent, "worked" => $worked, "failed" => $failed));
            } catch (\Exception $e) {
                $failed = $e;
                return $this->render("Form/BioBandInsertForm.html.twig", array(
                    'form' => $form->createView(), "content" => $biocontent, "worked" => $worked, "failed" => $failed));
            }}

            return $this->render("Form/BioBandInsertForm.html.twig", array(
                'form' => $form->createView(), "content" => $biocontent, "worked" => $worked, "failed" => $failed));


        }


    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("giantcontent/bioband/members")
     */
    public function membersOverview()
    {
        $members  = $this->getDoctrine()->getRepository("AppBundle:Biographymember")->findAll();


        return $this->render('AdminBackend/BioMembersOverview.html.twig', array('members' => $members));

    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/giantcontent/bioband/members/insert")
     */
    public function membersInsert(Request $request)
    {

        $worked = null;
        $error=null;
        $youtubeError = null;

        $bioTour = new Biographymember();
        $form = $this->createForm(BandMemberType::class, $bioTour);
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {


            $em = $this->getDoctrine()
                ->getManager();
            $em->persist($bioTour);
            try {
                $em->flush();
                $worked = "saved";
            } catch (Exception $e) {
                $error = "Error please check";
                return $this->render('Form/BioMemberInsertForm.html.twig', array('form' => $form->createView(), "error" => $error, "worked" => $worked));
            }
            return $this->render('Form/BioMemberInsertForm.html.twig', array('form' => $form->createView(), "error" => $error, "worked" => $worked));

        }
        return $this->render('Form/BioMemberInsertForm.html.twig', array('form' => $form->createView(), "error" => $error, "worked" => $worked));


    }

    /**
     * @param Biographymember $slug
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/giantcontent/bioband/members/delete/{slug}")
     */
    public function memberDelete(Biographymember $slug)
    {


        $em = $this->getDoctrine()->getManager();
        $name= $slug->getFirstName();

        try {
            $em->remove($slug);
            $em->flush();
            return $this->render("deleted.html.twig",array("item"=>$name));
        } catch (Exception $e)
        {

            $errorbody="Database Integrity,maybe something is allready taken or used";
            return $this->render("AdminErrorPage.html.twig",array("errorbody"=>$errorbody));
        }


    }


    /**
     * @param Request $request
     * @param $slug
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/giantcontent/bioband/members/editing/{slug}")
     */
    public function memberEdit(Request $request,$slug)
    {

        $worked="";
        $failed="";
        $formEntity = new Biographymember();
        $em = $this->getDoctrine()->getManager();
        $content = $em->getRepository("AppBundle:Biographymember")->find($slug);

        $form=$this->createForm(BandMemberType::class,$formEntity);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {




            $content->setFirstName($formEntity->getFirstName());
            $content->setLastName($formEntity->getLastName());
            $content->setContent($formEntity->getContent());

            try {
                $em->flush();
                $worked="saved";
                return $this->render("Form/BioMemberUpdateForm.html.twig", array(
                    'form' => $form->createView(), "content" => $content,"worked"=>$worked,"failed"=>$failed));
            }catch (Exception $e){
                $failed=$e;
                return $this->render("Form/BioMemberUpdateForm.html.twig", array(
                    'form' => $form->createView(), "content" => $content,"worked"=>$worked,"failed"=>$failed));}




        }

        return $this->render("Form/BioMemberUpdateForm.html.twig", array(
            'form' => $form->createView(), "content" => $content,"worked"=>$worked,"failed"=>$failed));
    }

    }

