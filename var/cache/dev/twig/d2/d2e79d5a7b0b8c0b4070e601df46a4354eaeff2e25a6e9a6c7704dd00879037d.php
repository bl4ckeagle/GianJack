<?php

/* photos/photos.html.twig */
class __TwigTemplate_ca8a41fbec32e03987bca04e7fac03576f6b58d19210e32a8392726feb27f280 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BaseTemplate1.html.twig ", "photos/photos.html.twig", 1);
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
        $__internal_c1db86a26eb5b217267b01242cd2bd39538704863b48074b0f77bb3ae9a21061 = $this->env->getExtension("native_profiler");
        $__internal_c1db86a26eb5b217267b01242cd2bd39538704863b48074b0f77bb3ae9a21061->enter($__internal_c1db86a26eb5b217267b01242cd2bd39538704863b48074b0f77bb3ae9a21061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "photos/photos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1db86a26eb5b217267b01242cd2bd39538704863b48074b0f77bb3ae9a21061->leave($__internal_c1db86a26eb5b217267b01242cd2bd39538704863b48074b0f77bb3ae9a21061_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_557c9c09a4eee3ec7f8484372eb06bebbb677a38f20f45fb7322616d2b228323 = $this->env->getExtension("native_profiler");
        $__internal_557c9c09a4eee3ec7f8484372eb06bebbb677a38f20f45fb7322616d2b228323->enter($__internal_557c9c09a4eee3ec7f8484372eb06bebbb677a38f20f45fb7322616d2b228323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Photos";
        
        $__internal_557c9c09a4eee3ec7f8484372eb06bebbb677a38f20f45fb7322616d2b228323->leave($__internal_557c9c09a4eee3ec7f8484372eb06bebbb677a38f20f45fb7322616d2b228323_prof);

    }

    // line 5
    public function block_contentmaster($context, array $blocks = array())
    {
        $__internal_309aa948ee821b1423318035eabbcaa4e920ffb9bb425f86629538a3c007a663 = $this->env->getExtension("native_profiler");
        $__internal_309aa948ee821b1423318035eabbcaa4e920ffb9bb425f86629538a3c007a663->enter($__internal_309aa948ee821b1423318035eabbcaa4e920ffb9bb425f86629538a3c007a663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentmaster"));

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
        
        $__internal_309aa948ee821b1423318035eabbcaa4e920ffb9bb425f86629538a3c007a663->leave($__internal_309aa948ee821b1423318035eabbcaa4e920ffb9bb425f86629538a3c007a663_prof);

    }

    public function getTemplateName()
    {
        return "photos/photos.html.twig";
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
