<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_59afebfcf33fe1f63a04de6a9a3c2e21c289c9effdc43be53757edb9c55c4e80 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_c44ca0b181481d80fb704d8641fe288b4de895a15acddcae487d4d3c5d78c388 = $this->env->getExtension("native_profiler");
        $__internal_c44ca0b181481d80fb704d8641fe288b4de895a15acddcae487d4d3c5d78c388->enter($__internal_c44ca0b181481d80fb704d8641fe288b4de895a15acddcae487d4d3c5d78c388_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c44ca0b181481d80fb704d8641fe288b4de895a15acddcae487d4d3c5d78c388->leave($__internal_c44ca0b181481d80fb704d8641fe288b4de895a15acddcae487d4d3c5d78c388_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9a0f0349a050f0312a4c539f1675d5734fdc05d788bd572acdbde2038f23ac8d = $this->env->getExtension("native_profiler");
        $__internal_9a0f0349a050f0312a4c539f1675d5734fdc05d788bd572acdbde2038f23ac8d->enter($__internal_9a0f0349a050f0312a4c539f1675d5734fdc05d788bd572acdbde2038f23ac8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9a0f0349a050f0312a4c539f1675d5734fdc05d788bd572acdbde2038f23ac8d->leave($__internal_9a0f0349a050f0312a4c539f1675d5734fdc05d788bd572acdbde2038f23ac8d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_97b71f2e8782ebe1da1e13b948919f037206b5e620c9adf6e7001152151adf34 = $this->env->getExtension("native_profiler");
        $__internal_97b71f2e8782ebe1da1e13b948919f037206b5e620c9adf6e7001152151adf34->enter($__internal_97b71f2e8782ebe1da1e13b948919f037206b5e620c9adf6e7001152151adf34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_97b71f2e8782ebe1da1e13b948919f037206b5e620c9adf6e7001152151adf34->leave($__internal_97b71f2e8782ebe1da1e13b948919f037206b5e620c9adf6e7001152151adf34_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5f9ce6a123daef578cca9afb181e17c402ada6b51a820c0eae38dc604a36c6c2 = $this->env->getExtension("native_profiler");
        $__internal_5f9ce6a123daef578cca9afb181e17c402ada6b51a820c0eae38dc604a36c6c2->enter($__internal_5f9ce6a123daef578cca9afb181e17c402ada6b51a820c0eae38dc604a36c6c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5f9ce6a123daef578cca9afb181e17c402ada6b51a820c0eae38dc604a36c6c2->leave($__internal_5f9ce6a123daef578cca9afb181e17c402ada6b51a820c0eae38dc604a36c6c2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
