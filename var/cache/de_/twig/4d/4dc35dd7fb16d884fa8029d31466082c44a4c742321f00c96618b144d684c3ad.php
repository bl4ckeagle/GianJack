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
        $__internal_460609a9fc7023d11943253ef05483e9bff71a0995e9097f21ea809b3d4f1467 = $this->env->getExtension("native_profiler");
        $__internal_460609a9fc7023d11943253ef05483e9bff71a0995e9097f21ea809b3d4f1467->enter($__internal_460609a9fc7023d11943253ef05483e9bff71a0995e9097f21ea809b3d4f1467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_460609a9fc7023d11943253ef05483e9bff71a0995e9097f21ea809b3d4f1467->leave($__internal_460609a9fc7023d11943253ef05483e9bff71a0995e9097f21ea809b3d4f1467_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_737a4d5b95b724092bba4167dd43db90687de6ff87195b9a5a298a64be571c34 = $this->env->getExtension("native_profiler");
        $__internal_737a4d5b95b724092bba4167dd43db90687de6ff87195b9a5a298a64be571c34->enter($__internal_737a4d5b95b724092bba4167dd43db90687de6ff87195b9a5a298a64be571c34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_737a4d5b95b724092bba4167dd43db90687de6ff87195b9a5a298a64be571c34->leave($__internal_737a4d5b95b724092bba4167dd43db90687de6ff87195b9a5a298a64be571c34_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_91877880903defcfaf3a70ca865bd56a9ae8aa5c595bb9d22ab41cc4ff8614dc = $this->env->getExtension("native_profiler");
        $__internal_91877880903defcfaf3a70ca865bd56a9ae8aa5c595bb9d22ab41cc4ff8614dc->enter($__internal_91877880903defcfaf3a70ca865bd56a9ae8aa5c595bb9d22ab41cc4ff8614dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_91877880903defcfaf3a70ca865bd56a9ae8aa5c595bb9d22ab41cc4ff8614dc->leave($__internal_91877880903defcfaf3a70ca865bd56a9ae8aa5c595bb9d22ab41cc4ff8614dc_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8d6490f022eba977126c22e8803cb2302fdad23a36b680f2b2991122fc8dad63 = $this->env->getExtension("native_profiler");
        $__internal_8d6490f022eba977126c22e8803cb2302fdad23a36b680f2b2991122fc8dad63->enter($__internal_8d6490f022eba977126c22e8803cb2302fdad23a36b680f2b2991122fc8dad63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8d6490f022eba977126c22e8803cb2302fdad23a36b680f2b2991122fc8dad63->leave($__internal_8d6490f022eba977126c22e8803cb2302fdad23a36b680f2b2991122fc8dad63_prof);

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
