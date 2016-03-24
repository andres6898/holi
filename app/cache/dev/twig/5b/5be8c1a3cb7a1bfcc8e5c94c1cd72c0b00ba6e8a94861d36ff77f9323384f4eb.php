<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_3349568181ba4ac70fac31c81ecf6aee829f425d87ae9000dceaa852221a6f36 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8c0e16b33cd0c975626446d581aef0c6165618886d80d053e6477e4511725bf5 = $this->env->getExtension("native_profiler");
        $__internal_8c0e16b33cd0c975626446d581aef0c6165618886d80d053e6477e4511725bf5->enter($__internal_8c0e16b33cd0c975626446d581aef0c6165618886d80d053e6477e4511725bf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c0e16b33cd0c975626446d581aef0c6165618886d80d053e6477e4511725bf5->leave($__internal_8c0e16b33cd0c975626446d581aef0c6165618886d80d053e6477e4511725bf5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9ac27fa8e0fb75f60db51e2b629607a6f78ed7309ef96194b227c53ce3384763 = $this->env->getExtension("native_profiler");
        $__internal_9ac27fa8e0fb75f60db51e2b629607a6f78ed7309ef96194b227c53ce3384763->enter($__internal_9ac27fa8e0fb75f60db51e2b629607a6f78ed7309ef96194b227c53ce3384763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9ac27fa8e0fb75f60db51e2b629607a6f78ed7309ef96194b227c53ce3384763->leave($__internal_9ac27fa8e0fb75f60db51e2b629607a6f78ed7309ef96194b227c53ce3384763_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_96ab3613cf15d5cea9f15c27753ac7b45fd10aa268a61f0f0a5de2537ddec45f = $this->env->getExtension("native_profiler");
        $__internal_96ab3613cf15d5cea9f15c27753ac7b45fd10aa268a61f0f0a5de2537ddec45f->enter($__internal_96ab3613cf15d5cea9f15c27753ac7b45fd10aa268a61f0f0a5de2537ddec45f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_96ab3613cf15d5cea9f15c27753ac7b45fd10aa268a61f0f0a5de2537ddec45f->leave($__internal_96ab3613cf15d5cea9f15c27753ac7b45fd10aa268a61f0f0a5de2537ddec45f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4e509b1f01c6c473943aa2c2089e175bc024132f35dd51a67977343f992631f9 = $this->env->getExtension("native_profiler");
        $__internal_4e509b1f01c6c473943aa2c2089e175bc024132f35dd51a67977343f992631f9->enter($__internal_4e509b1f01c6c473943aa2c2089e175bc024132f35dd51a67977343f992631f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_4e509b1f01c6c473943aa2c2089e175bc024132f35dd51a67977343f992631f9->leave($__internal_4e509b1f01c6c473943aa2c2089e175bc024132f35dd51a67977343f992631f9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
