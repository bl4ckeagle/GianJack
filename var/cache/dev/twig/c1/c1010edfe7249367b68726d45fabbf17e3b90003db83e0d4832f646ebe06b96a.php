<?php

/* :default:index.html.twig */
class __TwigTemplate_39d9f6b6e0d81794a9aeb2154fc79b87a57dc79b34b6028703176778e4ad8fee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BaseTemplate1.html.twig ", ":default:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'sidebarcontent' => array($this, 'block_sidebarcontent'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BaseTemplate1.html.twig ";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3dbc19313fe9db3919937a6d0add8e269d629d0f8ffc221d8685f7ee461f1887 = $this->env->getExtension("native_profiler");
        $__internal_3dbc19313fe9db3919937a6d0add8e269d629d0f8ffc221d8685f7ee461f1887->enter($__internal_3dbc19313fe9db3919937a6d0add8e269d629d0f8ffc221d8685f7ee461f1887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3dbc19313fe9db3919937a6d0add8e269d629d0f8ffc221d8685f7ee461f1887->leave($__internal_3dbc19313fe9db3919937a6d0add8e269d629d0f8ffc221d8685f7ee461f1887_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_606aca54130ef2efcf6af563723ec5018ea56f5e34dbd2ea195d81b7e1a53ab5 = $this->env->getExtension("native_profiler");
        $__internal_606aca54130ef2efcf6af563723ec5018ea56f5e34dbd2ea195d81b7e1a53ab5->enter($__internal_606aca54130ef2efcf6af563723ec5018ea56f5e34dbd2ea195d81b7e1a53ab5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Home";
        
        $__internal_606aca54130ef2efcf6af563723ec5018ea56f5e34dbd2ea195d81b7e1a53ab5->leave($__internal_606aca54130ef2efcf6af563723ec5018ea56f5e34dbd2ea195d81b7e1a53ab5_prof);

    }

    // line 5
    public function block_sidebarcontent($context, array $blocks = array())
    {
        $__internal_a03b41517ee540c8794cb87d3e9f4813bc8898e58e41d8e636c3e4e0e4d873f3 = $this->env->getExtension("native_profiler");
        $__internal_a03b41517ee540c8794cb87d3e9f4813bc8898e58e41d8e636c3e4e0e4d873f3->enter($__internal_a03b41517ee540c8794cb87d3e9f4813bc8898e58e41d8e636c3e4e0e4d873f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebarcontent"));

        // line 6
        echo "
    ";
        // line 7
        echo $this->env->getExtension('dump')->dump($this->env, $context);
        echo "

";
        
        $__internal_a03b41517ee540c8794cb87d3e9f4813bc8898e58e41d8e636c3e4e0e4d873f3->leave($__internal_a03b41517ee540c8794cb87d3e9f4813bc8898e58e41d8e636c3e4e0e4d873f3_prof);

    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        $__internal_e1186caeeefa277b9aab609aba6f8a21ad1e37c85ecf9bc3ab110d679d42a51d = $this->env->getExtension("native_profiler");
        $__internal_e1186caeeefa277b9aab609aba6f8a21ad1e37c85ecf9bc3ab110d679d42a51d->enter($__internal_e1186caeeefa277b9aab609aba6f8a21ad1e37c85ecf9bc3ab110d679d42a51d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 11
        echo "
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["homecontent"]) ? $context["homecontent"] : $this->getContext($context, "homecontent")));
        foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
            // line 13
            echo "


        <div class=\"homecontent\">
            <div class=\"jumbotron\">
        <img class=\"img\" src=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/images/News/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["content"], "picturePath", array()), "html", null, true);
            echo "\" > </img>

                <p>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["content"], "title", array()), "html", null, true);
            echo "</p>
                <p>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["content"], "content", array()), "html", null, true);
            echo "</p>
                <p>";
            // line 22
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["content"], "date", array()), "d-m-Y"), "html", null, true);
            echo "</p>
            </div>
    </div>
    
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['content'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "

";
        
        $__internal_e1186caeeefa277b9aab609aba6f8a21ad1e37c85ecf9bc3ab110d679d42a51d->leave($__internal_e1186caeeefa277b9aab609aba6f8a21ad1e37c85ecf9bc3ab110d679d42a51d_prof);

    }

    public function getTemplateName()
    {
        return ":default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 27,  101 => 22,  97 => 21,  93 => 20,  87 => 18,  80 => 13,  76 => 12,  73 => 11,  67 => 10,  57 => 7,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'BaseTemplate1.html.twig ' %}*/
/* */
/* {% block title %}Home{% endblock %}*/
/* */
/* {% block sidebarcontent %}*/
/* */
/*     {{ dump() }}*/
/* */
/* {% endblock %}*/
/* {% block content %}*/
/* */
/*     {% for content in homecontent %}*/
/* */
/* */
/* */
/*         <div class="homecontent">*/
/*             <div class="jumbotron">*/
/*         <img class="img" src="{{ asset('bundles/framework/images/News/') }}{{ content.picturePath}}" > </img>*/
/* */
/*                 <p>{{ content.title }}</p>*/
/*                 <p>{{ content.content }}</p>*/
/*                 <p>{{ content.date|date('d-m-Y') }}</p>*/
/*             </div>*/
/*     </div>*/
/*     */
/*     {% endfor %}*/
/* */
/* */
/* {% endblock %}*/
