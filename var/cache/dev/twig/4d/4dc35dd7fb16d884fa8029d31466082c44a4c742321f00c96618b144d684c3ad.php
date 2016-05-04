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
        $__internal_0a7eccf463231b0022c4877f15f85a677dafd08a07486e9df79aba9631e3d917 = $this->env->getExtension("native_profiler");
        $__internal_0a7eccf463231b0022c4877f15f85a677dafd08a07486e9df79aba9631e3d917->enter($__internal_0a7eccf463231b0022c4877f15f85a677dafd08a07486e9df79aba9631e3d917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a7eccf463231b0022c4877f15f85a677dafd08a07486e9df79aba9631e3d917->leave($__internal_0a7eccf463231b0022c4877f15f85a677dafd08a07486e9df79aba9631e3d917_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7db8e6c8cc2b2c30533738b83cf11e2740a56946d29fc6da76d6d1c735936203 = $this->env->getExtension("native_profiler");
        $__internal_7db8e6c8cc2b2c30533738b83cf11e2740a56946d29fc6da76d6d1c735936203->enter($__internal_7db8e6c8cc2b2c30533738b83cf11e2740a56946d29fc6da76d6d1c735936203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7db8e6c8cc2b2c30533738b83cf11e2740a56946d29fc6da76d6d1c735936203->leave($__internal_7db8e6c8cc2b2c30533738b83cf11e2740a56946d29fc6da76d6d1c735936203_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6d00576d4e1b5ff17fc39339718f5a62d4ce8b18281cf7b7a894402630bed612 = $this->env->getExtension("native_profiler");
        $__internal_6d00576d4e1b5ff17fc39339718f5a62d4ce8b18281cf7b7a894402630bed612->enter($__internal_6d00576d4e1b5ff17fc39339718f5a62d4ce8b18281cf7b7a894402630bed612_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6d00576d4e1b5ff17fc39339718f5a62d4ce8b18281cf7b7a894402630bed612->leave($__internal_6d00576d4e1b5ff17fc39339718f5a62d4ce8b18281cf7b7a894402630bed612_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a1cf1bb5ae90ef092c1a501910d8758bc817b2ff149a5490225205196a12103e = $this->env->getExtension("native_profiler");
        $__internal_a1cf1bb5ae90ef092c1a501910d8758bc817b2ff149a5490225205196a12103e->enter($__internal_a1cf1bb5ae90ef092c1a501910d8758bc817b2ff149a5490225205196a12103e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a1cf1bb5ae90ef092c1a501910d8758bc817b2ff149a5490225205196a12103e->leave($__internal_a1cf1bb5ae90ef092c1a501910d8758bc817b2ff149a5490225205196a12103e_prof);

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
