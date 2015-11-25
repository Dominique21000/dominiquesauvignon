<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_1f7c896dbb34d03bca2826ee501151db7533d778b257044b1549ce1bad434331 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_90fce82c9a0877d575e79515834b397e36e28a02028c39d4b458a3642cdb7258 = $this->env->getExtension("native_profiler");
        $__internal_90fce82c9a0877d575e79515834b397e36e28a02028c39d4b458a3642cdb7258->enter($__internal_90fce82c9a0877d575e79515834b397e36e28a02028c39d4b458a3642cdb7258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90fce82c9a0877d575e79515834b397e36e28a02028c39d4b458a3642cdb7258->leave($__internal_90fce82c9a0877d575e79515834b397e36e28a02028c39d4b458a3642cdb7258_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1f7062b9e17654ef1bc56ed1ebc27f1e9d390ce38c2047a7b635b70d4d407297 = $this->env->getExtension("native_profiler");
        $__internal_1f7062b9e17654ef1bc56ed1ebc27f1e9d390ce38c2047a7b635b70d4d407297->enter($__internal_1f7062b9e17654ef1bc56ed1ebc27f1e9d390ce38c2047a7b635b70d4d407297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_1f7062b9e17654ef1bc56ed1ebc27f1e9d390ce38c2047a7b635b70d4d407297->leave($__internal_1f7062b9e17654ef1bc56ed1ebc27f1e9d390ce38c2047a7b635b70d4d407297_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
