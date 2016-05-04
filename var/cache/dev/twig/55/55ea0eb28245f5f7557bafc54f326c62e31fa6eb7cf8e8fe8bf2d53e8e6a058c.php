<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_a7a461d8960d95dd25e111069d1afef014bab04b4ce78a135411f07c5076b572 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7d6478ce3e65d3626917d34c909d8ef72154ce04f2f4bdbb1b6f6738775be907 = $this->env->getExtension("native_profiler");
        $__internal_7d6478ce3e65d3626917d34c909d8ef72154ce04f2f4bdbb1b6f6738775be907->enter($__internal_7d6478ce3e65d3626917d34c909d8ef72154ce04f2f4bdbb1b6f6738775be907_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d6478ce3e65d3626917d34c909d8ef72154ce04f2f4bdbb1b6f6738775be907->leave($__internal_7d6478ce3e65d3626917d34c909d8ef72154ce04f2f4bdbb1b6f6738775be907_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_22469657651f4741d4cdf8daab3323d71fed4386802d450d9cfced2633901fdc = $this->env->getExtension("native_profiler");
        $__internal_22469657651f4741d4cdf8daab3323d71fed4386802d450d9cfced2633901fdc->enter($__internal_22469657651f4741d4cdf8daab3323d71fed4386802d450d9cfced2633901fdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_22469657651f4741d4cdf8daab3323d71fed4386802d450d9cfced2633901fdc->leave($__internal_22469657651f4741d4cdf8daab3323d71fed4386802d450d9cfced2633901fdc_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_03ea08197ed7d8d0b21dcd86ec678c7ad7349a7aade6b1a1255293ada36072b0 = $this->env->getExtension("native_profiler");
        $__internal_03ea08197ed7d8d0b21dcd86ec678c7ad7349a7aade6b1a1255293ada36072b0->enter($__internal_03ea08197ed7d8d0b21dcd86ec678c7ad7349a7aade6b1a1255293ada36072b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_03ea08197ed7d8d0b21dcd86ec678c7ad7349a7aade6b1a1255293ada36072b0->leave($__internal_03ea08197ed7d8d0b21dcd86ec678c7ad7349a7aade6b1a1255293ada36072b0_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
