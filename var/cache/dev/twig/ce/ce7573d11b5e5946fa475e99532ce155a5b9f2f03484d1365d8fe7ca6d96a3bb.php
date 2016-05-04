<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_e5737f055cf71b9285fc16811a5655d8b4f95439ce75979ea8eaa0c05db0359a extends Twig_Template
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
        $__internal_2e09b15405a8db5db2529157462ee38acef98a38f1619506b23cfd456ad1737c = $this->env->getExtension("native_profiler");
        $__internal_2e09b15405a8db5db2529157462ee38acef98a38f1619506b23cfd456ad1737c->enter($__internal_2e09b15405a8db5db2529157462ee38acef98a38f1619506b23cfd456ad1737c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_2e09b15405a8db5db2529157462ee38acef98a38f1619506b23cfd456ad1737c->leave($__internal_2e09b15405a8db5db2529157462ee38acef98a38f1619506b23cfd456ad1737c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->block($form, 'button_widget',  array('type' => isset($type) ? $type : 'reset')) ?>*/
/* */
