<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_19db2e538ce80403a8c4ef57965307ce0d30c79ff578c63723829539fd5a50b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_f6bd59aa56f96a208629db146c14c86092ec56831f2a156b5e806a837e67cde0 = $this->env->getExtension("native_profiler");
        $__internal_f6bd59aa56f96a208629db146c14c86092ec56831f2a156b5e806a837e67cde0->enter($__internal_f6bd59aa56f96a208629db146c14c86092ec56831f2a156b5e806a837e67cde0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6bd59aa56f96a208629db146c14c86092ec56831f2a156b5e806a837e67cde0->leave($__internal_f6bd59aa56f96a208629db146c14c86092ec56831f2a156b5e806a837e67cde0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a79cd2ab5b508560dbbdfd67a29d5c0826b638bb5c662c276a4a0127601aa02b = $this->env->getExtension("native_profiler");
        $__internal_a79cd2ab5b508560dbbdfd67a29d5c0826b638bb5c662c276a4a0127601aa02b->enter($__internal_a79cd2ab5b508560dbbdfd67a29d5c0826b638bb5c662c276a4a0127601aa02b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_a79cd2ab5b508560dbbdfd67a29d5c0826b638bb5c662c276a4a0127601aa02b->leave($__internal_a79cd2ab5b508560dbbdfd67a29d5c0826b638bb5c662c276a4a0127601aa02b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
