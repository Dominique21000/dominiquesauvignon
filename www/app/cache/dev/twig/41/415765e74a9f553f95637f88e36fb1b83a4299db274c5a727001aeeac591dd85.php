<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_289ec80a5ef8e86a83ebfbd56d3010e61138417eae6b427ff2b5b6a43cffc93e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_8f283151f935fe26779aac963e6a1c2ab4340587c669d8222f142c6f71a91456 = $this->env->getExtension("native_profiler");
        $__internal_8f283151f935fe26779aac963e6a1c2ab4340587c669d8222f142c6f71a91456->enter($__internal_8f283151f935fe26779aac963e6a1c2ab4340587c669d8222f142c6f71a91456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f283151f935fe26779aac963e6a1c2ab4340587c669d8222f142c6f71a91456->leave($__internal_8f283151f935fe26779aac963e6a1c2ab4340587c669d8222f142c6f71a91456_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c34543427f336e5e4f02f926214eb24dd2279b4cc4fbe6a50d977280dd5ccd44 = $this->env->getExtension("native_profiler");
        $__internal_c34543427f336e5e4f02f926214eb24dd2279b4cc4fbe6a50d977280dd5ccd44->enter($__internal_c34543427f336e5e4f02f926214eb24dd2279b4cc4fbe6a50d977280dd5ccd44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_c34543427f336e5e4f02f926214eb24dd2279b4cc4fbe6a50d977280dd5ccd44->leave($__internal_c34543427f336e5e4f02f926214eb24dd2279b4cc4fbe6a50d977280dd5ccd44_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
