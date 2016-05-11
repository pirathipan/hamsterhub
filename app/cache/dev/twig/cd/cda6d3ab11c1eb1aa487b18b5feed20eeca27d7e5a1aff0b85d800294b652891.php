<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_4a08de5911bd668a50403e4ccd7af96766390a8330a4a04dd5780e3b52da330a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e6592d0e251751bbf8a455f6a2c3ffc90387ef06471fe8e71078ab2f1ecca50a = $this->env->getExtension("native_profiler");
        $__internal_e6592d0e251751bbf8a455f6a2c3ffc90387ef06471fe8e71078ab2f1ecca50a->enter($__internal_e6592d0e251751bbf8a455f6a2c3ffc90387ef06471fe8e71078ab2f1ecca50a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6592d0e251751bbf8a455f6a2c3ffc90387ef06471fe8e71078ab2f1ecca50a->leave($__internal_e6592d0e251751bbf8a455f6a2c3ffc90387ef06471fe8e71078ab2f1ecca50a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e47adba67ae9416f58208592d9ea88f80987a79085b3177db83eee1f4b9393af = $this->env->getExtension("native_profiler");
        $__internal_e47adba67ae9416f58208592d9ea88f80987a79085b3177db83eee1f4b9393af->enter($__internal_e47adba67ae9416f58208592d9ea88f80987a79085b3177db83eee1f4b9393af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e47adba67ae9416f58208592d9ea88f80987a79085b3177db83eee1f4b9393af->leave($__internal_e47adba67ae9416f58208592d9ea88f80987a79085b3177db83eee1f4b9393af_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6beca941d966732a8aa71b48c104ac9ac4f210dd6e96d5d172e9bf78de020cef = $this->env->getExtension("native_profiler");
        $__internal_6beca941d966732a8aa71b48c104ac9ac4f210dd6e96d5d172e9bf78de020cef->enter($__internal_6beca941d966732a8aa71b48c104ac9ac4f210dd6e96d5d172e9bf78de020cef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6beca941d966732a8aa71b48c104ac9ac4f210dd6e96d5d172e9bf78de020cef->leave($__internal_6beca941d966732a8aa71b48c104ac9ac4f210dd6e96d5d172e9bf78de020cef_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_fd5c7f9af4c41c87e9daad6e701ec92ce38a96bf29081f95f04e577cdb30a563 = $this->env->getExtension("native_profiler");
        $__internal_fd5c7f9af4c41c87e9daad6e701ec92ce38a96bf29081f95f04e577cdb30a563->enter($__internal_fd5c7f9af4c41c87e9daad6e701ec92ce38a96bf29081f95f04e577cdb30a563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_fd5c7f9af4c41c87e9daad6e701ec92ce38a96bf29081f95f04e577cdb30a563->leave($__internal_fd5c7f9af4c41c87e9daad6e701ec92ce38a96bf29081f95f04e577cdb30a563_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
/* {% extends '@Twig/layout.html.twig' %}*/
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
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
