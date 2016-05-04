<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_c0a0cc33402163aefa747d893faad12ef41baae5f3e59efe50b82f602472449a extends Twig_Template
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
        $__internal_ac0aab87badd0c71aeb3f69011b3fe9a9367b4965096dde196fa73e0b380521d = $this->env->getExtension("native_profiler");
        $__internal_ac0aab87badd0c71aeb3f69011b3fe9a9367b4965096dde196fa73e0b380521d->enter($__internal_ac0aab87badd0c71aeb3f69011b3fe9a9367b4965096dde196fa73e0b380521d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_ac0aab87badd0c71aeb3f69011b3fe9a9367b4965096dde196fa73e0b380521d->leave($__internal_ac0aab87badd0c71aeb3f69011b3fe9a9367b4965096dde196fa73e0b380521d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
