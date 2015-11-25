<?php

/* DSInternauteBundle:Admin/Lien:liste.html.twig */
class __TwigTemplate_eba47d2358562646d3cb764ad377fb7f6c90d5216d1439111607162889b0f88c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("DSInternauteBundle::Admin/layout.html.twig", "DSInternauteBundle:Admin/Lien:liste.html.twig", 3);
        $this->blocks = array(
            'donnees' => array($this, 'block_donnees'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DSInternauteBundle::Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0363cffc844000bd82c3cd299d49553c6ca09d48769c519be82b31166a69776a = $this->env->getExtension("native_profiler");
        $__internal_0363cffc844000bd82c3cd299d49553c6ca09d48769c519be82b31166a69776a->enter($__internal_0363cffc844000bd82c3cd299d49553c6ca09d48769c519be82b31166a69776a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DSInternauteBundle:Admin/Lien:liste.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0363cffc844000bd82c3cd299d49553c6ca09d48769c519be82b31166a69776a->leave($__internal_0363cffc844000bd82c3cd299d49553c6ca09d48769c519be82b31166a69776a_prof);

    }

    // line 5
    public function block_donnees($context, array $blocks = array())
    {
        $__internal_45982afba5f999798b248a0d9dd48c75469a96e5135465752582087fa0786e0b = $this->env->getExtension("native_profiler");
        $__internal_45982afba5f999798b248a0d9dd48c75469a96e5135465752582087fa0786e0b->enter($__internal_45982afba5f999798b248a0d9dd48c75469a96e5135465752582087fa0786e0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "donnees"));

        // line 6
        echo "
<a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("ds_admin_lien_add");
        echo "\" class=\"btn-lien_nouveau\">Nouveau lien</a>
<br>

<h1>Liste des liens : </h1>
<table>
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liens"]) ? $context["liens"] : $this->getContext($context, "liens")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["lien"]) {
            // line 13
            echo "        <tr>
            <td>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["lien"], "titre", array()), "html", null, true);
            echo "</td>
            <td><a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ds_admin_lien_edit", array("id" => $this->getAttribute($context["lien"], "id", array()))), "html", null, true);
            echo "\">Modifier</a></td>
            <td><a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ds_admin_lien_delete", array("id" => $this->getAttribute($context["lien"], "id", array()))), "html", null, true);
            echo "\">Supprimer</a></td>
        </tr>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 19
            echo "        <tr>
            <td colspan=\"3\">Pas (encore !) de liens</td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "</table>
";
        
        $__internal_45982afba5f999798b248a0d9dd48c75469a96e5135465752582087fa0786e0b->leave($__internal_45982afba5f999798b248a0d9dd48c75469a96e5135465752582087fa0786e0b_prof);

    }

    public function getTemplateName()
    {
        return "DSInternauteBundle:Admin/Lien:liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 23,  75 => 19,  67 => 16,  63 => 15,  59 => 14,  56 => 13,  51 => 12,  43 => 7,  40 => 6,  34 => 5,  11 => 3,);
    }
}
/* {# src/DS/InternauteBundle/Resources/views/Admin/Lien/liste.html.twig#}*/
/* */
/* {% extends "DSInternauteBundle::Admin/layout.html.twig" %}*/
/* */
/* {%  block donnees %}*/
/* */
/* <a href="{{ path('ds_admin_lien_add') }}" class="btn-lien_nouveau">Nouveau lien</a>*/
/* <br>*/
/* */
/* <h1>Liste des liens : </h1>*/
/* <table>*/
/*     {% for lien in liens %}*/
/*         <tr>*/
/*             <td>{{ lien.titre }}</td>*/
/*             <td><a href="{{ path('ds_admin_lien_edit', {'id': lien.id}) }}">Modifier</a></td>*/
/*             <td><a href="{{ path('ds_admin_lien_delete', {'id': lien.id}) }}">Supprimer</a></td>*/
/*         </tr>*/
/*     {% else %}*/
/*         <tr>*/
/*             <td colspan="3">Pas (encore !) de liens</td>*/
/*         </tr>*/
/*     {% endfor %}*/
/* </table>*/
/* {%  endblock %}*/
/* */
