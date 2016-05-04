<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_b739ed329b842ce6b85bc2339b170cc706001f8e9efc8b68420687f6dc800f03 extends Twig_Template
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
        $__internal_da7c3ba73b1756d97649fd8bc0a0e0e6384e27d89828d951a81fbd663597d9f5 = $this->env->getExtension("native_profiler");
        $__internal_da7c3ba73b1756d97649fd8bc0a0e0e6384e27d89828d951a81fbd663597d9f5->enter($__internal_da7c3ba73b1756d97649fd8bc0a0e0e6384e27d89828d951a81fbd663597d9f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_da7c3ba73b1756d97649fd8bc0a0e0e6384e27d89828d951a81fbd663597d9f5->leave($__internal_da7c3ba73b1756d97649fd8bc0a0e0e6384e27d89828d951a81fbd663597d9f5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
