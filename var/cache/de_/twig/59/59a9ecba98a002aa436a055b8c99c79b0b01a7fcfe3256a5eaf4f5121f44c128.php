<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_ca179b8526d2a462e3110cfaf72b8fade36c6534027d83793281f72c3e66d48d extends Twig_Template
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
        $__internal_cfd615ac64d6817f2a35dfec88aeafaf31594ceb2f61a4c8ba7600d3d4d2ae16 = $this->env->getExtension("native_profiler");
        $__internal_cfd615ac64d6817f2a35dfec88aeafaf31594ceb2f61a4c8ba7600d3d4d2ae16->enter($__internal_cfd615ac64d6817f2a35dfec88aeafaf31594ceb2f61a4c8ba7600d3d4d2ae16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_cfd615ac64d6817f2a35dfec88aeafaf31594ceb2f61a4c8ba7600d3d4d2ae16->leave($__internal_cfd615ac64d6817f2a35dfec88aeafaf31594ceb2f61a4c8ba7600d3d4d2ae16_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */