<?php

/* paquete/show.html.twig */
class __TwigTemplate_b78917dc0c71ae38ee589403027370b57898605f8b2c6e7791c1498f722df8e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "paquete/show.html.twig", 1);
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
        $__internal_5b1bcfd3a43a1b6d47a9a75f76aac57448266295407b913f31d7b6349c744395 = $this->env->getExtension("native_profiler");
        $__internal_5b1bcfd3a43a1b6d47a9a75f76aac57448266295407b913f31d7b6349c744395->enter($__internal_5b1bcfd3a43a1b6d47a9a75f76aac57448266295407b913f31d7b6349c744395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "paquete/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b1bcfd3a43a1b6d47a9a75f76aac57448266295407b913f31d7b6349c744395->leave($__internal_5b1bcfd3a43a1b6d47a9a75f76aac57448266295407b913f31d7b6349c744395_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3dd64ffbad1c68e1069ac700c59c852cb94c99e49497c2b5f5cd92742519c28f = $this->env->getExtension("native_profiler");
        $__internal_3dd64ffbad1c68e1069ac700c59c852cb94c99e49497c2b5f5cd92742519c28f->enter($__internal_3dd64ffbad1c68e1069ac700c59c852cb94c99e49497c2b5f5cd92742519c28f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Paquete</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paquete"]) ? $context["paquete"] : $this->getContext($context, "paquete")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Idcustomer</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paquete"]) ? $context["paquete"] : $this->getContext($context, "paquete")), "idCustomer", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fechcreada</th>
                <td>";
        // line 18
        if ($this->getAttribute((isset($context["paquete"]) ? $context["paquete"] : $this->getContext($context, "paquete")), "fechCreada", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["paquete"]) ? $context["paquete"] : $this->getContext($context, "paquete")), "fechCreada", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Duracion</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paquete"]) ? $context["paquete"] : $this->getContext($context, "paquete")), "duracion", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("paquete_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paquete_edit", array("id" => $this->getAttribute((isset($context["paquete"]) ? $context["paquete"] : $this->getContext($context, "paquete")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 35
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 37
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_3dd64ffbad1c68e1069ac700c59c852cb94c99e49497c2b5f5cd92742519c28f->leave($__internal_3dd64ffbad1c68e1069ac700c59c852cb94c99e49497c2b5f5cd92742519c28f_prof);

    }

    public function getTemplateName()
    {
        return "paquete/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 37,  93 => 35,  87 => 32,  81 => 29,  71 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Paquete</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ paquete.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Idcustomer</th>*/
/*                 <td>{{ paquete.idCustomer }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Fechcreada</th>*/
/*                 <td>{% if paquete.fechCreada %}{{ paquete.fechCreada|date('Y-m-d') }}{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Duracion</th>*/
/*                 <td>{{ paquete.duracion }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('paquete_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('paquete_edit', { 'id': paquete.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
