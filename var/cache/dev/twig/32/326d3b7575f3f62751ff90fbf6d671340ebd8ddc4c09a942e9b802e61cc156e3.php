<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_df09970f494abfb8ca38c18285055337272203d9befe5a4bc14abc9246eca5f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3b6fe6fd9a85391d3995e04a4e29e421525579bc7b40409100da298101ac30e8 = $this->env->getExtension("native_profiler");
        $__internal_3b6fe6fd9a85391d3995e04a4e29e421525579bc7b40409100da298101ac30e8->enter($__internal_3b6fe6fd9a85391d3995e04a4e29e421525579bc7b40409100da298101ac30e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b6fe6fd9a85391d3995e04a4e29e421525579bc7b40409100da298101ac30e8->leave($__internal_3b6fe6fd9a85391d3995e04a4e29e421525579bc7b40409100da298101ac30e8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5a6229440638e4f72167bb71a12273c76c42f2ecdb404e357accfebbf3f7fd17 = $this->env->getExtension("native_profiler");
        $__internal_5a6229440638e4f72167bb71a12273c76c42f2ecdb404e357accfebbf3f7fd17->enter($__internal_5a6229440638e4f72167bb71a12273c76c42f2ecdb404e357accfebbf3f7fd17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5a6229440638e4f72167bb71a12273c76c42f2ecdb404e357accfebbf3f7fd17->leave($__internal_5a6229440638e4f72167bb71a12273c76c42f2ecdb404e357accfebbf3f7fd17_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_77ee8c516631f8800e1270f686bb89ec2f6ec4ececcaf05e47a49ef82e748473 = $this->env->getExtension("native_profiler");
        $__internal_77ee8c516631f8800e1270f686bb89ec2f6ec4ececcaf05e47a49ef82e748473->enter($__internal_77ee8c516631f8800e1270f686bb89ec2f6ec4ececcaf05e47a49ef82e748473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_77ee8c516631f8800e1270f686bb89ec2f6ec4ececcaf05e47a49ef82e748473->leave($__internal_77ee8c516631f8800e1270f686bb89ec2f6ec4ececcaf05e47a49ef82e748473_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2b1af8a421ca2fe514becdc15f476ff40f8d914ce415f0fd0351ad684c93d19b = $this->env->getExtension("native_profiler");
        $__internal_2b1af8a421ca2fe514becdc15f476ff40f8d914ce415f0fd0351ad684c93d19b->enter($__internal_2b1af8a421ca2fe514becdc15f476ff40f8d914ce415f0fd0351ad684c93d19b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2b1af8a421ca2fe514becdc15f476ff40f8d914ce415f0fd0351ad684c93d19b->leave($__internal_2b1af8a421ca2fe514becdc15f476ff40f8d914ce415f0fd0351ad684c93d19b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
