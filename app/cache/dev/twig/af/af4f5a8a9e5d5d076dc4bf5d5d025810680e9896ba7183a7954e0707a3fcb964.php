<?php

/* PracticaBundleUsuarioBundle:usuario:index.html.twig */
class __TwigTemplate_8e3f74bc8eedac36a0d8889d39085c9273245cfd0e182da631d51967adad061c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "PracticaBundleUsuarioBundle:usuario:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1d2853e06f388f2a42b0c58c2a7b09e7309687f8c3ffe52c5382c4f69711ebfd = $this->env->getExtension("native_profiler");
        $__internal_1d2853e06f388f2a42b0c58c2a7b09e7309687f8c3ffe52c5382c4f69711ebfd->enter($__internal_1d2853e06f388f2a42b0c58c2a7b09e7309687f8c3ffe52c5382c4f69711ebfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PracticaBundleUsuarioBundle:usuario:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d2853e06f388f2a42b0c58c2a7b09e7309687f8c3ffe52c5382c4f69711ebfd->leave($__internal_1d2853e06f388f2a42b0c58c2a7b09e7309687f8c3ffe52c5382c4f69711ebfd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_00455f147748bb9214a7338494362e4e121e31adb13a59f1f55a4b58f8c7f689 = $this->env->getExtension("native_profiler");
        $__internal_00455f147748bb9214a7338494362e4e121e31adb13a59f1f55a4b58f8c7f689->enter($__internal_00455f147748bb9214a7338494362e4e121e31adb13a59f1f55a4b58f8c7f689_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <h1>usuario list</h1>

    <table class=\"table table-hover\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Username</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
                <th>Password</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 21
            echo "            <tr>
                <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "username", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nombre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "apellido", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "password", array()), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                    </li>
                </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("usuario_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
        
        $__internal_00455f147748bb9214a7338494362e4e121e31adb13a59f1f55a4b58f8c7f689->leave($__internal_00455f147748bb9214a7338494362e4e121e31adb13a59f1f55a4b58f8c7f689_prof);

    }

    public function getTemplateName()
    {
        return "PracticaBundleUsuarioBundle:usuario:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 45,  113 => 40,  101 => 34,  95 => 31,  88 => 27,  84 => 26,  80 => 25,  76 => 24,  72 => 23,  66 => 22,  63 => 21,  59 => 20,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     {{parent()}}*/
/*     <h1>usuario list</h1>*/
/* */
/*     <table class="table table-hover">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Username</th>*/
/*                 <th>Nombre</th>*/
/*                 <th>Apellido</th>*/
/*                 <th>Email</th>*/
/*                 <th>Password</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for entity in entities %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('usuario_show', { 'id': entity.id }) }}">{{ entity.id }}</a></td>*/
/*                 <td>{{ entity.username }}</td>*/
/*                 <td>{{ entity.nombre }}</td>*/
/*                 <td>{{ entity.apellido }}</td>*/
/*                 <td>{{ entity.email }}</td>*/
/*                 <td>{{ entity.password }}</td>*/
/*                 <td>*/
/*                 <ul>*/
/*                     <li>*/
/*                         <a href="{{ path('usuario_show', { 'id': entity.id }) }}">show</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="{{ path('usuario_edit', { 'id': entity.id }) }}">edit</a>*/
/*                     </li>*/
/*                 </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*         <ul>*/
/*         <li>*/
/*             <a href="{{ path('usuario_new') }}">*/
/*                 Create a new entry*/
/*             </a>*/
/*         </li>*/
/*     </ul>*/
/*     {% endblock %}*/
/* */
