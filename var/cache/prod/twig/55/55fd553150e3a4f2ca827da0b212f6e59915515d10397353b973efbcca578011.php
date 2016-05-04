<?php

/* Tour/tour.html.twig */
class __TwigTemplate_58d09ff916e35339ea6208b7855348bec156e6b7321a2e950d7cc321aa10048f extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Tour";
    }

    // line 5
    public function block_contentmaster($context, array $blocks = array())
    {
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
        $context['_seq'] = twig_ensure_traversable((isset($context["Tour"]) ? $context["Tour"] : null));
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
        return array (  86 => 30,  77 => 27,  73 => 26,  69 => 25,  63 => 24,  60 => 23,  56 => 22,  38 => 6,  35 => 5,  29 => 4,  11 => 1,);
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
