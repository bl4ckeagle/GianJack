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
        $__internal_c29ba0e7dba651189c9941c5b1887b43d5196f49b60befea3a786002956accea = $this->env->getExtension("native_profiler");
        $__internal_c29ba0e7dba651189c9941c5b1887b43d5196f49b60befea3a786002956accea->enter($__internal_c29ba0e7dba651189c9941c5b1887b43d5196f49b60befea3a786002956accea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c29ba0e7dba651189c9941c5b1887b43d5196f49b60befea3a786002956accea->leave($__internal_c29ba0e7dba651189c9941c5b1887b43d5196f49b60befea3a786002956accea_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8e7276a165f79868ec53c7e1badcc1f8ef267366e3087401d16c7eaacbef6bf6 = $this->env->getExtension("native_profiler");
        $__internal_8e7276a165f79868ec53c7e1badcc1f8ef267366e3087401d16c7eaacbef6bf6->enter($__internal_8e7276a165f79868ec53c7e1badcc1f8ef267366e3087401d16c7eaacbef6bf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8e7276a165f79868ec53c7e1badcc1f8ef267366e3087401d16c7eaacbef6bf6->leave($__internal_8e7276a165f79868ec53c7e1badcc1f8ef267366e3087401d16c7eaacbef6bf6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_419cfb841508c0e428138789c6b968357712416123765e9541d0bb456fa83d74 = $this->env->getExtension("native_profiler");
        $__internal_419cfb841508c0e428138789c6b968357712416123765e9541d0bb456fa83d74->enter($__internal_419cfb841508c0e428138789c6b968357712416123765e9541d0bb456fa83d74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_419cfb841508c0e428138789c6b968357712416123765e9541d0bb456fa83d74->leave($__internal_419cfb841508c0e428138789c6b968357712416123765e9541d0bb456fa83d74_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2b23760b3b5d54c92e7d221998d6f13a63e427011befcf42c517f13680132751 = $this->env->getExtension("native_profiler");
        $__internal_2b23760b3b5d54c92e7d221998d6f13a63e427011befcf42c517f13680132751->enter($__internal_2b23760b3b5d54c92e7d221998d6f13a63e427011befcf42c517f13680132751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2b23760b3b5d54c92e7d221998d6f13a63e427011befcf42c517f13680132751->leave($__internal_2b23760b3b5d54c92e7d221998d6f13a63e427011befcf42c517f13680132751_prof);

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
