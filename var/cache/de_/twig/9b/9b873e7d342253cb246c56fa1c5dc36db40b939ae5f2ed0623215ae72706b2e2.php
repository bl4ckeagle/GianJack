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
        $__internal_70dad74d08a58bd0ba243dd79defec7a1d2a9f758724c8adf1abbf2d33005559 = $this->env->getExtension("native_profiler");
        $__internal_70dad74d08a58bd0ba243dd79defec7a1d2a9f758724c8adf1abbf2d33005559->enter($__internal_70dad74d08a58bd0ba243dd79defec7a1d2a9f758724c8adf1abbf2d33005559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70dad74d08a58bd0ba243dd79defec7a1d2a9f758724c8adf1abbf2d33005559->leave($__internal_70dad74d08a58bd0ba243dd79defec7a1d2a9f758724c8adf1abbf2d33005559_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_92c66feb39efac66f86408bf7f4197ffe4460c3a6befad3df91d3f9b01c839be = $this->env->getExtension("native_profiler");
        $__internal_92c66feb39efac66f86408bf7f4197ffe4460c3a6befad3df91d3f9b01c839be->enter($__internal_92c66feb39efac66f86408bf7f4197ffe4460c3a6befad3df91d3f9b01c839be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_92c66feb39efac66f86408bf7f4197ffe4460c3a6befad3df91d3f9b01c839be->leave($__internal_92c66feb39efac66f86408bf7f4197ffe4460c3a6befad3df91d3f9b01c839be_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6db7dd346c68492b0b82130fd037793395c796fc6bf628cdeece8a79a6a4868b = $this->env->getExtension("native_profiler");
        $__internal_6db7dd346c68492b0b82130fd037793395c796fc6bf628cdeece8a79a6a4868b->enter($__internal_6db7dd346c68492b0b82130fd037793395c796fc6bf628cdeece8a79a6a4868b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6db7dd346c68492b0b82130fd037793395c796fc6bf628cdeece8a79a6a4868b->leave($__internal_6db7dd346c68492b0b82130fd037793395c796fc6bf628cdeece8a79a6a4868b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f200beea36d4eb18cce0eec91fc15b65b7901f5c37ca9c06cbc29923ac8b258c = $this->env->getExtension("native_profiler");
        $__internal_f200beea36d4eb18cce0eec91fc15b65b7901f5c37ca9c06cbc29923ac8b258c->enter($__internal_f200beea36d4eb18cce0eec91fc15b65b7901f5c37ca9c06cbc29923ac8b258c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_f200beea36d4eb18cce0eec91fc15b65b7901f5c37ca9c06cbc29923ac8b258c->leave($__internal_f200beea36d4eb18cce0eec91fc15b65b7901f5c37ca9c06cbc29923ac8b258c_prof);

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
