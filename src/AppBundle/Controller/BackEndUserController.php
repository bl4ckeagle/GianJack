<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Contentuser;
use AppBundle\Form\UserFormType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class BackEndUserController extends Controller
{
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/giantcontent/user", name="Username")
     */
    public function userOverview()
    {

        $users=$this->getDoctrine()->getRepository('AppBundle:Contentuser')->findAll();


        return $this->render('AdminBackend/UserOverview.html.twig', array('User' => $users));
    }


    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     * @Route("/giantcontent/user/insert")
     */
    public function addUser(Request $request)
    {

        $user = new Contentuser();
        $form= $this->createForm(UserFormType::class,$user);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $password = $this->get('security.password_encoder')
                ->encodePassword($user, $user->getPlainPassword());
            $user->setPassword($password);

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            return $this->redirectToRoute('Username');



        }
        return $this->render("Form/UserInput.html.twig",array('form' => $form->createView()));



    }
}
