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
        $__internal_f67fdfc5143fc925d43f67af405bd15c6fffc41edba19dc678cdbe70e5599037 = $this->env->getExtension("native_profiler");
        $__internal_f67fdfc5143fc925d43f67af405bd15c6fffc41edba19dc678cdbe70e5599037->enter($__internal_f67fdfc5143fc925d43f67af405bd15c6fffc41edba19dc678cdbe70e5599037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f67fdfc5143fc925d43f67af405bd15c6fffc41edba19dc678cdbe70e5599037->leave($__internal_f67fdfc5143fc925d43f67af405bd15c6fffc41edba19dc678cdbe70e5599037_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_19768b4e7183555b8fe78e4421f743d1ec7c272a530d2b03bd4051729f368587 = $this->env->getExtension("native_profiler");
        $__internal_19768b4e7183555b8fe78e4421f743d1ec7c272a530d2b03bd4051729f368587->enter($__internal_19768b4e7183555b8fe78e4421f743d1ec7c272a530d2b03bd4051729f368587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_19768b4e7183555b8fe78e4421f743d1ec7c272a530d2b03bd4051729f368587->leave($__internal_19768b4e7183555b8fe78e4421f743d1ec7c272a530d2b03bd4051729f368587_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a9459dc524588c2bba0bcab68f455beea4f34d5f553fe3a7ac92ee6be646c507 = $this->env->getExtension("native_profiler");
        $__internal_a9459dc524588c2bba0bcab68f455beea4f34d5f553fe3a7ac92ee6be646c507->enter($__internal_a9459dc524588c2bba0bcab68f455beea4f34d5f553fe3a7ac92ee6be646c507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a9459dc524588c2bba0bcab68f455beea4f34d5f553fe3a7ac92ee6be646c507->leave($__internal_a9459dc524588c2bba0bcab68f455beea4f34d5f553fe3a7ac92ee6be646c507_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_fe7540deb2851df315475d473c101be9a9c6387737f6aeca254016fd097ee55b = $this->env->getExtension("native_profiler");
        $__internal_fe7540deb2851df315475d473c101be9a9c6387737f6aeca254016fd097ee55b->enter($__internal_fe7540deb2851df315475d473c101be9a9c6387737f6aeca254016fd097ee55b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_fe7540deb2851df315475d473c101be9a9c6387737f6aeca254016fd097ee55b->leave($__internal_fe7540deb2851df315475d473c101be9a9c6387737f6aeca254016fd097ee55b_prof);

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
