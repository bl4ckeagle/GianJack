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
        $__internal_0b5f981b2f2dbc8b6128f357f301c9b852ea1bf8e0b8d12eb130e97ecf902138 = $this->env->getExtension("native_profiler");
        $__internal_0b5f981b2f2dbc8b6128f357f301c9b852ea1bf8e0b8d12eb130e97ecf902138->enter($__internal_0b5f981b2f2dbc8b6128f357f301c9b852ea1bf8e0b8d12eb130e97ecf902138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b5f981b2f2dbc8b6128f357f301c9b852ea1bf8e0b8d12eb130e97ecf902138->leave($__internal_0b5f981b2f2dbc8b6128f357f301c9b852ea1bf8e0b8d12eb130e97ecf902138_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_668d5792b928d4decd198504340502edab462ef24e51344426591cfe656552db = $this->env->getExtension("native_profiler");
        $__internal_668d5792b928d4decd198504340502edab462ef24e51344426591cfe656552db->enter($__internal_668d5792b928d4decd198504340502edab462ef24e51344426591cfe656552db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_668d5792b928d4decd198504340502edab462ef24e51344426591cfe656552db->leave($__internal_668d5792b928d4decd198504340502edab462ef24e51344426591cfe656552db_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3226b0a0c5c802010b6ad1892e8d81b9c69e9a6025f5ff034db1285252e0abbd = $this->env->getExtension("native_profiler");
        $__internal_3226b0a0c5c802010b6ad1892e8d81b9c69e9a6025f5ff034db1285252e0abbd->enter($__internal_3226b0a0c5c802010b6ad1892e8d81b9c69e9a6025f5ff034db1285252e0abbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3226b0a0c5c802010b6ad1892e8d81b9c69e9a6025f5ff034db1285252e0abbd->leave($__internal_3226b0a0c5c802010b6ad1892e8d81b9c69e9a6025f5ff034db1285252e0abbd_prof);

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
