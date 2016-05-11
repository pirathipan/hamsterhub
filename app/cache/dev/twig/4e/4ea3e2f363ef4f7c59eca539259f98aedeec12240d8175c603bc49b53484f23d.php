<?php

/* userBundle:Default:index.html.twig */
class __TwigTemplate_dfc59f3dc7d07930ac27f20aab2199434f6d91fbefae2793676ccd82a336bb3d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c74334d8b1f91c17acd50aa9ee3fd472d82d5a26752003a2ead2efdb5cbdfea5 = $this->env->getExtension("native_profiler");
        $__internal_c74334d8b1f91c17acd50aa9ee3fd472d82d5a26752003a2ead2efdb5cbdfea5->enter($__internal_c74334d8b1f91c17acd50aa9ee3fd472d82d5a26752003a2ead2efdb5cbdfea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "userBundle:Default:index.html.twig"));

        // line 1
        echo "
    <!DOCTYPE html>
    <html>
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/img/favicon.ico"), "html", null, true);
        echo "\" />
    ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/jquery-2.2.3.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/modalScript.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/signAjax.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/hamburgerMenu.js"), "html", null, true);
        echo "\"></script>
</head>

    <header class=\"header\">
    <span class=\"hamburgerMenu hamburgerMenuNoneActive\">

    </span>
        <div class=\"subMenuHamburger\">
            ";
        // line 25
        if ((null === $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "session", array()), "get", array(0 => "userId"), "method"))) {
            // line 26
            echo "                <button value=\"Sign In\" name=\"signIn\" class=\"button\">
                    Sign In
                </button><br>
                <button value=\"Sign Up\" name=\"signUp\" class=\"button\">
                    Sign Up
                </button>
                ";
            // line 32
            $this->loadTemplate("userBundle:login:login.html.twig", "userBundle:Default:index.html.twig", 32)->display($context);
            // line 33
            echo "                ";
            $this->loadTemplate("userBundle:login:register.html.twig", "userBundle:Default:index.html.twig", 33)->display($context);
            // line 34
            echo "            ";
        } else {
            // line 35
            echo "                <p><a href=\"../profile\">Profile</a></p>
                <hr>
                <p><a href=\"../myVideos\">Mes Vidéos</a></p>
                <hr>
                <form name=\"logout\" class=\"form\" method=\"post\" id=\"logout\">
                    <input type=\"submit\" class=\"button\" value=\"Logout\">
                </form>
            ";
        }
        // line 43
        echo "        </div>

    </header>

<body>
<main role=\"main\">
    <div class=\"loader\"></div>
    <!--undefined variable si rien dans la base de données-->
</main>
</body>
</html>";
        
        $__internal_c74334d8b1f91c17acd50aa9ee3fd472d82d5a26752003a2ead2efdb5cbdfea5->leave($__internal_c74334d8b1f91c17acd50aa9ee3fd472d82d5a26752003a2ead2efdb5cbdfea5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c72c1e5e7cb59bd305371c284b6dab51fa1020c3dc29ae40a816ed69d426e356 = $this->env->getExtension("native_profiler");
        $__internal_c72c1e5e7cb59bd305371c284b6dab51fa1020c3dc29ae40a816ed69d426e356->enter($__internal_c72c1e5e7cb59bd305371c284b6dab51fa1020c3dc29ae40a816ed69d426e356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Hamster Hub";
        
        $__internal_c72c1e5e7cb59bd305371c284b6dab51fa1020c3dc29ae40a816ed69d426e356->leave($__internal_c72c1e5e7cb59bd305371c284b6dab51fa1020c3dc29ae40a816ed69d426e356_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_82564797f4feae8450933fe773c6d8dd1b3f4f07065bde5c7b5bf62951c3e9bf = $this->env->getExtension("native_profiler");
        $__internal_82564797f4feae8450933fe773c6d8dd1b3f4f07065bde5c7b5bf62951c3e9bf->enter($__internal_82564797f4feae8450933fe773c6d8dd1b3f4f07065bde5c7b5bf62951c3e9bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/reset.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/sign.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/styles.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_82564797f4feae8450933fe773c6d8dd1b3f4f07065bde5c7b5bf62951c3e9bf->leave($__internal_82564797f4feae8450933fe773c6d8dd1b3f4f07065bde5c7b5bf62951c3e9bf_prof);

    }

    public function getTemplateName()
    {
        return "userBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 12,  134 => 11,  129 => 10,  123 => 9,  111 => 7,  94 => 43,  84 => 35,  81 => 34,  78 => 33,  76 => 32,  68 => 26,  66 => 25,  55 => 17,  51 => 16,  47 => 15,  42 => 14,  40 => 9,  36 => 8,  32 => 7,  24 => 1,);
    }
}
/* */
/*     <!DOCTYPE html>*/
/*     <html>*/
/* <head>*/
/*     <meta charset="UTF-8">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <title>{% block title %}Hamster Hub{% endblock %}</title>*/
/*     <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon.ico') }}" />*/
/*     {% block stylesheets %}*/
/*         <link rel="stylesheet" href="{{ asset('assets/css/reset.css') }}">*/
/*         <link rel="stylesheet" href="{{ asset('assets/css/sign.css') }}">*/
/*         <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">*/
/*     {% endblock %}*/
/*     <script src="{{ asset('assets/js/jquery-2.2.3.min.js') }}"></script>*/
/*     <script src="{{ asset('assets/js/modalScript.js') }}"></script>*/
/*     <script src="{{ asset('assets/js/signAjax.js') }}"></script>*/
/*     <script src="{{ asset('assets/js/hamburgerMenu.js') }}"></script>*/
/* </head>*/
/* */
/*     <header class="header">*/
/*     <span class="hamburgerMenu hamburgerMenuNoneActive">*/
/* */
/*     </span>*/
/*         <div class="subMenuHamburger">*/
/*             {% if app.request.session.get("userId") is null %}*/
/*                 <button value="Sign In" name="signIn" class="button">*/
/*                     Sign In*/
/*                 </button><br>*/
/*                 <button value="Sign Up" name="signUp" class="button">*/
/*                     Sign Up*/
/*                 </button>*/
/*                 {% include 'userBundle:login:login.html.twig' %}*/
/*                 {% include 'userBundle:login:register.html.twig' %}*/
/*             {% else %}*/
/*                 <p><a href="../profile">Profile</a></p>*/
/*                 <hr>*/
/*                 <p><a href="../myVideos">Mes Vidéos</a></p>*/
/*                 <hr>*/
/*                 <form name="logout" class="form" method="post" id="logout">*/
/*                     <input type="submit" class="button" value="Logout">*/
/*                 </form>*/
/*             {% endif %}*/
/*         </div>*/
/* */
/*     </header>*/
/* */
/* <body>*/
/* <main role="main">*/
/*     <div class="loader"></div>*/
/*     <!--undefined variable si rien dans la base de données-->*/
/* </main>*/
/* </body>*/
/* </html>*/
