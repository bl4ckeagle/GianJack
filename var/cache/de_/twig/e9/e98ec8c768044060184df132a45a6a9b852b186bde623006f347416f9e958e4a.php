<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_f7d32415de7d60dec8c8f3e8c3d5f1adbbbf453307ea6f3d467b62f16460cb0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_10baf093ad3d280a9154458dfa1d5f2c8b3025260964896aad8fafac344170f2 = $this->env->getExtension("native_profiler");
        $__internal_10baf093ad3d280a9154458dfa1d5f2c8b3025260964896aad8fafac344170f2->enter($__internal_10baf093ad3d280a9154458dfa1d5f2c8b3025260964896aad8fafac344170f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10baf093ad3d280a9154458dfa1d5f2c8b3025260964896aad8fafac344170f2->leave($__internal_10baf093ad3d280a9154458dfa1d5f2c8b3025260964896aad8fafac344170f2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1ff915dc3979720d5db89c106085e6f441b7d2aab64c90d98373f54b8d69d527 = $this->env->getExtension("native_profiler");
        $__internal_1ff915dc3979720d5db89c106085e6f441b7d2aab64c90d98373f54b8d69d527->enter($__internal_1ff915dc3979720d5db89c106085e6f441b7d2aab64c90d98373f54b8d69d527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_1ff915dc3979720d5db89c106085e6f441b7d2aab64c90d98373f54b8d69d527->leave($__internal_1ff915dc3979720d5db89c106085e6f441b7d2aab64c90d98373f54b8d69d527_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ca546aabd775a0284893750b058b12f52af6bd5cf029bc37fb8ed82a3c6a9436 = $this->env->getExtension("native_profiler");
        $__internal_ca546aabd775a0284893750b058b12f52af6bd5cf029bc37fb8ed82a3c6a9436->enter($__internal_ca546aabd775a0284893750b058b12f52af6bd5cf029bc37fb8ed82a3c6a9436_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ca546aabd775a0284893750b058b12f52af6bd5cf029bc37fb8ed82a3c6a9436->leave($__internal_ca546aabd775a0284893750b058b12f52af6bd5cf029bc37fb8ed82a3c6a9436_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
