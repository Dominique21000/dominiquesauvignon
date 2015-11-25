<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_aa661f8181a6684d46dcb6e40fcca709977d45027f6a437ec2113bb27bef364b extends Twig_Template
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
        $__internal_c537bb90d5497fa94aa50de56582488932847de78f6635d5626e0c775b596717 = $this->env->getExtension("native_profiler");
        $__internal_c537bb90d5497fa94aa50de56582488932847de78f6635d5626e0c775b596717->enter($__internal_c537bb90d5497fa94aa50de56582488932847de78f6635d5626e0c775b596717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_c537bb90d5497fa94aa50de56582488932847de78f6635d5626e0c775b596717->leave($__internal_c537bb90d5497fa94aa50de56582488932847de78f6635d5626e0c775b596717_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_cb9d9caec55aa3fd9e8675aa731e533aef222424c5973c61fe3d0c96f6590ce2 = $this->env->getExtension("native_profiler");
        $__internal_cb9d9caec55aa3fd9e8675aa731e533aef222424c5973c61fe3d0c96f6590ce2->enter($__internal_cb9d9caec55aa3fd9e8675aa731e533aef222424c5973c61fe3d0c96f6590ce2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_cb9d9caec55aa3fd9e8675aa731e533aef222424c5973c61fe3d0c96f6590ce2->leave($__internal_cb9d9caec55aa3fd9e8675aa731e533aef222424c5973c61fe3d0c96f6590ce2_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_24a14e91b311ccec012be3b69678fc4f1c676719e262416bae14f4551743a846 = $this->env->getExtension("native_profiler");
        $__internal_24a14e91b311ccec012be3b69678fc4f1c676719e262416bae14f4551743a846->enter($__internal_24a14e91b311ccec012be3b69678fc4f1c676719e262416bae14f4551743a846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_24a14e91b311ccec012be3b69678fc4f1c676719e262416bae14f4551743a846->leave($__internal_24a14e91b311ccec012be3b69678fc4f1c676719e262416bae14f4551743a846_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_693c43b0aa26ea332253dfbec762c17281b4b956ff64328201e98de1053a1a07 = $this->env->getExtension("native_profiler");
        $__internal_693c43b0aa26ea332253dfbec762c17281b4b956ff64328201e98de1053a1a07->enter($__internal_693c43b0aa26ea332253dfbec762c17281b4b956ff64328201e98de1053a1a07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_693c43b0aa26ea332253dfbec762c17281b4b956ff64328201e98de1053a1a07->leave($__internal_693c43b0aa26ea332253dfbec762c17281b4b956ff64328201e98de1053a1a07_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
