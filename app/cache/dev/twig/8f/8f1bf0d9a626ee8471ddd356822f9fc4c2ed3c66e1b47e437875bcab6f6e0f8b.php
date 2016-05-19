<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_c2600d5e67f3b964c2d92bdc917f90e4b9a78c146a651607de30a53aa2f8de45 extends Twig_Template
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
        $__internal_5cdd96b0b74218a45e23baa6d230336b26dfcc5f4ca9e6847d9d280004e0b3cf = $this->env->getExtension("native_profiler");
        $__internal_5cdd96b0b74218a45e23baa6d230336b26dfcc5f4ca9e6847d9d280004e0b3cf->enter($__internal_5cdd96b0b74218a45e23baa6d230336b26dfcc5f4ca9e6847d9d280004e0b3cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5cdd96b0b74218a45e23baa6d230336b26dfcc5f4ca9e6847d9d280004e0b3cf->leave($__internal_5cdd96b0b74218a45e23baa6d230336b26dfcc5f4ca9e6847d9d280004e0b3cf_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_43101575a52f820265a206d1295f0c6b1ea15bf0225f7b5e789849459c5898ce = $this->env->getExtension("native_profiler");
        $__internal_43101575a52f820265a206d1295f0c6b1ea15bf0225f7b5e789849459c5898ce->enter($__internal_43101575a52f820265a206d1295f0c6b1ea15bf0225f7b5e789849459c5898ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_43101575a52f820265a206d1295f0c6b1ea15bf0225f7b5e789849459c5898ce->leave($__internal_43101575a52f820265a206d1295f0c6b1ea15bf0225f7b5e789849459c5898ce_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e0d69b7224ae65f8ea74c558268a82ab785f0cf2b562db0a1257301e7b0493db = $this->env->getExtension("native_profiler");
        $__internal_e0d69b7224ae65f8ea74c558268a82ab785f0cf2b562db0a1257301e7b0493db->enter($__internal_e0d69b7224ae65f8ea74c558268a82ab785f0cf2b562db0a1257301e7b0493db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_e0d69b7224ae65f8ea74c558268a82ab785f0cf2b562db0a1257301e7b0493db->leave($__internal_e0d69b7224ae65f8ea74c558268a82ab785f0cf2b562db0a1257301e7b0493db_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1c33ba07b0ea89cd1c3ac84831db23686a528a6faa7ca7452298835d7591cd9b = $this->env->getExtension("native_profiler");
        $__internal_1c33ba07b0ea89cd1c3ac84831db23686a528a6faa7ca7452298835d7591cd9b->enter($__internal_1c33ba07b0ea89cd1c3ac84831db23686a528a6faa7ca7452298835d7591cd9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_1c33ba07b0ea89cd1c3ac84831db23686a528a6faa7ca7452298835d7591cd9b->leave($__internal_1c33ba07b0ea89cd1c3ac84831db23686a528a6faa7ca7452298835d7591cd9b_prof);

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
