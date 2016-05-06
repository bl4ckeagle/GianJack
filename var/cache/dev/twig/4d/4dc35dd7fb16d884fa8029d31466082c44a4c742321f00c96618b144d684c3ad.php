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
        $__internal_f0d20d661ceb2c6c3a6f927691fc856fb99241fa091c91580d8d65917f0aaaad = $this->env->getExtension("native_profiler");
        $__internal_f0d20d661ceb2c6c3a6f927691fc856fb99241fa091c91580d8d65917f0aaaad->enter($__internal_f0d20d661ceb2c6c3a6f927691fc856fb99241fa091c91580d8d65917f0aaaad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0d20d661ceb2c6c3a6f927691fc856fb99241fa091c91580d8d65917f0aaaad->leave($__internal_f0d20d661ceb2c6c3a6f927691fc856fb99241fa091c91580d8d65917f0aaaad_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2560d632ec2fdd1f50928acade8b3aad0997a682c6e4804561fd13aa3b60951d = $this->env->getExtension("native_profiler");
        $__internal_2560d632ec2fdd1f50928acade8b3aad0997a682c6e4804561fd13aa3b60951d->enter($__internal_2560d632ec2fdd1f50928acade8b3aad0997a682c6e4804561fd13aa3b60951d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2560d632ec2fdd1f50928acade8b3aad0997a682c6e4804561fd13aa3b60951d->leave($__internal_2560d632ec2fdd1f50928acade8b3aad0997a682c6e4804561fd13aa3b60951d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1d965d5d80ffd3402fdb5f9d6783110fe9370ea0ca70fe72a11a92b0c4ddd28d = $this->env->getExtension("native_profiler");
        $__internal_1d965d5d80ffd3402fdb5f9d6783110fe9370ea0ca70fe72a11a92b0c4ddd28d->enter($__internal_1d965d5d80ffd3402fdb5f9d6783110fe9370ea0ca70fe72a11a92b0c4ddd28d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1d965d5d80ffd3402fdb5f9d6783110fe9370ea0ca70fe72a11a92b0c4ddd28d->leave($__internal_1d965d5d80ffd3402fdb5f9d6783110fe9370ea0ca70fe72a11a92b0c4ddd28d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_709d0368ae9013168133b826f32270fe5eecaea5f968c728f186af0baf166797 = $this->env->getExtension("native_profiler");
        $__internal_709d0368ae9013168133b826f32270fe5eecaea5f968c728f186af0baf166797->enter($__internal_709d0368ae9013168133b826f32270fe5eecaea5f968c728f186af0baf166797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_709d0368ae9013168133b826f32270fe5eecaea5f968c728f186af0baf166797->leave($__internal_709d0368ae9013168133b826f32270fe5eecaea5f968c728f186af0baf166797_prof);

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
