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
        $directory = $finder->directories()->in('../web/bundles/framework/images/album/');


        foreach ($directory as $find) {

            $directoryname[] = $find->getRelativePathname();


            foreach($finder->files()->in($find->getRealpath())as $files)
                    {
                        $filename[$find->getRelativePathname()]=array($files->getFilename());

                    }

        }


        return $this->render("photos/photos.html.twig", array("Directory" => $directoryname, "Files" => $filename));

    }


}