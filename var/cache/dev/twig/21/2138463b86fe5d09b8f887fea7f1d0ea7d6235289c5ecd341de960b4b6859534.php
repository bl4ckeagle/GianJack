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
        $__internal_c8304cfccccade1a1fafb34f9ade9c0cca4526128999d7dd622737b7f2a37303 = $this->env->getExtension("native_profiler");
        $__internal_c8304cfccccade1a1fafb34f9ade9c0cca4526128999d7dd622737b7f2a37303->enter($__internal_c8304cfccccade1a1fafb34f9ade9c0cca4526128999d7dd622737b7f2a37303_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_c8304cfccccade1a1fafb34f9ade9c0cca4526128999d7dd622737b7f2a37303->leave($__internal_c8304cfccccade1a1fafb34f9ade9c0cca4526128999d7dd622737b7f2a37303_prof);

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
