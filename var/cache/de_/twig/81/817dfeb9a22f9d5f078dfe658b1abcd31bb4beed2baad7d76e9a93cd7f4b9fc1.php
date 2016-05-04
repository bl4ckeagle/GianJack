<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_3a9d717c6eaf4fd2bbf1df914e5e7bc72652bb7346e2608006fd925df763a70e extends Twig_Template
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
        $__internal_f39c008df04e48bcd46d6b21c5d8909a3044a04f6dcb1918549620429be874f1 = $this->env->getExtension("native_profiler");
        $__internal_f39c008df04e48bcd46d6b21c5d8909a3044a04f6dcb1918549620429be874f1->enter($__internal_f39c008df04e48bcd46d6b21c5d8909a3044a04f6dcb1918549620429be874f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_f39c008df04e48bcd46d6b21c5d8909a3044a04f6dcb1918549620429be874f1->leave($__internal_f39c008df04e48bcd46d6b21c5d8909a3044a04f6dcb1918549620429be874f1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
