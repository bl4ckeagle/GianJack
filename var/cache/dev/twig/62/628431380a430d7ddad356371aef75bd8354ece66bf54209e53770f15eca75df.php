<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_dff0e6371e34ba4e02832f6996d65aefd271a8b8b95f72b83554f9caafb61e7a extends Twig_Template
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
        $__internal_230fe7c5aceef44e422de5d4a6451d0d9f58658733c4703d0a57a8c71a0256d7 = $this->env->getExtension("native_profiler");
        $__internal_230fe7c5aceef44e422de5d4a6451d0d9f58658733c4703d0a57a8c71a0256d7->enter($__internal_230fe7c5aceef44e422de5d4a6451d0d9f58658733c4703d0a57a8c71a0256d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_230fe7c5aceef44e422de5d4a6451d0d9f58658733c4703d0a57a8c71a0256d7->leave($__internal_230fe7c5aceef44e422de5d4a6451d0d9f58658733c4703d0a57a8c71a0256d7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
