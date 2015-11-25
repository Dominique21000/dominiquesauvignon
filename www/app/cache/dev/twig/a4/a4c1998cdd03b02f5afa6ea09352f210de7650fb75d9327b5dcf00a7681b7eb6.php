<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_66c7fd3abb4122eacbed961ed24bd2120a73a9688433c22d52e3becc7f4b9d15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_24e60f4e00f780fb9899a275bb5ee3f3b8afa50e420efc778146d3a9d456c6fa = $this->env->getExtension("native_profiler");
        $__internal_24e60f4e00f780fb9899a275bb5ee3f3b8afa50e420efc778146d3a9d456c6fa->enter($__internal_24e60f4e00f780fb9899a275bb5ee3f3b8afa50e420efc778146d3a9d456c6fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24e60f4e00f780fb9899a275bb5ee3f3b8afa50e420efc778146d3a9d456c6fa->leave($__internal_24e60f4e00f780fb9899a275bb5ee3f3b8afa50e420efc778146d3a9d456c6fa_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9d65ad80d157a18f8018c7ca95a22c45f0503e2048fcaf371ee79c97d6e3078e = $this->env->getExtension("native_profiler");
        $__internal_9d65ad80d157a18f8018c7ca95a22c45f0503e2048fcaf371ee79c97d6e3078e->enter($__internal_9d65ad80d157a18f8018c7ca95a22c45f0503e2048fcaf371ee79c97d6e3078e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_9d65ad80d157a18f8018c7ca95a22c45f0503e2048fcaf371ee79c97d6e3078e->leave($__internal_9d65ad80d157a18f8018c7ca95a22c45f0503e2048fcaf371ee79c97d6e3078e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
