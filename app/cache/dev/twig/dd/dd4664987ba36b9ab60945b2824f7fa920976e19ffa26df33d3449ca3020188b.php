<?php

/* hotel/index.html.twig */
class __TwigTemplate_38c605b675f37c7ced29753658ab80e556a528e8e4ce3dca583692a89f069df6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "hotel/index.html.twig", 1);
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
        $__internal_cd894b0f4516859e4303d96655956df21a518fe08cf7bc29b6da6aeba49a778a = $this->env->getExtension("native_profiler");
        $__internal_cd894b0f4516859e4303d96655956df21a518fe08cf7bc29b6da6aeba49a778a->enter($__internal_cd894b0f4516859e4303d96655956df21a518fe08cf7bc29b6da6aeba49a778a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hotel/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd894b0f4516859e4303d96655956df21a518fe08cf7bc29b6da6aeba49a778a->leave($__internal_cd894b0f4516859e4303d96655956df21a518fe08cf7bc29b6da6aeba49a778a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_103cce10f60b583365e87e3bb7dfd17b38dd95ed96a6ffe0afcd042c1902743a = $this->env->getExtension("native_profiler");
        $__internal_103cce10f60b583365e87e3bb7dfd17b38dd95ed96a6ffe0afcd042c1902743a->enter($__internal_103cce10f60b583365e87e3bb7dfd17b38dd95ed96a6ffe0afcd042c1902743a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Hotel list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Categoria</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["hotels"]) ? $context["hotels"] : $this->getContext($context, "hotels")));
        foreach ($context['_seq'] as $context["_key"] => $context["hotel"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hotel_show", array("id" => $this->getAttribute($context["hotel"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["hotel"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["hotel"], "nombre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["hotel"], "categoria", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hotel_show", array("id" => $this->getAttribute($context["hotel"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hotel_edit", array("id" => $this->getAttribute($context["hotel"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hotel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("hotel_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_103cce10f60b583365e87e3bb7dfd17b38dd95ed96a6ffe0afcd042c1902743a->leave($__internal_103cce10f60b583365e87e3bb7dfd17b38dd95ed96a6ffe0afcd042c1902743a_prof);

    }

    public function getTemplateName()
    {
        return "hotel/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 38,  96 => 33,  84 => 27,  78 => 24,  71 => 20,  67 => 19,  61 => 18,  58 => 17,  54 => 16,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Hotel list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Nombre</th>*/
/*                 <th>Categoria</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for hotel in hotels %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('hotel_show', { 'id': hotel.id }) }}">{{ hotel.id }}</a></td>*/
/*                 <td>{{ hotel.nombre }}</td>*/
/*                 <td>{{ hotel.categoria }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('hotel_show', { 'id': hotel.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('hotel_edit', { 'id': hotel.id }) }}">edit</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('hotel_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
