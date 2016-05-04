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
        $__internal_430e57ab38951774b1f5d34884e8371f6abd1c83566f1aa4bc0f63ab54b3b7d7 = $this->env->getExtension("native_profiler");
        $__internal_430e57ab38951774b1f5d34884e8371f6abd1c83566f1aa4bc0f63ab54b3b7d7->enter($__internal_430e57ab38951774b1f5d34884e8371f6abd1c83566f1aa4bc0f63ab54b3b7d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_430e57ab38951774b1f5d34884e8371f6abd1c83566f1aa4bc0f63ab54b3b7d7->leave($__internal_430e57ab38951774b1f5d34884e8371f6abd1c83566f1aa4bc0f63ab54b3b7d7_prof);

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
