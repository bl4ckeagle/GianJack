<?php

namespace AppBundle\Controller;

use AppBundle\Form\DesignFormType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Finder\Finder;
use Symfony\Component\Finder\SplFileInfo;
use Symfony\Component\HttpFoundation\Request;


class BackEndDesignController extends Controller
{

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/giantcontent/style", name="themeStyle")
     *
     */
    public function styleForm(Request $request)
    {
        /**
         * @var SplFileInfo $themefinding
         * @var SplFileInfo $themes
         * @var SplFileInfo $style
         */

        /*
         * Data handling, get the information from the elements located in the server
         */
        $finderTheme = new Finder();
        $finderStyle = new Finder();

        $themefinding = $finderTheme->files()->in("../app/Resources/Themes/Bootstrap");
        $stylefinding = $finderStyle->files()->in("../app/Resources/Themes/CSS");

        foreach ($themefinding as $themes) {

            $getThemes[] = $themes->getFilename();

        }
        foreach ($stylefinding as $style) {

            $getStyle[] = $style->getFilename();

        }
        $Data["Themes"] = $getThemes;
        $Data["Style"] = $getStyle;

        $form = $this->createForm(DesignFormType::class, array($Data));


        /*
         * Form handling
         */
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {


            $submittedTheme = $form["Theme"]->getData();
            $submittedStyle = $form["Style"]->getData();


            $fileDir_CSS_1 =$this->container->getParameter('kernel.root_dir').'../web/bundles/framework/css/';
            $fileDir_CSS = $this->container->getParameter('kernel.root_dir').'/../web/bundles/framework/css/';



            $fs = new Filesystem();
            $fs->chmod($fileDir_CSS, 0770, 0000, true);
            $fs->remove($fileDir_CSS.'bootstrap.min.css');
            $fs->remove($fileDir_CSS.'main.css');

            $fs->copy('../app/Resources/Themes/Bootstrap/'.$submittedTheme,$fileDir_CSS.$submittedTheme);
            $fs->copy('../app/Resources/Themes/CSS/'.$submittedStyle,$fileDir_CSS.$submittedStyle);
            $fs->rename($fileDir_CSS.$submittedStyle,$fileDir_CSS.'main.css');
            $fs->rename($fileDir_CSS.$submittedTheme,$fileDir_CSS.'bootstrap.min.css');


            return $this->render('Form/ChooseDesign.html.twig', array('form' => $form->createView()));


        }


        return $this->render('Form/ChooseDesign.html.twig', array('form' => $form->createView()));
    }
}
