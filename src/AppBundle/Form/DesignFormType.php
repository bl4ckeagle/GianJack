<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DesignFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {


            $Themes[]=$options["data"][0]['Themes'];
            $Styles[]=$options["data"][0]['Style'];


        

        $builder
            ->add("Theme",ChoiceType::class,array("expanded"=>true,"multiple"=>false,'choices'=>$Themes,))
            ->add("Style",ChoiceType::class,array("expanded"=>true,"multiple"=>false,'choices'=>$Styles,))
             ->add('save',SubmitType::class,array(
                          'attr' => array('class' => 'save')));
        dump($options);

    }

    public function configureOptions(OptionsResolver $resolver)
    {



    }

    public function getName()
    {
        return 'app_bundle_design_form_type';
    }
}
