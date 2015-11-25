<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_4501ea108a5f0a52a6b3801d0635761be46ed9cf827f624c7a5b61f99ac6ba7f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_b8f25da88a768160f1ce45b9afc1b54ccc08d4ea67158eba414b4fd89c4d2cc7 = $this->env->getExtension("native_profiler");
        $__internal_b8f25da88a768160f1ce45b9afc1b54ccc08d4ea67158eba414b4fd89c4d2cc7->enter($__internal_b8f25da88a768160f1ce45b9afc1b54ccc08d4ea67158eba414b4fd89c4d2cc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8f25da88a768160f1ce45b9afc1b54ccc08d4ea67158eba414b4fd89c4d2cc7->leave($__internal_b8f25da88a768160f1ce45b9afc1b54ccc08d4ea67158eba414b4fd89c4d2cc7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_294c8e873388551927f3ef67cf586088412a8f59cf67e93c1e3541a1a31a0597 = $this->env->getExtension("native_profiler");
        $__internal_294c8e873388551927f3ef67cf586088412a8f59cf67e93c1e3541a1a31a0597->enter($__internal_294c8e873388551927f3ef67cf586088412a8f59cf67e93c1e3541a1a31a0597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_294c8e873388551927f3ef67cf586088412a8f59cf67e93c1e3541a1a31a0597->leave($__internal_294c8e873388551927f3ef67cf586088412a8f59cf67e93c1e3541a1a31a0597_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
