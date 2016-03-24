<?php

/* ::principal.html.twig */
class __TwigTemplate_6427fba7ec6dbf551e3e6b7b579461e2183a1c4483e9855504c5b225ecbbd536 extends Twig_Template
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
        $__internal_878aeaf288cbee3fbf6ae14cf3ec1630fc5f7854cb3f9d49d912644e40e71d9d = $this->env->getExtension("native_profiler");
        $__internal_878aeaf288cbee3fbf6ae14cf3ec1630fc5f7854cb3f9d49d912644e40e71d9d->enter($__internal_878aeaf288cbee3fbf6ae14cf3ec1630fc5f7854cb3f9d49d912644e40e71d9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::principal.html.twig"));

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
        // line 19
        echo "  
        ";
        // line 20
        $this->displayBlock('javascripts', $context, $blocks);
        // line 21
        echo "    </body>
</html>
";
        
        $__internal_878aeaf288cbee3fbf6ae14cf3ec1630fc5f7854cb3f9d49d912644e40e71d9d->leave($__internal_878aeaf288cbee3fbf6ae14cf3ec1630fc5f7854cb3f9d49d912644e40e71d9d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f881e8357d6f9987da2e6777f7c7f876a773f4ae1b667df9dab1aeca901d2723 = $this->env->getExtension("native_profiler");
        $__internal_f881e8357d6f9987da2e6777f7c7f876a773f4ae1b667df9dab1aeca901d2723->enter($__internal_f881e8357d6f9987da2e6777f7c7f876a773f4ae1b667df9dab1aeca901d2723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f881e8357d6f9987da2e6777f7c7f876a773f4ae1b667df9dab1aeca901d2723->leave($__internal_f881e8357d6f9987da2e6777f7c7f876a773f4ae1b667df9dab1aeca901d2723_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9841b140a118452770ad90554ef334edee94ae6ad5b03dbca8e945116bde1ca4 = $this->env->getExtension("native_profiler");
        $__internal_9841b140a118452770ad90554ef334edee94ae6ad5b03dbca8e945116bde1ca4->enter($__internal_9841b140a118452770ad90554ef334edee94ae6ad5b03dbca8e945116bde1ca4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_9841b140a118452770ad90554ef334edee94ae6ad5b03dbca8e945116bde1ca4->leave($__internal_9841b140a118452770ad90554ef334edee94ae6ad5b03dbca8e945116bde1ca4_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6000ef75c4d72e0c760e6734ba7de53dc0dc701a28a630ffab19ecc881ab7d34 = $this->env->getExtension("native_profiler");
        $__internal_6000ef75c4d72e0c760e6734ba7de53dc0dc701a28a630ffab19ecc881ab7d34->enter($__internal_6000ef75c4d72e0c760e6734ba7de53dc0dc701a28a630ffab19ecc881ab7d34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "  ";
        // line 17
        echo "
        ";
        
        $__internal_6000ef75c4d72e0c760e6734ba7de53dc0dc701a28a630ffab19ecc881ab7d34->leave($__internal_6000ef75c4d72e0c760e6734ba7de53dc0dc701a28a630ffab19ecc881ab7d34_prof);

    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4599a8f8fb96999bcf46feca53f68c448720584d0cb5638edd2bfc8df5c2408f = $this->env->getExtension("native_profiler");
        $__internal_4599a8f8fb96999bcf46feca53f68c448720584d0cb5638edd2bfc8df5c2408f->enter($__internal_4599a8f8fb96999bcf46feca53f68c448720584d0cb5638edd2bfc8df5c2408f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4599a8f8fb96999bcf46feca53f68c448720584d0cb5638edd2bfc8df5c2408f->leave($__internal_4599a8f8fb96999bcf46feca53f68c448720584d0cb5638edd2bfc8df5c2408f_prof);

    }

    public function getTemplateName()
    {
        return "::principal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 20,  96 => 17,  94 => 12,  88 => 11,  77 => 6,  65 => 5,  56 => 21,  54 => 20,  51 => 19,  49 => 11,  43 => 8,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
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
/*   {#    ul class="nav nav-pills">*/
/*  <li role="presentation" class="active"><a href="#">Home</a></li>*/
/*   <li role="presentation"><a href="#">Profile</a></li>*/
/*   <li role="presentation"><a href="#">Messages</a></li>*/
/* </ul>#}*/
/* */
/*         {% endblock %}*/
/*   */
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
