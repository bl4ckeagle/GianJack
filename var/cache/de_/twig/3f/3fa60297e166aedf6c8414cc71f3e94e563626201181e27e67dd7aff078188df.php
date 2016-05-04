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
        $__internal_79784797d6864385c1040bf31770a320b8a5e33d3f287cba777c76a672e37c0c = $this->env->getExtension("native_profiler");
        $__internal_79784797d6864385c1040bf31770a320b8a5e33d3f287cba777c76a672e37c0c->enter($__internal_79784797d6864385c1040bf31770a320b8a5e33d3f287cba777c76a672e37c0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_79784797d6864385c1040bf31770a320b8a5e33d3f287cba777c76a672e37c0c->leave($__internal_79784797d6864385c1040bf31770a320b8a5e33d3f287cba777c76a672e37c0c_prof);

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
