<?php

/* PracticaBundleUsuarioBundle:usuario:new.html.twig */
class __TwigTemplate_e5020fcedb475551b09f41e1c30e79fc823ab666145c52b1eaa27b7e7dfe0923 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::principal.html.twig", "PracticaBundleUsuarioBundle:usuario:new.html.twig", 1);
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
        $__internal_20cda9976238ff17de9da9c16d3605dcee06b50752b775fbfed76abe1e3eef6d = $this->env->getExtension("native_profiler");
        $__internal_20cda9976238ff17de9da9c16d3605dcee06b50752b775fbfed76abe1e3eef6d->enter($__internal_20cda9976238ff17de9da9c16d3605dcee06b50752b775fbfed76abe1e3eef6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PracticaBundleUsuarioBundle:usuario:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20cda9976238ff17de9da9c16d3605dcee06b50752b775fbfed76abe1e3eef6d->leave($__internal_20cda9976238ff17de9da9c16d3605dcee06b50752b775fbfed76abe1e3eef6d_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_9e997db8d258851d4f8cce769f941376e5f380c0c13ae5ef68f259f164eed95e = $this->env->getExtension("native_profiler");
        $__internal_9e997db8d258851d4f8cce769f941376e5f380c0c13ae5ef68f259f164eed95e->enter($__internal_9e997db8d258851d4f8cce769f941376e5f380c0c13ae5ef68f259f164eed95e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    
    <div class=\"page-header\"> <h1>Crear Usuario</h1></div>
   
    

";
        // line 12
        echo "
";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("role" => "form")));
        echo "
<div class=\"form-group\">
   ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'label');
        echo " 
   ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "username")));
        echo "
   <div class=\"form-group\"> ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'label');
        echo " 
   ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "nombre")));
        echo "</div>
   <div class=\"form-group\">";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellido", array()), 'label');
        echo " 
   ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellido", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "apellido")));
        echo "</div>
   <div class=\"form-group\">";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label');
        echo " 
   ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "email")));
        echo "</div>
   <div class=\"form-group\">";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'label');
        echo " 
   ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "password")));
        echo "</div>
  <div class=\"form-group\"> ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit", array()), 'widget', array("label" => "crear", "attr" => array("class" => "btn btn-primary")));
        echo "
    <button class=\"btn btn-success\"><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("usuario");
        echo "\">Regresar</a> </button>
   
   </div>
  
   

";
        // line 32
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

   ";
        // line 41
        echo "  
          
          
";
        
        $__internal_9e997db8d258851d4f8cce769f941376e5f380c0c13ae5ef68f259f164eed95e->leave($__internal_9e997db8d258851d4f8cce769f941376e5f380c0c13ae5ef68f259f164eed95e_prof);

    }

    public function getTemplateName()
    {
        return "PracticaBundleUsuarioBundle:usuario:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 41,  110 => 32,  101 => 26,  97 => 25,  93 => 24,  89 => 23,  85 => 22,  81 => 21,  77 => 20,  73 => 19,  69 => 18,  65 => 17,  61 => 16,  57 => 15,  52 => 13,  49 => 12,  40 => 5,  34 => 4,  11 => 1,);
    }
}
/* {% extends '::principal.html.twig' %}*/
/* */
/* */
/* {% block body -%}*/
/*     {{parent()}}*/
/*     */
/*     <div class="page-header"> <h1>Crear Usuario</h1></div>*/
/*    */
/*     */
/* */
/* {#    {{ form (form) }}#}*/
/* */
/* {{form_start(form,{'attr':{'role': 'form'}})}}*/
/* <div class="form-group">*/
/*    {{form_label(form.username)}} */
/*    {{form_widget(form.username,{'attr':{'class': 'form-control','placeholder':'username'}})}}*/
/*    <div class="form-group"> {{form_label(form.nombre)}} */
/*    {{form_widget(form.nombre,{'attr':{'class': 'form-control','placeholder':'nombre'}})}}</div>*/
/*    <div class="form-group">{{form_label(form.apellido)}} */
/*    {{form_widget(form.apellido,{'attr':{'class': 'form-control','placeholder':'apellido'}})}}</div>*/
/*    <div class="form-group">{{form_label(form.email)}} */
/*    {{form_widget(form.email,{'attr':{'class': 'form-control','placeholder':'email'}})}}</div>*/
/*    <div class="form-group">{{form_label(form.password)}} */
/*    {{form_widget(form.password,{'attr':{'class': 'form-control','placeholder':'password'}})}}</div>*/
/*   <div class="form-group"> {{form_widget(form.submit,{'label' : 'crear', 'attr':{'class':'btn btn-primary'}})}}*/
/*     <button class="btn btn-success"><a href="{{ path('usuario') }}">Regresar</a> </button>*/
/*    */
/*    </div>*/
/*   */
/*    */
/* */
/* {{form_end(form)}}*/
/* */
/*    {#     <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('usuario') }}">*/
/*             Back to the list*/
/*         </a>*/
/*     </li>*/
/* </ul>#}*/
/*   */
/*           */
/*           */
/* {% endblock %}*/
/* */
