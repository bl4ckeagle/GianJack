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
        $__internal_aa7c050eb8754556ed03f2262384ea7b200e9d7e4bce4c94edd310358df83b04 = $this->env->getExtension("native_profiler");
        $__internal_aa7c050eb8754556ed03f2262384ea7b200e9d7e4bce4c94edd310358df83b04->enter($__internal_aa7c050eb8754556ed03f2262384ea7b200e9d7e4bce4c94edd310358df83b04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_aa7c050eb8754556ed03f2262384ea7b200e9d7e4bce4c94edd310358df83b04->leave($__internal_aa7c050eb8754556ed03f2262384ea7b200e9d7e4bce4c94edd310358df83b04_prof);

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
