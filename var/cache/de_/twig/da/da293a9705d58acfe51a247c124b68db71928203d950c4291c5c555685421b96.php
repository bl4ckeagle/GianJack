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
        $__internal_fa2c948437e497f38c30bcf48089a2574534eaf3ddac5253b6382a50e6fd0656 = $this->env->getExtension("native_profiler");
        $__internal_fa2c948437e497f38c30bcf48089a2574534eaf3ddac5253b6382a50e6fd0656->enter($__internal_fa2c948437e497f38c30bcf48089a2574534eaf3ddac5253b6382a50e6fd0656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_fa2c948437e497f38c30bcf48089a2574534eaf3ddac5253b6382a50e6fd0656->leave($__internal_fa2c948437e497f38c30bcf48089a2574534eaf3ddac5253b6382a50e6fd0656_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_500260962ee9d9a805d37a232c98a0da10c767e7e1ee1876f85868e656ab069f = $this->env->getExtension("native_profiler");
        $__internal_500260962ee9d9a805d37a232c98a0da10c767e7e1ee1876f85868e656ab069f->enter($__internal_500260962ee9d9a805d37a232c98a0da10c767e7e1ee1876f85868e656ab069f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_500260962ee9d9a805d37a232c98a0da10c767e7e1ee1876f85868e656ab069f->leave($__internal_500260962ee9d9a805d37a232c98a0da10c767e7e1ee1876f85868e656ab069f_prof);

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
