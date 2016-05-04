<?php

/* :lucky:lucky.html.twig */
class __TwigTemplate_fb320a63c7efef1cedf08b7fef19e0a1f93f17d931045e4f5617780374c83fa8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BaseTemplate1.html.twig", ":lucky:lucky.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BaseTemplate1.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_94059366457de83ea7c6d1042cd160ca2cbbf34cacbe5e8f45531d949b818874 = $this->env->getExtension("native_profiler");
        $__internal_94059366457de83ea7c6d1042cd160ca2cbbf34cacbe5e8f45531d949b818874->enter($__internal_94059366457de83ea7c6d1042cd160ca2cbbf34cacbe5e8f45531d949b818874_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":lucky:lucky.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94059366457de83ea7c6d1042cd160ca2cbbf34cacbe5e8f45531d949b818874->leave($__internal_94059366457de83ea7c6d1042cd160ca2cbbf34cacbe5e8f45531d949b818874_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_effa21edd44aea6dd0cbb27f74b37da9949bcdde01cf7b21e1ec792c7488f456 = $this->env->getExtension("native_profiler");
        $__internal_effa21edd44aea6dd0cbb27f74b37da9949bcdde01cf7b21e1ec792c7488f456->enter($__internal_effa21edd44aea6dd0cbb27f74b37da9949bcdde01cf7b21e1ec792c7488f456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "

<h1>Lucky Number: ";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["lkk"]) ? $context["lkk"] : $this->getContext($context, "lkk")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["dkk"]) ? $context["dkk"] : $this->getContext($context, "dkk")), "html", null, true);
        echo " </h1>
";
        
        $__internal_effa21edd44aea6dd0cbb27f74b37da9949bcdde01cf7b21e1ec792c7488f456->leave($__internal_effa21edd44aea6dd0cbb27f74b37da9949bcdde01cf7b21e1ec792c7488f456_prof);

    }

    public function getTemplateName()
    {
        return ":lucky:lucky.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 8,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends 'BaseTemplate1.html.twig'%}*/
/* */
/* */
/* */
/* {% block body%}*/
/* */
/* */
/* <h1>Lucky Number: {{ lkk }} {{ dkk }} </h1>*/
/* {% endblock %}*/
