<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Task;
use AppBundle\Form\Type\TaskType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class TaskController extends Controller
{

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/testtask")
     */
    public function indexAction(Request $request)
    {

        $task = new Task();
        $task->setTask('This is a test');
        $task->setDueDate(new \DateTime('tomorrow'));

        $form = $this->createFormBuilder(TaskType::class,$task);

        $form->handleRequest($request);

        if ($form->isSubmitted()&& $form->isValid())
        {
            return $this->redirectToRoute('task_success');

        }





        return $this->render('testtask/test.html.twig', array('form'=>$form->createView()));
    }
}
