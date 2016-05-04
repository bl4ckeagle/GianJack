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
        $__internal_060b12b893b45c62409ee7a2965f7dc791b056b43ba693740ceb9b3d26b07b0e = $this->env->getExtension("native_profiler");
        $__internal_060b12b893b45c62409ee7a2965f7dc791b056b43ba693740ceb9b3d26b07b0e->enter($__internal_060b12b893b45c62409ee7a2965f7dc791b056b43ba693740ceb9b3d26b07b0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "photos/photos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_060b12b893b45c62409ee7a2965f7dc791b056b43ba693740ceb9b3d26b07b0e->leave($__internal_060b12b893b45c62409ee7a2965f7dc791b056b43ba693740ceb9b3d26b07b0e_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_e1a0e1943b995f9a32689cf26eab97558947ce2052155c72877954dace7b62fb = $this->env->getExtension("native_profiler");
        $__internal_e1a0e1943b995f9a32689cf26eab97558947ce2052155c72877954dace7b62fb->enter($__internal_e1a0e1943b995f9a32689cf26eab97558947ce2052155c72877954dace7b62fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Photos";
        
        $__internal_e1a0e1943b995f9a32689cf26eab97558947ce2052155c72877954dace7b62fb->leave($__internal_e1a0e1943b995f9a32689cf26eab97558947ce2052155c72877954dace7b62fb_prof);

    }

    // line 5
    public function block_contentmaster($context, array $blocks = array())
    {
        $__internal_d58093ed021abbdb69b56c6700a92625626dd846e6176fda1a54bce570357759 = $this->env->getExtension("native_profiler");
        $__internal_d58093ed021abbdb69b56c6700a92625626dd846e6176fda1a54bce570357759->enter($__internal_d58093ed021abbdb69b56c6700a92625626dd846e6176fda1a54bce570357759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentmaster"));

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
        
        $__internal_d58093ed021abbdb69b56c6700a92625626dd846e6176fda1a54bce570357759->leave($__internal_d58093ed021abbdb69b56c6700a92625626dd846e6176fda1a54bce570357759_prof);

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
