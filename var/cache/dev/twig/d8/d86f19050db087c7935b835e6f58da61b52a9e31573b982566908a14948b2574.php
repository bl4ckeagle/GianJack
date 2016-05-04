<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_45b5c0aa32b49fd5e69c888b3f96544f2ea617c48f4f8b9a0e72e75551dd89a4 extends Twig_Template
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
        $__internal_cd21e14a28dcd7d0553a4ccd19c1c108109f9e8dae7a1bc0cc7b798c00210958 = $this->env->getExtension("native_profiler");
        $__internal_cd21e14a28dcd7d0553a4ccd19c1c108109f9e8dae7a1bc0cc7b798c00210958->enter($__internal_cd21e14a28dcd7d0553a4ccd19c1c108109f9e8dae7a1bc0cc7b798c00210958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_cd21e14a28dcd7d0553a4ccd19c1c108109f9e8dae7a1bc0cc7b798c00210958->leave($__internal_cd21e14a28dcd7d0553a4ccd19c1c108109f9e8dae7a1bc0cc7b798c00210958_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
