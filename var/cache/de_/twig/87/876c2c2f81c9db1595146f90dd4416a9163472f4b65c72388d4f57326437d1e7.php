<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_08d5c75427b7d1886ee51266cd3fad329901f14b63cf190159a0e18cb0f84e88 extends Twig_Template
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
        $__internal_85a5c76dbdc691640b22160376fea4e48cb2e3c611ad9e579b5b21461692c8cb = $this->env->getExtension("native_profiler");
        $__internal_85a5c76dbdc691640b22160376fea4e48cb2e3c611ad9e579b5b21461692c8cb->enter($__internal_85a5c76dbdc691640b22160376fea4e48cb2e3c611ad9e579b5b21461692c8cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_85a5c76dbdc691640b22160376fea4e48cb2e3c611ad9e579b5b21461692c8cb->leave($__internal_85a5c76dbdc691640b22160376fea4e48cb2e3c611ad9e579b5b21461692c8cb_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
