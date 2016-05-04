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
        $__internal_6bb44a4b19af55ad9b46adb79f2f30bbb4351126284ae149e4e5104e18cf8403 = $this->env->getExtension("native_profiler");
        $__internal_6bb44a4b19af55ad9b46adb79f2f30bbb4351126284ae149e4e5104e18cf8403->enter($__internal_6bb44a4b19af55ad9b46adb79f2f30bbb4351126284ae149e4e5104e18cf8403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_6bb44a4b19af55ad9b46adb79f2f30bbb4351126284ae149e4e5104e18cf8403->leave($__internal_6bb44a4b19af55ad9b46adb79f2f30bbb4351126284ae149e4e5104e18cf8403_prof);

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
