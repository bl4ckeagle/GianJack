<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_000532692551d0eb919ccc439b4a19318f527376ca385f452e28a61b7c74b351 extends Twig_Template
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
        $__internal_2e21ee31cdc8e0d2f9ef075fee08ccb56c9c160bc896e22b745e2bc8b385fdee = $this->env->getExtension("native_profiler");
        $__internal_2e21ee31cdc8e0d2f9ef075fee08ccb56c9c160bc896e22b745e2bc8b385fdee->enter($__internal_2e21ee31cdc8e0d2f9ef075fee08ccb56c9c160bc896e22b745e2bc8b385fdee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_2e21ee31cdc8e0d2f9ef075fee08ccb56c9c160bc896e22b745e2bc8b385fdee->leave($__internal_2e21ee31cdc8e0d2f9ef075fee08ccb56c9c160bc896e22b745e2bc8b385fdee_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
