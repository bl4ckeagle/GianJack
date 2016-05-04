<?php

/* :photos:photos.html.twig */
class __TwigTemplate_b17a62251f7486c963df699b5a607cf66ef31bd7c4f51261dcea6f10b1f1eab2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BaseTemplate1.html.twig ", ":photos:photos.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'contentmaster' => array($this, 'block_contentmaster'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BaseTemplate1.html.twig ";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cb1ca98200423d197df8bc15257d221eed3ce0c9fe583632cc62c79b7d514c4b = $this->env->getExtension("native_profiler");
        $__internal_cb1ca98200423d197df8bc15257d221eed3ce0c9fe583632cc62c79b7d514c4b->enter($__internal_cb1ca98200423d197df8bc15257d221eed3ce0c9fe583632cc62c79b7d514c4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":photos:photos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb1ca98200423d197df8bc15257d221eed3ce0c9fe583632cc62c79b7d514c4b->leave($__internal_cb1ca98200423d197df8bc15257d221eed3ce0c9fe583632cc62c79b7d514c4b_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_7a41d3074618ed6b8423812ac70e229d718fd873d329fcf08dcfe76d387f6f4d = $this->env->getExtension("native_profiler");
        $__internal_7a41d3074618ed6b8423812ac70e229d718fd873d329fcf08dcfe76d387f6f4d->enter($__internal_7a41d3074618ed6b8423812ac70e229d718fd873d329fcf08dcfe76d387f6f4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Photos";
        
        $__internal_7a41d3074618ed6b8423812ac70e229d718fd873d329fcf08dcfe76d387f6f4d->leave($__internal_7a41d3074618ed6b8423812ac70e229d718fd873d329fcf08dcfe76d387f6f4d_prof);

    }

    // line 5
    public function block_contentmaster($context, array $blocks = array())
    {
        $__internal_4b4b5e39bebe3ca4e221becee3ab3b58d59f78eeb8decd5306108853b8ba16f7 = $this->env->getExtension("native_profiler");
        $__internal_4b4b5e39bebe3ca4e221becee3ab3b58d59f78eeb8decd5306108853b8ba16f7->enter($__internal_4b4b5e39bebe3ca4e221becee3ab3b58d59f78eeb8decd5306108853b8ba16f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentmaster"));

        // line 6
        echo " <div class=\"photos\">
<div class=\"jumbotron\">
 ";
        // line 8
        echo $this->env->getExtension('dump')->dump($this->env, $context);
        echo "
</div>
 <div class=\"jumbotron\">



     ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Directory"]) ? $context["Directory"] : $this->getContext($context, "Directory")));
        foreach ($context['_seq'] as $context["_key"] => $context["dirs"]) {
            // line 15
            echo "      <p><a href=\"";
            echo $this->env->getExtension('routing')->getPath("Fotos");
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["dirs"], "relativePathname", array()), "html", null, true);
            echo " \">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["dirs"], "relativePathname", array()), "html", null, true);
            echo "</a></p>
     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dirs'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "



 </div>
</div>

";
        
        $__internal_4b4b5e39bebe3ca4e221becee3ab3b58d59f78eeb8decd5306108853b8ba16f7->leave($__internal_4b4b5e39bebe3ca4e221becee3ab3b58d59f78eeb8decd5306108853b8ba16f7_prof);

    }

    public function getTemplateName()
    {
        return ":photos:photos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 17,  70 => 15,  66 => 14,  57 => 8,  53 => 6,  47 => 5,  35 => 4,  11 => 1,);
    }
}
/* {% extends 'BaseTemplate1.html.twig ' %}*/
/* */
/* */
/* {% block title %}Photos{% endblock %}*/
/* {%block contentmaster  %}*/
/*  <div class="photos">*/
/* <div class="jumbotron">*/
/*  {{ dump() }}*/
/* </div>*/
/*  <div class="jumbotron">*/
/* */
/* */
/* */
/*      {%for dirs in Directory %}*/
/*       <p><a href="{{ path('Fotos')}}/{{ dirs.relativePathname }} ">{{ dirs.relativePathname }}</a></p>*/
/*      {% endfor %}*/
/* */
/* */
/* */
/* */
/*  </div>*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
