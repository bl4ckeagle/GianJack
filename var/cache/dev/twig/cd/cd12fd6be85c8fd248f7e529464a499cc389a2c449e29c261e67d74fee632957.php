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
        $__internal_b9039ef68c2304e4e2c690e23e8afd2f3cac40aa7495100d25430e61af1aed88 = $this->env->getExtension("native_profiler");
        $__internal_b9039ef68c2304e4e2c690e23e8afd2f3cac40aa7495100d25430e61af1aed88->enter($__internal_b9039ef68c2304e4e2c690e23e8afd2f3cac40aa7495100d25430e61af1aed88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9039ef68c2304e4e2c690e23e8afd2f3cac40aa7495100d25430e61af1aed88->leave($__internal_b9039ef68c2304e4e2c690e23e8afd2f3cac40aa7495100d25430e61af1aed88_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0dbeccf30ff5055de69ef65207b0867fc6a3a76d5deddce02ea4e0127b589d43 = $this->env->getExtension("native_profiler");
        $__internal_0dbeccf30ff5055de69ef65207b0867fc6a3a76d5deddce02ea4e0127b589d43->enter($__internal_0dbeccf30ff5055de69ef65207b0867fc6a3a76d5deddce02ea4e0127b589d43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0dbeccf30ff5055de69ef65207b0867fc6a3a76d5deddce02ea4e0127b589d43->leave($__internal_0dbeccf30ff5055de69ef65207b0867fc6a3a76d5deddce02ea4e0127b589d43_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2c2a977037d5e2e899bda2b7e1640f78f385ac84e5db2e8428b645511fbec7a7 = $this->env->getExtension("native_profiler");
        $__internal_2c2a977037d5e2e899bda2b7e1640f78f385ac84e5db2e8428b645511fbec7a7->enter($__internal_2c2a977037d5e2e899bda2b7e1640f78f385ac84e5db2e8428b645511fbec7a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2c2a977037d5e2e899bda2b7e1640f78f385ac84e5db2e8428b645511fbec7a7->leave($__internal_2c2a977037d5e2e899bda2b7e1640f78f385ac84e5db2e8428b645511fbec7a7_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_bdbde6a50c125c5cffd0502d6e74ff998b6e0f70bdc2be9837686f02d2f57d07 = $this->env->getExtension("native_profiler");
        $__internal_bdbde6a50c125c5cffd0502d6e74ff998b6e0f70bdc2be9837686f02d2f57d07->enter($__internal_bdbde6a50c125c5cffd0502d6e74ff998b6e0f70bdc2be9837686f02d2f57d07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_bdbde6a50c125c5cffd0502d6e74ff998b6e0f70bdc2be9837686f02d2f57d07->leave($__internal_bdbde6a50c125c5cffd0502d6e74ff998b6e0f70bdc2be9837686f02d2f57d07_prof);

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
