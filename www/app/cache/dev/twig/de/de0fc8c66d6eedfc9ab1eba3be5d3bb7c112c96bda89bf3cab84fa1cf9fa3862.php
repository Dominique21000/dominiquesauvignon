<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_bba322c4a05ebab9ad0da64e871f1a532580cc2b79f389d39f893c3e9756ab6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_445f7a9eef47336220458e807bb54a2ea4dad15ea0955d345f6aa5b879d2b599 = $this->env->getExtension("native_profiler");
        $__internal_445f7a9eef47336220458e807bb54a2ea4dad15ea0955d345f6aa5b879d2b599->enter($__internal_445f7a9eef47336220458e807bb54a2ea4dad15ea0955d345f6aa5b879d2b599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_445f7a9eef47336220458e807bb54a2ea4dad15ea0955d345f6aa5b879d2b599->leave($__internal_445f7a9eef47336220458e807bb54a2ea4dad15ea0955d345f6aa5b879d2b599_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_59f6aebe0948ec4e8f392d36bcf52ff0f71fd2979b2917e8e3283aa0df894d78 = $this->env->getExtension("native_profiler");
        $__internal_59f6aebe0948ec4e8f392d36bcf52ff0f71fd2979b2917e8e3283aa0df894d78->enter($__internal_59f6aebe0948ec4e8f392d36bcf52ff0f71fd2979b2917e8e3283aa0df894d78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_59f6aebe0948ec4e8f392d36bcf52ff0f71fd2979b2917e8e3283aa0df894d78->leave($__internal_59f6aebe0948ec4e8f392d36bcf52ff0f71fd2979b2917e8e3283aa0df894d78_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
