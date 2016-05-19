<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_788a81e4f1dedd1de479a57d65eb94827e472203d4ddfa425a141c519c78d640 extends Twig_Template
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
        $__internal_d28324707fa74ff2f88170d21b5fd6f2e4d165359028a4ed9934c3515fa60fdb = $this->env->getExtension("native_profiler");
        $__internal_d28324707fa74ff2f88170d21b5fd6f2e4d165359028a4ed9934c3515fa60fdb->enter($__internal_d28324707fa74ff2f88170d21b5fd6f2e4d165359028a4ed9934c3515fa60fdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d28324707fa74ff2f88170d21b5fd6f2e4d165359028a4ed9934c3515fa60fdb->leave($__internal_d28324707fa74ff2f88170d21b5fd6f2e4d165359028a4ed9934c3515fa60fdb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d150e1807995989a8d76c2b0394eda4eb3bf659c9b529df498df08ef88d93dec = $this->env->getExtension("native_profiler");
        $__internal_d150e1807995989a8d76c2b0394eda4eb3bf659c9b529df498df08ef88d93dec->enter($__internal_d150e1807995989a8d76c2b0394eda4eb3bf659c9b529df498df08ef88d93dec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d150e1807995989a8d76c2b0394eda4eb3bf659c9b529df498df08ef88d93dec->leave($__internal_d150e1807995989a8d76c2b0394eda4eb3bf659c9b529df498df08ef88d93dec_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b135e2e056947f954a04c620096fa39293e7b6337c09e83bfb1236b5686ffcd3 = $this->env->getExtension("native_profiler");
        $__internal_b135e2e056947f954a04c620096fa39293e7b6337c09e83bfb1236b5686ffcd3->enter($__internal_b135e2e056947f954a04c620096fa39293e7b6337c09e83bfb1236b5686ffcd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b135e2e056947f954a04c620096fa39293e7b6337c09e83bfb1236b5686ffcd3->leave($__internal_b135e2e056947f954a04c620096fa39293e7b6337c09e83bfb1236b5686ffcd3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_85abf69d8f8747feb9c32e5fb1755b3606b979569f98059b7624297c8fc37786 = $this->env->getExtension("native_profiler");
        $__internal_85abf69d8f8747feb9c32e5fb1755b3606b979569f98059b7624297c8fc37786->enter($__internal_85abf69d8f8747feb9c32e5fb1755b3606b979569f98059b7624297c8fc37786_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_85abf69d8f8747feb9c32e5fb1755b3606b979569f98059b7624297c8fc37786->leave($__internal_85abf69d8f8747feb9c32e5fb1755b3606b979569f98059b7624297c8fc37786_prof);

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
