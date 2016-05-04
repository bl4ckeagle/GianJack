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


class Photos extends controller
{


    /**
     * @return mixed
     * @Route("/photos",name="Fotos")
     */
    public function photosAction()
    {
        $finder = new Finder();
        $finder2=new Finder();
        $directory = $finder->directories()->in('../web/bundles/framework/images/album/');
     



        foreach ($directory as $find) {




            $files=($finder2->files()->in($find->getRealpath()));
            foreach($files as $founds)
            {
                $filename[$find->getRelativePathname()]=$founds->getFileName();

            }
        }



        return $this->render("photos/photos.html.twig", array("Values" => $filename));

    }


}