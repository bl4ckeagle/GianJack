<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_7210f9fdf2bc7454074477a12b2f07f6b5d71844ff6fa678c52c439ab13f4bfa extends Twig_Template
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
        $__internal_4f13e36de44747eaa6e24e0319c32cbd09d6cd58834506e95e3c409427860ab6 = $this->env->getExtension("native_profiler");
        $__internal_4f13e36de44747eaa6e24e0319c32cbd09d6cd58834506e95e3c409427860ab6->enter($__internal_4f13e36de44747eaa6e24e0319c32cbd09d6cd58834506e95e3c409427860ab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_4f13e36de44747eaa6e24e0319c32cbd09d6cd58834506e95e3c409427860ab6->leave($__internal_4f13e36de44747eaa6e24e0319c32cbd09d6cd58834506e95e3c409427860ab6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
