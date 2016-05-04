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
        $__internal_3a32076690ccd30dc4887866028a21f1c94f85002a68d2e1e90f0d313f8abdd6 = $this->env->getExtension("native_profiler");
        $__internal_3a32076690ccd30dc4887866028a21f1c94f85002a68d2e1e90f0d313f8abdd6->enter($__internal_3a32076690ccd30dc4887866028a21f1c94f85002a68d2e1e90f0d313f8abdd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_3a32076690ccd30dc4887866028a21f1c94f85002a68d2e1e90f0d313f8abdd6->leave($__internal_3a32076690ccd30dc4887866028a21f1c94f85002a68d2e1e90f0d313f8abdd6_prof);

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
