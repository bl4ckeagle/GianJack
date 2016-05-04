<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_579c94461d66b1989c107d96439e497906f9c34b7f6700aec8cf0e9bf89a61e6 extends Twig_Template
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
        $__internal_801629f60e6985207e7141058cb2b8277fd32ce07f0b1c83c317f99ac273b849 = $this->env->getExtension("native_profiler");
        $__internal_801629f60e6985207e7141058cb2b8277fd32ce07f0b1c83c317f99ac273b849->enter($__internal_801629f60e6985207e7141058cb2b8277fd32ce07f0b1c83c317f99ac273b849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_801629f60e6985207e7141058cb2b8277fd32ce07f0b1c83c317f99ac273b849->leave($__internal_801629f60e6985207e7141058cb2b8277fd32ce07f0b1c83c317f99ac273b849_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
