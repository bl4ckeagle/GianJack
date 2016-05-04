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
        $__internal_f927658d9555f752db3ea37c88e8fc9f5def41a69cdad004ee7da7774dbfbc7e = $this->env->getExtension("native_profiler");
        $__internal_f927658d9555f752db3ea37c88e8fc9f5def41a69cdad004ee7da7774dbfbc7e->enter($__internal_f927658d9555f752db3ea37c88e8fc9f5def41a69cdad004ee7da7774dbfbc7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_f927658d9555f752db3ea37c88e8fc9f5def41a69cdad004ee7da7774dbfbc7e->leave($__internal_f927658d9555f752db3ea37c88e8fc9f5def41a69cdad004ee7da7774dbfbc7e_prof);

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
