<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_49de057fe42e639c3c0b206803f6c1d7d53e284772b1c13d31651f1d1af52300 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_b2d5c8d9327f0a2188e5941d805d9c788b3ae87ecd553a80aceb584dd64b132f = $this->env->getExtension("native_profiler");
        $__internal_b2d5c8d9327f0a2188e5941d805d9c788b3ae87ecd553a80aceb584dd64b132f->enter($__internal_b2d5c8d9327f0a2188e5941d805d9c788b3ae87ecd553a80aceb584dd64b132f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2d5c8d9327f0a2188e5941d805d9c788b3ae87ecd553a80aceb584dd64b132f->leave($__internal_b2d5c8d9327f0a2188e5941d805d9c788b3ae87ecd553a80aceb584dd64b132f_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3f248a6bbcf4465cca500938202b46bec50bb67d59a0161dccc4f3f74af31eaa = $this->env->getExtension("native_profiler");
        $__internal_3f248a6bbcf4465cca500938202b46bec50bb67d59a0161dccc4f3f74af31eaa->enter($__internal_3f248a6bbcf4465cca500938202b46bec50bb67d59a0161dccc4f3f74af31eaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_3f248a6bbcf4465cca500938202b46bec50bb67d59a0161dccc4f3f74af31eaa->leave($__internal_3f248a6bbcf4465cca500938202b46bec50bb67d59a0161dccc4f3f74af31eaa_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
