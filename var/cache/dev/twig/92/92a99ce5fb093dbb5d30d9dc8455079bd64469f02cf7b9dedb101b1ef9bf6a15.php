<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_020f4a542bbf9e0e1a45976956a0638822182d2d354523fac1b96e748e87cf8f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1d1b08aad7fc254ff969b179bfdefcc3b38c9aae61999e392c2f1f32a4cc5c32 = $this->env->getExtension("native_profiler");
        $__internal_1d1b08aad7fc254ff969b179bfdefcc3b38c9aae61999e392c2f1f32a4cc5c32->enter($__internal_1d1b08aad7fc254ff969b179bfdefcc3b38c9aae61999e392c2f1f32a4cc5c32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_1d1b08aad7fc254ff969b179bfdefcc3b38c9aae61999e392c2f1f32a4cc5c32->leave($__internal_1d1b08aad7fc254ff969b179bfdefcc3b38c9aae61999e392c2f1f32a4cc5c32_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
