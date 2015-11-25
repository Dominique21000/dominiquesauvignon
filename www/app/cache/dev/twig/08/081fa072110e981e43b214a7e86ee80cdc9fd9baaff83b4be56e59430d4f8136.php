<?php

/* DSInternauteBundle:DS:references.html.twig */
class __TwigTemplate_4334df30038a3545ac0d887415b70b079a356b61ca3e70d25030b5a75db2e91b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("DSInternauteBundle::DS/home2.html.twig", "DSInternauteBundle:DS:references.html.twig", 3);
        $this->blocks = array(
            'block_nav' => array($this, 'block_block_nav'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DSInternauteBundle::DS/home2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_913baa664976990a67a163d7bb9c94de6190d55410067be79752acb350831e45 = $this->env->getExtension("native_profiler");
        $__internal_913baa664976990a67a163d7bb9c94de6190d55410067be79752acb350831e45->enter($__internal_913baa664976990a67a163d7bb9c94de6190d55410067be79752acb350831e45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DSInternauteBundle:DS:references.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_913baa664976990a67a163d7bb9c94de6190d55410067be79752acb350831e45->leave($__internal_913baa664976990a67a163d7bb9c94de6190d55410067be79752acb350831e45_prof);

    }

    // line 5
    public function block_block_nav($context, array $blocks = array())
    {
        $__internal_6c8b4ece19ab7981d7f9a7e6bf7027e9bb4b47d3354e5b0bed2c8be68fd2d53b = $this->env->getExtension("native_profiler");
        $__internal_6c8b4ece19ab7981d7f9a7e6bf7027e9bb4b47d3354e5b0bed2c8be68fd2d53b->enter($__internal_6c8b4ece19ab7981d7f9a7e6bf7027e9bb4b47d3354e5b0bed2c8be68fd2d53b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_nav"));

        // line 6
        echo "<div class=\"display\">
<table width=\"100%\">

    <strong>";
        // line 9
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["references"]) ? $context["references"] : $this->getContext($context, "references"))), "html", null, true);
        echo " référence(s)</strong> :
    <br>
    <br>

\t";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["references"]) ? $context["references"] : $this->getContext($context, "references")));
        foreach ($context['_seq'] as $context["_key"] => $context["reference"]) {
            // line 14
            echo "\t<tr>
\t\t<td><strong>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["reference"], "titre", array()), "html", null, true);
            echo "</strong</td>
\t</tr>
\t<tr>
\t\t<td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["reference"], "description", array()), "html", null, true);
            echo "</td>

\t\t<td><img src=\"";
            // line 20
            echo $this->env->getExtension('routing')->getPath("ds_internaute_homepage");
            echo "../logos/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["reference"], "logo", array()), "html", null, true);
            echo "\" width=\"100\"></td>
\t</tr>\t
\t<tr>
\t\t<td colspan=2><a href=\"http://";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["reference"], "adresse", array()), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["reference"], "adresse", array()), "html", null, true);
            echo "</a></td>\t
\t</tr>
\t<tr>
\t\t<td colspan=2><hr></td>
\t</tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reference'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "\t</table>
\t</div>
";
        
        $__internal_6c8b4ece19ab7981d7f9a7e6bf7027e9bb4b47d3354e5b0bed2c8be68fd2d53b->leave($__internal_6c8b4ece19ab7981d7f9a7e6bf7027e9bb4b47d3354e5b0bed2c8be68fd2d53b_prof);

    }

    public function getTemplateName()
    {
        return "DSInternauteBundle:DS:references.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 29,  78 => 23,  70 => 20,  65 => 18,  59 => 15,  56 => 14,  52 => 13,  45 => 9,  40 => 6,  34 => 5,  11 => 3,);
    }
}
/* {# src/DS/InternauteBundle/resources/views/DS/References.html.twig #}*/
/* */
/* {% extends "DSInternauteBundle::DS/home2.html.twig" %}*/
/* */
/* {% block block_nav %}*/
/* <div class="display">*/
/* <table width="100%">*/
/* */
/*     <strong>{{ references|length }} référence(s)</strong> :*/
/*     <br>*/
/*     <br>*/
/* */
/* 	{% for reference in references %}*/
/* 	<tr>*/
/* 		<td><strong>{{ reference.titre }}</strong</td>*/
/* 	</tr>*/
/* 	<tr>*/
/* 		<td>{{ reference.description }}</td>*/
/* */
/* 		<td><img src="{{ path('ds_internaute_homepage')}}../logos/{{ reference.logo}}" width="100"></td>*/
/* 	</tr>	*/
/* 	<tr>*/
/* 		<td colspan=2><a href="http://{{ reference.adresse }}" target="_blank">{{ reference.adresse }}</a></td>	*/
/* 	</tr>*/
/* 	<tr>*/
/* 		<td colspan=2><hr></td>*/
/* 	</tr>*/
/* 	{% endfor %}*/
/* 	</table>*/
/* 	</div>*/
/* {% endblock %}*/
