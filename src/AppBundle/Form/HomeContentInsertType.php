<?php

namespace AppBundle\Form;

use Ivory\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class HomeContentInsertType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('content',CKEditorType::class,array('config_name'=>'my_config'))
            ->add('picturePath',FileType::class, array('label' => 'Picuture'))
            ->add('date',DateTimeType::class, array('placeholder'=>'select a value',))
            ->add('author',EntityType::class,array('class'=>'AppBundle\Entity\Contentuser','choice_label'=>'firstName','placeholder'=>'chose an option'))
            ->add('save',SubmitType::class,array(
                'attr' => array('class' => 'save')));

    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Homecontent'
        ));
    }
}
