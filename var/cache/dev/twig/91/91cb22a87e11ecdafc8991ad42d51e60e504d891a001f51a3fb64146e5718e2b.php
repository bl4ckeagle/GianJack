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
        $__internal_8b23250b47f526e9ddfcc99d2c968e8418ebfa31f8176f71a0dd91727b56172a = $this->env->getExtension("native_profiler");
        $__internal_8b23250b47f526e9ddfcc99d2c968e8418ebfa31f8176f71a0dd91727b56172a->enter($__internal_8b23250b47f526e9ddfcc99d2c968e8418ebfa31f8176f71a0dd91727b56172a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_8b23250b47f526e9ddfcc99d2c968e8418ebfa31f8176f71a0dd91727b56172a->leave($__internal_8b23250b47f526e9ddfcc99d2c968e8418ebfa31f8176f71a0dd91727b56172a_prof);

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
