<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_a5151fe58b8b10b5bd6b156ab04a18fa0181ae598bdc19c29643b91cc504fbc1 extends Twig_Template
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
        $__internal_96223622ff34768de85efdadb93a7c3e365932a3e81bca64f955376d131609c5 = $this->env->getExtension("native_profiler");
        $__internal_96223622ff34768de85efdadb93a7c3e365932a3e81bca64f955376d131609c5->enter($__internal_96223622ff34768de85efdadb93a7c3e365932a3e81bca64f955376d131609c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_96223622ff34768de85efdadb93a7c3e365932a3e81bca64f955376d131609c5->leave($__internal_96223622ff34768de85efdadb93a7c3e365932a3e81bca64f955376d131609c5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
