<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_aa1de9f29b08179921f189c9cad253c532addd9e1e2eba4fb87dd9caea22dbd3 extends Twig_Template
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
        $__internal_62a9c903c1401e51fb422325faeada0d180036be3021908137c870590b3193cc = $this->env->getExtension("native_profiler");
        $__internal_62a9c903c1401e51fb422325faeada0d180036be3021908137c870590b3193cc->enter($__internal_62a9c903c1401e51fb422325faeada0d180036be3021908137c870590b3193cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_62a9c903c1401e51fb422325faeada0d180036be3021908137c870590b3193cc->leave($__internal_62a9c903c1401e51fb422325faeada0d180036be3021908137c870590b3193cc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
