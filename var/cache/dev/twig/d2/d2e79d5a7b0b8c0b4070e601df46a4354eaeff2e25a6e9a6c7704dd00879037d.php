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
        $__internal_be3dfb340cce69ea53da264d9994676ada4cce46e49ff9ce78b0cce88cc94e2e = $this->env->getExtension("native_profiler");
        $__internal_be3dfb340cce69ea53da264d9994676ada4cce46e49ff9ce78b0cce88cc94e2e->enter($__internal_be3dfb340cce69ea53da264d9994676ada4cce46e49ff9ce78b0cce88cc94e2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "photos/photos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be3dfb340cce69ea53da264d9994676ada4cce46e49ff9ce78b0cce88cc94e2e->leave($__internal_be3dfb340cce69ea53da264d9994676ada4cce46e49ff9ce78b0cce88cc94e2e_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_f1d37548b0e5e8b0b84402f941a5028931bd06377252753dfffa38fbd4454b99 = $this->env->getExtension("native_profiler");
        $__internal_f1d37548b0e5e8b0b84402f941a5028931bd06377252753dfffa38fbd4454b99->enter($__internal_f1d37548b0e5e8b0b84402f941a5028931bd06377252753dfffa38fbd4454b99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Photos";
        
        $__internal_f1d37548b0e5e8b0b84402f941a5028931bd06377252753dfffa38fbd4454b99->leave($__internal_f1d37548b0e5e8b0b84402f941a5028931bd06377252753dfffa38fbd4454b99_prof);

    }

    // line 5
    public function block_contentmaster($context, array $blocks = array())
    {
        $__internal_1cc2f69e8ab6925b3f1c5ed40985f145764ce6cb89f05f666735fd571e98d5cb = $this->env->getExtension("native_profiler");
        $__internal_1cc2f69e8ab6925b3f1c5ed40985f145764ce6cb89f05f666735fd571e98d5cb->enter($__internal_1cc2f69e8ab6925b3f1c5ed40985f145764ce6cb89f05f666735fd571e98d5cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentmaster"));

        // line 6
        echo "    <div class=\"photos\">
        <div class=\"jumbotron\">
            ";
        // line 8
        echo $this->env->getExtension('dump')->dump($this->env, $context);
        echo "
        </div>
        <div class=\"jumbotron\">


            ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Values"]) ? $context["Values"] : $this->getContext($context, "Values")));
        foreach ($context['_seq'] as $context["key"] => $context["values"]) {
            // line 14
            echo "
                <p>";
            // line 15
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo twig_escape_filter($this->env, $context["values"], "html", null, true);
            echo "</p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['values'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "



        </div>
    </div>

";
        
        $__internal_1cc2f69e8ab6925b3f1c5ed40985f145764ce6cb89f05f666735fd571e98d5cb->leave($__internal_1cc2f69e8ab6925b3f1c5ed40985f145764ce6cb89f05f666735fd571e98d5cb_prof);

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
        return array (  81 => 17,  72 => 15,  69 => 14,  65 => 13,  57 => 8,  53 => 6,  47 => 5,  35 => 4,  11 => 1,);
    }
}
/* {% extends 'BaseTemplate1.html.twig ' %}*/
/* */
/* */
/* {% block title %}Photos{% endblock %}*/
/* {% block contentmaster %}*/
/*     <div class="photos">*/
/*         <div class="jumbotron">*/
/*             {{ dump() }}*/
/*         </div>*/
/*         <div class="jumbotron">*/
/* */
/* */
/*             {% for key, values in Values %}*/
/* */
/*                 <p>{{ key }}{{ values }}</p>*/
/*             {% endfor %}*/
/* */
/* */
/* */
/* */
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
