<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_58245e0d95e40a29f71df8d2e40e7e51b157ea60a0be8f7c87955931222f7f14 extends Twig_Template
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
        $__internal_6c9fee3d3129f05e2e34f9837f5fa4b293e9862f11aa51fab651551a24df9c99 = $this->env->getExtension("native_profiler");
        $__internal_6c9fee3d3129f05e2e34f9837f5fa4b293e9862f11aa51fab651551a24df9c99->enter($__internal_6c9fee3d3129f05e2e34f9837f5fa4b293e9862f11aa51fab651551a24df9c99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_6c9fee3d3129f05e2e34f9837f5fa4b293e9862f11aa51fab651551a24df9c99->leave($__internal_6c9fee3d3129f05e2e34f9837f5fa4b293e9862f11aa51fab651551a24df9c99_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
