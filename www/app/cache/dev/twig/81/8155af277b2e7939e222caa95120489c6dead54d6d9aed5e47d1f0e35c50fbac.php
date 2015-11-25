<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_fd3fb0ae81baba80327d9648d90c79ccb889a501aae57f0c9187b69bc78251e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_1ad369f5c049632e09b7add8e6c3773d74313570d63bc84cdb3f568baa36f457 = $this->env->getExtension("native_profiler");
        $__internal_1ad369f5c049632e09b7add8e6c3773d74313570d63bc84cdb3f568baa36f457->enter($__internal_1ad369f5c049632e09b7add8e6c3773d74313570d63bc84cdb3f568baa36f457_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ad369f5c049632e09b7add8e6c3773d74313570d63bc84cdb3f568baa36f457->leave($__internal_1ad369f5c049632e09b7add8e6c3773d74313570d63bc84cdb3f568baa36f457_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_61ac87dfd17d3da841f6c96f5dc2421fa492b5aa30f441b1f528c8fb6e352aea = $this->env->getExtension("native_profiler");
        $__internal_61ac87dfd17d3da841f6c96f5dc2421fa492b5aa30f441b1f528c8fb6e352aea->enter($__internal_61ac87dfd17d3da841f6c96f5dc2421fa492b5aa30f441b1f528c8fb6e352aea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_61ac87dfd17d3da841f6c96f5dc2421fa492b5aa30f441b1f528c8fb6e352aea->leave($__internal_61ac87dfd17d3da841f6c96f5dc2421fa492b5aa30f441b1f528c8fb6e352aea_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
