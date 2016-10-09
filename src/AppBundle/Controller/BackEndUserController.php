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





        $usr = $this->get('security.token_storage')->getToken()->getUsername();
        $query = $this->getDoctrine()->getManager()->getRepository("AppBundle:Contentuser")->findByUsername($usr);
        $userId = $query[0]->getContentUserId();
        dump($userId);


        $users = $this->getDoctrine()->getRepository('AppBundle:Contentuser')->findAll();


        return $this->render('AdminBackend/UserOverview.html.twig', array('User' => $users, 'userID' => $userId));
    }


    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     * @Route("/giantcontent/user/insert")
     */
    public function addUser(Request $request)
    {

        $user = new Contentuser();
        $form = $this->createForm(UserFormType::class, $user);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $password = $this->get('security.password_encoder')
                ->encodePassword($user, $user->getPlainPassword());
            $user->setPassword($password);

            $em = $this->getDoctrine()->getManager();
            $userCheck = $this->getDoctrine()->getRepository("AppBundle:Contentuser")->findBycontent_user_id($user->getContentUserId());
            if ($user->getUsername() == $userCheck) {


                "error";

            } else {
                $em->persist($user);
                $em->flush();
                return $this->redirectToRoute('Username');
            }


        }
        return $this->render("Form/UserInput.html.twig", array('form' => $form->createView()));


    }

    /**
     * @param Request $request
     * @param $slug
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     * @Route("/giantcontent/user/editing/{slug}")
     */
    public function editMyUser(Request $request, $slug)
    {

        $user = new Contentuser();
        $data = $this->getDoctrine()->getRepository("AppBundle:Contentuser")->find($slug);
        $form = $this->createForm(UserFormType::class, $user);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $password = $this->get('security.password_encoder')
                ->encodePassword($user, $user->getPlainPassword());
            $user->setPassword($password);

            $em = $this->getDoctrine()->getManager();
            $userCheck = $this->getDoctrine()->getRepository("AppBundle:Contentuser")->findBycontent_user_id($user->getContentUserId());
            if ($user->getUsername() == $userCheck) {


                "error";

            } else {
                $em->flush();
                return $this->redirectToRoute('Username');
            }


        }
        return $this->render("Form/UserUpdate.html.twig", array('form' => $form->createView(), "data" => $data));


    }


    /**
     * @param Contentuser $slug
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     * @Route("/giantcontent/user/delete/{slug}")
     */
    public function deleteMyUser(Contentuser $slug)
    {


            $em = $this->getDoctrine()->getManager();
            $name = $slug->getContentUserId();
            $em->remove($slug);
            $em->flush();
            return $this->redirectToRoute('/logout');




    }




}
