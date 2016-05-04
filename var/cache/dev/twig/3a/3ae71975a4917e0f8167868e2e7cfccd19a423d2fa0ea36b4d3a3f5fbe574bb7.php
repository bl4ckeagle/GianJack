<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_6d9a9dde7d488e229a6ca48126a31d543ac4fcdc75c0e8bf8977482c85db3701 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d08e4bb21e0b18d941415520ec2a1139fe3d896a576c20559e4d18b71ec1765a = $this->env->getExtension("native_profiler");
        $__internal_d08e4bb21e0b18d941415520ec2a1139fe3d896a576c20559e4d18b71ec1765a->enter($__internal_d08e4bb21e0b18d941415520ec2a1139fe3d896a576c20559e4d18b71ec1765a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d08e4bb21e0b18d941415520ec2a1139fe3d896a576c20559e4d18b71ec1765a->leave($__internal_d08e4bb21e0b18d941415520ec2a1139fe3d896a576c20559e4d18b71ec1765a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a0850f1758f024d06086b2cd3f9c69426a04b3f3af66d2a7494606fc581abb39 = $this->env->getExtension("native_profiler");
        $__internal_a0850f1758f024d06086b2cd3f9c69426a04b3f3af66d2a7494606fc581abb39->enter($__internal_a0850f1758f024d06086b2cd3f9c69426a04b3f3af66d2a7494606fc581abb39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_a0850f1758f024d06086b2cd3f9c69426a04b3f3af66d2a7494606fc581abb39->leave($__internal_a0850f1758f024d06086b2cd3f9c69426a04b3f3af66d2a7494606fc581abb39_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c49de03eb8524f45c6c36885bc2b7079864a54603979590a6ac0e04bcf3f0697 = $this->env->getExtension("native_profiler");
        $__internal_c49de03eb8524f45c6c36885bc2b7079864a54603979590a6ac0e04bcf3f0697->enter($__internal_c49de03eb8524f45c6c36885bc2b7079864a54603979590a6ac0e04bcf3f0697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_c49de03eb8524f45c6c36885bc2b7079864a54603979590a6ac0e04bcf3f0697->leave($__internal_c49de03eb8524f45c6c36885bc2b7079864a54603979590a6ac0e04bcf3f0697_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c2ff32ce185968159509368ec3a51e8d759f3781f3de214fd8e3dd437b2aeb1b = $this->env->getExtension("native_profiler");
        $__internal_c2ff32ce185968159509368ec3a51e8d759f3781f3de214fd8e3dd437b2aeb1b->enter($__internal_c2ff32ce185968159509368ec3a51e8d759f3781f3de214fd8e3dd437b2aeb1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_c2ff32ce185968159509368ec3a51e8d759f3781f3de214fd8e3dd437b2aeb1b->leave($__internal_c2ff32ce185968159509368ec3a51e8d759f3781f3de214fd8e3dd437b2aeb1b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
