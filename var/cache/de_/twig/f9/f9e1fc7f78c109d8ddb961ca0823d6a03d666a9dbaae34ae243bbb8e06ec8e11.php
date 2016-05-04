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
        $__internal_b856547c400c97cda168c441ccef563d44a9ca5185d3be5b9fb47257bb830d95 = $this->env->getExtension("native_profiler");
        $__internal_b856547c400c97cda168c441ccef563d44a9ca5185d3be5b9fb47257bb830d95->enter($__internal_b856547c400c97cda168c441ccef563d44a9ca5185d3be5b9fb47257bb830d95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b856547c400c97cda168c441ccef563d44a9ca5185d3be5b9fb47257bb830d95->leave($__internal_b856547c400c97cda168c441ccef563d44a9ca5185d3be5b9fb47257bb830d95_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3e8f77bffef31728febe0bdcc7af95bab06afffde76edd0395a2531bb0a4b479 = $this->env->getExtension("native_profiler");
        $__internal_3e8f77bffef31728febe0bdcc7af95bab06afffde76edd0395a2531bb0a4b479->enter($__internal_3e8f77bffef31728febe0bdcc7af95bab06afffde76edd0395a2531bb0a4b479_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Home";
        
        $__internal_3e8f77bffef31728febe0bdcc7af95bab06afffde76edd0395a2531bb0a4b479->leave($__internal_3e8f77bffef31728febe0bdcc7af95bab06afffde76edd0395a2531bb0a4b479_prof);

    }

    // line 5
    public function block_sidebarcontent($context, array $blocks = array())
    {
        $__internal_e9b83e8f887521f5d1a59caeacccc2692152f06204a1c82221490e883af114f5 = $this->env->getExtension("native_profiler");
        $__internal_e9b83e8f887521f5d1a59caeacccc2692152f06204a1c82221490e883af114f5->enter($__internal_e9b83e8f887521f5d1a59caeacccc2692152f06204a1c82221490e883af114f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebarcontent"));

        // line 6
        echo "
    ";
        // line 7
        echo $this->env->getExtension('dump')->dump($this->env, $context);
        echo "

";
        
        $__internal_e9b83e8f887521f5d1a59caeacccc2692152f06204a1c82221490e883af114f5->leave($__internal_e9b83e8f887521f5d1a59caeacccc2692152f06204a1c82221490e883af114f5_prof);

    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        $__internal_7065254dd07572d7c4b1c36feedf84ad77200a927bbfe2bb0f3b8904cd07fb1f = $this->env->getExtension("native_profiler");
        $__internal_7065254dd07572d7c4b1c36feedf84ad77200a927bbfe2bb0f3b8904cd07fb1f->enter($__internal_7065254dd07572d7c4b1c36feedf84ad77200a927bbfe2bb0f3b8904cd07fb1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_7065254dd07572d7c4b1c36feedf84ad77200a927bbfe2bb0f3b8904cd07fb1f->leave($__internal_7065254dd07572d7c4b1c36feedf84ad77200a927bbfe2bb0f3b8904cd07fb1f_prof);

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
