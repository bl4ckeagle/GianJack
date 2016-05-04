<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_dc4798ab60cbfda7e445129491c48f4de299f1561cf9660711a481d644b70421 extends Twig_Template
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
        $__internal_ce9b21c7800d8c5f6c3ba9b1abfb8cf8f0811776bcdbd2be1ec5d03e344134cf = $this->env->getExtension("native_profiler");
        $__internal_ce9b21c7800d8c5f6c3ba9b1abfb8cf8f0811776bcdbd2be1ec5d03e344134cf->enter($__internal_ce9b21c7800d8c5f6c3ba9b1abfb8cf8f0811776bcdbd2be1ec5d03e344134cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_ce9b21c7800d8c5f6c3ba9b1abfb8cf8f0811776bcdbd2be1ec5d03e344134cf->leave($__internal_ce9b21c7800d8c5f6c3ba9b1abfb8cf8f0811776bcdbd2be1ec5d03e344134cf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
