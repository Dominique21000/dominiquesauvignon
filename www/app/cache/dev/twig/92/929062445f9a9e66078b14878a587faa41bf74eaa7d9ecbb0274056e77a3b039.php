<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_c44ed4cacbdd05ca4522f992864880ca994332404f5c001abb31cc4b38e35c93 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_29c984ecd1892c24855a805b2aa04415bba2559f854361a899d2216f1799c859 = $this->env->getExtension("native_profiler");
        $__internal_29c984ecd1892c24855a805b2aa04415bba2559f854361a899d2216f1799c859->enter($__internal_29c984ecd1892c24855a805b2aa04415bba2559f854361a899d2216f1799c859_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29c984ecd1892c24855a805b2aa04415bba2559f854361a899d2216f1799c859->leave($__internal_29c984ecd1892c24855a805b2aa04415bba2559f854361a899d2216f1799c859_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d791a935fc1533f3c39e003092ab6ad24e642977834a6561cd9e517a7abb41b9 = $this->env->getExtension("native_profiler");
        $__internal_d791a935fc1533f3c39e003092ab6ad24e642977834a6561cd9e517a7abb41b9->enter($__internal_d791a935fc1533f3c39e003092ab6ad24e642977834a6561cd9e517a7abb41b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_d791a935fc1533f3c39e003092ab6ad24e642977834a6561cd9e517a7abb41b9->leave($__internal_d791a935fc1533f3c39e003092ab6ad24e642977834a6561cd9e517a7abb41b9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
