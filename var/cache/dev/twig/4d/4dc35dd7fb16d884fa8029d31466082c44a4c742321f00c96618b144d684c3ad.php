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
        $__internal_9986e89f5fc3e0069814c61e084b0bb672ea50d602170dceb543af48f2f6c04c = $this->env->getExtension("native_profiler");
        $__internal_9986e89f5fc3e0069814c61e084b0bb672ea50d602170dceb543af48f2f6c04c->enter($__internal_9986e89f5fc3e0069814c61e084b0bb672ea50d602170dceb543af48f2f6c04c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9986e89f5fc3e0069814c61e084b0bb672ea50d602170dceb543af48f2f6c04c->leave($__internal_9986e89f5fc3e0069814c61e084b0bb672ea50d602170dceb543af48f2f6c04c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_78a1d1821b91a78f44b95753da89510967e3697c4dcdfe4204ca0de5a695fbf3 = $this->env->getExtension("native_profiler");
        $__internal_78a1d1821b91a78f44b95753da89510967e3697c4dcdfe4204ca0de5a695fbf3->enter($__internal_78a1d1821b91a78f44b95753da89510967e3697c4dcdfe4204ca0de5a695fbf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_78a1d1821b91a78f44b95753da89510967e3697c4dcdfe4204ca0de5a695fbf3->leave($__internal_78a1d1821b91a78f44b95753da89510967e3697c4dcdfe4204ca0de5a695fbf3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e1752c24feaf06ff9c81d5fb3383c72fad23994414719a41569465a93bcc0fa5 = $this->env->getExtension("native_profiler");
        $__internal_e1752c24feaf06ff9c81d5fb3383c72fad23994414719a41569465a93bcc0fa5->enter($__internal_e1752c24feaf06ff9c81d5fb3383c72fad23994414719a41569465a93bcc0fa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e1752c24feaf06ff9c81d5fb3383c72fad23994414719a41569465a93bcc0fa5->leave($__internal_e1752c24feaf06ff9c81d5fb3383c72fad23994414719a41569465a93bcc0fa5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ac82563316457b4534fcacb03529599fc3da80a76e9540d00b07b8b7e24c5dac = $this->env->getExtension("native_profiler");
        $__internal_ac82563316457b4534fcacb03529599fc3da80a76e9540d00b07b8b7e24c5dac->enter($__internal_ac82563316457b4534fcacb03529599fc3da80a76e9540d00b07b8b7e24c5dac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ac82563316457b4534fcacb03529599fc3da80a76e9540d00b07b8b7e24c5dac->leave($__internal_ac82563316457b4534fcacb03529599fc3da80a76e9540d00b07b8b7e24c5dac_prof);

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
