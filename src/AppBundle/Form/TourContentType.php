<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TourContentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('location')
            ->add('date',DateTimeType::class)
            ->add('country')
            ->add('ticketLink')
            ->add('save',SubmitType::class,array(
                'attr' => array('class' => 'save')));


    }

    public function configureOptions(OptionsResolver $resolver)
    {

        $resolver->setDefaults(
            array('data_class' => 'AppBundle\Entity\Tour'
        ));
    }

    public function getName()
    {
        return 'app_bundle_tour_content_type';
    }
}
