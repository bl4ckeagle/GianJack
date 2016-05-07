<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_cbc6fd961cfc4f719ad47da1db24c95c587b9432f25804ed725be15076b36ebe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9b91c856ab1677824e88b524dd70d8d09c5bf10dcf6d2f171ceb3530b3e0a641 = $this->env->getExtension("native_profiler");
        $__internal_9b91c856ab1677824e88b524dd70d8d09c5bf10dcf6d2f171ceb3530b3e0a641->enter($__internal_9b91c856ab1677824e88b524dd70d8d09c5bf10dcf6d2f171ceb3530b3e0a641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b91c856ab1677824e88b524dd70d8d09c5bf10dcf6d2f171ceb3530b3e0a641->leave($__internal_9b91c856ab1677824e88b524dd70d8d09c5bf10dcf6d2f171ceb3530b3e0a641_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c19227eb13810060512e488d55e007b85fcf62796997dd05e1b2280e5cd73859 = $this->env->getExtension("native_profiler");
        $__internal_c19227eb13810060512e488d55e007b85fcf62796997dd05e1b2280e5cd73859->enter($__internal_c19227eb13810060512e488d55e007b85fcf62796997dd05e1b2280e5cd73859_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c19227eb13810060512e488d55e007b85fcf62796997dd05e1b2280e5cd73859->leave($__internal_c19227eb13810060512e488d55e007b85fcf62796997dd05e1b2280e5cd73859_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d3ae5154bbeb10945814e247d4ec284010f2f5487b1fba6f4019392729a5d723 = $this->env->getExtension("native_profiler");
        $__internal_d3ae5154bbeb10945814e247d4ec284010f2f5487b1fba6f4019392729a5d723->enter($__internal_d3ae5154bbeb10945814e247d4ec284010f2f5487b1fba6f4019392729a5d723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d3ae5154bbeb10945814e247d4ec284010f2f5487b1fba6f4019392729a5d723->leave($__internal_d3ae5154bbeb10945814e247d4ec284010f2f5487b1fba6f4019392729a5d723_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_381be81f9063fff8184321555a124b8d0c0530fdb2cf24164f9a8908a86b826b = $this->env->getExtension("native_profiler");
        $__internal_381be81f9063fff8184321555a124b8d0c0530fdb2cf24164f9a8908a86b826b->enter($__internal_381be81f9063fff8184321555a124b8d0c0530fdb2cf24164f9a8908a86b826b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_381be81f9063fff8184321555a124b8d0c0530fdb2cf24164f9a8908a86b826b->leave($__internal_381be81f9063fff8184321555a124b8d0c0530fdb2cf24164f9a8908a86b826b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
