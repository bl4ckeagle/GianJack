<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_ad538b3adf71d84fb283fba92d08643fe947084a1b5f629a523b057965224521 extends Twig_Template
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
        $__internal_b1b33364247e01b82e343ce3c9acf76b5ae0b8cd9958f862bba84adce815095c = $this->env->getExtension("native_profiler");
        $__internal_b1b33364247e01b82e343ce3c9acf76b5ae0b8cd9958f862bba84adce815095c->enter($__internal_b1b33364247e01b82e343ce3c9acf76b5ae0b8cd9958f862bba84adce815095c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_b1b33364247e01b82e343ce3c9acf76b5ae0b8cd9958f862bba84adce815095c->leave($__internal_b1b33364247e01b82e343ce3c9acf76b5ae0b8cd9958f862bba84adce815095c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
