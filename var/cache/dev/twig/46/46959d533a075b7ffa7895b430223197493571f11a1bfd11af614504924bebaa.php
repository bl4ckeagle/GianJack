<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_49699c8104de899008e761d5d24afefb20eca6d9bbb626f52da2ea11fa749592 extends Twig_Template
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
        $__internal_1165c3ce06a7dea28578df65c3d025b638e965c6fb3c289ecdbf1c29aa9db332 = $this->env->getExtension("native_profiler");
        $__internal_1165c3ce06a7dea28578df65c3d025b638e965c6fb3c289ecdbf1c29aa9db332->enter($__internal_1165c3ce06a7dea28578df65c3d025b638e965c6fb3c289ecdbf1c29aa9db332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_1165c3ce06a7dea28578df65c3d025b638e965c6fb3c289ecdbf1c29aa9db332->leave($__internal_1165c3ce06a7dea28578df65c3d025b638e965c6fb3c289ecdbf1c29aa9db332_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
