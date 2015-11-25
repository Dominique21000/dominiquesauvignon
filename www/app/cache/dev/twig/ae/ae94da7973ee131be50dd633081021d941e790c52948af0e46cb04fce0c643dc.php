<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_ee39d687a1bbf818ab9eedd7401879831cabd27c1a8b4f0c842237804af58098 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cd49a878d53dc121f60e2805daf82e2fae0ba3a4e316be8711503d5c6887ba3f = $this->env->getExtension("native_profiler");
        $__internal_cd49a878d53dc121f60e2805daf82e2fae0ba3a4e316be8711503d5c6887ba3f->enter($__internal_cd49a878d53dc121f60e2805daf82e2fae0ba3a4e316be8711503d5c6887ba3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_cd49a878d53dc121f60e2805daf82e2fae0ba3a4e316be8711503d5c6887ba3f->leave($__internal_cd49a878d53dc121f60e2805daf82e2fae0ba3a4e316be8711503d5c6887ba3f_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_c3999ff26e83f99e18530c090fed2e54ca33caec9ee90f097c5506b6d5bcd4ab = $this->env->getExtension("native_profiler");
        $__internal_c3999ff26e83f99e18530c090fed2e54ca33caec9ee90f097c5506b6d5bcd4ab->enter($__internal_c3999ff26e83f99e18530c090fed2e54ca33caec9ee90f097c5506b6d5bcd4ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_c3999ff26e83f99e18530c090fed2e54ca33caec9ee90f097c5506b6d5bcd4ab->leave($__internal_c3999ff26e83f99e18530c090fed2e54ca33caec9ee90f097c5506b6d5bcd4ab_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_96dcaaa3e16f60e9ad33930806cbdaab5d521b5b41022d18123144806c307a86 = $this->env->getExtension("native_profiler");
        $__internal_96dcaaa3e16f60e9ad33930806cbdaab5d521b5b41022d18123144806c307a86->enter($__internal_96dcaaa3e16f60e9ad33930806cbdaab5d521b5b41022d18123144806c307a86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_96dcaaa3e16f60e9ad33930806cbdaab5d521b5b41022d18123144806c307a86->leave($__internal_96dcaaa3e16f60e9ad33930806cbdaab5d521b5b41022d18123144806c307a86_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_de58a132398d42d340579edc055d1b819d3271b8cb0a02524918353461324b61 = $this->env->getExtension("native_profiler");
        $__internal_de58a132398d42d340579edc055d1b819d3271b8cb0a02524918353461324b61->enter($__internal_de58a132398d42d340579edc055d1b819d3271b8cb0a02524918353461324b61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_de58a132398d42d340579edc055d1b819d3271b8cb0a02524918353461324b61->leave($__internal_de58a132398d42d340579edc055d1b819d3271b8cb0a02524918353461324b61_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
