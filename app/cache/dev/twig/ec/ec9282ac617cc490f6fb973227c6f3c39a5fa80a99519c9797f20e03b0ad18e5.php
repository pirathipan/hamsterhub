<?php

/* userBundle:login:login.html.twig */
class __TwigTemplate_02e7b967d10426a0c692fe6da20164fe1e9ddef39c2bf95f1426996c3421a1e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'signIn' => array($this, 'block_signIn'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_52de6acce4d1a260b652954662792dad9b71bd1305398a1602d5e4d3d257deae = $this->env->getExtension("native_profiler");
        $__internal_52de6acce4d1a260b652954662792dad9b71bd1305398a1602d5e4d3d257deae->enter($__internal_52de6acce4d1a260b652954662792dad9b71bd1305398a1602d5e4d3d257deae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "userBundle:login:login.html.twig"));

        // line 1
        $this->displayBlock('signIn', $context, $blocks);
        
        $__internal_52de6acce4d1a260b652954662792dad9b71bd1305398a1602d5e4d3d257deae->leave($__internal_52de6acce4d1a260b652954662792dad9b71bd1305398a1602d5e4d3d257deae_prof);

    }

    public function block_signIn($context, array $blocks = array())
    {
        $__internal_2d42bd14b6d3cb09776daf157d27ebe72e9dc63733e00a5addc344b5e1a49b80 = $this->env->getExtension("native_profiler");
        $__internal_2d42bd14b6d3cb09776daf157d27ebe72e9dc63733e00a5addc344b5e1a49b80->enter($__internal_2d42bd14b6d3cb09776daf157d27ebe72e9dc63733e00a5addc344b5e1a49b80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "signIn"));

        // line 2
        echo "    <div class=\"\">
        <div class=\"modal\">
            <form name=\"signIn\" class=\"form\" method=\"post\" id=\"signIn\">
                <fieldset class=\"borderForm\">
                    <p class=\"title\"> Login </p>
                    <div>
                        <label  for=\"loginEmail\">Email </label><br>
                        <input type=\"email\" id=\"loginEmail\" name=\"email\"><br>
                    </div>
                    <div >
                        <label  for=\"loginPassword\">password</label><br>
                        <input type=\"password\" id=\"loginPassword\" name=\"password\"><br>
                    </div>
                    <input type=\"submit\" class=\"button\" value=\"connection\">
                    <p class=\"text-info\">Need an account? <a href=\"#\">register</a></p>
                    <p class=\"forgotPassword\"><a href=\"#\">Forgot your password ?</a></p>
                </fieldset>
            </form>
            <div class=\"close\"></div>

        </div>
    </div>
";
        
        $__internal_2d42bd14b6d3cb09776daf157d27ebe72e9dc63733e00a5addc344b5e1a49b80->leave($__internal_2d42bd14b6d3cb09776daf157d27ebe72e9dc63733e00a5addc344b5e1a49b80_prof);

    }

    public function getTemplateName()
    {
        return "userBundle:login:login.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  35 => 2,  23 => 1,);
    }
}
/* {% block signIn %}*/
/*     <div class="">*/
/*         <div class="modal">*/
/*             <form name="signIn" class="form" method="post" id="signIn">*/
/*                 <fieldset class="borderForm">*/
/*                     <p class="title"> Login </p>*/
/*                     <div>*/
/*                         <label  for="loginEmail">Email </label><br>*/
/*                         <input type="email" id="loginEmail" name="email"><br>*/
/*                     </div>*/
/*                     <div >*/
/*                         <label  for="loginPassword">password</label><br>*/
/*                         <input type="password" id="loginPassword" name="password"><br>*/
/*                     </div>*/
/*                     <input type="submit" class="button" value="connection">*/
/*                     <p class="text-info">Need an account? <a href="#">register</a></p>*/
/*                     <p class="forgotPassword"><a href="#">Forgot your password ?</a></p>*/
/*                 </fieldset>*/
/*             </form>*/
/*             <div class="close"></div>*/
/* */
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
