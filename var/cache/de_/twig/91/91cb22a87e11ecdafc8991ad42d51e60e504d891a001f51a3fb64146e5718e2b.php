<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_375e61c02a0817cc91a148323ec48ea653628da0b125b5ad8798fe4523b710a9 extends Twig_Template
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
        $__internal_d021e9203038d16832f823efbb22f24982669b7eecaeafcc0e330921ca1aceeb = $this->env->getExtension("native_profiler");
        $__internal_d021e9203038d16832f823efbb22f24982669b7eecaeafcc0e330921ca1aceeb->enter($__internal_d021e9203038d16832f823efbb22f24982669b7eecaeafcc0e330921ca1aceeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_d021e9203038d16832f823efbb22f24982669b7eecaeafcc0e330921ca1aceeb->leave($__internal_d021e9203038d16832f823efbb22f24982669b7eecaeafcc0e330921ca1aceeb_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
