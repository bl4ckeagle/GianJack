<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_9398aa3bbf68f41d0b5e2c7967b7e52f4a3188d482b44e4da095b69366f4230a extends Twig_Template
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
        $__internal_91d2f7f339fcd6c08efcfa133d8c8dcabaade188a26bce4fda899dc103b5951a = $this->env->getExtension("native_profiler");
        $__internal_91d2f7f339fcd6c08efcfa133d8c8dcabaade188a26bce4fda899dc103b5951a->enter($__internal_91d2f7f339fcd6c08efcfa133d8c8dcabaade188a26bce4fda899dc103b5951a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

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
        
        $__internal_91d2f7f339fcd6c08efcfa133d8c8dcabaade188a26bce4fda899dc103b5951a->leave($__internal_91d2f7f339fcd6c08efcfa133d8c8dcabaade188a26bce4fda899dc103b5951a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
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
