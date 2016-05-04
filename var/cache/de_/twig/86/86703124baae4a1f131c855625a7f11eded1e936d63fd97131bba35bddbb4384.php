<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_71be879113c699fac22fe2f09981c976f44e8b0a3736176010afd27abbba4afe extends Twig_Template
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
        $__internal_fb7f4dac38a81e8038116e824ca25840097e88341147b1c137702592bf507f91 = $this->env->getExtension("native_profiler");
        $__internal_fb7f4dac38a81e8038116e824ca25840097e88341147b1c137702592bf507f91->enter($__internal_fb7f4dac38a81e8038116e824ca25840097e88341147b1c137702592bf507f91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_fb7f4dac38a81e8038116e824ca25840097e88341147b1c137702592bf507f91->leave($__internal_fb7f4dac38a81e8038116e824ca25840097e88341147b1c137702592bf507f91_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
