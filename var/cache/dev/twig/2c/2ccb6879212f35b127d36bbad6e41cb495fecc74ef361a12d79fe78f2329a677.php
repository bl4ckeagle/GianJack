<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_a35deeee0b42cd6d80e247656ce99826d3c6cd5eea804d37970a282667cf43e3 extends Twig_Template
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
        $__internal_21de1a2bfd732f09e96f0ac42ea11b48a3b840a4de58fb27a22b6677ea2b8d7b = $this->env->getExtension("native_profiler");
        $__internal_21de1a2bfd732f09e96f0ac42ea11b48a3b840a4de58fb27a22b6677ea2b8d7b->enter($__internal_21de1a2bfd732f09e96f0ac42ea11b48a3b840a4de58fb27a22b6677ea2b8d7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_21de1a2bfd732f09e96f0ac42ea11b48a3b840a4de58fb27a22b6677ea2b8d7b->leave($__internal_21de1a2bfd732f09e96f0ac42ea11b48a3b840a4de58fb27a22b6677ea2b8d7b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
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
