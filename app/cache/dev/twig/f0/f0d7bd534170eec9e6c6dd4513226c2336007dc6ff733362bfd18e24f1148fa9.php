<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_8b7280204188bd9b690aeb2a1ffc16c984d8562eedd93540ff8db701795502aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2935e6e0fa1af6dde1577f3afc098aca1b5fabcad752c9c261f075eb72dc4bd6 = $this->env->getExtension("native_profiler");
        $__internal_2935e6e0fa1af6dde1577f3afc098aca1b5fabcad752c9c261f075eb72dc4bd6->enter($__internal_2935e6e0fa1af6dde1577f3afc098aca1b5fabcad752c9c261f075eb72dc4bd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2935e6e0fa1af6dde1577f3afc098aca1b5fabcad752c9c261f075eb72dc4bd6->leave($__internal_2935e6e0fa1af6dde1577f3afc098aca1b5fabcad752c9c261f075eb72dc4bd6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6d7473ed0bcc1419c6b0395c8fe0db66ca08cac7dee5feef0a4396c12ae31145 = $this->env->getExtension("native_profiler");
        $__internal_6d7473ed0bcc1419c6b0395c8fe0db66ca08cac7dee5feef0a4396c12ae31145->enter($__internal_6d7473ed0bcc1419c6b0395c8fe0db66ca08cac7dee5feef0a4396c12ae31145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_6d7473ed0bcc1419c6b0395c8fe0db66ca08cac7dee5feef0a4396c12ae31145->leave($__internal_6d7473ed0bcc1419c6b0395c8fe0db66ca08cac7dee5feef0a4396c12ae31145_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a4bbf1002bf04386a875ed08eaa6b6dd945a4c5fbff20ca166a20ba10656e916 = $this->env->getExtension("native_profiler");
        $__internal_a4bbf1002bf04386a875ed08eaa6b6dd945a4c5fbff20ca166a20ba10656e916->enter($__internal_a4bbf1002bf04386a875ed08eaa6b6dd945a4c5fbff20ca166a20ba10656e916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a4bbf1002bf04386a875ed08eaa6b6dd945a4c5fbff20ca166a20ba10656e916->leave($__internal_a4bbf1002bf04386a875ed08eaa6b6dd945a4c5fbff20ca166a20ba10656e916_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_61018c84264e6d02ecc06552b4b1ea30128b7e5a9d6564241cf785513aa21cfc = $this->env->getExtension("native_profiler");
        $__internal_61018c84264e6d02ecc06552b4b1ea30128b7e5a9d6564241cf785513aa21cfc->enter($__internal_61018c84264e6d02ecc06552b4b1ea30128b7e5a9d6564241cf785513aa21cfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_61018c84264e6d02ecc06552b4b1ea30128b7e5a9d6564241cf785513aa21cfc->leave($__internal_61018c84264e6d02ecc06552b4b1ea30128b7e5a9d6564241cf785513aa21cfc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
