<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class LuckyController extends Controller
{

    /**
     * @Route("/lucky/number/{count}")
     */
    public function indexAction($count)
    {

        
        $number =array();
        for($i=0;$i<$count;$i++)
        {
            $number[] = rand(0, 100);
        }
        $numberList=implode(",",$number);

        return $this->render('lucky/lucky.html.twig'
            ,array('lkk'=>$numberList,"dkk"=>"HalloWelt",));
    }


}
