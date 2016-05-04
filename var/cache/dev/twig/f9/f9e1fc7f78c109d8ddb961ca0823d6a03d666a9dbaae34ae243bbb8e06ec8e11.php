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
        $__internal_06927092ceb9eb1c13095c2a00bc70a1351fc430a2a688fade9b08635c75e303 = $this->env->getExtension("native_profiler");
        $__internal_06927092ceb9eb1c13095c2a00bc70a1351fc430a2a688fade9b08635c75e303->enter($__internal_06927092ceb9eb1c13095c2a00bc70a1351fc430a2a688fade9b08635c75e303_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06927092ceb9eb1c13095c2a00bc70a1351fc430a2a688fade9b08635c75e303->leave($__internal_06927092ceb9eb1c13095c2a00bc70a1351fc430a2a688fade9b08635c75e303_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e2f7c5410a11977963f4828ea0775f927ee3de0a77f5473abba5cf48cfa85e64 = $this->env->getExtension("native_profiler");
        $__internal_e2f7c5410a11977963f4828ea0775f927ee3de0a77f5473abba5cf48cfa85e64->enter($__internal_e2f7c5410a11977963f4828ea0775f927ee3de0a77f5473abba5cf48cfa85e64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Home";
        
        $__internal_e2f7c5410a11977963f4828ea0775f927ee3de0a77f5473abba5cf48cfa85e64->leave($__internal_e2f7c5410a11977963f4828ea0775f927ee3de0a77f5473abba5cf48cfa85e64_prof);

    }

    // line 5
    public function block_sidebarcontent($context, array $blocks = array())
    {
        $__internal_c5c45afc8a81feb870a9ef3740d9ae83d9fb5e5b7b14d05024c185047c52a010 = $this->env->getExtension("native_profiler");
        $__internal_c5c45afc8a81feb870a9ef3740d9ae83d9fb5e5b7b14d05024c185047c52a010->enter($__internal_c5c45afc8a81feb870a9ef3740d9ae83d9fb5e5b7b14d05024c185047c52a010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebarcontent"));

        // line 6
        echo "
    ";
        // line 7
        echo $this->env->getExtension('dump')->dump($this->env, $context);
        echo "

";
        
        $__internal_c5c45afc8a81feb870a9ef3740d9ae83d9fb5e5b7b14d05024c185047c52a010->leave($__internal_c5c45afc8a81feb870a9ef3740d9ae83d9fb5e5b7b14d05024c185047c52a010_prof);

    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        $__internal_5e9616d22da6f4b806d00ef1e9339c147b1cd337c7ae032085b1a3f73fad5d2e = $this->env->getExtension("native_profiler");
        $__internal_5e9616d22da6f4b806d00ef1e9339c147b1cd337c7ae032085b1a3f73fad5d2e->enter($__internal_5e9616d22da6f4b806d00ef1e9339c147b1cd337c7ae032085b1a3f73fad5d2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_5e9616d22da6f4b806d00ef1e9339c147b1cd337c7ae032085b1a3f73fad5d2e->leave($__internal_5e9616d22da6f4b806d00ef1e9339c147b1cd337c7ae032085b1a3f73fad5d2e_prof);

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
