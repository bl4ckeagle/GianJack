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
        $__internal_1af1d2211f1d9663f8697ea74358ae6bf364cd527fcaf768bf8b2aa8f8900f46 = $this->env->getExtension("native_profiler");
        $__internal_1af1d2211f1d9663f8697ea74358ae6bf364cd527fcaf768bf8b2aa8f8900f46->enter($__internal_1af1d2211f1d9663f8697ea74358ae6bf364cd527fcaf768bf8b2aa8f8900f46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_1af1d2211f1d9663f8697ea74358ae6bf364cd527fcaf768bf8b2aa8f8900f46->leave($__internal_1af1d2211f1d9663f8697ea74358ae6bf364cd527fcaf768bf8b2aa8f8900f46_prof);

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
