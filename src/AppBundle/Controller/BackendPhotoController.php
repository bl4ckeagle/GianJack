<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
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


        $photoAlbum=$this->getDoctrine()
            ->getRepository('AppBundle:Photos')
            ->findAll();

        return $this->render("AdminBackend/PhotoOverView.html.twig",array("photoAlbum"=>$photoAlbum));



    }



    /**
     *
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("ptest")
     */
    public function showPictures(Request $request)
    {

        $finder = new Finder();
        $files = $finder->files()->in('../web/bundles/framework/images/album/2');


        /**
         * @var SplFileInfo $file
         */
        foreach ($files as $file) {
            $pictures[] = $file->getFilename();

        }
        if (empty($pictures))
        {
            $pictures=0;

        }
        if ($request->isMethod('POST'))
        {

            $fs=new Filesystem();
            $data=$request->getContent();
            $decode=json_decode($data);
            /*Decode json file*/

            for ($i=0;$i<count($decode);$i++)
            {
                /*remove every entry in path from decode*/

                $fs->remove('../web'.$decode[$i]);


            }
            return $this->render('Form/PhotoDeleteForm.html.twig', array("status"=>$decode,"picutes"=>$pictures));


        }
        return $this->render('Form/PhotoDeleteForm.html.twig', array("picutes"=>$pictures, "status"=>""));
    }
}


