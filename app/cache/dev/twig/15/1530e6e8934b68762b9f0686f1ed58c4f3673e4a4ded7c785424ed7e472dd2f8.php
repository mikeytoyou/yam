<?php

/* base.html.twig */
class __TwigTemplate_11075c56ee0a56900d0f50e60ed4559c4e45253b2626721888cb4b796992de00 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0654c77bfbfa0efaa6a40761c110f0d0ffc51d663a62f699a33e4adb0d5ad5de = $this->env->getExtension("native_profiler");
        $__internal_0654c77bfbfa0efaa6a40761c110f0d0ffc51d663a62f699a33e4adb0d5ad5de->enter($__internal_0654c77bfbfa0efaa6a40761c110f0d0ffc51d663a62f699a33e4adb0d5ad5de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_0654c77bfbfa0efaa6a40761c110f0d0ffc51d663a62f699a33e4adb0d5ad5de->leave($__internal_0654c77bfbfa0efaa6a40761c110f0d0ffc51d663a62f699a33e4adb0d5ad5de_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2c0e6afb375d7102d816b1b91f1f6a7ea6ebd5fa0f8db8d309bfc6e36165f794 = $this->env->getExtension("native_profiler");
        $__internal_2c0e6afb375d7102d816b1b91f1f6a7ea6ebd5fa0f8db8d309bfc6e36165f794->enter($__internal_2c0e6afb375d7102d816b1b91f1f6a7ea6ebd5fa0f8db8d309bfc6e36165f794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_2c0e6afb375d7102d816b1b91f1f6a7ea6ebd5fa0f8db8d309bfc6e36165f794->leave($__internal_2c0e6afb375d7102d816b1b91f1f6a7ea6ebd5fa0f8db8d309bfc6e36165f794_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_13ce8bdc915d4d04c92b336d0f570bb6fb21c21cc123f6ad5fb4d36e9c91d45a = $this->env->getExtension("native_profiler");
        $__internal_13ce8bdc915d4d04c92b336d0f570bb6fb21c21cc123f6ad5fb4d36e9c91d45a->enter($__internal_13ce8bdc915d4d04c92b336d0f570bb6fb21c21cc123f6ad5fb4d36e9c91d45a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_13ce8bdc915d4d04c92b336d0f570bb6fb21c21cc123f6ad5fb4d36e9c91d45a->leave($__internal_13ce8bdc915d4d04c92b336d0f570bb6fb21c21cc123f6ad5fb4d36e9c91d45a_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_fdfb18c46a6ac90bfdd15548752eab952a0f645ab9e4591fe3ac15d39383b6d8 = $this->env->getExtension("native_profiler");
        $__internal_fdfb18c46a6ac90bfdd15548752eab952a0f645ab9e4591fe3ac15d39383b6d8->enter($__internal_fdfb18c46a6ac90bfdd15548752eab952a0f645ab9e4591fe3ac15d39383b6d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_fdfb18c46a6ac90bfdd15548752eab952a0f645ab9e4591fe3ac15d39383b6d8->leave($__internal_fdfb18c46a6ac90bfdd15548752eab952a0f645ab9e4591fe3ac15d39383b6d8_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_850e61c5be70ee79694c2836052e814e5716984a65be88cde469b86260499c0b = $this->env->getExtension("native_profiler");
        $__internal_850e61c5be70ee79694c2836052e814e5716984a65be88cde469b86260499c0b->enter($__internal_850e61c5be70ee79694c2836052e814e5716984a65be88cde469b86260499c0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_850e61c5be70ee79694c2836052e814e5716984a65be88cde469b86260499c0b->leave($__internal_850e61c5be70ee79694c2836052e814e5716984a65be88cde469b86260499c0b_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
