<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PictureInsertForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
         ->add('pictures',FileType::class,array('label' => 'Picuture','required'=>'true','multiple'=>'true'))
            ->add('save',SubmitType::class,array(
                'attr' => array('class' => 'save')));


    }

    public function configureOptions(OptionsResolver $resolver)
    {

        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Photos'
        ));

    }

    public function getName()
    {
        return 'app_bundle_picture_insert_form';
    }
}
