<?php

/* DSInternauteBundle:Admin/Reference:edit.html.twig */
class __TwigTemplate_34e620a8f4749a9fb692b8509d3c5154925eae0f92c6df49888dbd5159d58a1e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("DSInternauteBundle::Admin/layout.html.twig", "DSInternauteBundle:Admin/Reference:edit.html.twig", 3);
        $this->blocks = array(
            'donnees' => array($this, 'block_donnees'),
            'ds_internaute_body' => array($this, 'block_ds_internaute_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DSInternauteBundle::Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9edbc3ee951c9c108ec7c116335056ab9edba91c39b526b3d2d8477403492812 = $this->env->getExtension("native_profiler");
        $__internal_9edbc3ee951c9c108ec7c116335056ab9edba91c39b526b3d2d8477403492812->enter($__internal_9edbc3ee951c9c108ec7c116335056ab9edba91c39b526b3d2d8477403492812_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DSInternauteBundle:Admin/Reference:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9edbc3ee951c9c108ec7c116335056ab9edba91c39b526b3d2d8477403492812->leave($__internal_9edbc3ee951c9c108ec7c116335056ab9edba91c39b526b3d2d8477403492812_prof);

    }

    // line 5
    public function block_donnees($context, array $blocks = array())
    {
        $__internal_236db90512ff6a5d08b09b7858d5f7092f71581813c115b8226afdd21ef3ac73 = $this->env->getExtension("native_profiler");
        $__internal_236db90512ff6a5d08b09b7858d5f7092f71581813c115b8226afdd21ef3ac73->enter($__internal_236db90512ff6a5d08b09b7858d5f7092f71581813c115b8226afdd21ef3ac73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "donnees"));

        // line 6
        echo "
    ";
        // line 7
        $this->displayBlock('ds_internaute_body', $context, $blocks);
        // line 26
        echo "
";
        
        $__internal_236db90512ff6a5d08b09b7858d5f7092f71581813c115b8226afdd21ef3ac73->leave($__internal_236db90512ff6a5d08b09b7858d5f7092f71581813c115b8226afdd21ef3ac73_prof);

    }

    // line 7
    public function block_ds_internaute_body($context, array $blocks = array())
    {
        $__internal_af2f965b018b32c94b499730ef5dbffb17c1e05ce056437f67cd746ede323bd7 = $this->env->getExtension("native_profiler");
        $__internal_af2f965b018b32c94b499730ef5dbffb17c1e05ce056437f67cd746ede323bd7->enter($__internal_af2f965b018b32c94b499730ef5dbffb17c1e05ce056437f67cd746ede323bd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ds_internaute_body"));

        // line 8
        echo "
        <h2>Modifier la référence : ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reference"]) ? $context["reference"] : $this->getContext($context, "reference")), "id", array()), "html", null, true);
        echo "</h2>
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 11
            echo "            <div class=\"flash-notice\">
                ";
            // line 12
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "
        ";
        // line 16
        $this->loadTemplate("DSInternauteBundle:Admin/Reference:form.html.twig", "DSInternauteBundle:Admin/Reference:edit.html.twig", 16)->display($context);
        // line 17
        echo "
        <p>
            <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ds_admin_references_liste", array("id" => $this->getAttribute((isset($context["reference"]) ? $context["reference"] : $this->getContext($context, "reference")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
                <i class=\"glyphicon glyphicon-chevron-left\"></i>
                Retour à la liste
            </a>
        </p>

    ";
        
        $__internal_af2f965b018b32c94b499730ef5dbffb17c1e05ce056437f67cd746ede323bd7->leave($__internal_af2f965b018b32c94b499730ef5dbffb17c1e05ce056437f67cd746ede323bd7_prof);

    }

    public function getTemplateName()
    {
        return "DSInternauteBundle:Admin/Reference:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 19,  88 => 17,  86 => 16,  83 => 15,  74 => 12,  71 => 11,  67 => 10,  63 => 9,  60 => 8,  54 => 7,  46 => 26,  44 => 7,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/DS/Internaute/Resources/views/Reference/edit.html.twig #}*/
/* */
/* {% extends "DSInternauteBundle::Admin/layout.html.twig" %}*/
/* */
/* {% block donnees %}*/
/* */
/*     {% block ds_internaute_body %}*/
/* */
/*         <h2>Modifier la référence : {{ reference.id }}</h2>*/
/*         {% for flashMessage in app.session.flashbag.get('notice') %}*/
/*             <div class="flash-notice">*/
/*                 {{ flashMessage }}*/
/*             </div>*/
/*         {% endfor %}*/
/* */
/*         {% include "DSInternauteBundle:Admin/Reference:form.html.twig" %}*/
/* */
/*         <p>*/
/*             <a href="{{ path('ds_admin_references_liste', {'id': reference.id}) }}" class="btn btn-default">*/
/*                 <i class="glyphicon glyphicon-chevron-left"></i>*/
/*                 Retour à la liste*/
/*             </a>*/
/*         </p>*/
/* */
/*     {% endblock %}*/
/* */
/* {% endblock %}*/
