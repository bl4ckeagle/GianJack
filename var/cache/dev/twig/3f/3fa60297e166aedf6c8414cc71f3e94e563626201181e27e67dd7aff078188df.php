<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_6f3b7ef56abc1f39c337c6456ddb3ac5fcea5282fc90123f1832a3175c643182 extends Twig_Template
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
        $__internal_229e7c0fb5273c48a72177dcc3897616ce6c854f9540fbe8ef8ee448d9097308 = $this->env->getExtension("native_profiler");
        $__internal_229e7c0fb5273c48a72177dcc3897616ce6c854f9540fbe8ef8ee448d9097308->enter($__internal_229e7c0fb5273c48a72177dcc3897616ce6c854f9540fbe8ef8ee448d9097308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_229e7c0fb5273c48a72177dcc3897616ce6c854f9540fbe8ef8ee448d9097308->leave($__internal_229e7c0fb5273c48a72177dcc3897616ce6c854f9540fbe8ef8ee448d9097308_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
