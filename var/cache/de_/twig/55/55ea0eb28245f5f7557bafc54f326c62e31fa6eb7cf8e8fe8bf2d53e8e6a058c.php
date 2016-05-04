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
        $__internal_b03bf70c53b4a62e36c57ff8d57fa9fb8a7f27637cd556aeada36e80a79a8550 = $this->env->getExtension("native_profiler");
        $__internal_b03bf70c53b4a62e36c57ff8d57fa9fb8a7f27637cd556aeada36e80a79a8550->enter($__internal_b03bf70c53b4a62e36c57ff8d57fa9fb8a7f27637cd556aeada36e80a79a8550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b03bf70c53b4a62e36c57ff8d57fa9fb8a7f27637cd556aeada36e80a79a8550->leave($__internal_b03bf70c53b4a62e36c57ff8d57fa9fb8a7f27637cd556aeada36e80a79a8550_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ba9739f1d10b2bd21c6a6cd9403eed4bf3d767db0446ba9f4244ca3f2d803cf1 = $this->env->getExtension("native_profiler");
        $__internal_ba9739f1d10b2bd21c6a6cd9403eed4bf3d767db0446ba9f4244ca3f2d803cf1->enter($__internal_ba9739f1d10b2bd21c6a6cd9403eed4bf3d767db0446ba9f4244ca3f2d803cf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_ba9739f1d10b2bd21c6a6cd9403eed4bf3d767db0446ba9f4244ca3f2d803cf1->leave($__internal_ba9739f1d10b2bd21c6a6cd9403eed4bf3d767db0446ba9f4244ca3f2d803cf1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_048aa98dddebd936dfaf9b799014f3c98661803b557ab83a6aa6f5b63933e16d = $this->env->getExtension("native_profiler");
        $__internal_048aa98dddebd936dfaf9b799014f3c98661803b557ab83a6aa6f5b63933e16d->enter($__internal_048aa98dddebd936dfaf9b799014f3c98661803b557ab83a6aa6f5b63933e16d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_048aa98dddebd936dfaf9b799014f3c98661803b557ab83a6aa6f5b63933e16d->leave($__internal_048aa98dddebd936dfaf9b799014f3c98661803b557ab83a6aa6f5b63933e16d_prof);

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
