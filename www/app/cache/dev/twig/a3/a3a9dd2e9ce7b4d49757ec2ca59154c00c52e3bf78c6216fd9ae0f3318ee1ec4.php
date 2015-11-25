<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_a6d279504a9a81bd8c9a8fcb0a0b91740632142f4881774cf01b682a323ed511 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5491267b1a982729fb2fa2619e076dd4652e4df536316f8abb566a2808657168 = $this->env->getExtension("native_profiler");
        $__internal_5491267b1a982729fb2fa2619e076dd4652e4df536316f8abb566a2808657168->enter($__internal_5491267b1a982729fb2fa2619e076dd4652e4df536316f8abb566a2808657168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5491267b1a982729fb2fa2619e076dd4652e4df536316f8abb566a2808657168->leave($__internal_5491267b1a982729fb2fa2619e076dd4652e4df536316f8abb566a2808657168_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cbf022f958be9ea93c036c79c7d531167227cd714bd903386697e1acda0a3dee = $this->env->getExtension("native_profiler");
        $__internal_cbf022f958be9ea93c036c79c7d531167227cd714bd903386697e1acda0a3dee->enter($__internal_cbf022f958be9ea93c036c79c7d531167227cd714bd903386697e1acda0a3dee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_cbf022f958be9ea93c036c79c7d531167227cd714bd903386697e1acda0a3dee->leave($__internal_cbf022f958be9ea93c036c79c7d531167227cd714bd903386697e1acda0a3dee_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a70d6bdf31eb7b5b702c3cd68d64cfb7d0b64d0a79cd2c3f02f00d039c164aaa = $this->env->getExtension("native_profiler");
        $__internal_a70d6bdf31eb7b5b702c3cd68d64cfb7d0b64d0a79cd2c3f02f00d039c164aaa->enter($__internal_a70d6bdf31eb7b5b702c3cd68d64cfb7d0b64d0a79cd2c3f02f00d039c164aaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_a70d6bdf31eb7b5b702c3cd68d64cfb7d0b64d0a79cd2c3f02f00d039c164aaa->leave($__internal_a70d6bdf31eb7b5b702c3cd68d64cfb7d0b64d0a79cd2c3f02f00d039c164aaa_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_a4d1e33c3df217f5da49b868d5ecaafee7ef5c63d1d091dfb8b203ad3415b32a = $this->env->getExtension("native_profiler");
        $__internal_a4d1e33c3df217f5da49b868d5ecaafee7ef5c63d1d091dfb8b203ad3415b32a->enter($__internal_a4d1e33c3df217f5da49b868d5ecaafee7ef5c63d1d091dfb8b203ad3415b32a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_a4d1e33c3df217f5da49b868d5ecaafee7ef5c63d1d091dfb8b203ad3415b32a->leave($__internal_a4d1e33c3df217f5da49b868d5ecaafee7ef5c63d1d091dfb8b203ad3415b32a_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_fa3adca1a64d267e00caee3a3c0412750946c3482af391a0f5285f918a62edcd = $this->env->getExtension("native_profiler");
        $__internal_fa3adca1a64d267e00caee3a3c0412750946c3482af391a0f5285f918a62edcd->enter($__internal_fa3adca1a64d267e00caee3a3c0412750946c3482af391a0f5285f918a62edcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_fa3adca1a64d267e00caee3a3c0412750946c3482af391a0f5285f918a62edcd->leave($__internal_fa3adca1a64d267e00caee3a3c0412750946c3482af391a0f5285f918a62edcd_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "TwigBundle::layout.html.twig" %}*/
/* */
/* {% block head %}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}" />*/
/* {% endblock %}*/
/* */
/* {% block title 'Web Configurator Bundle' %}*/
/* */
/* {% block body %}*/
/*     <div class="block">*/
/*         {% block content %}{% endblock %}*/
/*     </div>*/
/*     <div class="version">Symfony Standard Edition v.{{ version }}</div>*/
/* {% endblock %}*/
/* */
