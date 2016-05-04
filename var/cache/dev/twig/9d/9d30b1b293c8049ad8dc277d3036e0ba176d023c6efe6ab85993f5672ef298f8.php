<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_2b3be8f67066654dad2e31159ca925d04afab950bd649c130c4da2402afa6b7b extends Twig_Template
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
        $__internal_70591f41e76e591fc1f412febe45c144e20295556d64cf4f76cd2aa016ddb5dd = $this->env->getExtension("native_profiler");
        $__internal_70591f41e76e591fc1f412febe45c144e20295556d64cf4f76cd2aa016ddb5dd->enter($__internal_70591f41e76e591fc1f412febe45c144e20295556d64cf4f76cd2aa016ddb5dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_70591f41e76e591fc1f412febe45c144e20295556d64cf4f76cd2aa016ddb5dd->leave($__internal_70591f41e76e591fc1f412febe45c144e20295556d64cf4f76cd2aa016ddb5dd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
