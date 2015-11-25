<?php

/* DSInternauteBundle:Admin/Reference:liste.html.twig */
class __TwigTemplate_ec9e1645f41c464b51c44cb05fb6207f84d0e59b1c05f51e4f941f5ffe4ae1ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("DSInternauteBundle::Admin/layout.html.twig", "DSInternauteBundle:Admin/Reference:liste.html.twig", 3);
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
        $__internal_123f8757c0451363fdb0de342c624a7957a6fb3c34c3a8abe1b2ece12f773875 = $this->env->getExtension("native_profiler");
        $__internal_123f8757c0451363fdb0de342c624a7957a6fb3c34c3a8abe1b2ece12f773875->enter($__internal_123f8757c0451363fdb0de342c624a7957a6fb3c34c3a8abe1b2ece12f773875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DSInternauteBundle:Admin/Reference:liste.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_123f8757c0451363fdb0de342c624a7957a6fb3c34c3a8abe1b2ece12f773875->leave($__internal_123f8757c0451363fdb0de342c624a7957a6fb3c34c3a8abe1b2ece12f773875_prof);

    }

    // line 5
    public function block_donnees($context, array $blocks = array())
    {
        $__internal_eabd4b8ff1706a5f82cf93e0d003cc9a789e16d779432bf21235d3a2cfece559 = $this->env->getExtension("native_profiler");
        $__internal_eabd4b8ff1706a5f82cf93e0d003cc9a789e16d779432bf21235d3a2cfece559->enter($__internal_eabd4b8ff1706a5f82cf93e0d003cc9a789e16d779432bf21235d3a2cfece559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "donnees"));

        // line 6
        echo "
<a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("ds_admin_reference_add");
        echo "\" class=\"btn-lien_nouveau\">Nouvelle référence</a>
<br>

<h1>Liste des références : </h1>
<table>
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["references"]) ? $context["references"] : $this->getContext($context, "references")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reference"]) {
            // line 13
            echo "        <tr>
            <td>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["reference"], "titre", array()), "html", null, true);
            echo "</td>
            <td><a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ds_admin_reference_edit", array("id" => $this->getAttribute($context["reference"], "id", array()))), "html", null, true);
            echo "\">Modifier</a></td>
            <td><a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ds_admin_reference_delete", array("id" => $this->getAttribute($context["reference"], "id", array()))), "html", null, true);
            echo "\">Supprimer</a></td>
        </tr>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 19
            echo "        <tr>
            <td colspan=\"3\">Pas (encore !) de references</td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reference'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "</table>
";
        
        $__internal_eabd4b8ff1706a5f82cf93e0d003cc9a789e16d779432bf21235d3a2cfece559->leave($__internal_eabd4b8ff1706a5f82cf93e0d003cc9a789e16d779432bf21235d3a2cfece559_prof);

    }

    public function getTemplateName()
    {
        return "DSInternauteBundle:Admin/Reference:liste.html.twig";
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
/* {# src/DS/InternauteBundle/Resources/views/Admin/Reference/liste.html.twig#}*/
/* */
/* {% extends "DSInternauteBundle::Admin/layout.html.twig" %}*/
/* */
/* {%  block donnees %}*/
/* */
/* <a href="{{ path('ds_admin_reference_add') }}" class="btn-lien_nouveau">Nouvelle référence</a>*/
/* <br>*/
/* */
/* <h1>Liste des références : </h1>*/
/* <table>*/
/*     {% for reference in references %}*/
/*         <tr>*/
/*             <td>{{ reference.titre }}</td>*/
/*             <td><a href="{{ path('ds_admin_reference_edit', {'id': reference.id}) }}">Modifier</a></td>*/
/*             <td><a href="{{ path('ds_admin_reference_delete', {'id': reference.id}) }}">Supprimer</a></td>*/
/*         </tr>*/
/*     {% else %}*/
/*         <tr>*/
/*             <td colspan="3">Pas (encore !) de references</td>*/
/*         </tr>*/
/*     {% endfor %}*/
/* </table>*/
/* {%  endblock %}*/
/* */
