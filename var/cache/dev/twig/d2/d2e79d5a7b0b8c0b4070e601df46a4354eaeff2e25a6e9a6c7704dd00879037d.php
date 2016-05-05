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
        $__internal_91bf43271d15d42070f0231d7a7573fd0051fdee5a9c3ceac31d2fc02934a0aa = $this->env->getExtension("native_profiler");
        $__internal_91bf43271d15d42070f0231d7a7573fd0051fdee5a9c3ceac31d2fc02934a0aa->enter($__internal_91bf43271d15d42070f0231d7a7573fd0051fdee5a9c3ceac31d2fc02934a0aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "photos/photos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91bf43271d15d42070f0231d7a7573fd0051fdee5a9c3ceac31d2fc02934a0aa->leave($__internal_91bf43271d15d42070f0231d7a7573fd0051fdee5a9c3ceac31d2fc02934a0aa_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_c8a7fdc4d79fa6f91fdccfc5849b59a2469fa96254d47edd9604a12fbc899eb1 = $this->env->getExtension("native_profiler");
        $__internal_c8a7fdc4d79fa6f91fdccfc5849b59a2469fa96254d47edd9604a12fbc899eb1->enter($__internal_c8a7fdc4d79fa6f91fdccfc5849b59a2469fa96254d47edd9604a12fbc899eb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Photos";
        
        $__internal_c8a7fdc4d79fa6f91fdccfc5849b59a2469fa96254d47edd9604a12fbc899eb1->leave($__internal_c8a7fdc4d79fa6f91fdccfc5849b59a2469fa96254d47edd9604a12fbc899eb1_prof);

    }

    // line 5
    public function block_contentmaster($context, array $blocks = array())
    {
        $__internal_8008f04d22e61f7808cf792b0c9d6957d275a0b00177525ba8892dc878156781 = $this->env->getExtension("native_profiler");
        $__internal_8008f04d22e61f7808cf792b0c9d6957d275a0b00177525ba8892dc878156781->enter($__internal_8008f04d22e61f7808cf792b0c9d6957d275a0b00177525ba8892dc878156781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentmaster"));

        // line 6
        echo "    <div class=\"photos\">

        <div class=\"jumbotron\">

            ";
        // line 10
        echo $this->env->getExtension('dump')->dump($this->env, $context);
        echo "

        </div>
";
        // line 33
        echo "</div>

";
        
        $__internal_8008f04d22e61f7808cf792b0c9d6957d275a0b00177525ba8892dc878156781->leave($__internal_8008f04d22e61f7808cf792b0c9d6957d275a0b00177525ba8892dc878156781_prof);

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
        return array (  65 => 33,  59 => 10,  53 => 6,  47 => 5,  35 => 4,  11 => 1,);
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
/* {#*/
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
/*         </div>#}*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
