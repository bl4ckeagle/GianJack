<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_bf635af8814904dba31de9b68a6ee4cecc9cd91fac493f77c5cf9975f739b7ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_02a90b025083c190b01413f1bbff75f4782307d853f69e2d90b1403ab496d800 = $this->env->getExtension("native_profiler");
        $__internal_02a90b025083c190b01413f1bbff75f4782307d853f69e2d90b1403ab496d800->enter($__internal_02a90b025083c190b01413f1bbff75f4782307d853f69e2d90b1403ab496d800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_02a90b025083c190b01413f1bbff75f4782307d853f69e2d90b1403ab496d800->leave($__internal_02a90b025083c190b01413f1bbff75f4782307d853f69e2d90b1403ab496d800_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($form->vars['multipart']): ?>enctype="multipart/form-data"<?php endif ?>*/
/* */
