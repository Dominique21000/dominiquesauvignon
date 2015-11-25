<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_75c99657c5c8b2347910c7788a443fa5ff7175c8f2ce12d91ec6ee6c0f2fa654 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_35eb708f8a6d843ad735a2fa4f16d6e2d0fe2dbaef269c0e53b34f7b30168e87 = $this->env->getExtension("native_profiler");
        $__internal_35eb708f8a6d843ad735a2fa4f16d6e2d0fe2dbaef269c0e53b34f7b30168e87->enter($__internal_35eb708f8a6d843ad735a2fa4f16d6e2d0fe2dbaef269c0e53b34f7b30168e87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35eb708f8a6d843ad735a2fa4f16d6e2d0fe2dbaef269c0e53b34f7b30168e87->leave($__internal_35eb708f8a6d843ad735a2fa4f16d6e2d0fe2dbaef269c0e53b34f7b30168e87_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7c71bb47fac3b81891c24064a26a61ca5b04ac3a6b2075a8a9c8282e13d8339c = $this->env->getExtension("native_profiler");
        $__internal_7c71bb47fac3b81891c24064a26a61ca5b04ac3a6b2075a8a9c8282e13d8339c->enter($__internal_7c71bb47fac3b81891c24064a26a61ca5b04ac3a6b2075a8a9c8282e13d8339c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_7c71bb47fac3b81891c24064a26a61ca5b04ac3a6b2075a8a9c8282e13d8339c->leave($__internal_7c71bb47fac3b81891c24064a26a61ca5b04ac3a6b2075a8a9c8282e13d8339c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
