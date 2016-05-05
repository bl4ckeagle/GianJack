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
        $__internal_89df1e4a43d1174256387a287f11a2fa2b98ff0e1f01a7812ee5f8ad176a8eda = $this->env->getExtension("native_profiler");
        $__internal_89df1e4a43d1174256387a287f11a2fa2b98ff0e1f01a7812ee5f8ad176a8eda->enter($__internal_89df1e4a43d1174256387a287f11a2fa2b98ff0e1f01a7812ee5f8ad176a8eda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89df1e4a43d1174256387a287f11a2fa2b98ff0e1f01a7812ee5f8ad176a8eda->leave($__internal_89df1e4a43d1174256387a287f11a2fa2b98ff0e1f01a7812ee5f8ad176a8eda_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d175f2f031169f6a4db85ad1f035e9ad33784176f4961ff464db61f94dc217cf = $this->env->getExtension("native_profiler");
        $__internal_d175f2f031169f6a4db85ad1f035e9ad33784176f4961ff464db61f94dc217cf->enter($__internal_d175f2f031169f6a4db85ad1f035e9ad33784176f4961ff464db61f94dc217cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d175f2f031169f6a4db85ad1f035e9ad33784176f4961ff464db61f94dc217cf->leave($__internal_d175f2f031169f6a4db85ad1f035e9ad33784176f4961ff464db61f94dc217cf_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_10ba65b0790d7a4deccb61899371e8b2adafd3159379c81f3c72c72673c97405 = $this->env->getExtension("native_profiler");
        $__internal_10ba65b0790d7a4deccb61899371e8b2adafd3159379c81f3c72c72673c97405->enter($__internal_10ba65b0790d7a4deccb61899371e8b2adafd3159379c81f3c72c72673c97405_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_10ba65b0790d7a4deccb61899371e8b2adafd3159379c81f3c72c72673c97405->leave($__internal_10ba65b0790d7a4deccb61899371e8b2adafd3159379c81f3c72c72673c97405_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_72eac6e0a4ad6a4de1b1fbd5930526661aa0189bd8f6dead037acd20b8fcb3fb = $this->env->getExtension("native_profiler");
        $__internal_72eac6e0a4ad6a4de1b1fbd5930526661aa0189bd8f6dead037acd20b8fcb3fb->enter($__internal_72eac6e0a4ad6a4de1b1fbd5930526661aa0189bd8f6dead037acd20b8fcb3fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_72eac6e0a4ad6a4de1b1fbd5930526661aa0189bd8f6dead037acd20b8fcb3fb->leave($__internal_72eac6e0a4ad6a4de1b1fbd5930526661aa0189bd8f6dead037acd20b8fcb3fb_prof);

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
