<?php

/* lucky/lucky.html.twig */
class __TwigTemplate_a14b21670f56353305477fd907c076423689645d33c52b5ff394f82a0c4f5180 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BaseTemplate1.html.twig", "lucky/lucky.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BaseTemplate1.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "

<h1>Lucky Number: ";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["lkk"]) ? $context["lkk"] : null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["dkk"]) ? $context["dkk"] : null), "html", null, true);
        echo " </h1>
";
    }

    public function getTemplateName()
    {
        return "lucky/lucky.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 8,  31 => 6,  28 => 5,  11 => 1,);
    }
}
/* {% extends 'BaseTemplate1.html.twig'%}*/
/* */
/* */
/* */
/* {% block body%}*/
/* */
/* */
/* <h1>Lucky Number: {{ lkk }} {{ dkk }} </h1>*/
/* {% endblock %}*/
