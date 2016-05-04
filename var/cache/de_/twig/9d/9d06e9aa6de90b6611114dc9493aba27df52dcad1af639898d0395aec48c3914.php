<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_3405314befcac643bc022a27e148da850c1f64407870c097285c08fc656d8e1f extends Twig_Template
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
        $__internal_e80508d97f9f190e5ff3aacbcff7b7a929b71d8543fe227c13aa4a9bbac29f46 = $this->env->getExtension("native_profiler");
        $__internal_e80508d97f9f190e5ff3aacbcff7b7a929b71d8543fe227c13aa4a9bbac29f46->enter($__internal_e80508d97f9f190e5ff3aacbcff7b7a929b71d8543fe227c13aa4a9bbac29f46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_e80508d97f9f190e5ff3aacbcff7b7a929b71d8543fe227c13aa4a9bbac29f46->leave($__internal_e80508d97f9f190e5ff3aacbcff7b7a929b71d8543fe227c13aa4a9bbac29f46_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
