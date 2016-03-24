<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_d5807110b5c2a67da4e50959eb32f0fb69a4f7008d4629db09db491cfc2d7e76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a5e8f3662568d8eb4a3af43147eddf1e52f13fe4082de542539077900e6e3e80 = $this->env->getExtension("native_profiler");
        $__internal_a5e8f3662568d8eb4a3af43147eddf1e52f13fe4082de542539077900e6e3e80->enter($__internal_a5e8f3662568d8eb4a3af43147eddf1e52f13fe4082de542539077900e6e3e80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5e8f3662568d8eb4a3af43147eddf1e52f13fe4082de542539077900e6e3e80->leave($__internal_a5e8f3662568d8eb4a3af43147eddf1e52f13fe4082de542539077900e6e3e80_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ac7b8e8464f7829ae8fa5668d149d1041b1a6f53cd74bf3d1f64a288ec7db8d8 = $this->env->getExtension("native_profiler");
        $__internal_ac7b8e8464f7829ae8fa5668d149d1041b1a6f53cd74bf3d1f64a288ec7db8d8->enter($__internal_ac7b8e8464f7829ae8fa5668d149d1041b1a6f53cd74bf3d1f64a288ec7db8d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_ac7b8e8464f7829ae8fa5668d149d1041b1a6f53cd74bf3d1f64a288ec7db8d8->leave($__internal_ac7b8e8464f7829ae8fa5668d149d1041b1a6f53cd74bf3d1f64a288ec7db8d8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_adee7d0f5857f9b6f84fbcd025a5518decb3d3e8184f06de9aeaee77538f75c9 = $this->env->getExtension("native_profiler");
        $__internal_adee7d0f5857f9b6f84fbcd025a5518decb3d3e8184f06de9aeaee77538f75c9->enter($__internal_adee7d0f5857f9b6f84fbcd025a5518decb3d3e8184f06de9aeaee77538f75c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_adee7d0f5857f9b6f84fbcd025a5518decb3d3e8184f06de9aeaee77538f75c9->leave($__internal_adee7d0f5857f9b6f84fbcd025a5518decb3d3e8184f06de9aeaee77538f75c9_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_d7313f20bc8029b037396472c4434cc606c37f0dfb30965f32a46a3d005268bb = $this->env->getExtension("native_profiler");
        $__internal_d7313f20bc8029b037396472c4434cc606c37f0dfb30965f32a46a3d005268bb->enter($__internal_d7313f20bc8029b037396472c4434cc606c37f0dfb30965f32a46a3d005268bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_d7313f20bc8029b037396472c4434cc606c37f0dfb30965f32a46a3d005268bb->leave($__internal_d7313f20bc8029b037396472c4434cc606c37f0dfb30965f32a46a3d005268bb_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_f423fa4ed65159cd59a83a3c9ab65d081c76bc9a7ed253d6180b3dda25a9b687 = $this->env->getExtension("native_profiler");
        $__internal_f423fa4ed65159cd59a83a3c9ab65d081c76bc9a7ed253d6180b3dda25a9b687->enter($__internal_f423fa4ed65159cd59a83a3c9ab65d081c76bc9a7ed253d6180b3dda25a9b687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_f423fa4ed65159cd59a83a3c9ab65d081c76bc9a7ed253d6180b3dda25a9b687->leave($__internal_f423fa4ed65159cd59a83a3c9ab65d081c76bc9a7ed253d6180b3dda25a9b687_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "TwigBundle::layout.html.twig" %}*/
/* */
/* {% block head %}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}" />*/
/* {% endblock %}*/
/* */
/* {% block title 'Web Configurator Bundle' %}*/
/* */
/* {% block body %}*/
/*     <div class="block">*/
/*         {% block content %}{% endblock %}*/
/*     </div>*/
/*     <div class="version">Symfony Standard Edition v.{{ version }}</div>*/
/* {% endblock %}*/
/* */
