<?php

/* Tour/tour.html.twig */
class __TwigTemplate_365a7872455bd5704a4d774ba718e464d13bba09e9dc0b712ae94941c024a5ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BaseTemplate1.html.twig ", "Tour/tour.html.twig", 1);
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
        $__internal_229228a45fada4ce696867f5e4d0952ba74b933260541a5af2cbfd48a31f2f84 = $this->env->getExtension("native_profiler");
        $__internal_229228a45fada4ce696867f5e4d0952ba74b933260541a5af2cbfd48a31f2f84->enter($__internal_229228a45fada4ce696867f5e4d0952ba74b933260541a5af2cbfd48a31f2f84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Tour/tour.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_229228a45fada4ce696867f5e4d0952ba74b933260541a5af2cbfd48a31f2f84->leave($__internal_229228a45fada4ce696867f5e4d0952ba74b933260541a5af2cbfd48a31f2f84_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_56b13b16efc668e41e2fdcfe13b188a777961fe44c598cb90f0097a112ba5161 = $this->env->getExtension("native_profiler");
        $__internal_56b13b16efc668e41e2fdcfe13b188a777961fe44c598cb90f0097a112ba5161->enter($__internal_56b13b16efc668e41e2fdcfe13b188a777961fe44c598cb90f0097a112ba5161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Tour";
        
        $__internal_56b13b16efc668e41e2fdcfe13b188a777961fe44c598cb90f0097a112ba5161->leave($__internal_56b13b16efc668e41e2fdcfe13b188a777961fe44c598cb90f0097a112ba5161_prof);

    }

    // line 5
    public function block_contentmaster($context, array $blocks = array())
    {
        $__internal_014a933ded2913b11cefc48368b9d964e62280a899b4c8a828ed801e49524e6f = $this->env->getExtension("native_profiler");
        $__internal_014a933ded2913b11cefc48368b9d964e62280a899b4c8a828ed801e49524e6f->enter($__internal_014a933ded2913b11cefc48368b9d964e62280a899b4c8a828ed801e49524e6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentmaster"));

        // line 6
        echo " <div class=\"Tour\">
<div class=\"jumbotron\">
<table class=\"table table-striped table-hover \">
    <caption >Tour</caption>
    <thead>
    <tr>
        <td>Location</td>
        <td>Date</td>
        <td>Country</td>
        <td>Tickets</td>


    </tr>
    </thead>
    <tbody>

        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Tour"]) ? $context["Tour"] : $this->getContext($context, "Tour")));
        foreach ($context['_seq'] as $context["_key"] => $context["tours"]) {
            // line 23
            echo "        <tr>
        <td><a href=";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["tours"], "locationLink", array()), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tours"], "location", array()), "html", null, true);
            echo "</a> </td>
        <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["tours"], "date", array()), "d-m-Y h:m"), "html", null, true);
            echo "</td>
        <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["tours"], "country", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["tours"], "ticketLink", array()), "html", null, true);
            echo "</td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tours'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "



    </tbody>

    </table>
</div>
 </div>
";
        
        $__internal_014a933ded2913b11cefc48368b9d964e62280a899b4c8a828ed801e49524e6f->leave($__internal_014a933ded2913b11cefc48368b9d964e62280a899b4c8a828ed801e49524e6f_prof);

    }

    public function getTemplateName()
    {
        return "Tour/tour.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 30,  92 => 27,  88 => 26,  84 => 25,  78 => 24,  75 => 23,  71 => 22,  53 => 6,  47 => 5,  35 => 4,  11 => 1,);
    }
}
/* {% extends 'BaseTemplate1.html.twig ' %}*/
/* */
/* */
/* {% block title %}Tour{% endblock %}*/
/* {%block contentmaster  %}*/
/*  <div class="Tour">*/
/* <div class="jumbotron">*/
/* <table class="table table-striped table-hover ">*/
/*     <caption >Tour</caption>*/
/*     <thead>*/
/*     <tr>*/
/*         <td>Location</td>*/
/*         <td>Date</td>*/
/*         <td>Country</td>*/
/*         <td>Tickets</td>*/
/* */
/* */
/*     </tr>*/
/*     </thead>*/
/*     <tbody>*/
/* */
/*         {% for tours in Tour %}*/
/*         <tr>*/
/*         <td><a href={{ tours.locationLink }}>{{ tours.location }}</a> </td>*/
/*         <td>{{ tours.date|date("d-m-Y h:m") }}</td>*/
/*         <td>{{ tours.country }}</td>*/
/*         <td>{{ tours.ticketLink }}</td>*/
/*         </tr>*/
/*         {% endfor %}*/
/* */
/* */
/* */
/* */
/*     </tbody>*/
/* */
/*     </table>*/
/* </div>*/
/*  </div>*/
/* {% endblock %}*/
/* */
