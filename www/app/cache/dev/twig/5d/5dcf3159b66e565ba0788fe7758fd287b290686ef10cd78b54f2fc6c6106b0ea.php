<?php

/* FOSUserBundle:ChangePassword:changePassword_content.html.twig */
class __TwigTemplate_22847987c88c3a0ea8f692ab335eaed736fff9de803a80f292494782dabfbf35 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_51407324226698ce38c87a6bf3fffab4c84ad5603672f1f2f0aabb65f8877fa5 = $this->env->getExtension("native_profiler");
        $__internal_51407324226698ce38c87a6bf3fffab4c84ad5603672f1f2f0aabb65f8877fa5->enter($__internal_51407324226698ce38c87a6bf3fffab4c84ad5603672f1f2f0aabb65f8877fa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword_content.html.twig"));

        // line 2
        echo "
<form action=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_change_password\">
    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("change_password.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
        $__internal_51407324226698ce38c87a6bf3fffab4c84ad5603672f1f2f0aabb65f8877fa5->leave($__internal_51407324226698ce38c87a6bf3fffab4c84ad5603672f1f2f0aabb65f8877fa5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 6,  31 => 4,  25 => 3,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <form action="{{ path('fos_user_change_password') }}" {{ form_enctype(form) }} method="POST" class="fos_user_change_password">*/
/*     {{ form_widget(form) }}*/
/*     <div>*/
/*         <input type="submit" value="{{ 'change_password.submit'|trans }}" />*/
/*     </div>*/
/* </form>*/
/* */
