<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_8ffaecca05b6d452943502d408a964b984ef897de5fc60ce7fa4e5bb9f909580 extends Twig_Template
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
        $__internal_329adf403c045d0c235508a3b6e20a382029f819146e4af97b7e3f80e3457347 = $this->env->getExtension("native_profiler");
        $__internal_329adf403c045d0c235508a3b6e20a382029f819146e4af97b7e3f80e3457347->enter($__internal_329adf403c045d0c235508a3b6e20a382029f819146e4af97b7e3f80e3457347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_329adf403c045d0c235508a3b6e20a382029f819146e4af97b7e3f80e3457347->leave($__internal_329adf403c045d0c235508a3b6e20a382029f819146e4af97b7e3f80e3457347_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
