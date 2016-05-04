<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_072fc199991aed8ff9e5cb5e6f54c7739b9902d58675a1871504e0eb3253973c extends Twig_Template
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
        $__internal_940b8dbf35f52a29b7d26c8eab9e21fcd346afa1fe3a2d0662457871b1d1830c = $this->env->getExtension("native_profiler");
        $__internal_940b8dbf35f52a29b7d26c8eab9e21fcd346afa1fe3a2d0662457871b1d1830c->enter($__internal_940b8dbf35f52a29b7d26c8eab9e21fcd346afa1fe3a2d0662457871b1d1830c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_940b8dbf35f52a29b7d26c8eab9e21fcd346afa1fe3a2d0662457871b1d1830c->leave($__internal_940b8dbf35f52a29b7d26c8eab9e21fcd346afa1fe3a2d0662457871b1d1830c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
