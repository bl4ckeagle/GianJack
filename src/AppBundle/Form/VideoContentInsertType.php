<?php

namespace AppBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class VideoContentInsertType extends AbstractType
{



    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        // album is entity from Alben.php entity class
        $builder
            ->add('title')
            ->add('link')
            ->add('album', EntityType::class, array('class' => 'AppBundle\Entity\Album', 'choice_label' => 'name','placeholder'=>'chose an option'))
            ->add('save',SubmitType::class,array(
                'attr' => array('class' => 'save')));


    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(
            array('data_class' => 'AppBundle\Entity\Video'));

    }

    public function getName()
    {
        return 'app_bundle_video_content_type';
    }
}
