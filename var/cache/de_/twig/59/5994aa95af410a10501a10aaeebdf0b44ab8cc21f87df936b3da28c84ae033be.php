<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_c6a51695033c324ae2575ef3487295cdcadc3d3406e8d0ae2665a63f4269c76a extends Twig_Template
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
        $__internal_58cdd6e4a09bb8237faf030251567d1210874c0b04229a6855f883e4fc7d9ac2 = $this->env->getExtension("native_profiler");
        $__internal_58cdd6e4a09bb8237faf030251567d1210874c0b04229a6855f883e4fc7d9ac2->enter($__internal_58cdd6e4a09bb8237faf030251567d1210874c0b04229a6855f883e4fc7d9ac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_58cdd6e4a09bb8237faf030251567d1210874c0b04229a6855f883e4fc7d9ac2->leave($__internal_58cdd6e4a09bb8237faf030251567d1210874c0b04229a6855f883e4fc7d9ac2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
