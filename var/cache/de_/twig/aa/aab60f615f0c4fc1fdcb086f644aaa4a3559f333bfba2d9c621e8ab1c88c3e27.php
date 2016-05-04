<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_7d207e99911c34c403dd31b2029034a09cb29ba93bb43bd1fa9a7399adf53af7 extends Twig_Template
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
        $__internal_ccffe1fbcced9a7a013a660deaa40b3d13b4427871b3c45fe7b5618a3d8eb845 = $this->env->getExtension("native_profiler");
        $__internal_ccffe1fbcced9a7a013a660deaa40b3d13b4427871b3c45fe7b5618a3d8eb845->enter($__internal_ccffe1fbcced9a7a013a660deaa40b3d13b4427871b3c45fe7b5618a3d8eb845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_ccffe1fbcced9a7a013a660deaa40b3d13b4427871b3c45fe7b5618a3d8eb845->leave($__internal_ccffe1fbcced9a7a013a660deaa40b3d13b4427871b3c45fe7b5618a3d8eb845_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
