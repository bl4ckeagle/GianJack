<?php
/**
 * Created by PhpStorm.
 * User: Kevin
 * Date: 12.05.2016
 * Time: 15:52
 */

namespace AppBundle\Form\Type;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;


class TaskType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

            $builder->add('Task')
                ->add('dueDate',null,array('widget'=>'single_text'))
                ->add('save',SubmitType::class);


    }

}