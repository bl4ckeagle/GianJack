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
        $__internal_7def51c9f3b27c7dd51ca3c569500de854f267f742b71c64e1cbf38fe0f4bf20 = $this->env->getExtension("native_profiler");
        $__internal_7def51c9f3b27c7dd51ca3c569500de854f267f742b71c64e1cbf38fe0f4bf20->enter($__internal_7def51c9f3b27c7dd51ca3c569500de854f267f742b71c64e1cbf38fe0f4bf20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_7def51c9f3b27c7dd51ca3c569500de854f267f742b71c64e1cbf38fe0f4bf20->leave($__internal_7def51c9f3b27c7dd51ca3c569500de854f267f742b71c64e1cbf38fe0f4bf20_prof);

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
