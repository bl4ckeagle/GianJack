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
        $__internal_3f846a4b7696a420baab9b6db7696ef2f28c6317c2e4b0197a41907a8ac2ef82 = $this->env->getExtension("native_profiler");
        $__internal_3f846a4b7696a420baab9b6db7696ef2f28c6317c2e4b0197a41907a8ac2ef82->enter($__internal_3f846a4b7696a420baab9b6db7696ef2f28c6317c2e4b0197a41907a8ac2ef82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_3f846a4b7696a420baab9b6db7696ef2f28c6317c2e4b0197a41907a8ac2ef82->leave($__internal_3f846a4b7696a420baab9b6db7696ef2f28c6317c2e4b0197a41907a8ac2ef82_prof);

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
