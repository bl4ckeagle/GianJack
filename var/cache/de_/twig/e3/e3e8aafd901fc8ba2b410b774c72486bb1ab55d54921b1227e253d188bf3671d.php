<?php

/* :lucky:lucky.html.twig */
class __TwigTemplate_fb320a63c7efef1cedf08b7fef19e0a1f93f17d931045e4f5617780374c83fa8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BaseTemplate1.html.twig", ":lucky:lucky.html.twig", 1);
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
        $__internal_90dc1df2a233d1287273a2b21ace490e51eb101e10e93cf92ed00b8d7f5e5f50 = $this->env->getExtension("native_profiler");
        $__internal_90dc1df2a233d1287273a2b21ace490e51eb101e10e93cf92ed00b8d7f5e5f50->enter($__internal_90dc1df2a233d1287273a2b21ace490e51eb101e10e93cf92ed00b8d7f5e5f50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":lucky:lucky.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90dc1df2a233d1287273a2b21ace490e51eb101e10e93cf92ed00b8d7f5e5f50->leave($__internal_90dc1df2a233d1287273a2b21ace490e51eb101e10e93cf92ed00b8d7f5e5f50_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_573188036da94c10091ae61bec7483ed8ed82b79045c36b03cd5ab83bf0e6e8c = $this->env->getExtension("native_profiler");
        $__internal_573188036da94c10091ae61bec7483ed8ed82b79045c36b03cd5ab83bf0e6e8c->enter($__internal_573188036da94c10091ae61bec7483ed8ed82b79045c36b03cd5ab83bf0e6e8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "

<h1>Lucky Number: ";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["lkk"]) ? $context["lkk"] : $this->getContext($context, "lkk")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["dkk"]) ? $context["dkk"] : $this->getContext($context, "dkk")), "html", null, true);
        echo " </h1>
";
        
        $__internal_573188036da94c10091ae61bec7483ed8ed82b79045c36b03cd5ab83bf0e6e8c->leave($__internal_573188036da94c10091ae61bec7483ed8ed82b79045c36b03cd5ab83bf0e6e8c_prof);

    }

    public function getTemplateName()
    {
        return ":lucky:lucky.html.twig";
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
