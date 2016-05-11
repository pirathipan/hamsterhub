<?php

/* base.html.twig */
class __TwigTemplate_2793a68484a9a7385595cce1a7a8f00ebe94e33fd43ae0269dd57b9858756777 extends Twig_Template
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
        $__internal_273a4514736d63c2f218e800282b6b5ba55d8e3f632ad418893f29427c3cf81a = $this->env->getExtension("native_profiler");
        $__internal_273a4514736d63c2f218e800282b6b5ba55d8e3f632ad418893f29427c3cf81a->enter($__internal_273a4514736d63c2f218e800282b6b5ba55d8e3f632ad418893f29427c3cf81a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_273a4514736d63c2f218e800282b6b5ba55d8e3f632ad418893f29427c3cf81a->leave($__internal_273a4514736d63c2f218e800282b6b5ba55d8e3f632ad418893f29427c3cf81a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_60b1d70ff7e545648f9133697e636680b5e719ca21e16f1480e818214a31b7d7 = $this->env->getExtension("native_profiler");
        $__internal_60b1d70ff7e545648f9133697e636680b5e719ca21e16f1480e818214a31b7d7->enter($__internal_60b1d70ff7e545648f9133697e636680b5e719ca21e16f1480e818214a31b7d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_60b1d70ff7e545648f9133697e636680b5e719ca21e16f1480e818214a31b7d7->leave($__internal_60b1d70ff7e545648f9133697e636680b5e719ca21e16f1480e818214a31b7d7_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_358ce9f343eac784ec7f71f01d01eed214b852df1774ba2f4f6db4707cf8286a = $this->env->getExtension("native_profiler");
        $__internal_358ce9f343eac784ec7f71f01d01eed214b852df1774ba2f4f6db4707cf8286a->enter($__internal_358ce9f343eac784ec7f71f01d01eed214b852df1774ba2f4f6db4707cf8286a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_358ce9f343eac784ec7f71f01d01eed214b852df1774ba2f4f6db4707cf8286a->leave($__internal_358ce9f343eac784ec7f71f01d01eed214b852df1774ba2f4f6db4707cf8286a_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_3c21f13db1b0e2ed460aee187e2eb3544d966b1cbb47a99452fb5220dc7c6555 = $this->env->getExtension("native_profiler");
        $__internal_3c21f13db1b0e2ed460aee187e2eb3544d966b1cbb47a99452fb5220dc7c6555->enter($__internal_3c21f13db1b0e2ed460aee187e2eb3544d966b1cbb47a99452fb5220dc7c6555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3c21f13db1b0e2ed460aee187e2eb3544d966b1cbb47a99452fb5220dc7c6555->leave($__internal_3c21f13db1b0e2ed460aee187e2eb3544d966b1cbb47a99452fb5220dc7c6555_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d8e16cb2892a07944b6abac74fbd07c4aa2c20a3322160a94629b58b743989a7 = $this->env->getExtension("native_profiler");
        $__internal_d8e16cb2892a07944b6abac74fbd07c4aa2c20a3322160a94629b58b743989a7->enter($__internal_d8e16cb2892a07944b6abac74fbd07c4aa2c20a3322160a94629b58b743989a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d8e16cb2892a07944b6abac74fbd07c4aa2c20a3322160a94629b58b743989a7->leave($__internal_d8e16cb2892a07944b6abac74fbd07c4aa2c20a3322160a94629b58b743989a7_prof);

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
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
