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
        $__internal_203bb1191b16f6095582a7b2135cc5d29568e7017b2c42650466fa1760f3993b = $this->env->getExtension("native_profiler");
        $__internal_203bb1191b16f6095582a7b2135cc5d29568e7017b2c42650466fa1760f3993b->enter($__internal_203bb1191b16f6095582a7b2135cc5d29568e7017b2c42650466fa1760f3993b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_203bb1191b16f6095582a7b2135cc5d29568e7017b2c42650466fa1760f3993b->leave($__internal_203bb1191b16f6095582a7b2135cc5d29568e7017b2c42650466fa1760f3993b_prof);

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
