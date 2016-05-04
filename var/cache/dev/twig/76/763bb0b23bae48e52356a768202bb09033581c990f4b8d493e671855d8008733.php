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
        $__internal_e0810a50b4d3d17719a7b905da715647e646b41c8fa8f88dc7085d93c03cbb0c = $this->env->getExtension("native_profiler");
        $__internal_e0810a50b4d3d17719a7b905da715647e646b41c8fa8f88dc7085d93c03cbb0c->enter($__internal_e0810a50b4d3d17719a7b905da715647e646b41c8fa8f88dc7085d93c03cbb0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_e0810a50b4d3d17719a7b905da715647e646b41c8fa8f88dc7085d93c03cbb0c->leave($__internal_e0810a50b4d3d17719a7b905da715647e646b41c8fa8f88dc7085d93c03cbb0c_prof);

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
