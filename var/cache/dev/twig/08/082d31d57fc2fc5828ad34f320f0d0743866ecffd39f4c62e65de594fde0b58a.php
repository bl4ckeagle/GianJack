<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_c0a0cc33402163aefa747d893faad12ef41baae5f3e59efe50b82f602472449a extends Twig_Template
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
        $__internal_55a35ed10210e24b31ad56bbf870578a8417d1f30affcd0b19cbc408f365c776 = $this->env->getExtension("native_profiler");
        $__internal_55a35ed10210e24b31ad56bbf870578a8417d1f30affcd0b19cbc408f365c776->enter($__internal_55a35ed10210e24b31ad56bbf870578a8417d1f30affcd0b19cbc408f365c776_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_55a35ed10210e24b31ad56bbf870578a8417d1f30affcd0b19cbc408f365c776->leave($__internal_55a35ed10210e24b31ad56bbf870578a8417d1f30affcd0b19cbc408f365c776_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
