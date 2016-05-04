<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_fb58da930732873f406449dfa6b4063efe063dfc0b3efe73f6a771a288c94c03 extends Twig_Template
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
        $__internal_f4b5586e410f744ad116b0c0b51154302b8075ccad8091a78afeb3a74e81bebe = $this->env->getExtension("native_profiler");
        $__internal_f4b5586e410f744ad116b0c0b51154302b8075ccad8091a78afeb3a74e81bebe->enter($__internal_f4b5586e410f744ad116b0c0b51154302b8075ccad8091a78afeb3a74e81bebe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_f4b5586e410f744ad116b0c0b51154302b8075ccad8091a78afeb3a74e81bebe->leave($__internal_f4b5586e410f744ad116b0c0b51154302b8075ccad8091a78afeb3a74e81bebe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
