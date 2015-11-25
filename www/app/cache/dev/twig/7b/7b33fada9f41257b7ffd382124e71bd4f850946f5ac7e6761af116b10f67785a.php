<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_072e7070ea925e1db5bd66085c3d2285a17db8b813a29b0e425578d0c21a4fd8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b679243ce188584e053652c0e1a50c0114b12ed6f78f24d68271f4410511b05f = $this->env->getExtension("native_profiler");
        $__internal_b679243ce188584e053652c0e1a50c0114b12ed6f78f24d68271f4410511b05f->enter($__internal_b679243ce188584e053652c0e1a50c0114b12ed6f78f24d68271f4410511b05f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b679243ce188584e053652c0e1a50c0114b12ed6f78f24d68271f4410511b05f->leave($__internal_b679243ce188584e053652c0e1a50c0114b12ed6f78f24d68271f4410511b05f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d50418f370e58f79dbef1dc126a8a5e85ea98ad9dc2e0fd1c13c959dc8a23357 = $this->env->getExtension("native_profiler");
        $__internal_d50418f370e58f79dbef1dc126a8a5e85ea98ad9dc2e0fd1c13c959dc8a23357->enter($__internal_d50418f370e58f79dbef1dc126a8a5e85ea98ad9dc2e0fd1c13c959dc8a23357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_d50418f370e58f79dbef1dc126a8a5e85ea98ad9dc2e0fd1c13c959dc8a23357->leave($__internal_d50418f370e58f79dbef1dc126a8a5e85ea98ad9dc2e0fd1c13c959dc8a23357_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
