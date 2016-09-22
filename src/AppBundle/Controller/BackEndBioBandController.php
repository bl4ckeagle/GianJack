<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Biographyband;
use AppBundle\Form\BioBandType;
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

        $em = $band = $this->getDoctrine()->getRepository("AppBundle:Biographyband")->findAll();


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
                return $this->render("Form/BioBandForm.html.twig", array(
                    'form' => $form->createView(), "content" => $biocontent, "worked" => $worked, "failed" => $failed));
            } catch (\Exception $e) {
                $failed = $e;
                return $this->render("Form/BioBandForm.html.twig", array(
                    'form' => $form->createView(), "content" => $biocontent, "worked" => $worked, "failed" => $failed));
            }}

            return $this->render("Form/BioBandForm.html.twig", array(
                'form' => $form->createView(), "content" => $biocontent, "worked" => $worked, "failed" => $failed));


        }

    }

