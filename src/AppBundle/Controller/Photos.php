<?php
/**
 * Created by PhpStorm.
 * User: Kevin
 * Date: 03.05.2016
 * Time: 18:19
 */
namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Finder\Finder;
use Symfony\Component\Finder\SplFileInfo;


class Photos extends controller
{


    /**
     * @return mixed
     * @Route("/photos",name="Fotos")
     */
    public function photosAction()
    {
        $finder = new Finder();
        $finder2 = new Finder();
        $directory = $finder->directories()->in('../web/bundles/framework/images/album/');


        /**
         * @var SplFileInfo $founds
         * @var SplFileInfo $find
         */
        foreach ($directory as $find) {

            $files = ($finder2->files()->in($find->getPathname()));

            foreach ($files as $founds) {


                $filename[$find->getRelativePathname()] = $founds->getFilename();
            }
        }


        return $this->render("photos/photos.html.twig", array("Values" => $filename));

    }

    /**
     * @param $slug
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/photos/{slug}" )
     */

    public function photoAlbumAction($slug)
    {

        $finder = new Finder;
        $files = $finder->files()->in('../web/bundles/framework/images/album/' . $slug);

        /**
         * @var SplFileInfo $file
         */
        foreach ($files as $file) {
            $pictures[] = $file->getFilename();

        }




        return $this->render("Photos/photoAlbum.html.twig", array("Values" => $pictures, "path" => $slug));


    }


}