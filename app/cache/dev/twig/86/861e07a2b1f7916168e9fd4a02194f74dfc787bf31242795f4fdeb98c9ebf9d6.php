<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_8c77fedd4ee7935665e06f740cc269f03dd479098e9ad41f0d77c91d985bfdef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_09db1e20977d31d6869541660c920177c24d8e38fb6b38b7abc6efd851fdab74 = $this->env->getExtension("native_profiler");
        $__internal_09db1e20977d31d6869541660c920177c24d8e38fb6b38b7abc6efd851fdab74->enter($__internal_09db1e20977d31d6869541660c920177c24d8e38fb6b38b7abc6efd851fdab74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09db1e20977d31d6869541660c920177c24d8e38fb6b38b7abc6efd851fdab74->leave($__internal_09db1e20977d31d6869541660c920177c24d8e38fb6b38b7abc6efd851fdab74_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1808560c850ff5d6a0993f30dfbc9b5051d1f343e2af9b4a05507b3fe2a41a16 = $this->env->getExtension("native_profiler");
        $__internal_1808560c850ff5d6a0993f30dfbc9b5051d1f343e2af9b4a05507b3fe2a41a16->enter($__internal_1808560c850ff5d6a0993f30dfbc9b5051d1f343e2af9b4a05507b3fe2a41a16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1808560c850ff5d6a0993f30dfbc9b5051d1f343e2af9b4a05507b3fe2a41a16->leave($__internal_1808560c850ff5d6a0993f30dfbc9b5051d1f343e2af9b4a05507b3fe2a41a16_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d69c0e3e0a339da165c2f912f8f2ea6d0d267332131d80d6aa5ea6179f4aed90 = $this->env->getExtension("native_profiler");
        $__internal_d69c0e3e0a339da165c2f912f8f2ea6d0d267332131d80d6aa5ea6179f4aed90->enter($__internal_d69c0e3e0a339da165c2f912f8f2ea6d0d267332131d80d6aa5ea6179f4aed90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d69c0e3e0a339da165c2f912f8f2ea6d0d267332131d80d6aa5ea6179f4aed90->leave($__internal_d69c0e3e0a339da165c2f912f8f2ea6d0d267332131d80d6aa5ea6179f4aed90_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_090829ab4cc6cfbb2a4cdd22e2147a5b1b6f5a6fc84a316e4d452db5ef12c5b6 = $this->env->getExtension("native_profiler");
        $__internal_090829ab4cc6cfbb2a4cdd22e2147a5b1b6f5a6fc84a316e4d452db5ef12c5b6->enter($__internal_090829ab4cc6cfbb2a4cdd22e2147a5b1b6f5a6fc84a316e4d452db5ef12c5b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_090829ab4cc6cfbb2a4cdd22e2147a5b1b6f5a6fc84a316e4d452db5ef12c5b6->leave($__internal_090829ab4cc6cfbb2a4cdd22e2147a5b1b6f5a6fc84a316e4d452db5ef12c5b6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
