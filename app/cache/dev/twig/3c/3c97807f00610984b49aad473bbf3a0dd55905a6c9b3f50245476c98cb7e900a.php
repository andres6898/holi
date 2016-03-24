<?php

/* PracticaBundleInicioBundle:Inicio:index.html.twig */
class __TwigTemplate_5360533457237a353eb6fd54772492bdad988f574d8cceb2c7b54ed7b162534e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "PracticaBundleInicioBundle:Inicio:index.html.twig", 1);
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
        $__internal_f1080f023a624bbd46fcebd9a7f5c6699950fd814998f43fb2ae108ee3ab4c3b = $this->env->getExtension("native_profiler");
        $__internal_f1080f023a624bbd46fcebd9a7f5c6699950fd814998f43fb2ae108ee3ab4c3b->enter($__internal_f1080f023a624bbd46fcebd9a7f5c6699950fd814998f43fb2ae108ee3ab4c3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PracticaBundleInicioBundle:Inicio:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1080f023a624bbd46fcebd9a7f5c6699950fd814998f43fb2ae108ee3ab4c3b->leave($__internal_f1080f023a624bbd46fcebd9a7f5c6699950fd814998f43fb2ae108ee3ab4c3b_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_375b2469bbca9e67a436214bdf9f9a13051c62b6c0fbb04878e3dfbbb1727bde = $this->env->getExtension("native_profiler");
        $__internal_375b2469bbca9e67a436214bdf9f9a13051c62b6c0fbb04878e3dfbbb1727bde->enter($__internal_375b2469bbca9e67a436214bdf9f9a13051c62b6c0fbb04878e3dfbbb1727bde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "     ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
";
        // line 7
        echo "     <h1>PRACTICA INICIO</h1>
  

        
 
 ";
        
        $__internal_375b2469bbca9e67a436214bdf9f9a13051c62b6c0fbb04878e3dfbbb1727bde->leave($__internal_375b2469bbca9e67a436214bdf9f9a13051c62b6c0fbb04878e3dfbbb1727bde_prof);

    }

    public function getTemplateName()
    {
        return "PracticaBundleInicioBundle:Inicio:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 7,  40 => 5,  34 => 4,  11 => 1,);
    }
}
/* {% extends"::base.html.twig" %}*/
/* */
/* */
/*  {% block body %}*/
/*      {{parent()}}*/
/* {#     {{Nav_inicio.li}}#}*/
/*      <h1>PRACTICA INICIO</h1>*/
/*   */
/* */
/*         */
/*  */
/*  {% endblock %}*/
/*   */
/*        */
/* */
