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
        $__internal_4e714b6ca95223b939f9733d4e90472979c0915d13f6109c802227b9ba78aff9 = $this->env->getExtension("native_profiler");
        $__internal_4e714b6ca95223b939f9733d4e90472979c0915d13f6109c802227b9ba78aff9->enter($__internal_4e714b6ca95223b939f9733d4e90472979c0915d13f6109c802227b9ba78aff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e714b6ca95223b939f9733d4e90472979c0915d13f6109c802227b9ba78aff9->leave($__internal_4e714b6ca95223b939f9733d4e90472979c0915d13f6109c802227b9ba78aff9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_aa57ef0dcb2fcc3054de3f1d9dd7cb40166c1adfc2e88d56a528c9b3c357fc9c = $this->env->getExtension("native_profiler");
        $__internal_aa57ef0dcb2fcc3054de3f1d9dd7cb40166c1adfc2e88d56a528c9b3c357fc9c->enter($__internal_aa57ef0dcb2fcc3054de3f1d9dd7cb40166c1adfc2e88d56a528c9b3c357fc9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Home";
        
        $__internal_aa57ef0dcb2fcc3054de3f1d9dd7cb40166c1adfc2e88d56a528c9b3c357fc9c->leave($__internal_aa57ef0dcb2fcc3054de3f1d9dd7cb40166c1adfc2e88d56a528c9b3c357fc9c_prof);

    }

    // line 5
    public function block_sidebarcontent($context, array $blocks = array())
    {
        $__internal_7d962966af84ee07ef2cdb7d81745480a5fcb64770f02fa6da734be546760967 = $this->env->getExtension("native_profiler");
        $__internal_7d962966af84ee07ef2cdb7d81745480a5fcb64770f02fa6da734be546760967->enter($__internal_7d962966af84ee07ef2cdb7d81745480a5fcb64770f02fa6da734be546760967_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebarcontent"));

        // line 6
        echo "
    ";
        // line 7
        echo $this->env->getExtension('dump')->dump($this->env, $context);
        echo "

";
        
        $__internal_7d962966af84ee07ef2cdb7d81745480a5fcb64770f02fa6da734be546760967->leave($__internal_7d962966af84ee07ef2cdb7d81745480a5fcb64770f02fa6da734be546760967_prof);

    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        $__internal_1c83d18e033ea4d43963ed124b9dacd56ea9346d45936ac4a7c927ae4ae32903 = $this->env->getExtension("native_profiler");
        $__internal_1c83d18e033ea4d43963ed124b9dacd56ea9346d45936ac4a7c927ae4ae32903->enter($__internal_1c83d18e033ea4d43963ed124b9dacd56ea9346d45936ac4a7c927ae4ae32903_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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

                <p>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["content"], "title", array()), "html", null, true);
            echo "</p>
                <p>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["content"], "content", array()), "html", null, true);
            echo "</p>
                <p>";
            // line 22
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["content"], "date", array()), "d-m-Y"), "html", null, true);
            echo "</p>
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
        
        $__internal_1c83d18e033ea4d43963ed124b9dacd56ea9346d45936ac4a7c927ae4ae32903->leave($__internal_1c83d18e033ea4d43963ed124b9dacd56ea9346d45936ac4a7c927ae4ae32903_prof);

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
/*                 <p>{{ content.title }}</p>*/
/*                 <p>{{ content.content }}</p>*/
/*                 <p>{{ content.date|date('d-m-Y') }}</p>*/
/*             </div>*/
/*     </div>*/
/*     */
/*     {% endfor %}*/
/* */
/* */
/* {% endblock %}*/
