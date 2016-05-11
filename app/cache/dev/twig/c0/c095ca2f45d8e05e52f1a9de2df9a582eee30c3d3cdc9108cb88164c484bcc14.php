<?php

/* userBundle:login:register.html.twig */
class __TwigTemplate_e49107b79df227b5585197dd79363f85df65f4a56d852e2c7da30c74dbdc36f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'signUp' => array($this, 'block_signUp'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_29385ce4be73aba775ee2edea17eab8c6bf023831b42f4cdd0287481e74944ee = $this->env->getExtension("native_profiler");
        $__internal_29385ce4be73aba775ee2edea17eab8c6bf023831b42f4cdd0287481e74944ee->enter($__internal_29385ce4be73aba775ee2edea17eab8c6bf023831b42f4cdd0287481e74944ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "userBundle:login:register.html.twig"));

        // line 1
        $this->displayBlock('signUp', $context, $blocks);
        
        $__internal_29385ce4be73aba775ee2edea17eab8c6bf023831b42f4cdd0287481e74944ee->leave($__internal_29385ce4be73aba775ee2edea17eab8c6bf023831b42f4cdd0287481e74944ee_prof);

    }

    public function block_signUp($context, array $blocks = array())
    {
        $__internal_45ba8935fe0554da2b1ef03395e51e6ad8fa5f2ebedb191c079d01f5cb1902b5 = $this->env->getExtension("native_profiler");
        $__internal_45ba8935fe0554da2b1ef03395e51e6ad8fa5f2ebedb191c079d01f5cb1902b5->enter($__internal_45ba8935fe0554da2b1ef03395e51e6ad8fa5f2ebedb191c079d01f5cb1902b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "signUp"));

        // line 2
        echo "    <div class=\"\">
        <div class=\"modal\">
            <form name=\"login\" class=\"form\" method=\"POST\" id=\"login\" enctype=\"multipart/form-data\">
                <fieldset class=\"\">
                    <p class=\"title\"> Register </p>
                    <label  for=\"name\">Name</label><br>
                    <input type=\"text\" id=\"name\" name=\"name\"><br>

                    <label  for=\"email\">Email Address</label><br>
                    <input type=\"email\" id=\"email\" name=\"email\"><br>

                    <label  for=\"birthDate\">Birth Date</label><br>
                    <input type=\"date\" id=\"birthDate\" name=\"birthDate\"><br>

                    <label  for=\"password\">Password</label><br>
                    <input type=\"password\" id=\"password\" name=\"password\"><br>

                    <label  for=\"passwordVerification\">Password Verification</label><br>
                    <input type=\"password\" id=\"passwordVerification\" name=\"passwordVerification\"><br>

                    <input type=\"submit\" class=\"button\" value=\"Register\">
                    <p class=\"text-info\">Need an account? <a href=\"#\">register</a></p>
                    <p class=\"forgotPassword\"><a href=\"#\">Forgot your password ?</a></p>
                </fieldset>
            </form>
            <div class=\"close\"></div>
        </div>
    </div>
";
        
        $__internal_45ba8935fe0554da2b1ef03395e51e6ad8fa5f2ebedb191c079d01f5cb1902b5->leave($__internal_45ba8935fe0554da2b1ef03395e51e6ad8fa5f2ebedb191c079d01f5cb1902b5_prof);

    }

    public function getTemplateName()
    {
        return "userBundle:login:register.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  35 => 2,  23 => 1,);
    }
}
/* {% block signUp %}*/
/*     <div class="">*/
/*         <div class="modal">*/
/*             <form name="login" class="form" method="POST" id="login" enctype="multipart/form-data">*/
/*                 <fieldset class="">*/
/*                     <p class="title"> Register </p>*/
/*                     <label  for="name">Name</label><br>*/
/*                     <input type="text" id="name" name="name"><br>*/
/* */
/*                     <label  for="email">Email Address</label><br>*/
/*                     <input type="email" id="email" name="email"><br>*/
/* */
/*                     <label  for="birthDate">Birth Date</label><br>*/
/*                     <input type="date" id="birthDate" name="birthDate"><br>*/
/* */
/*                     <label  for="password">Password</label><br>*/
/*                     <input type="password" id="password" name="password"><br>*/
/* */
/*                     <label  for="passwordVerification">Password Verification</label><br>*/
/*                     <input type="password" id="passwordVerification" name="passwordVerification"><br>*/
/* */
/*                     <input type="submit" class="button" value="Register">*/
/*                     <p class="text-info">Need an account? <a href="#">register</a></p>*/
/*                     <p class="forgotPassword"><a href="#">Forgot your password ?</a></p>*/
/*                 </fieldset>*/
/*             </form>*/
/*             <div class="close"></div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
