<?php

/* hotel/new.html.twig */
class __TwigTemplate_22e475dc14fa0d5ae00a41406624d917104ef65f5e3b5923e038a39fab6c2ad7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "hotel/new.html.twig", 1);
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
        $__internal_ea2448a86738a5752c8b618905f4b012f5c36439bcce47db56bccb29057eae21 = $this->env->getExtension("native_profiler");
        $__internal_ea2448a86738a5752c8b618905f4b012f5c36439bcce47db56bccb29057eae21->enter($__internal_ea2448a86738a5752c8b618905f4b012f5c36439bcce47db56bccb29057eae21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hotel/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea2448a86738a5752c8b618905f4b012f5c36439bcce47db56bccb29057eae21->leave($__internal_ea2448a86738a5752c8b618905f4b012f5c36439bcce47db56bccb29057eae21_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5f169b4c2e098e5bcd957953969670c823ef829bf1b97f2d75365df200c0656c = $this->env->getExtension("native_profiler");
        $__internal_5f169b4c2e098e5bcd957953969670c823ef829bf1b97f2d75365df200c0656c->enter($__internal_5f169b4c2e098e5bcd957953969670c823ef829bf1b97f2d75365df200c0656c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Hotel creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("hotel_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_5f169b4c2e098e5bcd957953969670c823ef829bf1b97f2d75365df200c0656c->leave($__internal_5f169b4c2e098e5bcd957953969670c823ef829bf1b97f2d75365df200c0656c_prof);

    }

    public function getTemplateName()
    {
        return "hotel/new.html.twig";
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
/*     <h1>Hotel creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('hotel_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
