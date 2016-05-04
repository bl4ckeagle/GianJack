<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_89520a16b2e3dca5180d45887aed2ac832a1a8e6416f294096d1c06acddbdc40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a6bc7658fecea821b3abed242862a9ca783b0ac27fa65341c2cfd8d2de210ed3 = $this->env->getExtension("native_profiler");
        $__internal_a6bc7658fecea821b3abed242862a9ca783b0ac27fa65341c2cfd8d2de210ed3->enter($__internal_a6bc7658fecea821b3abed242862a9ca783b0ac27fa65341c2cfd8d2de210ed3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_a6bc7658fecea821b3abed242862a9ca783b0ac27fa65341c2cfd8d2de210ed3->leave($__internal_a6bc7658fecea821b3abed242862a9ca783b0ac27fa65341c2cfd8d2de210ed3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
