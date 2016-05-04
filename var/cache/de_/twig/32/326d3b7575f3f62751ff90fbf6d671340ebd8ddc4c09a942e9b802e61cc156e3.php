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
        $__internal_8ed3da8df0ad0981b0b1ec22abb4c2d7a5c06c98bf60039ed285d43efc838714 = $this->env->getExtension("native_profiler");
        $__internal_8ed3da8df0ad0981b0b1ec22abb4c2d7a5c06c98bf60039ed285d43efc838714->enter($__internal_8ed3da8df0ad0981b0b1ec22abb4c2d7a5c06c98bf60039ed285d43efc838714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ed3da8df0ad0981b0b1ec22abb4c2d7a5c06c98bf60039ed285d43efc838714->leave($__internal_8ed3da8df0ad0981b0b1ec22abb4c2d7a5c06c98bf60039ed285d43efc838714_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6a118c6312fd9a399a76f763b285149ca2fda7d6a2c6f47e913a17e500ce7aa9 = $this->env->getExtension("native_profiler");
        $__internal_6a118c6312fd9a399a76f763b285149ca2fda7d6a2c6f47e913a17e500ce7aa9->enter($__internal_6a118c6312fd9a399a76f763b285149ca2fda7d6a2c6f47e913a17e500ce7aa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6a118c6312fd9a399a76f763b285149ca2fda7d6a2c6f47e913a17e500ce7aa9->leave($__internal_6a118c6312fd9a399a76f763b285149ca2fda7d6a2c6f47e913a17e500ce7aa9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2db0347b5af0679b86113467c3f909470c895966bf71c0dc5651b4f1c058851a = $this->env->getExtension("native_profiler");
        $__internal_2db0347b5af0679b86113467c3f909470c895966bf71c0dc5651b4f1c058851a->enter($__internal_2db0347b5af0679b86113467c3f909470c895966bf71c0dc5651b4f1c058851a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2db0347b5af0679b86113467c3f909470c895966bf71c0dc5651b4f1c058851a->leave($__internal_2db0347b5af0679b86113467c3f909470c895966bf71c0dc5651b4f1c058851a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_43525a8a6a66f31bd43569305e90fa8a83c67ece04e6f45e291eeffcf25d450e = $this->env->getExtension("native_profiler");
        $__internal_43525a8a6a66f31bd43569305e90fa8a83c67ece04e6f45e291eeffcf25d450e->enter($__internal_43525a8a6a66f31bd43569305e90fa8a83c67ece04e6f45e291eeffcf25d450e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_43525a8a6a66f31bd43569305e90fa8a83c67ece04e6f45e291eeffcf25d450e->leave($__internal_43525a8a6a66f31bd43569305e90fa8a83c67ece04e6f45e291eeffcf25d450e_prof);

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
