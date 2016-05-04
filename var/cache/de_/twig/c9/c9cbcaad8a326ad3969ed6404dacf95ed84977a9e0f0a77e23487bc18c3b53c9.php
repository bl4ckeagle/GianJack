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
        $__internal_fdc898c18b9a10f6b1660d132d8a632056b30e49886b52d6d554c6e156eee41b = $this->env->getExtension("native_profiler");
        $__internal_fdc898c18b9a10f6b1660d132d8a632056b30e49886b52d6d554c6e156eee41b->enter($__internal_fdc898c18b9a10f6b1660d132d8a632056b30e49886b52d6d554c6e156eee41b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_fdc898c18b9a10f6b1660d132d8a632056b30e49886b52d6d554c6e156eee41b->leave($__internal_fdc898c18b9a10f6b1660d132d8a632056b30e49886b52d6d554c6e156eee41b_prof);

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
