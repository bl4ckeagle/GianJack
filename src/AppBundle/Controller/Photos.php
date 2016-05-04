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
        $finder =new Finder();


     $direcotires= $finder->directories()->in('../web/bundles/framework/images/album/');


        foreach ($direcotires as $finding)
        {
            $findings[] =$finding;

        }
        foreach($files as $ffinding)
        {
            $ffindings[]=$ffinding;


        }








        return $this->render("photos/photos.html.twig",array("Directory"=>$findings,"Files"=>$ffindings));

    }


}