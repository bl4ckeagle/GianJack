<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PictureAlbumType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('name')
            ->add('year')
            ->add('year');


    }

    public function configureOptions(OptionsResolver $resolver)
    {

        $resolver->setDefaults(
            array('data_class' => 'AppBundle\Entity\Photos'
            ));
    }

    public function getName()
    {
        return 'app_bundle_tour_content_type';
    }
}
