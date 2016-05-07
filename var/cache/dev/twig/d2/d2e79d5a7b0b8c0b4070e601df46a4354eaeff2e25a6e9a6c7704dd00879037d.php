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
        $__internal_0ab58dd7af5027108366a8cd4cdff7d6957ad41dd9a420aefc406894526d61ef = $this->env->getExtension("native_profiler");
        $__internal_0ab58dd7af5027108366a8cd4cdff7d6957ad41dd9a420aefc406894526d61ef->enter($__internal_0ab58dd7af5027108366a8cd4cdff7d6957ad41dd9a420aefc406894526d61ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "photos/photos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ab58dd7af5027108366a8cd4cdff7d6957ad41dd9a420aefc406894526d61ef->leave($__internal_0ab58dd7af5027108366a8cd4cdff7d6957ad41dd9a420aefc406894526d61ef_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_e51cb6739f8d67dcd123feb2c229978d103fc635b1b22f56b9cb3b21e82baa47 = $this->env->getExtension("native_profiler");
        $__internal_e51cb6739f8d67dcd123feb2c229978d103fc635b1b22f56b9cb3b21e82baa47->enter($__internal_e51cb6739f8d67dcd123feb2c229978d103fc635b1b22f56b9cb3b21e82baa47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Photos";
        
        $__internal_e51cb6739f8d67dcd123feb2c229978d103fc635b1b22f56b9cb3b21e82baa47->leave($__internal_e51cb6739f8d67dcd123feb2c229978d103fc635b1b22f56b9cb3b21e82baa47_prof);

    }

    // line 5
    public function block_contentmaster($context, array $blocks = array())
    {
        $__internal_b7ca16eaaf3e78c119c5a6280fce83cf564ac8ccbbf311aa744128ba3d897947 = $this->env->getExtension("native_profiler");
        $__internal_b7ca16eaaf3e78c119c5a6280fce83cf564ac8ccbbf311aa744128ba3d897947->enter($__internal_b7ca16eaaf3e78c119c5a6280fce83cf564ac8ccbbf311aa744128ba3d897947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentmaster"));

        // line 6
        echo "    <div class=\"photos\">

        <div class=\"jumbotron\">

            ";
        // line 10
        echo $this->env->getExtension('dump')->dump($this->env, $context);
        echo "

        </div>
            <div class=\"container-fluid\">
            <div class=\"row\">

            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Values"]) ? $context["Values"] : $this->getContext($context, "Values")));
        foreach ($context['_seq'] as $context["key"] => $context["values"]) {
            // line 17
            echo "                <div class=\"col-md-4\">
                <div class=\"jumbotron\">
                    <h3 >";
            // line 19
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "</h3>
                <a href=\"";
            // line 20
            echo $this->env->getExtension('routing')->getPath("Fotos");
            echo "/";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\" class=\"thumbnail\" >

                <img src=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/images/album/"), "html", null, true);
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $context["values"], "html", null, true);
            echo "\"  class=\"thumb\">
                </a>
                </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['values'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "
            </div>


        </div>
</div>

";
        
        $__internal_b7ca16eaaf3e78c119c5a6280fce83cf564ac8ccbbf311aa744128ba3d897947->leave($__internal_b7ca16eaaf3e78c119c5a6280fce83cf564ac8ccbbf311aa744128ba3d897947_prof);

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
        return array (  101 => 27,  87 => 22,  80 => 20,  76 => 19,  72 => 17,  68 => 16,  59 => 10,  53 => 6,  47 => 5,  35 => 4,  11 => 1,);
    }
}
/* {% extends 'BaseTemplate1.html.twig ' %}*/
/* */
/* */
/* {% block title %}Photos{% endblock %}*/
/* {% block contentmaster %}*/
/*     <div class="photos">*/
/* */
/*         <div class="jumbotron">*/
/* */
/*             {{ dump() }}*/
/* */
/*         </div>*/
/*             <div class="container-fluid">*/
/*             <div class="row">*/
/* */
/*             {% for key, values in Values %}*/
/*                 <div class="col-md-4">*/
/*                 <div class="jumbotron">*/
/*                     <h3 >{{ key }}</h3>*/
/*                 <a href="{{ path('Fotos') }}/{{ key }}" class="thumbnail" >*/
/* */
/*                 <img src="{{ asset('bundles/framework/images/album/') }}{{ key }}/{{ values }}"  class="thumb">*/
/*                 </a>*/
/*                 </div>*/
/*                 </div>*/
/*             {% endfor %}*/
/* */
/*             </div>*/
/* */
/* */
/*         </div>*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
