<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_d6929f92b5369bc2541cd4d74fed2bf006bf629ba208d5d7261e35bc31562124 extends Twig_Template
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
        $__internal_c7aae60aeda34051d77297474c102162a87510271c36b462dbc1b933a26c9201 = $this->env->getExtension("native_profiler");
        $__internal_c7aae60aeda34051d77297474c102162a87510271c36b462dbc1b933a26c9201->enter($__internal_c7aae60aeda34051d77297474c102162a87510271c36b462dbc1b933a26c9201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7aae60aeda34051d77297474c102162a87510271c36b462dbc1b933a26c9201->leave($__internal_c7aae60aeda34051d77297474c102162a87510271c36b462dbc1b933a26c9201_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_779f85cfcb3b9205df09f108eee6ddfb3fd155f3066dbf56216cf4d2e78924a2 = $this->env->getExtension("native_profiler");
        $__internal_779f85cfcb3b9205df09f108eee6ddfb3fd155f3066dbf56216cf4d2e78924a2->enter($__internal_779f85cfcb3b9205df09f108eee6ddfb3fd155f3066dbf56216cf4d2e78924a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_779f85cfcb3b9205df09f108eee6ddfb3fd155f3066dbf56216cf4d2e78924a2->leave($__internal_779f85cfcb3b9205df09f108eee6ddfb3fd155f3066dbf56216cf4d2e78924a2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3cd4cb59d23535e40d37a04b6e96c238a5a7ef124ba1f3dbcb0157b76a76c5c4 = $this->env->getExtension("native_profiler");
        $__internal_3cd4cb59d23535e40d37a04b6e96c238a5a7ef124ba1f3dbcb0157b76a76c5c4->enter($__internal_3cd4cb59d23535e40d37a04b6e96c238a5a7ef124ba1f3dbcb0157b76a76c5c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3cd4cb59d23535e40d37a04b6e96c238a5a7ef124ba1f3dbcb0157b76a76c5c4->leave($__internal_3cd4cb59d23535e40d37a04b6e96c238a5a7ef124ba1f3dbcb0157b76a76c5c4_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_baed65fd0aa88ad6af61ffe33a089d709f50add08b89ab831324a72939cbe40c = $this->env->getExtension("native_profiler");
        $__internal_baed65fd0aa88ad6af61ffe33a089d709f50add08b89ab831324a72939cbe40c->enter($__internal_baed65fd0aa88ad6af61ffe33a089d709f50add08b89ab831324a72939cbe40c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_baed65fd0aa88ad6af61ffe33a089d709f50add08b89ab831324a72939cbe40c->leave($__internal_baed65fd0aa88ad6af61ffe33a089d709f50add08b89ab831324a72939cbe40c_prof);

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
