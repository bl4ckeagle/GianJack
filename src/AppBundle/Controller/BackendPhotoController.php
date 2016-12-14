<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Photos;
use AppBundle\Form\PictureAlbumType;
use AppBundle\Form\PictureInsertForm;
use Ivory\CKEditorBundle\Exception\Exception;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Console\Tests\Fixtures\DummyOutput;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Finder\Finder;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Finder\SplFileInfo;


class BackendPhotoController extends Controller
{


    /**
     *
     * @Route("giantcontent/photos", name="PhotoBackEnd")
     */
    public function picturesOverview()
    {


        $photoAlbum = $this->getDoctrine()
            ->getRepository('AppBundle:Photos')
            ->findAll();

        return $this->render("AdminBackend/PhotoOverView.html.twig", array("photoAlbum" => $photoAlbum));


    }


    /**
     *
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/giantcontent/photos/editing/{slug}")
     */
    public function showAndDeletePictures(Request $request,Photos $slug)
    {

        $finder = new Finder();
        $Pathname=$slug->getName();

        $files = $finder->files()->in('../web/bundles/framework/images/album/' . $Pathname);




        /**
         * @var SplFileInfo $file
         */
        foreach ($files as $file) {
            $pictures[] = $Pathname.'/'.$file->getFilename();

        }
        if (empty($pictures)) {
            $pictures = 0;

        }



        if ($request->isMethod('POST')) {

            $fs = new Filesystem();
            $data = $request->getContent();
            $decode = json_decode($data);
            /*Decode json file*/

            for ($i = 0; $i < count($decode); $i++) {
                /*remove every entry in path from decode*/

                $fs->remove('../web' . $decode[$i]);


            }
            return $this->render('Form/PhotoDeleteForm.html.twig', array("status" => $decode, "picutes" => $pictures));


        }

        if ($request->isMethod('POST') && $request->request->get('name', 'edit')) {


        }
        return $this->render('Form/PhotoDeleteForm.html.twig', array("picutes" => $pictures, "status" => ""));
    }


    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("giantcontent/photos/insert")
     */
    public function picturesAdd(Request $request)
    {

        $fs = new Filesystem();
        $worked = null;
        $error = null;
        $formEntity = new Photos();
        $form = $this->createForm(PictureAlbumType::class, $formEntity);
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {

            $checkSameName = $this->getDoctrine()->getRepository('AppBundle:Photos')
                ->findByName($formEntity->getName());

            if (!empty($checkSameName)) {


                $error="same name please change";
                return $this->render('Form/ContentInsertForm.twig', array('form' => $form->createView(), "error" => $error, "worked" => $worked));



            } else {

                if (!($fs->exists('../web/bundles/framework/images/album/' . $formEntity->getName()))) {
                    $fs->mkdir('../web/bundles/framework/images/album/' . $formEntity->getName());

                }
                $i = 0;


                foreach ($formEntity->getPictures() as $pictures) {



                    //create filename
                    $filename = $formEntity->getName() . time() . $i . '.' . $pictures->guessExtension();
                    //dir name
                    $filedir = $this->container->getParameter('kernel.root_dir') . '/../web/bundles/framework/images/album/' . $formEntity->getName() . '/';
                    //save to dir
                    $pictures->move($filedir, $filename);
                    //set filename to database


                    $i++;

                }
                $formEntity->setPictures($formEntity->getName());
                $em = $this->getDoctrine()
                    ->getManager();
                $em->persist($formEntity);
                try {


                    $em->flush();
                    $worked = 'saved';
                } catch (Exception $e) {
                    $error = "Error please check";
                }

                return $this->render('Form/ContentInsertForm.twig', array('form' => $form->createView(), "error" => $error, "worked" => $worked));


            }
        }


        return $this->render('Form/ContentInsertForm.twig', array('form' => $form->createView(), "error" => $error, "worked" => $worked));

    }

    /**
     * @param Photos $slug
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("giantcontent/photos/delete/{slug}")
     */
    public function photoDelete(Photos $slug)
    {

        $em = $this->getDoctrine()->getManager();
        $name= $slug->getName();

        $fs = new Filesystem();
        try {
            $em->remove($slug);
            if ($fs->exists('../web/bundles/framework/images/album/' .$name))
            {
                $fs->remove(array('../web/bundles/framework/images/album/' .$name));
            }
                $em->flush();

            return $this->render("::deleted.html.twig",array("item"=>$name));
        } catch (\Exception $e)
        {

            $errorbody="Database Integrity,maybe ".$name." is allready taken or used";
            return $this->render("::AdminErrorPage.html.twig",array("errorbody"=>$errorbody));
        }



    }


    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/giantcontent/photos/editing/{slug}/photoinsert")
     */
    public function photoEdit(Request $request,$slug)
    {

        $fs = new Filesystem();
        $worked = null;
        $error = null;
        $formEntity = new Photos();
        $em=$this->getDoctrine()->getManager();
        $picturesEntitiy=$em->getRepository("AppBundle:Photos")->find($slug);
        $form = $this->createForm(PictureInsertForm::class, $formEntity);
        $form->handleRequest($request);



       if ($form->isSubmitted()&&$form->isValid())
        {
            if (!($fs->exists('../web/bundles/framework/images/album/' . $picturesEntitiy->getName())))
            {
                $fs->mkdir('../web/bundles/framework/images/album/' . $picturesEntitiy->getName());

            }
            $i = 0;

            foreach ($formEntity->getPictures() as $pictures) {


                // Picture Saving

                //create filename
                $filename = $picturesEntitiy->getName() . time() . $i . '.' . $pictures->guessExtension();
                //dir name
                $filedir = $this->container->getParameter('kernel.root_dir') . '/../web/bundles/framework/images/album/' . $picturesEntitiy->getName() . '/';
                //save to dir
                $pictures->move($filedir, $filename);
                //set filename to database


                $i++;


            }


                $worked = 'saved';
                $error = "Error please check";


            return $this->render("Form/PhotoUpdateForm.html.twig",array("var"=>$pictures,'form' => $form->createView()));


        }


        return $this->render("Form/PhotoUpdateForm.html.twig",array('form' => $form->createView()));

    }

}


