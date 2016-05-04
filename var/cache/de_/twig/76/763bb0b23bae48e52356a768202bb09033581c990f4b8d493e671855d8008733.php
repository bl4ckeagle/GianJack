<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_61108acca161be876fd2f2463eae03ceaaf086a61b1f951f100b4cdeef3f0aed extends Twig_Template
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
        $__internal_6477c4eee6c0ebdbb1c31d2f4df870428d5fc2f4974aa417a0a54d493bcc5c7d = $this->env->getExtension("native_profiler");
        $__internal_6477c4eee6c0ebdbb1c31d2f4df870428d5fc2f4974aa417a0a54d493bcc5c7d->enter($__internal_6477c4eee6c0ebdbb1c31d2f4df870428d5fc2f4974aa417a0a54d493bcc5c7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_6477c4eee6c0ebdbb1c31d2f4df870428d5fc2f4974aa417a0a54d493bcc5c7d->leave($__internal_6477c4eee6c0ebdbb1c31d2f4df870428d5fc2f4974aa417a0a54d493bcc5c7d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
