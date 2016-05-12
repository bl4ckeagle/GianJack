<?php
/**
 * Created by PhpStorm.
 * User: Kevin
 * Date: 08.05.2016
 * Time: 17:15
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class AngularController extends Controller
{

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/angular",name="reactjs")
     */
    public function AngularRenderAction()
    {



        return $this->render(":Angular:angular.html.twig");
    }


/**
 * @return JsonResponse
 * @Route("/angular/data",name="angularData")
 */
public function AngularJsonAction()
{
    $phones = [[
        "age" => 13,
        "id" => "motorola-defy-with-motoblur",
        "name" => "Motorola DEFY2122 with MOTOBLUR2122",
        "snippet" => "Are you ready for everything life throws your "
    ],
    [
    "age"=> 10,
        "id" => "moreData",
        "name" => "newName",
        "snippet" => "Stuipid Phone"
    ]
    ];


    return new JsonResponse($phones);
}}