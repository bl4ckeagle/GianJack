<?php

/* default/index.html.twig */
class __TwigTemplate_f4fdb1aa9b19b920a08d205539d8000f0fb79c07ab9d7375e93ae4c9ca8f99ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BaseTemplate1.html.twig ", "default/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'sidebarcontent' => array($this, 'block_sidebarcontent'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BaseTemplate1.html.twig ";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f292d05e011d5c2e75f540a755a3ba7cf201b79ba58ce441d281aeaca88b4b5e = $this->env->getExtension("native_profiler");
        $__internal_f292d05e011d5c2e75f540a755a3ba7cf201b79ba58ce441d281aeaca88b4b5e->enter($__internal_f292d05e011d5c2e75f540a755a3ba7cf201b79ba58ce441d281aeaca88b4b5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f292d05e011d5c2e75f540a755a3ba7cf201b79ba58ce441d281aeaca88b4b5e->leave($__internal_f292d05e011d5c2e75f540a755a3ba7cf201b79ba58ce441d281aeaca88b4b5e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_18b31455915554f390a653416ad9f5bbb4185ed12989548093f6d6d25a589081 = $this->env->getExtension("native_profiler");
        $__internal_18b31455915554f390a653416ad9f5bbb4185ed12989548093f6d6d25a589081->enter($__internal_18b31455915554f390a653416ad9f5bbb4185ed12989548093f6d6d25a589081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Home";
        
        $__internal_18b31455915554f390a653416ad9f5bbb4185ed12989548093f6d6d25a589081->leave($__internal_18b31455915554f390a653416ad9f5bbb4185ed12989548093f6d6d25a589081_prof);

    }

    // line 5
    public function block_sidebarcontent($context, array $blocks = array())
    {
        $__internal_79912254e832602cfe195d9605eac4bf8013962cf735190884cf8e694b62a3aa = $this->env->getExtension("native_profiler");
        $__internal_79912254e832602cfe195d9605eac4bf8013962cf735190884cf8e694b62a3aa->enter($__internal_79912254e832602cfe195d9605eac4bf8013962cf735190884cf8e694b62a3aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebarcontent"));

        // line 6
        echo "
    ";
        // line 7
        echo $this->env->getExtension('dump')->dump($this->env, $context);
        echo "

";
        
        $__internal_79912254e832602cfe195d9605eac4bf8013962cf735190884cf8e694b62a3aa->leave($__internal_79912254e832602cfe195d9605eac4bf8013962cf735190884cf8e694b62a3aa_prof);

    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        $__internal_7ed02be1867ab3fcff6ca20e7e4a2dd6e3f8d4d9cb3f64b8417c5ff93ad1f82b = $this->env->getExtension("native_profiler");
        $__internal_7ed02be1867ab3fcff6ca20e7e4a2dd6e3f8d4d9cb3f64b8417c5ff93ad1f82b->enter($__internal_7ed02be1867ab3fcff6ca20e7e4a2dd6e3f8d4d9cb3f64b8417c5ff93ad1f82b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 11
        echo "
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["homecontent"]) ? $context["homecontent"] : $this->getContext($context, "homecontent")));
        foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
            // line 13
            echo "


        <div class=\"homecontent\">
            <div class=\"jumbotron\">
        <img class=\"img\" src=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/images/News/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["content"], "picturePath", array()), "html", null, true);
            echo "\" > </img>

                <h1>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["content"], "title", array()), "html", null, true);
            echo "</h1>
                <p>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["content"], "content", array()), "html", null, true);
            echo "</p>
                <small class=\"text-right\">";
            // line 22
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["content"], "date", array()), "d.m.Y"), "html", null, true);
            echo "</small>
            </div>
    </div>
    
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['content'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "

";
        
        $__internal_7ed02be1867ab3fcff6ca20e7e4a2dd6e3f8d4d9cb3f64b8417c5ff93ad1f82b->leave($__internal_7ed02be1867ab3fcff6ca20e7e4a2dd6e3f8d4d9cb3f64b8417c5ff93ad1f82b_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 27,  101 => 22,  97 => 21,  93 => 20,  87 => 18,  80 => 13,  76 => 12,  73 => 11,  67 => 10,  57 => 7,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'BaseTemplate1.html.twig ' %}*/
/* */
/* {% block title %}Home{% endblock %}*/
/* */
/* {% block sidebarcontent %}*/
/* */
/*     {{ dump() }}*/
/* */
/* {% endblock %}*/
/* {% block content %}*/
/* */
/*     {% for content in homecontent %}*/
/* */
/* */
/* */
/*         <div class="homecontent">*/
/*             <div class="jumbotron">*/
/*         <img class="img" src="{{ asset('bundles/framework/images/News/') }}{{ content.picturePath}}" > </img>*/
/* */
/*                 <h1>{{ content.title }}</h1>*/
/*                 <p>{{ content.content }}</p>*/
/*                 <small class="text-right">{{ content.date|date('d.m.Y') }}</small>*/
/*             </div>*/
/*     </div>*/
/*     */
/*     {% endfor %}*/
/* */
/* */
/* {% endblock %}*/
