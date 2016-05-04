<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_b28a0840ba3d129cee1047492e61ccc5436a36fb287d73ad7f547232f9b7697f extends Twig_Template
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
        $__internal_0862364e1606bcbc939ebc4faac30c48f992a4f52af60cd4017ea022b6871aae = $this->env->getExtension("native_profiler");
        $__internal_0862364e1606bcbc939ebc4faac30c48f992a4f52af60cd4017ea022b6871aae->enter($__internal_0862364e1606bcbc939ebc4faac30c48f992a4f52af60cd4017ea022b6871aae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_0862364e1606bcbc939ebc4faac30c48f992a4f52af60cd4017ea022b6871aae->leave($__internal_0862364e1606bcbc939ebc4faac30c48f992a4f52af60cd4017ea022b6871aae_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_5e2ae61a418a3cc583a2c670a751dbe79c0c04da05c92847b05cadd24350d351 = $this->env->getExtension("native_profiler");
        $__internal_5e2ae61a418a3cc583a2c670a751dbe79c0c04da05c92847b05cadd24350d351->enter($__internal_5e2ae61a418a3cc583a2c670a751dbe79c0c04da05c92847b05cadd24350d351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_5e2ae61a418a3cc583a2c670a751dbe79c0c04da05c92847b05cadd24350d351->leave($__internal_5e2ae61a418a3cc583a2c670a751dbe79c0c04da05c92847b05cadd24350d351_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
