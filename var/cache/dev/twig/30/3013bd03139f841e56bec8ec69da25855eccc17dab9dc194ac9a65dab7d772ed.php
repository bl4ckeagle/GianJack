<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_17025917b9c351cd97ac8ff46fed7e3ddfa9d5c5bc97ab6b096d2f804fa096aa extends Twig_Template
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
        $__internal_d464f565fe09076d00456d56dec5047a715fe8b100a84e328a1ea29a5c5e1d6b = $this->env->getExtension("native_profiler");
        $__internal_d464f565fe09076d00456d56dec5047a715fe8b100a84e328a1ea29a5c5e1d6b->enter($__internal_d464f565fe09076d00456d56dec5047a715fe8b100a84e328a1ea29a5c5e1d6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_d464f565fe09076d00456d56dec5047a715fe8b100a84e328a1ea29a5c5e1d6b->leave($__internal_d464f565fe09076d00456d56dec5047a715fe8b100a84e328a1ea29a5c5e1d6b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
