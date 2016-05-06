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
        $__internal_1e03c3b77c14bdcf4df4f12989c23117972ce91d0a8c2865aeec777db35f303e = $this->env->getExtension("native_profiler");
        $__internal_1e03c3b77c14bdcf4df4f12989c23117972ce91d0a8c2865aeec777db35f303e->enter($__internal_1e03c3b77c14bdcf4df4f12989c23117972ce91d0a8c2865aeec777db35f303e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e03c3b77c14bdcf4df4f12989c23117972ce91d0a8c2865aeec777db35f303e->leave($__internal_1e03c3b77c14bdcf4df4f12989c23117972ce91d0a8c2865aeec777db35f303e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5f731e01feae61335c1b0874c1066ed432a5e72ff3c2237d1f33b386597976ab = $this->env->getExtension("native_profiler");
        $__internal_5f731e01feae61335c1b0874c1066ed432a5e72ff3c2237d1f33b386597976ab->enter($__internal_5f731e01feae61335c1b0874c1066ed432a5e72ff3c2237d1f33b386597976ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_5f731e01feae61335c1b0874c1066ed432a5e72ff3c2237d1f33b386597976ab->leave($__internal_5f731e01feae61335c1b0874c1066ed432a5e72ff3c2237d1f33b386597976ab_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f651191323f884151f00939a64ef6da4b941c4c8e90ca3af2ea92588690b329e = $this->env->getExtension("native_profiler");
        $__internal_f651191323f884151f00939a64ef6da4b941c4c8e90ca3af2ea92588690b329e->enter($__internal_f651191323f884151f00939a64ef6da4b941c4c8e90ca3af2ea92588690b329e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f651191323f884151f00939a64ef6da4b941c4c8e90ca3af2ea92588690b329e->leave($__internal_f651191323f884151f00939a64ef6da4b941c4c8e90ca3af2ea92588690b329e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_70c295e9ac94a9b50af90041fb90adaccf94f7babb11e792986ab3169e0ec62f = $this->env->getExtension("native_profiler");
        $__internal_70c295e9ac94a9b50af90041fb90adaccf94f7babb11e792986ab3169e0ec62f->enter($__internal_70c295e9ac94a9b50af90041fb90adaccf94f7babb11e792986ab3169e0ec62f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_70c295e9ac94a9b50af90041fb90adaccf94f7babb11e792986ab3169e0ec62f->leave($__internal_70c295e9ac94a9b50af90041fb90adaccf94f7babb11e792986ab3169e0ec62f_prof);

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
