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
        $__internal_75fd9110bc46eb35e54448d3704b76de2fbdf3e906f9b8d017d9bfcb9846e10f = $this->env->getExtension("native_profiler");
        $__internal_75fd9110bc46eb35e54448d3704b76de2fbdf3e906f9b8d017d9bfcb9846e10f->enter($__internal_75fd9110bc46eb35e54448d3704b76de2fbdf3e906f9b8d017d9bfcb9846e10f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_75fd9110bc46eb35e54448d3704b76de2fbdf3e906f9b8d017d9bfcb9846e10f->leave($__internal_75fd9110bc46eb35e54448d3704b76de2fbdf3e906f9b8d017d9bfcb9846e10f_prof);

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
