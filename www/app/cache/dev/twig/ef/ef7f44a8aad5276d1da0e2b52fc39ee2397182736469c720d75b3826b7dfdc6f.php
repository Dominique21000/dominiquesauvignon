<?php

/* DSInternauteBundle:DS:liens.html.twig */
class __TwigTemplate_b40429821df16a4b5c930d61f4165940561ff9470c9f024f092439d38a239581 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("DSInternauteBundle::DS/home2.html.twig", "DSInternauteBundle:DS:liens.html.twig", 3);
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
        $__internal_f14f6442c507830065bc2b7db1d4fe744d945110d3e021678f39bb8b8814f851 = $this->env->getExtension("native_profiler");
        $__internal_f14f6442c507830065bc2b7db1d4fe744d945110d3e021678f39bb8b8814f851->enter($__internal_f14f6442c507830065bc2b7db1d4fe744d945110d3e021678f39bb8b8814f851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DSInternauteBundle:DS:liens.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f14f6442c507830065bc2b7db1d4fe744d945110d3e021678f39bb8b8814f851->leave($__internal_f14f6442c507830065bc2b7db1d4fe744d945110d3e021678f39bb8b8814f851_prof);

    }

    // line 5
    public function block_block_nav($context, array $blocks = array())
    {
        $__internal_30892aed9dbba7e22e5de48272fbee3495d9ba410f61b14a31a43507d71321d2 = $this->env->getExtension("native_profiler");
        $__internal_30892aed9dbba7e22e5de48272fbee3495d9ba410f61b14a31a43507d71321d2->enter($__internal_30892aed9dbba7e22e5de48272fbee3495d9ba410f61b14a31a43507d71321d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_nav"));

        // line 6
        echo "<div class=\"display\">
\t<table width=\"100%\">

    \t<strong>";
        // line 9
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["liens"]) ? $context["liens"] : $this->getContext($context, "liens"))), "html", null, true);
        echo " lien(s)</strong> :
    \t<br>
    \t<br>
\t\t";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liens"]) ? $context["liens"] : $this->getContext($context, "liens")));
        foreach ($context['_seq'] as $context["_key"] => $context["lien"]) {
            // line 13
            echo "\t\t<tr>
\t\t\t<td><strong>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["lien"], "titre", array()), "html", null, true);
            echo "</strong</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td valign=\"=top\">";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["lien"], "description", array()), "html", null, true);
            echo "</td>
\t\t\t<td><img src=\"";
            // line 18
            echo $this->env->getExtension('routing')->getPath("ds_internaute_homepage");
            echo "../logos/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["lien"], "logo", array()), "html", null, true);
            echo "\" width=\"100\">
\t\t\t</td>
\t\t</tr>\t
\t\t<tr>
\t\t\t<td colspan=2><a href=\"http://";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["lien"], "adresse", array()), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["lien"], "adresse", array()), "html", null, true);
            echo "</a>
\t\t\t</td>\t
\t\t</tr>
\t\t<tr>
\t\t\t<td colspan=2><hr></td>
\t\t</tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "\t</table>
</div>
";
        
        $__internal_30892aed9dbba7e22e5de48272fbee3495d9ba410f61b14a31a43507d71321d2->leave($__internal_30892aed9dbba7e22e5de48272fbee3495d9ba410f61b14a31a43507d71321d2_prof);

    }

    public function getTemplateName()
    {
        return "DSInternauteBundle:DS:liens.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 29,  77 => 22,  68 => 18,  64 => 17,  58 => 14,  55 => 13,  51 => 12,  45 => 9,  40 => 6,  34 => 5,  11 => 3,);
    }
}
/* {# src/DS/InternauteBundle/Resources/views/DS/liens.html.twig  #}*/
/* */
/* {% extends "DSInternauteBundle::DS/home2.html.twig" %}*/
/* */
/* {% block block_nav %}*/
/* <div class="display">*/
/* 	<table width="100%">*/
/* */
/*     	<strong>{{ liens|length }} lien(s)</strong> :*/
/*     	<br>*/
/*     	<br>*/
/* 		{% for lien in liens %}*/
/* 		<tr>*/
/* 			<td><strong>{{ lien.titre }}</strong</td>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td valign="=top">{{ lien.description }}</td>*/
/* 			<td><img src="{{ path('ds_internaute_homepage')}}../logos/{{ lien.logo}}" width="100">*/
/* 			</td>*/
/* 		</tr>	*/
/* 		<tr>*/
/* 			<td colspan=2><a href="http://{{ lien.adresse }}" target="_blank">{{ lien.adresse }}</a>*/
/* 			</td>	*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td colspan=2><hr></td>*/
/* 		</tr>*/
/* 		{% endfor %}*/
/* 	</table>*/
/* </div>*/
/* {% endblock %}*/
