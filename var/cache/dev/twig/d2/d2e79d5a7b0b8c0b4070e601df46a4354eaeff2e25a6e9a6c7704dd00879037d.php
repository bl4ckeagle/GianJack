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
        $__internal_978fbd1c7be684f748800451357a79b9bfccc309f2172eb41412f3a61d696dde = $this->env->getExtension("native_profiler");
        $__internal_978fbd1c7be684f748800451357a79b9bfccc309f2172eb41412f3a61d696dde->enter($__internal_978fbd1c7be684f748800451357a79b9bfccc309f2172eb41412f3a61d696dde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "photos/photos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_978fbd1c7be684f748800451357a79b9bfccc309f2172eb41412f3a61d696dde->leave($__internal_978fbd1c7be684f748800451357a79b9bfccc309f2172eb41412f3a61d696dde_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_1a04f47560574b4b506156c5ea094e0179279ababb2e0079a4c9a0131c76af50 = $this->env->getExtension("native_profiler");
        $__internal_1a04f47560574b4b506156c5ea094e0179279ababb2e0079a4c9a0131c76af50->enter($__internal_1a04f47560574b4b506156c5ea094e0179279ababb2e0079a4c9a0131c76af50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Photos";
        
        $__internal_1a04f47560574b4b506156c5ea094e0179279ababb2e0079a4c9a0131c76af50->leave($__internal_1a04f47560574b4b506156c5ea094e0179279ababb2e0079a4c9a0131c76af50_prof);

    }

    // line 5
    public function block_contentmaster($context, array $blocks = array())
    {
        $__internal_80d81ebba39b1c0488e2da85197be7125b24b252e3a21c5b5c137c0d119cbfd5 = $this->env->getExtension("native_profiler");
        $__internal_80d81ebba39b1c0488e2da85197be7125b24b252e3a21c5b5c137c0d119cbfd5->enter($__internal_80d81ebba39b1c0488e2da85197be7125b24b252e3a21c5b5c137c0d119cbfd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentmaster"));

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
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Directory"]) ? $context["Directory"] : $this->getContext($context, "Directory")));
        foreach ($context['_seq'] as $context["_key"] => $context["dirs"]) {
            // line 16
            echo "      <p><a href=\"";
            echo $this->env->getExtension('routing')->getPath("Fotos");
            echo "/";
            echo twig_escape_filter($this->env, $context["dirs"], "html", null, true);
            echo " \">";
            echo twig_escape_filter($this->env, $context["dirs"], "html", null, true);
            echo "</a></p>
     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dirs'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "




 </div>
</div>

";
        
        $__internal_80d81ebba39b1c0488e2da85197be7125b24b252e3a21c5b5c137c0d119cbfd5->leave($__internal_80d81ebba39b1c0488e2da85197be7125b24b252e3a21c5b5c137c0d119cbfd5_prof);

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
        return array (  84 => 18,  71 => 16,  67 => 15,  57 => 8,  53 => 6,  47 => 5,  35 => 4,  11 => 1,);
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
/* */
/*      {%for dirs in Directory %}*/
/*       <p><a href="{{ path('Fotos')}}/{{ dirs }} ">{{ dirs }}</a></p>*/
/*      {% endfor %}*/
/* */
/* */
/* */
/* */
/* */
/*  </div>*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
