<?php

/* :photos:photos.html.twig */
class __TwigTemplate_b17a62251f7486c963df699b5a607cf66ef31bd7c4f51261dcea6f10b1f1eab2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BaseTemplate1.html.twig ", ":photos:photos.html.twig", 1);
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
        $__internal_870848a51c67a55b2708f4290931828dd1ee38c4d9700d55de71b2d83e9d238f = $this->env->getExtension("native_profiler");
        $__internal_870848a51c67a55b2708f4290931828dd1ee38c4d9700d55de71b2d83e9d238f->enter($__internal_870848a51c67a55b2708f4290931828dd1ee38c4d9700d55de71b2d83e9d238f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":photos:photos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_870848a51c67a55b2708f4290931828dd1ee38c4d9700d55de71b2d83e9d238f->leave($__internal_870848a51c67a55b2708f4290931828dd1ee38c4d9700d55de71b2d83e9d238f_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_92f9c29b2daba194d102af475cc0a89e88a05f21ca111145b52d8f45707bd22d = $this->env->getExtension("native_profiler");
        $__internal_92f9c29b2daba194d102af475cc0a89e88a05f21ca111145b52d8f45707bd22d->enter($__internal_92f9c29b2daba194d102af475cc0a89e88a05f21ca111145b52d8f45707bd22d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Photos";
        
        $__internal_92f9c29b2daba194d102af475cc0a89e88a05f21ca111145b52d8f45707bd22d->leave($__internal_92f9c29b2daba194d102af475cc0a89e88a05f21ca111145b52d8f45707bd22d_prof);

    }

    // line 5
    public function block_contentmaster($context, array $blocks = array())
    {
        $__internal_1707bf2d0cbd02b3a0ea82f3d7c48c1ffa7f8d206e58da0f824f3d5c895c60c2 = $this->env->getExtension("native_profiler");
        $__internal_1707bf2d0cbd02b3a0ea82f3d7c48c1ffa7f8d206e58da0f824f3d5c895c60c2->enter($__internal_1707bf2d0cbd02b3a0ea82f3d7c48c1ffa7f8d206e58da0f824f3d5c895c60c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentmaster"));

        // line 6
        echo " <div class=\"photos\">
<div class=\"jumbotron\">
 ";
        // line 8
        echo $this->env->getExtension('dump')->dump($this->env, $context);
        echo "



</div>
 </div>
";
        
        $__internal_1707bf2d0cbd02b3a0ea82f3d7c48c1ffa7f8d206e58da0f824f3d5c895c60c2->leave($__internal_1707bf2d0cbd02b3a0ea82f3d7c48c1ffa7f8d206e58da0f824f3d5c895c60c2_prof);

    }

    public function getTemplateName()
    {
        return ":photos:photos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 4,  11 => 1,);
    }
}
/* {% extends 'BaseTemplate1.html.twig ' %}*/
/* */
/* */
/* {% block title %}Photos{% endblock %}*/
/* {%block contentmaster  %}*/
/*  <div class="photos">*/
/* <div class="jumbotron">*/
/*  {{ dump() }}*/
/* */
/* */
/* */
/* </div>*/
/*  </div>*/
/* {% endblock %}*/
/* */
