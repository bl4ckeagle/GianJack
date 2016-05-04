<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_346b7dc7d9990c4f2d8f4750b24bcffa45dadb32b4c26079cc284b9f2415c7c7 extends Twig_Template
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
        $__internal_80cdfaed3744a0ce0b83a528e3d7574eb215d490a18e46c1c50a07b94f461ff6 = $this->env->getExtension("native_profiler");
        $__internal_80cdfaed3744a0ce0b83a528e3d7574eb215d490a18e46c1c50a07b94f461ff6->enter($__internal_80cdfaed3744a0ce0b83a528e3d7574eb215d490a18e46c1c50a07b94f461ff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_80cdfaed3744a0ce0b83a528e3d7574eb215d490a18e46c1c50a07b94f461ff6->leave($__internal_80cdfaed3744a0ce0b83a528e3d7574eb215d490a18e46c1c50a07b94f461ff6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
