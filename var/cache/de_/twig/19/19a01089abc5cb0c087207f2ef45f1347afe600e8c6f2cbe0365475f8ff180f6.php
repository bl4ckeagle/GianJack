<?php

/* lucky/lucky.html.twig */
class __TwigTemplate_e09c2107f84cc27268e9888d90ecc11ef2302ad5d8a5d550c578a97f97c6e2d3 extends Twig_Template
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
        $__internal_214d60b26a27d61543082b58cab76cff46ef02e7fc4486d4632928c89aae00fe = $this->env->getExtension("native_profiler");
        $__internal_214d60b26a27d61543082b58cab76cff46ef02e7fc4486d4632928c89aae00fe->enter($__internal_214d60b26a27d61543082b58cab76cff46ef02e7fc4486d4632928c89aae00fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "lucky/lucky.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_214d60b26a27d61543082b58cab76cff46ef02e7fc4486d4632928c89aae00fe->leave($__internal_214d60b26a27d61543082b58cab76cff46ef02e7fc4486d4632928c89aae00fe_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5be3abe77ab85c711c5eff55bcbbe0e49f7d81f9468ee7210941f64c86e58eac = $this->env->getExtension("native_profiler");
        $__internal_5be3abe77ab85c711c5eff55bcbbe0e49f7d81f9468ee7210941f64c86e58eac->enter($__internal_5be3abe77ab85c711c5eff55bcbbe0e49f7d81f9468ee7210941f64c86e58eac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "

<h1>Lucky Number: ";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["lkk"]) ? $context["lkk"] : $this->getContext($context, "lkk")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["dkk"]) ? $context["dkk"] : $this->getContext($context, "dkk")), "html", null, true);
        echo " </h1>
";
        
        $__internal_5be3abe77ab85c711c5eff55bcbbe0e49f7d81f9468ee7210941f64c86e58eac->leave($__internal_5be3abe77ab85c711c5eff55bcbbe0e49f7d81f9468ee7210941f64c86e58eac_prof);

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
        return array (  44 => 8,  40 => 6,  34 => 5,  11 => 1,);
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
