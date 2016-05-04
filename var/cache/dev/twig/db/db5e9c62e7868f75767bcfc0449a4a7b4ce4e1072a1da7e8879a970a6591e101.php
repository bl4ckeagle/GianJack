<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_ef1d4b6e5eee370547bb3c0de605b4b631fe5b5713871cee3980b890efb787d1 extends Twig_Template
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
        $__internal_266a33bd6cf1adc0c569dfeab739985f4a7a07b939e4843878d8fe4e37c5d3e8 = $this->env->getExtension("native_profiler");
        $__internal_266a33bd6cf1adc0c569dfeab739985f4a7a07b939e4843878d8fe4e37c5d3e8->enter($__internal_266a33bd6cf1adc0c569dfeab739985f4a7a07b939e4843878d8fe4e37c5d3e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_266a33bd6cf1adc0c569dfeab739985f4a7a07b939e4843878d8fe4e37c5d3e8->leave($__internal_266a33bd6cf1adc0c569dfeab739985f4a7a07b939e4843878d8fe4e37c5d3e8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
