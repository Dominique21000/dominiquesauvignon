<?php

/* DSInternauteBundle:Admin/Reference:add.html.twig */
class __TwigTemplate_99a949e9e823c76860ee7b6c7d93863b4b0fcc80074d1424c8b7b6d1d0f88d89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("DSInternauteBundle::Admin/layout.html.twig", "DSInternauteBundle:Admin/Reference:add.html.twig", 3);
        $this->blocks = array(
            'donnees' => array($this, 'block_donnees'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DSInternauteBundle::Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ae6b4f86494fd45065b0ee593226ee59f44b8e53e7dd5dbf13299fe2d9477ada = $this->env->getExtension("native_profiler");
        $__internal_ae6b4f86494fd45065b0ee593226ee59f44b8e53e7dd5dbf13299fe2d9477ada->enter($__internal_ae6b4f86494fd45065b0ee593226ee59f44b8e53e7dd5dbf13299fe2d9477ada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DSInternauteBundle:Admin/Reference:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae6b4f86494fd45065b0ee593226ee59f44b8e53e7dd5dbf13299fe2d9477ada->leave($__internal_ae6b4f86494fd45065b0ee593226ee59f44b8e53e7dd5dbf13299fe2d9477ada_prof);

    }

    // line 5
    public function block_donnees($context, array $blocks = array())
    {
        $__internal_5e9be34dbb7b8642c3e42b665001399de22570ef7a6f9cd6be1741c43eab42a9 = $this->env->getExtension("native_profiler");
        $__internal_5e9be34dbb7b8642c3e42b665001399de22570ef7a6f9cd6be1741c43eab42a9->enter($__internal_5e9be34dbb7b8642c3e42b665001399de22570ef7a6f9cd6be1741c43eab42a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "donnees"));

        // line 6
        echo "    ";
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_5e9be34dbb7b8642c3e42b665001399de22570ef7a6f9cd6be1741c43eab42a9->leave($__internal_5e9be34dbb7b8642c3e42b665001399de22570ef7a6f9cd6be1741c43eab42a9_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_cf42a564fbcb47520d9d5bfe042566fb41876fcefbd52ede0ac27110f8bbc938 = $this->env->getExtension("native_profiler");
        $__internal_cf42a564fbcb47520d9d5bfe042566fb41876fcefbd52ede0ac27110f8bbc938->enter($__internal_cf42a564fbcb47520d9d5bfe042566fb41876fcefbd52ede0ac27110f8bbc938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        <h2>Ajouter une référence</h2>
            ";
        // line 9
        $this->loadTemplate("DSInternauteBundle:Admin/Reference:form.html.twig", "DSInternauteBundle:Admin/Reference:add.html.twig", 9)->display($context);
        // line 10
        echo "    ";
        
        $__internal_cf42a564fbcb47520d9d5bfe042566fb41876fcefbd52ede0ac27110f8bbc938->leave($__internal_cf42a564fbcb47520d9d5bfe042566fb41876fcefbd52ede0ac27110f8bbc938_prof);

    }

    public function getTemplateName()
    {
        return "DSInternauteBundle:Admin/Reference:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 10,  60 => 9,  54 => 7,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/DS/InternauteBundle/Resources/views/Reference/add.html.twig #}*/
/* */
/* {% extends "DSInternauteBundle::Admin/layout.html.twig" %}*/
/* */
/* {%  block donnees %}*/
/*     {% block body %}*/
/*         {{ form_errors(form) }}*/
/*         <h2>Ajouter une référence</h2>*/
/*             {% include "DSInternauteBundle:Admin/Reference:form.html.twig" %}*/
/*     {% endblock %}*/
/* {% endblock %}*/
/* */
