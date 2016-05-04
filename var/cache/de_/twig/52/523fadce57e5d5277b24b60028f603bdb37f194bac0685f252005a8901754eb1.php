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
        $__internal_7e3c8999356e19c67bf09fe7e9ecd1e1c882e83fdd8595121f78368b3a7474e9 = $this->env->getExtension("native_profiler");
        $__internal_7e3c8999356e19c67bf09fe7e9ecd1e1c882e83fdd8595121f78368b3a7474e9->enter($__internal_7e3c8999356e19c67bf09fe7e9ecd1e1c882e83fdd8595121f78368b3a7474e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_7e3c8999356e19c67bf09fe7e9ecd1e1c882e83fdd8595121f78368b3a7474e9->leave($__internal_7e3c8999356e19c67bf09fe7e9ecd1e1c882e83fdd8595121f78368b3a7474e9_prof);

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
