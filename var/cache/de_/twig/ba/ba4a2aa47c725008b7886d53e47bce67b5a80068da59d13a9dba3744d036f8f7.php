<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_0a5a31962daa86248a484aef37f2f7a478a5ac5d7f60ebd9135574252e676067 extends Twig_Template
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
        $__internal_3f8bc746e2bfd951f44f15aea567bf739000285714dcf1f0d3937b6598b3b580 = $this->env->getExtension("native_profiler");
        $__internal_3f8bc746e2bfd951f44f15aea567bf739000285714dcf1f0d3937b6598b3b580->enter($__internal_3f8bc746e2bfd951f44f15aea567bf739000285714dcf1f0d3937b6598b3b580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_3f8bc746e2bfd951f44f15aea567bf739000285714dcf1f0d3937b6598b3b580->leave($__internal_3f8bc746e2bfd951f44f15aea567bf739000285714dcf1f0d3937b6598b3b580_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
