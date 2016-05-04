<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_3b31a3d07d05dd38b8c4da0e1c9d34dce14b6ef1da8b076a76834cb684e76f15 extends Twig_Template
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
        $__internal_51cced7e85653bdad5dd40a331dc681f886cb9025b47b87a3b9e16ccf0295f72 = $this->env->getExtension("native_profiler");
        $__internal_51cced7e85653bdad5dd40a331dc681f886cb9025b47b87a3b9e16ccf0295f72->enter($__internal_51cced7e85653bdad5dd40a331dc681f886cb9025b47b87a3b9e16ccf0295f72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_51cced7e85653bdad5dd40a331dc681f886cb9025b47b87a3b9e16ccf0295f72->leave($__internal_51cced7e85653bdad5dd40a331dc681f886cb9025b47b87a3b9e16ccf0295f72_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
