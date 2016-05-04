<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_cc5dc427d8fedbe0a13fcab73304b002df64dd607f7477a1adada5f622c76a0d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d1c09b278cab1a4090e9ec5101505d044514fd004fed0fa7578ae42b20f9ee5e = $this->env->getExtension("native_profiler");
        $__internal_d1c09b278cab1a4090e9ec5101505d044514fd004fed0fa7578ae42b20f9ee5e->enter($__internal_d1c09b278cab1a4090e9ec5101505d044514fd004fed0fa7578ae42b20f9ee5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_d1c09b278cab1a4090e9ec5101505d044514fd004fed0fa7578ae42b20f9ee5e->leave($__internal_d1c09b278cab1a4090e9ec5101505d044514fd004fed0fa7578ae42b20f9ee5e_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_a091ac4fe1abf1e4647266d0e83704c684e53b73d646745df93aae000a6b5a70 = $this->env->getExtension("native_profiler");
        $__internal_a091ac4fe1abf1e4647266d0e83704c684e53b73d646745df93aae000a6b5a70->enter($__internal_a091ac4fe1abf1e4647266d0e83704c684e53b73d646745df93aae000a6b5a70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_a091ac4fe1abf1e4647266d0e83704c684e53b73d646745df93aae000a6b5a70->leave($__internal_a091ac4fe1abf1e4647266d0e83704c684e53b73d646745df93aae000a6b5a70_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
