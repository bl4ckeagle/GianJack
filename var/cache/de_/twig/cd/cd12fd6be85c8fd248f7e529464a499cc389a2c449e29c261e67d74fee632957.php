<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_7521f290d3ea15b1bc7210aaf164a730be275aee8dbb5f5e2a5be07cbdbe0b18 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d9323de90033535e4c14ab94077981a308d0a9e2e7461a294fe180a161da79ae = $this->env->getExtension("native_profiler");
        $__internal_d9323de90033535e4c14ab94077981a308d0a9e2e7461a294fe180a161da79ae->enter($__internal_d9323de90033535e4c14ab94077981a308d0a9e2e7461a294fe180a161da79ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9323de90033535e4c14ab94077981a308d0a9e2e7461a294fe180a161da79ae->leave($__internal_d9323de90033535e4c14ab94077981a308d0a9e2e7461a294fe180a161da79ae_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_32fd69535765cafca0ca7992379c94d21f50a002d433d799983856356e24cdfb = $this->env->getExtension("native_profiler");
        $__internal_32fd69535765cafca0ca7992379c94d21f50a002d433d799983856356e24cdfb->enter($__internal_32fd69535765cafca0ca7992379c94d21f50a002d433d799983856356e24cdfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_32fd69535765cafca0ca7992379c94d21f50a002d433d799983856356e24cdfb->leave($__internal_32fd69535765cafca0ca7992379c94d21f50a002d433d799983856356e24cdfb_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_60c56c48a3325e8dcaea4bbb80ad5870571f5759018e1aec8ae40d5bfc70b88e = $this->env->getExtension("native_profiler");
        $__internal_60c56c48a3325e8dcaea4bbb80ad5870571f5759018e1aec8ae40d5bfc70b88e->enter($__internal_60c56c48a3325e8dcaea4bbb80ad5870571f5759018e1aec8ae40d5bfc70b88e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_60c56c48a3325e8dcaea4bbb80ad5870571f5759018e1aec8ae40d5bfc70b88e->leave($__internal_60c56c48a3325e8dcaea4bbb80ad5870571f5759018e1aec8ae40d5bfc70b88e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_665908ae028798869bfe4d6aa87962bfef82efa3a8e360d050c731616118a9b2 = $this->env->getExtension("native_profiler");
        $__internal_665908ae028798869bfe4d6aa87962bfef82efa3a8e360d050c731616118a9b2->enter($__internal_665908ae028798869bfe4d6aa87962bfef82efa3a8e360d050c731616118a9b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_665908ae028798869bfe4d6aa87962bfef82efa3a8e360d050c731616118a9b2->leave($__internal_665908ae028798869bfe4d6aa87962bfef82efa3a8e360d050c731616118a9b2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
