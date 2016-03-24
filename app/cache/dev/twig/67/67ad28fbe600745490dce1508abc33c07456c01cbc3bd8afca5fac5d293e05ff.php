<?php

/* base.html.twig */
class __TwigTemplate_f6a3fbfbe539a281ca2a86634b7e9674720006c1fa7c2d006f48f2fd61cd71c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c18a8db6106966f6246f38c6a00a05e463b5d7b3ad2f7ce1878426e6178c4d7f = $this->env->getExtension("native_profiler");
        $__internal_c18a8db6106966f6246f38c6a00a05e463b5d7b3ad2f7ce1878426e6178c4d7f->enter($__internal_c18a8db6106966f6246f38c6a00a05e463b5d7b3ad2f7ce1878426e6178c4d7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/css/bootstrap.css"), "html", null, true);
        echo "\"
    </head>
    <body>
        ";
        // line 11
        $this->displayBlock('body', $context, $blocks);
        // line 12
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 13
        echo "    </body>
</html>
";
        
        $__internal_c18a8db6106966f6246f38c6a00a05e463b5d7b3ad2f7ce1878426e6178c4d7f->leave($__internal_c18a8db6106966f6246f38c6a00a05e463b5d7b3ad2f7ce1878426e6178c4d7f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_64a4c6af2595e4727d61dea826a73ab3616bc09deb728796d7ce1a1e4aac82ad = $this->env->getExtension("native_profiler");
        $__internal_64a4c6af2595e4727d61dea826a73ab3616bc09deb728796d7ce1a1e4aac82ad->enter($__internal_64a4c6af2595e4727d61dea826a73ab3616bc09deb728796d7ce1a1e4aac82ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_64a4c6af2595e4727d61dea826a73ab3616bc09deb728796d7ce1a1e4aac82ad->leave($__internal_64a4c6af2595e4727d61dea826a73ab3616bc09deb728796d7ce1a1e4aac82ad_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_37bf36de2a4d4d3067a7f9d9524a737ee4c9e1a5894027988a3f80ea07c7c41e = $this->env->getExtension("native_profiler");
        $__internal_37bf36de2a4d4d3067a7f9d9524a737ee4c9e1a5894027988a3f80ea07c7c41e->enter($__internal_37bf36de2a4d4d3067a7f9d9524a737ee4c9e1a5894027988a3f80ea07c7c41e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_37bf36de2a4d4d3067a7f9d9524a737ee4c9e1a5894027988a3f80ea07c7c41e->leave($__internal_37bf36de2a4d4d3067a7f9d9524a737ee4c9e1a5894027988a3f80ea07c7c41e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3509c03c64255876af5be456bc7bde69327c020c3512b23c800c1df30e36b263 = $this->env->getExtension("native_profiler");
        $__internal_3509c03c64255876af5be456bc7bde69327c020c3512b23c800c1df30e36b263->enter($__internal_3509c03c64255876af5be456bc7bde69327c020c3512b23c800c1df30e36b263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3509c03c64255876af5be456bc7bde69327c020c3512b23c800c1df30e36b263->leave($__internal_3509c03c64255876af5be456bc7bde69327c020c3512b23c800c1df30e36b263_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_dade8fd32f0dae29cf97d196470889289475ec77a701bca71fee09ee702c2b00 = $this->env->getExtension("native_profiler");
        $__internal_dade8fd32f0dae29cf97d196470889289475ec77a701bca71fee09ee702c2b00->enter($__internal_dade8fd32f0dae29cf97d196470889289475ec77a701bca71fee09ee702c2b00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_dade8fd32f0dae29cf97d196470889289475ec77a701bca71fee09ee702c2b00->leave($__internal_dade8fd32f0dae29cf97d196470889289475ec77a701bca71fee09ee702c2b00_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 12,  86 => 11,  75 => 6,  63 => 5,  54 => 13,  51 => 12,  49 => 11,  43 => 8,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*         <link rel="stylesheet" href="{{asset('bundles/css/bootstrap.css')}}"*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
