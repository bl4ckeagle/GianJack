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
        $__internal_8cd180d14e978c9de52f3434ca724968eee9e0aea8b5b02c80bdc3652215f67d = $this->env->getExtension("native_profiler");
        $__internal_8cd180d14e978c9de52f3434ca724968eee9e0aea8b5b02c80bdc3652215f67d->enter($__internal_8cd180d14e978c9de52f3434ca724968eee9e0aea8b5b02c80bdc3652215f67d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_8cd180d14e978c9de52f3434ca724968eee9e0aea8b5b02c80bdc3652215f67d->leave($__internal_8cd180d14e978c9de52f3434ca724968eee9e0aea8b5b02c80bdc3652215f67d_prof);

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
