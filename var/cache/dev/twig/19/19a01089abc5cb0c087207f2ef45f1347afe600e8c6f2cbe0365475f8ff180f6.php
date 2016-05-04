<?php

/* lucky/lucky.html.twig */
class __TwigTemplate_e09c2107f84cc27268e9888d90ecc11ef2302ad5d8a5d550c578a97f97c6e2d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BaseTemplate1.html.twig", "lucky/lucky.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BaseTemplate1.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_916271fbcbd9e30164cd23713de357814a4719a253bb1cb64a68acd82ef58ce5 = $this->env->getExtension("native_profiler");
        $__internal_916271fbcbd9e30164cd23713de357814a4719a253bb1cb64a68acd82ef58ce5->enter($__internal_916271fbcbd9e30164cd23713de357814a4719a253bb1cb64a68acd82ef58ce5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "lucky/lucky.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_916271fbcbd9e30164cd23713de357814a4719a253bb1cb64a68acd82ef58ce5->leave($__internal_916271fbcbd9e30164cd23713de357814a4719a253bb1cb64a68acd82ef58ce5_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_60e2255dd93db28c4b1d65554ce9d4aec9cdf8344231ae8797a3d8c4a113eb6e = $this->env->getExtension("native_profiler");
        $__internal_60e2255dd93db28c4b1d65554ce9d4aec9cdf8344231ae8797a3d8c4a113eb6e->enter($__internal_60e2255dd93db28c4b1d65554ce9d4aec9cdf8344231ae8797a3d8c4a113eb6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "

<h1>Lucky Number: ";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["lkk"]) ? $context["lkk"] : $this->getContext($context, "lkk")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["dkk"]) ? $context["dkk"] : $this->getContext($context, "dkk")), "html", null, true);
        echo " </h1>
";
        
        $__internal_60e2255dd93db28c4b1d65554ce9d4aec9cdf8344231ae8797a3d8c4a113eb6e->leave($__internal_60e2255dd93db28c4b1d65554ce9d4aec9cdf8344231ae8797a3d8c4a113eb6e_prof);

    }

    public function getTemplateName()
    {
        return "lucky/lucky.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 8,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends 'BaseTemplate1.html.twig'%}*/
/* */
/* */
/* */
/* {% block body%}*/
/* */
/* */
/* <h1>Lucky Number: {{ lkk }} {{ dkk }} </h1>*/
/* {% endblock %}*/
