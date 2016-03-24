<?php

/* ::base.html.twig */
class __TwigTemplate_467c77154fbd367ad6513fbe0a78777ffca7298011263b38779a44e2655c6672 extends Twig_Template
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
        $__internal_5f65978f695bdc65f1bed29eb96ce5f0dd0feffa8ff566b578db9a57bf2a7987 = $this->env->getExtension("native_profiler");
        $__internal_5f65978f695bdc65f1bed29eb96ce5f0dd0feffa8ff566b578db9a57bf2a7987->enter($__internal_5f65978f695bdc65f1bed29eb96ce5f0dd0feffa8ff566b578db9a57bf2a7987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        // line 28
        echo "  
        ";
        // line 29
        $this->displayBlock('javascripts', $context, $blocks);
        // line 30
        echo "    </body>
</html>
";
        
        $__internal_5f65978f695bdc65f1bed29eb96ce5f0dd0feffa8ff566b578db9a57bf2a7987->leave($__internal_5f65978f695bdc65f1bed29eb96ce5f0dd0feffa8ff566b578db9a57bf2a7987_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_77f346f6baf4a9ba101c47fc13258f3b0a91d78605dccadc30c933fa0f787e76 = $this->env->getExtension("native_profiler");
        $__internal_77f346f6baf4a9ba101c47fc13258f3b0a91d78605dccadc30c933fa0f787e76->enter($__internal_77f346f6baf4a9ba101c47fc13258f3b0a91d78605dccadc30c933fa0f787e76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_77f346f6baf4a9ba101c47fc13258f3b0a91d78605dccadc30c933fa0f787e76->leave($__internal_77f346f6baf4a9ba101c47fc13258f3b0a91d78605dccadc30c933fa0f787e76_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_41f6c0a1fee91810f0955c4c39951e6769c23375c115f3d8a0628be1dfbef9cb = $this->env->getExtension("native_profiler");
        $__internal_41f6c0a1fee91810f0955c4c39951e6769c23375c115f3d8a0628be1dfbef9cb->enter($__internal_41f6c0a1fee91810f0955c4c39951e6769c23375c115f3d8a0628be1dfbef9cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_41f6c0a1fee91810f0955c4c39951e6769c23375c115f3d8a0628be1dfbef9cb->leave($__internal_41f6c0a1fee91810f0955c4c39951e6769c23375c115f3d8a0628be1dfbef9cb_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_221f8bec2ea69abf41a53e0b5fb3eea28be1a359f79e718851a50dbe76405c01 = $this->env->getExtension("native_profiler");
        $__internal_221f8bec2ea69abf41a53e0b5fb3eea28be1a359f79e718851a50dbe76405c01->enter($__internal_221f8bec2ea69abf41a53e0b5fb3eea28be1a359f79e718851a50dbe76405c01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "            <nav class=\"nav nav-pills\"> 
                <li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("inicio");
        echo "\">Inicio</a></li>
                <li><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("usuario");
        echo "\">Usuarios</a></li>
               ";
        // line 16
        echo "              
                <li><a href=\"\">Ventas</a>
                
                </li>
               
                
            
                  
  
     </nav>

        ";
        
        $__internal_221f8bec2ea69abf41a53e0b5fb3eea28be1a359f79e718851a50dbe76405c01->leave($__internal_221f8bec2ea69abf41a53e0b5fb3eea28be1a359f79e718851a50dbe76405c01_prof);

    }

    // line 29
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a98f5ef3b69356d9f3874d4738c29ffd7666e8beefdbf18fb73635243d836961 = $this->env->getExtension("native_profiler");
        $__internal_a98f5ef3b69356d9f3874d4738c29ffd7666e8beefdbf18fb73635243d836961->enter($__internal_a98f5ef3b69356d9f3874d4738c29ffd7666e8beefdbf18fb73635243d836961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a98f5ef3b69356d9f3874d4738c29ffd7666e8beefdbf18fb73635243d836961->leave($__internal_a98f5ef3b69356d9f3874d4738c29ffd7666e8beefdbf18fb73635243d836961_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 29,  105 => 16,  101 => 14,  97 => 13,  94 => 12,  88 => 11,  77 => 6,  65 => 5,  56 => 30,  54 => 29,  51 => 28,  49 => 11,  43 => 8,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
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
/*         {% block body %}*/
/*             <nav class="nav nav-pills"> */
/*                 <li><a href="{{path('inicio')}}">Inicio</a></li>*/
/*                 <li><a href="{{path('usuario')}}">Usuarios</a></li>*/
/*                {# <li><a href="{{path('usuario')}}">Ventas</a><li>#}*/
/*               */
/*                 <li><a href="">Ventas</a>*/
/*                 */
/*                 </li>*/
/*                */
/*                 */
/*             */
/*                   */
/*   */
/*      </nav>*/
/* */
/*         {% endblock %}*/
/*   */
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
