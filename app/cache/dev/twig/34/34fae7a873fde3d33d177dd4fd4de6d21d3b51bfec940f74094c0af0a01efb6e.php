<?php

/* paquete/new.html.twig */
class __TwigTemplate_0afa8d65c5b72260df637103434b47efdb57007b49c639b5a282b591e9e03926 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "paquete/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1eb2341cfddcb9275621777bc4a5ecd42745c2ae0ca78699e84e0c08f5b7d84b = $this->env->getExtension("native_profiler");
        $__internal_1eb2341cfddcb9275621777bc4a5ecd42745c2ae0ca78699e84e0c08f5b7d84b->enter($__internal_1eb2341cfddcb9275621777bc4a5ecd42745c2ae0ca78699e84e0c08f5b7d84b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "paquete/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1eb2341cfddcb9275621777bc4a5ecd42745c2ae0ca78699e84e0c08f5b7d84b->leave($__internal_1eb2341cfddcb9275621777bc4a5ecd42745c2ae0ca78699e84e0c08f5b7d84b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6a70fe127d7c7331e78d61f6f6331e5f9216b8e3aaaa8e6f440117db81fbc09e = $this->env->getExtension("native_profiler");
        $__internal_6a70fe127d7c7331e78d61f6f6331e5f9216b8e3aaaa8e6f440117db81fbc09e->enter($__internal_6a70fe127d7c7331e78d61f6f6331e5f9216b8e3aaaa8e6f440117db81fbc09e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Paquete creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("paquete_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_6a70fe127d7c7331e78d61f6f6331e5f9216b8e3aaaa8e6f440117db81fbc09e->leave($__internal_6a70fe127d7c7331e78d61f6f6331e5f9216b8e3aaaa8e6f440117db81fbc09e_prof);

    }

    public function getTemplateName()
    {
        return "paquete/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Paquete creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('paquete_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
