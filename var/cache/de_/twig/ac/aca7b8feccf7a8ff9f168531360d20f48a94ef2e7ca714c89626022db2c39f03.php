<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_4c7068d5fc7dafef78566230e4c40aac8b87ba1f3704e57183089630a44a6d9b extends Twig_Template
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
        $__internal_7a0ffa1750085091f427ce2262bbea286f6dfdd3c23d3744533b8cf4a5dd8ae7 = $this->env->getExtension("native_profiler");
        $__internal_7a0ffa1750085091f427ce2262bbea286f6dfdd3c23d3744533b8cf4a5dd8ae7->enter($__internal_7a0ffa1750085091f427ce2262bbea286f6dfdd3c23d3744533b8cf4a5dd8ae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_7a0ffa1750085091f427ce2262bbea286f6dfdd3c23d3744533b8cf4a5dd8ae7->leave($__internal_7a0ffa1750085091f427ce2262bbea286f6dfdd3c23d3744533b8cf4a5dd8ae7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
