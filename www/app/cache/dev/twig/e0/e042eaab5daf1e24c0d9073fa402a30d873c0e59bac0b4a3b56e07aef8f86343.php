<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_a9412d1bd9cd9254b7e63f8b50628c3cdd8b56e16537ed1289075c0716070f43 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_b5d30865d990677ee61eaa8011b025b65e8df3d3499c5e9e4c1cc417bf5ccc16 = $this->env->getExtension("native_profiler");
        $__internal_b5d30865d990677ee61eaa8011b025b65e8df3d3499c5e9e4c1cc417bf5ccc16->enter($__internal_b5d30865d990677ee61eaa8011b025b65e8df3d3499c5e9e4c1cc417bf5ccc16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5d30865d990677ee61eaa8011b025b65e8df3d3499c5e9e4c1cc417bf5ccc16->leave($__internal_b5d30865d990677ee61eaa8011b025b65e8df3d3499c5e9e4c1cc417bf5ccc16_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4e552202298a0574e4335094eee2ae53a0cd743c769bb89438e8d9d17ff0c375 = $this->env->getExtension("native_profiler");
        $__internal_4e552202298a0574e4335094eee2ae53a0cd743c769bb89438e8d9d17ff0c375->enter($__internal_4e552202298a0574e4335094eee2ae53a0cd743c769bb89438e8d9d17ff0c375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_4e552202298a0574e4335094eee2ae53a0cd743c769bb89438e8d9d17ff0c375->leave($__internal_4e552202298a0574e4335094eee2ae53a0cd743c769bb89438e8d9d17ff0c375_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
