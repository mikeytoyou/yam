<?php

/* paquete/index.html.twig */
class __TwigTemplate_8882f61b2c310871832ddeed0a2c885007a93b8dd55417e1829211c54f6fd46c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "paquete/index.html.twig", 1);
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
        $__internal_2795785edb3a9951a1b4ae9cd0eee0d75d2fef913ea76c16259a16520734cd83 = $this->env->getExtension("native_profiler");
        $__internal_2795785edb3a9951a1b4ae9cd0eee0d75d2fef913ea76c16259a16520734cd83->enter($__internal_2795785edb3a9951a1b4ae9cd0eee0d75d2fef913ea76c16259a16520734cd83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "paquete/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2795785edb3a9951a1b4ae9cd0eee0d75d2fef913ea76c16259a16520734cd83->leave($__internal_2795785edb3a9951a1b4ae9cd0eee0d75d2fef913ea76c16259a16520734cd83_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a7d2762bb8b94230249ab24fcd8b5c203e96fd1a8d8b620cbbcacba4172159ce = $this->env->getExtension("native_profiler");
        $__internal_a7d2762bb8b94230249ab24fcd8b5c203e96fd1a8d8b620cbbcacba4172159ce->enter($__internal_a7d2762bb8b94230249ab24fcd8b5c203e96fd1a8d8b620cbbcacba4172159ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Paquete list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Idcustomer</th>
                <th>Fechcreada</th>
                <th>Duracion</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["paquetes"]) ? $context["paquetes"] : $this->getContext($context, "paquetes")));
        foreach ($context['_seq'] as $context["_key"] => $context["paquete"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paquete_show", array("id" => $this->getAttribute($context["paquete"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["paquete"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["paquete"], "idCustomer", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            if ($this->getAttribute($context["paquete"], "fechCreada", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["paquete"], "fechCreada", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["paquete"], "duracion", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paquete_show", array("id" => $this->getAttribute($context["paquete"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paquete_edit", array("id" => $this->getAttribute($context["paquete"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paquete'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("paquete_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_a7d2762bb8b94230249ab24fcd8b5c203e96fd1a8d8b620cbbcacba4172159ce->leave($__internal_a7d2762bb8b94230249ab24fcd8b5c203e96fd1a8d8b620cbbcacba4172159ce_prof);

    }

    public function getTemplateName()
    {
        return "paquete/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 40,  103 => 35,  91 => 29,  85 => 26,  78 => 22,  72 => 21,  68 => 20,  62 => 19,  59 => 18,  55 => 17,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Paquete list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Idcustomer</th>*/
/*                 <th>Fechcreada</th>*/
/*                 <th>Duracion</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for paquete in paquetes %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('paquete_show', { 'id': paquete.id }) }}">{{ paquete.id }}</a></td>*/
/*                 <td>{{ paquete.idCustomer }}</td>*/
/*                 <td>{% if paquete.fechCreada %}{{ paquete.fechCreada|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td>{{ paquete.duracion }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('paquete_show', { 'id': paquete.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('paquete_edit', { 'id': paquete.id }) }}">edit</a>*/
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
/*             <a href="{{ path('paquete_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
