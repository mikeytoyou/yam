<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_dbe417a159a54a266accb7aacda53e0a30f7600a9755d19d1060bdc56a9ed2a4 extends Twig_Template
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
        $__internal_6f6462da6bb01fdc401a071621a908ff2547000f46d5d865f6d09954d1e990ac = $this->env->getExtension("native_profiler");
        $__internal_6f6462da6bb01fdc401a071621a908ff2547000f46d5d865f6d09954d1e990ac->enter($__internal_6f6462da6bb01fdc401a071621a908ff2547000f46d5d865f6d09954d1e990ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f6462da6bb01fdc401a071621a908ff2547000f46d5d865f6d09954d1e990ac->leave($__internal_6f6462da6bb01fdc401a071621a908ff2547000f46d5d865f6d09954d1e990ac_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ac23592a1ad13d04f904c290f61cbd55e22d014a0cb510b0d91377df22e2bbc7 = $this->env->getExtension("native_profiler");
        $__internal_ac23592a1ad13d04f904c290f61cbd55e22d014a0cb510b0d91377df22e2bbc7->enter($__internal_ac23592a1ad13d04f904c290f61cbd55e22d014a0cb510b0d91377df22e2bbc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ac23592a1ad13d04f904c290f61cbd55e22d014a0cb510b0d91377df22e2bbc7->leave($__internal_ac23592a1ad13d04f904c290f61cbd55e22d014a0cb510b0d91377df22e2bbc7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5ce35f3eb6942b0bd5586c687755f32e807689a47c7141616d56dbe49e2ca353 = $this->env->getExtension("native_profiler");
        $__internal_5ce35f3eb6942b0bd5586c687755f32e807689a47c7141616d56dbe49e2ca353->enter($__internal_5ce35f3eb6942b0bd5586c687755f32e807689a47c7141616d56dbe49e2ca353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5ce35f3eb6942b0bd5586c687755f32e807689a47c7141616d56dbe49e2ca353->leave($__internal_5ce35f3eb6942b0bd5586c687755f32e807689a47c7141616d56dbe49e2ca353_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_cfd4d375a781449d640c8faf5d1adff86597f26c7f20fc812f1084eb980a3224 = $this->env->getExtension("native_profiler");
        $__internal_cfd4d375a781449d640c8faf5d1adff86597f26c7f20fc812f1084eb980a3224->enter($__internal_cfd4d375a781449d640c8faf5d1adff86597f26c7f20fc812f1084eb980a3224_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_cfd4d375a781449d640c8faf5d1adff86597f26c7f20fc812f1084eb980a3224->leave($__internal_cfd4d375a781449d640c8faf5d1adff86597f26c7f20fc812f1084eb980a3224_prof);

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
