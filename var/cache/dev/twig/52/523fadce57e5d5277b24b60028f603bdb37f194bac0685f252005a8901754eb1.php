<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_93758b712b3bfac5ae13db651d21ddc70333b81e0d839f3bb7a4b69f137a6e81 extends Twig_Template
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
        $__internal_9cb8cc58ba0d80c2988dccea4c9a95c4e82a1524a12893c0b8ac9a0c3fd3b33d = $this->env->getExtension("native_profiler");
        $__internal_9cb8cc58ba0d80c2988dccea4c9a95c4e82a1524a12893c0b8ac9a0c3fd3b33d->enter($__internal_9cb8cc58ba0d80c2988dccea4c9a95c4e82a1524a12893c0b8ac9a0c3fd3b33d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_9cb8cc58ba0d80c2988dccea4c9a95c4e82a1524a12893c0b8ac9a0c3fd3b33d->leave($__internal_9cb8cc58ba0d80c2988dccea4c9a95c4e82a1524a12893c0b8ac9a0c3fd3b33d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
