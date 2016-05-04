<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_66fcb064429dcddac8647d457b8a8c6afa73a10979cce2c69a8013e7dcde4440 extends Twig_Template
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
        $__internal_580ffeb901b2789d1ddf0d67f5e40098983306a32c57dbd9612a482bc85c6de0 = $this->env->getExtension("native_profiler");
        $__internal_580ffeb901b2789d1ddf0d67f5e40098983306a32c57dbd9612a482bc85c6de0->enter($__internal_580ffeb901b2789d1ddf0d67f5e40098983306a32c57dbd9612a482bc85c6de0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_580ffeb901b2789d1ddf0d67f5e40098983306a32c57dbd9612a482bc85c6de0->leave($__internal_580ffeb901b2789d1ddf0d67f5e40098983306a32c57dbd9612a482bc85c6de0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
