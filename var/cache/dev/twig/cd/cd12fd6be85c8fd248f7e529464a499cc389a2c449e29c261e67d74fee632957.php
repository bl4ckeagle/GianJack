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
        $__internal_e3683073e62de7e8d7328dce7d67bb3f1fc0d34ac2b8e0be89adef6716a6dfdc = $this->env->getExtension("native_profiler");
        $__internal_e3683073e62de7e8d7328dce7d67bb3f1fc0d34ac2b8e0be89adef6716a6dfdc->enter($__internal_e3683073e62de7e8d7328dce7d67bb3f1fc0d34ac2b8e0be89adef6716a6dfdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e3683073e62de7e8d7328dce7d67bb3f1fc0d34ac2b8e0be89adef6716a6dfdc->leave($__internal_e3683073e62de7e8d7328dce7d67bb3f1fc0d34ac2b8e0be89adef6716a6dfdc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2149ee0c0b22a080f9f543396a712a2c3ec41aa05558e550c05e72f1c86f708a = $this->env->getExtension("native_profiler");
        $__internal_2149ee0c0b22a080f9f543396a712a2c3ec41aa05558e550c05e72f1c86f708a->enter($__internal_2149ee0c0b22a080f9f543396a712a2c3ec41aa05558e550c05e72f1c86f708a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2149ee0c0b22a080f9f543396a712a2c3ec41aa05558e550c05e72f1c86f708a->leave($__internal_2149ee0c0b22a080f9f543396a712a2c3ec41aa05558e550c05e72f1c86f708a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_170a8e7f8c7a704096e4cf4e6bdc2809bd40c45b7b4da9841380a6a0599fa0c2 = $this->env->getExtension("native_profiler");
        $__internal_170a8e7f8c7a704096e4cf4e6bdc2809bd40c45b7b4da9841380a6a0599fa0c2->enter($__internal_170a8e7f8c7a704096e4cf4e6bdc2809bd40c45b7b4da9841380a6a0599fa0c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_170a8e7f8c7a704096e4cf4e6bdc2809bd40c45b7b4da9841380a6a0599fa0c2->leave($__internal_170a8e7f8c7a704096e4cf4e6bdc2809bd40c45b7b4da9841380a6a0599fa0c2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_22777f700d2ee30ade5572825aa6aeba09e0b670482d2b2e2ff409dfb40964cf = $this->env->getExtension("native_profiler");
        $__internal_22777f700d2ee30ade5572825aa6aeba09e0b670482d2b2e2ff409dfb40964cf->enter($__internal_22777f700d2ee30ade5572825aa6aeba09e0b670482d2b2e2ff409dfb40964cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_22777f700d2ee30ade5572825aa6aeba09e0b670482d2b2e2ff409dfb40964cf->leave($__internal_22777f700d2ee30ade5572825aa6aeba09e0b670482d2b2e2ff409dfb40964cf_prof);

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
