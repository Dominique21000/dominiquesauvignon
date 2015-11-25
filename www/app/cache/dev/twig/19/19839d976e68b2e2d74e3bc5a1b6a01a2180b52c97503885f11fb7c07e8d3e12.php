<?php

/* DSInternauteBundle:Admin/Reference:delete.html.twig */
class __TwigTemplate_c01ba87937e0a17505ff8975eba1f26bef9953a5f200f8da94413d4272420c0d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("DSInternauteBundle::Admin/layout.html.twig", "DSInternauteBundle:Admin/Reference:delete.html.twig", 3);
        $this->blocks = array(
            'donnees' => array($this, 'block_donnees'),
            'title' => array($this, 'block_title'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DSInternauteBundle::Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5774b22fb7a6a2e961ffb840367efdf73ee3d34d4d7105e27da96a5ab853fbf8 = $this->env->getExtension("native_profiler");
        $__internal_5774b22fb7a6a2e961ffb840367efdf73ee3d34d4d7105e27da96a5ab853fbf8->enter($__internal_5774b22fb7a6a2e961ffb840367efdf73ee3d34d4d7105e27da96a5ab853fbf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DSInternauteBundle:Admin/Reference:delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5774b22fb7a6a2e961ffb840367efdf73ee3d34d4d7105e27da96a5ab853fbf8->leave($__internal_5774b22fb7a6a2e961ffb840367efdf73ee3d34d4d7105e27da96a5ab853fbf8_prof);

    }

    // line 5
    public function block_donnees($context, array $blocks = array())
    {
        $__internal_e0e6efe522936bcb6b6401a05f9631b13cb8934d451fae6fe209272496a9af73 = $this->env->getExtension("native_profiler");
        $__internal_e0e6efe522936bcb6b6401a05f9631b13cb8934d451fae6fe209272496a9af73->enter($__internal_e0e6efe522936bcb6b6401a05f9631b13cb8934d451fae6fe209272496a9af73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "donnees"));

        // line 6
        echo "
    ";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        // line 10
        echo "


    <h2>Supprimer un lien</h2>
    <p>
        Etes-vous certain de vouloir supprimer la référence : ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reference"]) ? $context["reference"] : $this->getContext($context, "reference")), "titre", array()), "html", null, true);
        echo " ?
    </p>

    ";
        // line 19
        echo "    <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ds_admin_reference_delete", array("id" => $this->getAttribute((isset($context["reference"]) ? $context["reference"] : $this->getContext($context, "reference")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
        <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ds_admin_references_liste", array("id" => $this->getAttribute((isset($context["reference"]) ? $context["reference"] : $this->getContext($context, "reference")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour à la liste
        </a>
        ";
        // line 25
        echo "        <input type=\"submit\" value=\"Supprimer\" class=\"btn btn-danger\" />
        ";
        // line 27
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
    </form>
";
        
        $__internal_e0e6efe522936bcb6b6401a05f9631b13cb8934d451fae6fe209272496a9af73->leave($__internal_e0e6efe522936bcb6b6401a05f9631b13cb8934d451fae6fe209272496a9af73_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9d0a665d5402463429c46585492600a44243ec082b3e5ea542794d7374f76312 = $this->env->getExtension("native_profiler");
        $__internal_9d0a665d5402463429c46585492600a44243ec082b3e5ea542794d7374f76312->enter($__internal_9d0a665d5402463429c46585492600a44243ec082b3e5ea542794d7374f76312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "        Supprimer une référence
    ";
        
        $__internal_9d0a665d5402463429c46585492600a44243ec082b3e5ea542794d7374f76312->leave($__internal_9d0a665d5402463429c46585492600a44243ec082b3e5ea542794d7374f76312_prof);

    }

    public function getTemplateName()
    {
        return "DSInternauteBundle:Admin/Reference:delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 8,  85 => 7,  74 => 27,  71 => 25,  64 => 20,  59 => 19,  53 => 15,  46 => 10,  44 => 7,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/DS/InternauteBundle/Resources/views/Reference/delete.html.twig #}*/
/* */
/* {% extends "DSInternauteBundle::Admin/layout.html.twig" %}*/
/* */
/* {%  block donnees %}*/
/* */
/*     {% block title %}*/
/*         Supprimer une référence*/
/*     {% endblock %}*/
/* */
/* */
/* */
/*     <h2>Supprimer un lien</h2>*/
/*     <p>*/
/*         Etes-vous certain de vouloir supprimer la référence : {{ reference.titre }} ?*/
/*     </p>*/
/* */
/*     {# On met l'id de l'annonce dans la route de l'action du formulaire #}*/
/*     <form action="{{ path('ds_admin_reference_delete', {'id': reference.id}) }}" method="post">*/
/*         <a href="{{ path('ds_admin_references_liste', {'id': reference.id}) }}" class="btn btn-default">*/
/*             <i class="glyphicon glyphicon-chevron-left"></i>*/
/*             Retour à la liste*/
/*         </a>*/
/*         {# Ici j'ai écrit le bouton de soumission à la main #}*/
/*         <input type="submit" value="Supprimer" class="btn btn-danger" />*/
/*         {# Ceci va générer le champ CSRF #}*/
/*         {{ form_rest(form) }}*/
/*     </form>*/
/* {% endblock %}*/
/* */
