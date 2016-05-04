<?php

/* BaseTemplate1.html.twig  */
class __TwigTemplate_d30bb43d58b4fbb610687d045605acf7bb68d659638fc463db7ef5bd9b00d573 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
            'contentmaster' => array($this, 'block_contentmaster'),
            'sidebarcontent' => array($this, 'block_sidebarcontent'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0f2d8fdce54cb82e16265a5c58949436a58f3ade10f0aad0dd29c1dceeef57f7 = $this->env->getExtension("native_profiler");
        $__internal_0f2d8fdce54cb82e16265a5c58949436a58f3ade10f0aad0dd29c1dceeef57f7->enter($__internal_0f2d8fdce54cb82e16265a5c58949436a58f3ade10f0aad0dd29c1dceeef57f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BaseTemplate1.html.twig "));

        // line 1
        echo "<!DOCTYPE html>
<html>

<head>

    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "
    <meta charset=\"UTF-8\"/>
    <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>

</head>

<body>

<div class=\"homebody\">
    <div class=\"container-fluid\">
    ";
        // line 20
        echo "    <div class=\"container-fluid\">
        <div class=\"banner\">
            <img class=\"img-responsive\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/images/banner/banner.png"), "html", null, true);
        echo "\">  </img>
        </div>
        </div>
    ";
        // line 26
        echo "    ";
        // line 27
        echo "
    <nav class=\"navbar navbar-default\">
        <div class=\"container-fluid\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <img class=\"homelogo\"  src=";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/images/NavLogo/homelogo.png"), "html", null, true);
        echo ">

            </div>

            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\" style=\"margin-left: 40%\">
                <ul class=\"nav navbar-nav\">
                    <li><a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("index");
        echo "\">Home <span class=\"sr-only\">(current)</span></a></li>
                    <li><a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("Tour");
        echo "\">Tour</a></li>
                    <li><a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("Fotos");
        echo "\">Photos</a></li>
                    <script>alert</script>

                </ul>

            </div>
        </div>
    </nav>
    ";
        // line 54
        echo "        ";
        $this->displayBlock('contentmaster', $context, $blocks);
        // line 78
        echo "        </div>
</div>









";
        // line 89
        $this->displayBlock('javascripts', $context, $blocks);
        // line 94
        echo "</body>


</html>

";
        
        $__internal_0f2d8fdce54cb82e16265a5c58949436a58f3ade10f0aad0dd29c1dceeef57f7->leave($__internal_0f2d8fdce54cb82e16265a5c58949436a58f3ade10f0aad0dd29c1dceeef57f7_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5233ba6d11c3f35a95612411d173e74be43ed4d4db930e5f1977f09c9104aade = $this->env->getExtension("native_profiler");
        $__internal_5233ba6d11c3f35a95612411d173e74be43ed4d4db930e5f1977f09c9104aade->enter($__internal_5233ba6d11c3f35a95612411d173e74be43ed4d4db930e5f1977f09c9104aade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>";
        
        $__internal_5233ba6d11c3f35a95612411d173e74be43ed4d4db930e5f1977f09c9104aade->leave($__internal_5233ba6d11c3f35a95612411d173e74be43ed4d4db930e5f1977f09c9104aade_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_b03c0670f13a3cadf1183a1ed8469092266a5c1485b59f045666214459425bd5 = $this->env->getExtension("native_profiler");
        $__internal_b03c0670f13a3cadf1183a1ed8469092266a5c1485b59f045666214459425bd5->enter($__internal_b03c0670f13a3cadf1183a1ed8469092266a5c1485b59f045666214459425bd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Test Application";
        
        $__internal_b03c0670f13a3cadf1183a1ed8469092266a5c1485b59f045666214459425bd5->leave($__internal_b03c0670f13a3cadf1183a1ed8469092266a5c1485b59f045666214459425bd5_prof);

    }

    // line 54
    public function block_contentmaster($context, array $blocks = array())
    {
        $__internal_13b95d7f3f972a59a1d37fd3eb87d31ddf52926c47a9c360f434faaf96d6438e = $this->env->getExtension("native_profiler");
        $__internal_13b95d7f3f972a59a1d37fd3eb87d31ddf52926c47a9c360f434faaf96d6438e->enter($__internal_13b95d7f3f972a59a1d37fd3eb87d31ddf52926c47a9c360f434faaf96d6438e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentmaster"));

        // line 55
        echo "        <div class=\"container\">
            <div class=\"row\">
                <div    class=\"col-lg-4\">
                    <div class=\"jumbotron\">
                        ";
        // line 59
        $this->displayBlock('sidebarcontent', $context, $blocks);
        // line 67
        echo "                    </div>
</div>
                    <div class=\"col-lg-8\">
                        ";
        // line 70
        $this->displayBlock('content', $context, $blocks);
        // line 73
        echo "                    </div>
                    </div>

            </div>
        ";
        
        $__internal_13b95d7f3f972a59a1d37fd3eb87d31ddf52926c47a9c360f434faaf96d6438e->leave($__internal_13b95d7f3f972a59a1d37fd3eb87d31ddf52926c47a9c360f434faaf96d6438e_prof);

    }

    // line 59
    public function block_sidebarcontent($context, array $blocks = array())
    {
        $__internal_4ed929fba41bde2ca23df5eb9621c754ec992ed70f56804039f57b33dfc7550b = $this->env->getExtension("native_profiler");
        $__internal_4ed929fba41bde2ca23df5eb9621c754ec992ed70f56804039f57b33dfc7550b->enter($__internal_4ed929fba41bde2ca23df5eb9621c754ec992ed70f56804039f57b33dfc7550b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebarcontent"));

        // line 60
        echo "                        <h1>Test123</h1>
                        <p>Text Text Text</p>
                        <p>Text Text Text</p>
                        <p>Text Text Text</p>
                        <p>Text Text Text</p>
                        <p>Text Text Text</p>
                        ";
        
        $__internal_4ed929fba41bde2ca23df5eb9621c754ec992ed70f56804039f57b33dfc7550b->leave($__internal_4ed929fba41bde2ca23df5eb9621c754ec992ed70f56804039f57b33dfc7550b_prof);

    }

    // line 70
    public function block_content($context, array $blocks = array())
    {
        $__internal_f1326ff7ea604e9521110af0a993dd75b0072c86120af0f7b9c3ce0fcaa3a4d9 = $this->env->getExtension("native_profiler");
        $__internal_f1326ff7ea604e9521110af0a993dd75b0072c86120af0f7b9c3ce0fcaa3a4d9->enter($__internal_f1326ff7ea604e9521110af0a993dd75b0072c86120af0f7b9c3ce0fcaa3a4d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 71
        echo "
                        ";
        
        $__internal_f1326ff7ea604e9521110af0a993dd75b0072c86120af0f7b9c3ce0fcaa3a4d9->leave($__internal_f1326ff7ea604e9521110af0a993dd75b0072c86120af0f7b9c3ce0fcaa3a4d9_prof);

    }

    // line 89
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_18f322980bd0bb3db477b8b6260ffba6a077f4aa4fc111ff84266070c5fb2b96 = $this->env->getExtension("native_profiler");
        $__internal_18f322980bd0bb3db477b8b6260ffba6a077f4aa4fc111ff84266070c5fb2b96->enter($__internal_18f322980bd0bb3db477b8b6260ffba6a077f4aa4fc111ff84266070c5fb2b96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 90
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/js/jquery-2.2.3.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/js/bootstrap.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_18f322980bd0bb3db477b8b6260ffba6a077f4aa4fc111ff84266070c5fb2b96->leave($__internal_18f322980bd0bb3db477b8b6260ffba6a077f4aa4fc111ff84266070c5fb2b96_prof);

    }

    public function getTemplateName()
    {
        return "BaseTemplate1.html.twig ";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 91,  236 => 90,  230 => 89,  222 => 71,  216 => 70,  203 => 60,  197 => 59,  186 => 73,  184 => 70,  179 => 67,  177 => 59,  171 => 55,  165 => 54,  153 => 9,  139 => 6,  127 => 94,  125 => 89,  112 => 78,  109 => 54,  98 => 45,  94 => 44,  90 => 43,  81 => 37,  69 => 27,  67 => 26,  61 => 22,  57 => 20,  46 => 11,  41 => 9,  37 => 7,  35 => 6,  28 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* */
/* <head>*/
/* */
/*     {% block stylesheets %}<link href="{{ asset('bundles/framework/css/bootstrap.css') }}" rel="stylesheet"/>{% endblock %}*/
/* */
/*     <meta charset="UTF-8"/>*/
/*     <title>{% block title %}Test Application{% endblock %}</title>*/
/* */
/*     <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}"/>*/
/* */
/* </head>*/
/* */
/* <body>*/
/* */
/* <div class="homebody">*/
/*     <div class="container-fluid">*/
/*     {#Banner Logo#}*/
/*     <div class="container-fluid">*/
/*         <div class="banner">*/
/*             <img class="img-responsive" src="{{ asset('bundles/framework/images/banner/banner.png') }}">  </img>*/
/*         </div>*/
/*         </div>*/
/*     {#Banner Logo end#}*/
/*     {#Nav Bar#}*/
/* */
/*     <nav class="navbar navbar-default">*/
/*         <div class="container-fluid">*/
/*             <div class="navbar-header">*/
/*                 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">*/
/*                     <span class="sr-only">Toggle navigation</span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                 </button>*/
/*                 <img class="homelogo"  src={{ asset('bundles/framework/images/NavLogo/homelogo.png') }}>*/
/* */
/*             </div>*/
/* */
/*             <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="margin-left: 40%">*/
/*                 <ul class="nav navbar-nav">*/
/*                     <li><a href="{{ path('index') }}">Home <span class="sr-only">(current)</span></a></li>*/
/*                     <li><a href="{{ path('Tour') }}">Tour</a></li>*/
/*                     <li><a href="{{ path('Fotos') }}">Photos</a></li>*/
/*                     <script>alert</script>*/
/* */
/*                 </ul>*/
/* */
/*             </div>*/
/*         </div>*/
/*     </nav>*/
/*     {#Nave End#}*/
/*         {%block contentmaster  %}*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div    class="col-lg-4">*/
/*                     <div class="jumbotron">*/
/*                         {% block sidebarcontent %}*/
/*                         <h1>Test123</h1>*/
/*                         <p>Text Text Text</p>*/
/*                         <p>Text Text Text</p>*/
/*                         <p>Text Text Text</p>*/
/*                         <p>Text Text Text</p>*/
/*                         <p>Text Text Text</p>*/
/*                         {% endblock %}*/
/*                     </div>*/
/* </div>*/
/*                     <div class="col-lg-8">*/
/*                         {% block content %}*/
/* */
/*                         {% endblock %}*/
/*                     </div>*/
/*                     </div>*/
/* */
/*             </div>*/
/*         {% endblock %}*/
/*         </div>*/
/* </div>*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* {% block javascripts %}*/
/*     <script src="{{ asset('bundles/framework/js/jquery-2.2.3.min.js') }}"></script>*/
/*     <script src="{{ asset('bundles/framework/js/bootstrap.js') }}"></script>*/
/* */
/* {% endblock %}*/
/* </body>*/
/* */
/* */
/* </html>*/
/* */
/* */
