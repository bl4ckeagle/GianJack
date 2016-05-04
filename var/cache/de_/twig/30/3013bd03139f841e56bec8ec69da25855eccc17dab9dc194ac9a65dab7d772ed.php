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
        $__internal_645ca8158c5f34807bad5542eb735d139d07639e3a019c280c8ef1f9cc508937 = $this->env->getExtension("native_profiler");
        $__internal_645ca8158c5f34807bad5542eb735d139d07639e3a019c280c8ef1f9cc508937->enter($__internal_645ca8158c5f34807bad5542eb735d139d07639e3a019c280c8ef1f9cc508937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_645ca8158c5f34807bad5542eb735d139d07639e3a019c280c8ef1f9cc508937->leave($__internal_645ca8158c5f34807bad5542eb735d139d07639e3a019c280c8ef1f9cc508937_prof);

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
