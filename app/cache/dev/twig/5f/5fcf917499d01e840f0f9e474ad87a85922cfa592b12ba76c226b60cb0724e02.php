<?php

/* hotel/edit.html.twig */
class __TwigTemplate_4756c710a5af3bdde0d6c405f9a5b2103e1becbcdccb65079e23774f02c9d735 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "hotel/edit.html.twig", 1);
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
        $__internal_f8bc4d38b27799a0fbe40845080aca125c7a5b6ea529f1545d10a1e342d43331 = $this->env->getExtension("native_profiler");
        $__internal_f8bc4d38b27799a0fbe40845080aca125c7a5b6ea529f1545d10a1e342d43331->enter($__internal_f8bc4d38b27799a0fbe40845080aca125c7a5b6ea529f1545d10a1e342d43331_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hotel/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8bc4d38b27799a0fbe40845080aca125c7a5b6ea529f1545d10a1e342d43331->leave($__internal_f8bc4d38b27799a0fbe40845080aca125c7a5b6ea529f1545d10a1e342d43331_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b4d89cbace1806f34d1ba1074f7441030fec2a80dc45564b0efc677332e1f047 = $this->env->getExtension("native_profiler");
        $__internal_b4d89cbace1806f34d1ba1074f7441030fec2a80dc45564b0efc677332e1f047->enter($__internal_b4d89cbace1806f34d1ba1074f7441030fec2a80dc45564b0efc677332e1f047_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Hotel edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("hotel_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_b4d89cbace1806f34d1ba1074f7441030fec2a80dc45564b0efc677332e1f047->leave($__internal_b4d89cbace1806f34d1ba1074f7441030fec2a80dc45564b0efc677332e1f047_prof);

    }

    public function getTemplateName()
    {
        return "hotel/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Hotel edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('hotel_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
