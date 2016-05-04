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
        $__internal_da21f2ec81fbee36e29d90d3a13a357c64739ac6c8f28faee12ded9eb7a33065 = $this->env->getExtension("native_profiler");
        $__internal_da21f2ec81fbee36e29d90d3a13a357c64739ac6c8f28faee12ded9eb7a33065->enter($__internal_da21f2ec81fbee36e29d90d3a13a357c64739ac6c8f28faee12ded9eb7a33065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da21f2ec81fbee36e29d90d3a13a357c64739ac6c8f28faee12ded9eb7a33065->leave($__internal_da21f2ec81fbee36e29d90d3a13a357c64739ac6c8f28faee12ded9eb7a33065_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3ef5dbfd4d229987d2e488f2276211fc5604b880434d278aee68eb8edc4a0d11 = $this->env->getExtension("native_profiler");
        $__internal_3ef5dbfd4d229987d2e488f2276211fc5604b880434d278aee68eb8edc4a0d11->enter($__internal_3ef5dbfd4d229987d2e488f2276211fc5604b880434d278aee68eb8edc4a0d11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Home";
        
        $__internal_3ef5dbfd4d229987d2e488f2276211fc5604b880434d278aee68eb8edc4a0d11->leave($__internal_3ef5dbfd4d229987d2e488f2276211fc5604b880434d278aee68eb8edc4a0d11_prof);

    }

    // line 5
    public function block_sidebarcontent($context, array $blocks = array())
    {
        $__internal_fd850ea426e9b920724f450913d41abe781e788c1cbf56af52d3e53ee4e2fc91 = $this->env->getExtension("native_profiler");
        $__internal_fd850ea426e9b920724f450913d41abe781e788c1cbf56af52d3e53ee4e2fc91->enter($__internal_fd850ea426e9b920724f450913d41abe781e788c1cbf56af52d3e53ee4e2fc91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebarcontent"));

        // line 6
        echo "
    ";
        // line 7
        echo $this->env->getExtension('dump')->dump($this->env, $context);
        echo "

";
        
        $__internal_fd850ea426e9b920724f450913d41abe781e788c1cbf56af52d3e53ee4e2fc91->leave($__internal_fd850ea426e9b920724f450913d41abe781e788c1cbf56af52d3e53ee4e2fc91_prof);

    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        $__internal_1800d57bb53924caf7564a66069cd35f6c0bfdc0d662c1704c5966d1fcfae03d = $this->env->getExtension("native_profiler");
        $__internal_1800d57bb53924caf7564a66069cd35f6c0bfdc0d662c1704c5966d1fcfae03d->enter($__internal_1800d57bb53924caf7564a66069cd35f6c0bfdc0d662c1704c5966d1fcfae03d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_1800d57bb53924caf7564a66069cd35f6c0bfdc0d662c1704c5966d1fcfae03d->leave($__internal_1800d57bb53924caf7564a66069cd35f6c0bfdc0d662c1704c5966d1fcfae03d_prof);

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
