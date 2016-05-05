<?php

/* default/index.html.twig */
class __TwigTemplate_f4fdb1aa9b19b920a08d205539d8000f0fb79c07ab9d7375e93ae4c9ca8f99ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BaseTemplate1.html.twig ", "default/index.html.twig", 1);
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
        $__internal_73e4bc6192b72af276284a98cb4caf0f012461d47a9ef960c7dc3916de78f0c6 = $this->env->getExtension("native_profiler");
        $__internal_73e4bc6192b72af276284a98cb4caf0f012461d47a9ef960c7dc3916de78f0c6->enter($__internal_73e4bc6192b72af276284a98cb4caf0f012461d47a9ef960c7dc3916de78f0c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73e4bc6192b72af276284a98cb4caf0f012461d47a9ef960c7dc3916de78f0c6->leave($__internal_73e4bc6192b72af276284a98cb4caf0f012461d47a9ef960c7dc3916de78f0c6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_22256beb40085d00fa3870ef9acd0e1255fe779ce6aabe1dfcd400c556df3bf0 = $this->env->getExtension("native_profiler");
        $__internal_22256beb40085d00fa3870ef9acd0e1255fe779ce6aabe1dfcd400c556df3bf0->enter($__internal_22256beb40085d00fa3870ef9acd0e1255fe779ce6aabe1dfcd400c556df3bf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Home";
        
        $__internal_22256beb40085d00fa3870ef9acd0e1255fe779ce6aabe1dfcd400c556df3bf0->leave($__internal_22256beb40085d00fa3870ef9acd0e1255fe779ce6aabe1dfcd400c556df3bf0_prof);

    }

    // line 5
    public function block_sidebarcontent($context, array $blocks = array())
    {
        $__internal_78d0114f34e21de6a576d53be1b1d0154d099f1b686ef4fd790fd3a4f348f9d1 = $this->env->getExtension("native_profiler");
        $__internal_78d0114f34e21de6a576d53be1b1d0154d099f1b686ef4fd790fd3a4f348f9d1->enter($__internal_78d0114f34e21de6a576d53be1b1d0154d099f1b686ef4fd790fd3a4f348f9d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebarcontent"));

        // line 6
        echo "
    ";
        // line 7
        echo $this->env->getExtension('dump')->dump($this->env, $context);
        echo "

";
        
        $__internal_78d0114f34e21de6a576d53be1b1d0154d099f1b686ef4fd790fd3a4f348f9d1->leave($__internal_78d0114f34e21de6a576d53be1b1d0154d099f1b686ef4fd790fd3a4f348f9d1_prof);

    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        $__internal_a87e4791692de8808106ed1c973ced0116ec2049486e11c04a27836926b68ad2 = $this->env->getExtension("native_profiler");
        $__internal_a87e4791692de8808106ed1c973ced0116ec2049486e11c04a27836926b68ad2->enter($__internal_a87e4791692de8808106ed1c973ced0116ec2049486e11c04a27836926b68ad2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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

                <h1>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["content"], "title", array()), "html", null, true);
            echo "</h1>
                <p>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["content"], "content", array()), "html", null, true);
            echo "</p>
                <small class=\"text-right\">";
            // line 22
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["content"], "date", array()), "d.m.Y"), "html", null, true);
            echo "</small>
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
        
        $__internal_a87e4791692de8808106ed1c973ced0116ec2049486e11c04a27836926b68ad2->leave($__internal_a87e4791692de8808106ed1c973ced0116ec2049486e11c04a27836926b68ad2_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
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
/*                 <h1>{{ content.title }}</h1>*/
/*                 <p>{{ content.content }}</p>*/
/*                 <small class="text-right">{{ content.date|date('d.m.Y') }}</small>*/
/*             </div>*/
/*     </div>*/
/*     */
/*     {% endfor %}*/
/* */
/* */
/* {% endblock %}*/
