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
        $__internal_f215fe86370dab4e309e8df58563b36685abc16825166c1fcb719a343ec836a3 = $this->env->getExtension("native_profiler");
        $__internal_f215fe86370dab4e309e8df58563b36685abc16825166c1fcb719a343ec836a3->enter($__internal_f215fe86370dab4e309e8df58563b36685abc16825166c1fcb719a343ec836a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_f215fe86370dab4e309e8df58563b36685abc16825166c1fcb719a343ec836a3->leave($__internal_f215fe86370dab4e309e8df58563b36685abc16825166c1fcb719a343ec836a3_prof);

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
