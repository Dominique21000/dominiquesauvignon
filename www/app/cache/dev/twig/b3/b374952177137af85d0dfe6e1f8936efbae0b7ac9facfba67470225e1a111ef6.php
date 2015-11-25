<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_ffc0cb2e1061839fa5dfc6947edcb3953163e9e1717fa9f8afd5696b0c46449a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_43d6d9935cf367aaba38969799e47a78a83f8d0ac4d6f2a794ace575f48167e8 = $this->env->getExtension("native_profiler");
        $__internal_43d6d9935cf367aaba38969799e47a78a83f8d0ac4d6f2a794ace575f48167e8->enter($__internal_43d6d9935cf367aaba38969799e47a78a83f8d0ac4d6f2a794ace575f48167e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43d6d9935cf367aaba38969799e47a78a83f8d0ac4d6f2a794ace575f48167e8->leave($__internal_43d6d9935cf367aaba38969799e47a78a83f8d0ac4d6f2a794ace575f48167e8_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b5432372dfeeba5d89237246f264afff14b0dee3ab4aceef6b51d224043d7f67 = $this->env->getExtension("native_profiler");
        $__internal_b5432372dfeeba5d89237246f264afff14b0dee3ab4aceef6b51d224043d7f67->enter($__internal_b5432372dfeeba5d89237246f264afff14b0dee3ab4aceef6b51d224043d7f67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_b5432372dfeeba5d89237246f264afff14b0dee3ab4aceef6b51d224043d7f67->leave($__internal_b5432372dfeeba5d89237246f264afff14b0dee3ab4aceef6b51d224043d7f67_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
