<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_4ff0c47ce437f763b00af66123d06a36feb3448b56e8a8b41695a323a1395b3a extends Twig_Template
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
        $__internal_430b6793ad667b7c91f3d6aea56e88e4978c1a83fd246466e1c5f9700e8dc8ed = $this->env->getExtension("native_profiler");
        $__internal_430b6793ad667b7c91f3d6aea56e88e4978c1a83fd246466e1c5f9700e8dc8ed->enter($__internal_430b6793ad667b7c91f3d6aea56e88e4978c1a83fd246466e1c5f9700e8dc8ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_430b6793ad667b7c91f3d6aea56e88e4978c1a83fd246466e1c5f9700e8dc8ed->leave($__internal_430b6793ad667b7c91f3d6aea56e88e4978c1a83fd246466e1c5f9700e8dc8ed_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
