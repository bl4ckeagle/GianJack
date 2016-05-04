<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_08d23dee2b0cc5120e68ca53dcdbe8363bd6f33ed2402b582c907070af3a7731 extends Twig_Template
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
        $__internal_c30af8a9d6ac88e6310ec13b3c347673b5369128038d739c50e4f204ac479e40 = $this->env->getExtension("native_profiler");
        $__internal_c30af8a9d6ac88e6310ec13b3c347673b5369128038d739c50e4f204ac479e40->enter($__internal_c30af8a9d6ac88e6310ec13b3c347673b5369128038d739c50e4f204ac479e40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_c30af8a9d6ac88e6310ec13b3c347673b5369128038d739c50e4f204ac479e40->leave($__internal_c30af8a9d6ac88e6310ec13b3c347673b5369128038d739c50e4f204ac479e40_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
