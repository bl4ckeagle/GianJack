<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_dc66e64841048a5670816fecc8ed83c0c3fff34b9799eb3e4415c88aadf06923 extends Twig_Template
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
        $__internal_2c732ad6518de5748932aa851b9ccc7b48d9fe36d6cd5d5eed3e25422e358bd8 = $this->env->getExtension("native_profiler");
        $__internal_2c732ad6518de5748932aa851b9ccc7b48d9fe36d6cd5d5eed3e25422e358bd8->enter($__internal_2c732ad6518de5748932aa851b9ccc7b48d9fe36d6cd5d5eed3e25422e358bd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_2c732ad6518de5748932aa851b9ccc7b48d9fe36d6cd5d5eed3e25422e358bd8->leave($__internal_2c732ad6518de5748932aa851b9ccc7b48d9fe36d6cd5d5eed3e25422e358bd8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
