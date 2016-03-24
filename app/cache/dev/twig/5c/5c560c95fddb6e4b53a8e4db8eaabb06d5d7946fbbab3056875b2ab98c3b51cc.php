<?php

/* PracticaBundleUsuarioBundle:usuario:numero.html.twig */
class __TwigTemplate_30690e6a22ee92a3ae3236a5a5e331ca68aae7c43b7801f1a211362d588298f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::principal.html.twig", "PracticaBundleUsuarioBundle:usuario:numero.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::principal.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7881a3033ab203aa75931c373dfdaca379f24001b1c8792f5930789541ee3fe3 = $this->env->getExtension("native_profiler");
        $__internal_7881a3033ab203aa75931c373dfdaca379f24001b1c8792f5930789541ee3fe3->enter($__internal_7881a3033ab203aa75931c373dfdaca379f24001b1c8792f5930789541ee3fe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PracticaBundleUsuarioBundle:usuario:numero.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7881a3033ab203aa75931c373dfdaca379f24001b1c8792f5930789541ee3fe3->leave($__internal_7881a3033ab203aa75931c373dfdaca379f24001b1c8792f5930789541ee3fe3_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_57203a6c1de9a80495bff73e5db1978530498e83c5f2978268c6cce8699cec1f = $this->env->getExtension("native_profiler");
        $__internal_57203a6c1de9a80495bff73e5db1978530498e83c5f2978268c6cce8699cec1f->enter($__internal_57203a6c1de9a80495bff73e5db1978530498e83c5f2978268c6cce8699cec1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    
";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["numero"]) ? $context["numero"] : $this->getContext($context, "numero")), "html", null, true);
        echo "

 
  
          
          
";
        
        $__internal_57203a6c1de9a80495bff73e5db1978530498e83c5f2978268c6cce8699cec1f->leave($__internal_57203a6c1de9a80495bff73e5db1978530498e83c5f2978268c6cce8699cec1f_prof);

    }

    public function getTemplateName()
    {
        return "PracticaBundleUsuarioBundle:usuario:numero.html.twig";
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
/* {% extends '::principal.html.twig' %}*/
/* */
/* */
/* {% block body -%}*/
/*     {{parent()}}*/
/*     */
/* {{numero}}*/
/* */
/*  */
/*   */
/*           */
/*           */
/* {% endblock %}*/
/* */
