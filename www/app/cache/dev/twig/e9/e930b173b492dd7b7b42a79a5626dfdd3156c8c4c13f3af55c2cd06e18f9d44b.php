<?php

/* DSInternauteBundle:Admin/Lien:delete.html.twig */
class __TwigTemplate_571e3c36819970ecf26ba636a88042ed77bf5a413919c176381940f5869ea593 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("DSInternauteBundle::Admin/layout.html.twig", "DSInternauteBundle:Admin/Lien:delete.html.twig", 3);
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
        $__internal_64ecec999836dbbdb8e00aeb5f6a6197b7075ca38196b31bcd0e39873e854b1a = $this->env->getExtension("native_profiler");
        $__internal_64ecec999836dbbdb8e00aeb5f6a6197b7075ca38196b31bcd0e39873e854b1a->enter($__internal_64ecec999836dbbdb8e00aeb5f6a6197b7075ca38196b31bcd0e39873e854b1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DSInternauteBundle:Admin/Lien:delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64ecec999836dbbdb8e00aeb5f6a6197b7075ca38196b31bcd0e39873e854b1a->leave($__internal_64ecec999836dbbdb8e00aeb5f6a6197b7075ca38196b31bcd0e39873e854b1a_prof);

    }

    // line 5
    public function block_donnees($context, array $blocks = array())
    {
        $__internal_bdcf19f8aa91a874016f21067fd21faae5e060e95d3e675e47785f759386315d = $this->env->getExtension("native_profiler");
        $__internal_bdcf19f8aa91a874016f21067fd21faae5e060e95d3e675e47785f759386315d->enter($__internal_bdcf19f8aa91a874016f21067fd21faae5e060e95d3e675e47785f759386315d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "donnees"));

        // line 6
        echo "
    ";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        // line 10
        echo "


    <h2>Supprimer un lien</h2>
    <p>
        Etes-vous certain de vouloir supprimer le lien : ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lien"]) ? $context["lien"] : $this->getContext($context, "lien")), "titre", array()), "html", null, true);
        echo " ?
    </p>

    ";
        // line 19
        echo "    <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ds_admin_lien_delete", array("id" => $this->getAttribute((isset($context["lien"]) ? $context["lien"] : $this->getContext($context, "lien")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
        <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ds_admin_liens_liste", array("id" => $this->getAttribute((isset($context["lien"]) ? $context["lien"] : $this->getContext($context, "lien")), "id", array()))), "html", null, true);
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
        
        $__internal_bdcf19f8aa91a874016f21067fd21faae5e060e95d3e675e47785f759386315d->leave($__internal_bdcf19f8aa91a874016f21067fd21faae5e060e95d3e675e47785f759386315d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f0b3a25550da67bebe5912859013cb16904887f41137c4fe236cc86de3b78dda = $this->env->getExtension("native_profiler");
        $__internal_f0b3a25550da67bebe5912859013cb16904887f41137c4fe236cc86de3b78dda->enter($__internal_f0b3a25550da67bebe5912859013cb16904887f41137c4fe236cc86de3b78dda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "        Supprimer un lien
    ";
        
        $__internal_f0b3a25550da67bebe5912859013cb16904887f41137c4fe236cc86de3b78dda->leave($__internal_f0b3a25550da67bebe5912859013cb16904887f41137c4fe236cc86de3b78dda_prof);

    }

    public function getTemplateName()
    {
        return "DSInternauteBundle:Admin/Lien:delete.html.twig";
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
/* {# src/DS/InternauteBundle/Resources/views/Lien/delete.html.twig #}*/
/* */
/* {% extends "DSInternauteBundle::Admin/layout.html.twig" %}*/
/* */
/* {%  block donnees %}*/
/* */
/*     {% block title %}*/
/*         Supprimer un lien*/
/*     {% endblock %}*/
/* */
/* */
/* */
/*     <h2>Supprimer un lien</h2>*/
/*     <p>*/
/*         Etes-vous certain de vouloir supprimer le lien : {{ lien.titre }} ?*/
/*     </p>*/
/* */
/*     {# On met l'id de l'annonce dans la route de l'action du formulaire #}*/
/*     <form action="{{ path('ds_admin_lien_delete', {'id': lien.id}) }}" method="post">*/
/*         <a href="{{ path('ds_admin_liens_liste', {'id': lien.id}) }}" class="btn btn-default">*/
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
