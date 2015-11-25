<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_5135499cbee2e5e543df2ead2b0e5fa0fcaa330e8b62b95d4b419723a4843cde extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_3ced8b174f4d8dc804bc81642d1408d23b5be194db80286970b86e9d5c15bacb = $this->env->getExtension("native_profiler");
        $__internal_3ced8b174f4d8dc804bc81642d1408d23b5be194db80286970b86e9d5c15bacb->enter($__internal_3ced8b174f4d8dc804bc81642d1408d23b5be194db80286970b86e9d5c15bacb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ced8b174f4d8dc804bc81642d1408d23b5be194db80286970b86e9d5c15bacb->leave($__internal_3ced8b174f4d8dc804bc81642d1408d23b5be194db80286970b86e9d5c15bacb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5c1fd65eddfe0851ebc612d82b777894e59102946b62954d15df8076192fdcbd = $this->env->getExtension("native_profiler");
        $__internal_5c1fd65eddfe0851ebc612d82b777894e59102946b62954d15df8076192fdcbd->enter($__internal_5c1fd65eddfe0851ebc612d82b777894e59102946b62954d15df8076192fdcbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_5c1fd65eddfe0851ebc612d82b777894e59102946b62954d15df8076192fdcbd->leave($__internal_5c1fd65eddfe0851ebc612d82b777894e59102946b62954d15df8076192fdcbd_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
