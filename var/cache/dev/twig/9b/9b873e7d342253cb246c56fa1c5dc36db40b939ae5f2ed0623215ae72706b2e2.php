<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_abf15db1ac0cbfe0b9184ae53e5f49eed5b63d51164d417c8b81c31d6f388384 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_74dfe0c5129be6cb009133205b2bde0f2928bcf4bac4f8a62547e49879c63894 = $this->env->getExtension("native_profiler");
        $__internal_74dfe0c5129be6cb009133205b2bde0f2928bcf4bac4f8a62547e49879c63894->enter($__internal_74dfe0c5129be6cb009133205b2bde0f2928bcf4bac4f8a62547e49879c63894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74dfe0c5129be6cb009133205b2bde0f2928bcf4bac4f8a62547e49879c63894->leave($__internal_74dfe0c5129be6cb009133205b2bde0f2928bcf4bac4f8a62547e49879c63894_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b77283eb4d4bc3ae2affcdba8ce5cc65c214f5cebfe042e465c77077b88b42e1 = $this->env->getExtension("native_profiler");
        $__internal_b77283eb4d4bc3ae2affcdba8ce5cc65c214f5cebfe042e465c77077b88b42e1->enter($__internal_b77283eb4d4bc3ae2affcdba8ce5cc65c214f5cebfe042e465c77077b88b42e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b77283eb4d4bc3ae2affcdba8ce5cc65c214f5cebfe042e465c77077b88b42e1->leave($__internal_b77283eb4d4bc3ae2affcdba8ce5cc65c214f5cebfe042e465c77077b88b42e1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5e57b1f039c844cf1bf1eedd8303d1de1b77485dff01d75c5f0a42de8e132fd1 = $this->env->getExtension("native_profiler");
        $__internal_5e57b1f039c844cf1bf1eedd8303d1de1b77485dff01d75c5f0a42de8e132fd1->enter($__internal_5e57b1f039c844cf1bf1eedd8303d1de1b77485dff01d75c5f0a42de8e132fd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5e57b1f039c844cf1bf1eedd8303d1de1b77485dff01d75c5f0a42de8e132fd1->leave($__internal_5e57b1f039c844cf1bf1eedd8303d1de1b77485dff01d75c5f0a42de8e132fd1_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_bce6f7513ac1d0f8edd4324787319629626f40d7ac497ec7c66dc0dc04d951a4 = $this->env->getExtension("native_profiler");
        $__internal_bce6f7513ac1d0f8edd4324787319629626f40d7ac497ec7c66dc0dc04d951a4->enter($__internal_bce6f7513ac1d0f8edd4324787319629626f40d7ac497ec7c66dc0dc04d951a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_bce6f7513ac1d0f8edd4324787319629626f40d7ac497ec7c66dc0dc04d951a4->leave($__internal_bce6f7513ac1d0f8edd4324787319629626f40d7ac497ec7c66dc0dc04d951a4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
