<?php

/* DSInternauteBundle:Admin/Lien:edit.html.twig */
class __TwigTemplate_d78b64ec019ed34dd6c478d9675917909a9f366bb9498195230d4b8e8a0c565d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("DSInternauteBundle::Admin/layout.html.twig", "DSInternauteBundle:Admin/Lien:edit.html.twig", 3);
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
        $__internal_4fadbeab8bd527507d395aad5ca764bd17d7a40787b0d38ecd5607c004f76c67 = $this->env->getExtension("native_profiler");
        $__internal_4fadbeab8bd527507d395aad5ca764bd17d7a40787b0d38ecd5607c004f76c67->enter($__internal_4fadbeab8bd527507d395aad5ca764bd17d7a40787b0d38ecd5607c004f76c67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DSInternauteBundle:Admin/Lien:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4fadbeab8bd527507d395aad5ca764bd17d7a40787b0d38ecd5607c004f76c67->leave($__internal_4fadbeab8bd527507d395aad5ca764bd17d7a40787b0d38ecd5607c004f76c67_prof);

    }

    // line 5
    public function block_donnees($context, array $blocks = array())
    {
        $__internal_d099b12a570048c82415a718721d4d0bf25310a45a84c421a1ac9f0b99b2ad3a = $this->env->getExtension("native_profiler");
        $__internal_d099b12a570048c82415a718721d4d0bf25310a45a84c421a1ac9f0b99b2ad3a->enter($__internal_d099b12a570048c82415a718721d4d0bf25310a45a84c421a1ac9f0b99b2ad3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "donnees"));

        // line 6
        echo "
    ";
        // line 7
        $this->displayBlock('ds_internaute_body', $context, $blocks);
        // line 26
        echo "
";
        
        $__internal_d099b12a570048c82415a718721d4d0bf25310a45a84c421a1ac9f0b99b2ad3a->leave($__internal_d099b12a570048c82415a718721d4d0bf25310a45a84c421a1ac9f0b99b2ad3a_prof);

    }

    // line 7
    public function block_ds_internaute_body($context, array $blocks = array())
    {
        $__internal_b766c0886eefa4bc78124259699f73dcbdcf47851b0f33ee56124ed852e6825d = $this->env->getExtension("native_profiler");
        $__internal_b766c0886eefa4bc78124259699f73dcbdcf47851b0f33ee56124ed852e6825d->enter($__internal_b766c0886eefa4bc78124259699f73dcbdcf47851b0f33ee56124ed852e6825d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ds_internaute_body"));

        // line 8
        echo "
        <h2>Modifier le lien : ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lien"]) ? $context["lien"] : $this->getContext($context, "lien")), "id", array()), "html", null, true);
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
        $this->loadTemplate("DSInternauteBundle:Admin/Lien:form.html.twig", "DSInternauteBundle:Admin/Lien:edit.html.twig", 16)->display($context);
        // line 17
        echo "
        <p>
            <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ds_admin_liens_liste", array("id" => $this->getAttribute((isset($context["lien"]) ? $context["lien"] : $this->getContext($context, "lien")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
                <i class=\"glyphicon glyphicon-chevron-left\"></i>
                Retour à la liste
            </a>
        </p>

    ";
        
        $__internal_b766c0886eefa4bc78124259699f73dcbdcf47851b0f33ee56124ed852e6825d->leave($__internal_b766c0886eefa4bc78124259699f73dcbdcf47851b0f33ee56124ed852e6825d_prof);

    }

    public function getTemplateName()
    {
        return "DSInternauteBundle:Admin/Lien:edit.html.twig";
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
/* {# src/DS/Internaute/Resources/views/Lien/edit.html.twig #}*/
/* */
/* {% extends "DSInternauteBundle::Admin/layout.html.twig" %}*/
/* */
/* {% block donnees %}*/
/* */
/*     {% block ds_internaute_body %}*/
/* */
/*         <h2>Modifier le lien : {{ lien.id }}</h2>*/
/*         {% for flashMessage in app.session.flashbag.get('notice') %}*/
/*             <div class="flash-notice">*/
/*                 {{ flashMessage }}*/
/*             </div>*/
/*         {% endfor %}*/
/* */
/*         {% include "DSInternauteBundle:Admin/Lien:form.html.twig" %}*/
/* */
/*         <p>*/
/*             <a href="{{ path('ds_admin_liens_liste', {'id': lien.id}) }}" class="btn btn-default">*/
/*                 <i class="glyphicon glyphicon-chevron-left"></i>*/
/*                 Retour à la liste*/
/*             </a>*/
/*         </p>*/
/* */
/*     {% endblock %}*/
/* */
/* {% endblock %}*/
