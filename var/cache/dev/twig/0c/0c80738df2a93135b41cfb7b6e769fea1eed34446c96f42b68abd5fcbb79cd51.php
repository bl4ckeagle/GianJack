<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_b28a0840ba3d129cee1047492e61ccc5436a36fb287d73ad7f547232f9b7697f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ef212f480ebc45f181c3ae910d6dc9a14fd33b8f91d9d8126a364c5a609eb4ea = $this->env->getExtension("native_profiler");
        $__internal_ef212f480ebc45f181c3ae910d6dc9a14fd33b8f91d9d8126a364c5a609eb4ea->enter($__internal_ef212f480ebc45f181c3ae910d6dc9a14fd33b8f91d9d8126a364c5a609eb4ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_ef212f480ebc45f181c3ae910d6dc9a14fd33b8f91d9d8126a364c5a609eb4ea->leave($__internal_ef212f480ebc45f181c3ae910d6dc9a14fd33b8f91d9d8126a364c5a609eb4ea_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_53f901e0ee04f677ab61e81c444454097b492d543f8f679cc578ba3d7979a416 = $this->env->getExtension("native_profiler");
        $__internal_53f901e0ee04f677ab61e81c444454097b492d543f8f679cc578ba3d7979a416->enter($__internal_53f901e0ee04f677ab61e81c444454097b492d543f8f679cc578ba3d7979a416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_53f901e0ee04f677ab61e81c444454097b492d543f8f679cc578ba3d7979a416->leave($__internal_53f901e0ee04f677ab61e81c444454097b492d543f8f679cc578ba3d7979a416_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
