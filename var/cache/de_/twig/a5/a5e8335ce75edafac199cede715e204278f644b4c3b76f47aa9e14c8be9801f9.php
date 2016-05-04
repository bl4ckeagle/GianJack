<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_03bb503cdb8135dde62905f1af3af98f7227d22279d5972a19d00e29157e1e7d extends Twig_Template
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
        $__internal_67b09974663ebf24d0a5fb79b1ecc7780e484295df098cc12ae825569628a273 = $this->env->getExtension("native_profiler");
        $__internal_67b09974663ebf24d0a5fb79b1ecc7780e484295df098cc12ae825569628a273->enter($__internal_67b09974663ebf24d0a5fb79b1ecc7780e484295df098cc12ae825569628a273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_67b09974663ebf24d0a5fb79b1ecc7780e484295df098cc12ae825569628a273->leave($__internal_67b09974663ebf24d0a5fb79b1ecc7780e484295df098cc12ae825569628a273_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
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
