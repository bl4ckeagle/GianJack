<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_7384603d0315536337d4d932cfb8a74be764fdb1a7be34f1989b5e13e6e0d2a0 extends Twig_Template
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
        $__internal_29541630d05994ad0400606663dc7205e0b57e49022539636ffce3b83746de5c = $this->env->getExtension("native_profiler");
        $__internal_29541630d05994ad0400606663dc7205e0b57e49022539636ffce3b83746de5c->enter($__internal_29541630d05994ad0400606663dc7205e0b57e49022539636ffce3b83746de5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_29541630d05994ad0400606663dc7205e0b57e49022539636ffce3b83746de5c->leave($__internal_29541630d05994ad0400606663dc7205e0b57e49022539636ffce3b83746de5c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
