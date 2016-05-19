<?php

/* hotel/show.html.twig */
class __TwigTemplate_1419263400587a57084fef27b9a4f8eefb1fc27c2f39688989836b76e0a9a4d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "hotel/show.html.twig", 1);
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
        $__internal_d862d94b8e93cdef2e5c81cc9a258c3be0e8a31dbc551eab373543bf8d3ec47a = $this->env->getExtension("native_profiler");
        $__internal_d862d94b8e93cdef2e5c81cc9a258c3be0e8a31dbc551eab373543bf8d3ec47a->enter($__internal_d862d94b8e93cdef2e5c81cc9a258c3be0e8a31dbc551eab373543bf8d3ec47a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hotel/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d862d94b8e93cdef2e5c81cc9a258c3be0e8a31dbc551eab373543bf8d3ec47a->leave($__internal_d862d94b8e93cdef2e5c81cc9a258c3be0e8a31dbc551eab373543bf8d3ec47a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e48b993e0137d04adc29cc0694371a4f07aa9fee735f9807ba0f7aa93d9f87e1 = $this->env->getExtension("native_profiler");
        $__internal_e48b993e0137d04adc29cc0694371a4f07aa9fee735f9807ba0f7aa93d9f87e1->enter($__internal_e48b993e0137d04adc29cc0694371a4f07aa9fee735f9807ba0f7aa93d9f87e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Hotel</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hotel"]) ? $context["hotel"] : $this->getContext($context, "hotel")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hotel"]) ? $context["hotel"] : $this->getContext($context, "hotel")), "nombre", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Categoria</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hotel"]) ? $context["hotel"] : $this->getContext($context, "hotel")), "categoria", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("hotel_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hotel_edit", array("id" => $this->getAttribute((isset($context["hotel"]) ? $context["hotel"] : $this->getContext($context, "hotel")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 31
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 33
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_e48b993e0137d04adc29cc0694371a4f07aa9fee735f9807ba0f7aa93d9f87e1->leave($__internal_e48b993e0137d04adc29cc0694371a4f07aa9fee735f9807ba0f7aa93d9f87e1_prof);

    }

    public function getTemplateName()
    {
        return "hotel/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 33,  84 => 31,  78 => 28,  72 => 25,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Hotel</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ hotel.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nombre</th>*/
/*                 <td>{{ hotel.nombre }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Categoria</th>*/
/*                 <td>{{ hotel.categoria }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('hotel_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('hotel_edit', { 'id': hotel.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
