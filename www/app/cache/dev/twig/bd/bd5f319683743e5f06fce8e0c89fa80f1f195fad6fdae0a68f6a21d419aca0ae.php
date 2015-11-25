<?php

/* DSInternauteBundle:DS:formation.html.twig */
class __TwigTemplate_819fbc9a7bcb2d89f4bd7a783984b0d403df5cdf75f6059125e217b4d14d2574 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("DSInternauteBundle::DS/home2.html.twig", "DSInternauteBundle:DS:formation.html.twig", 3);
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
        $__internal_d6b52cf561f2699b6158b4f92bdf3c90453053ae855451f60227e23169828076 = $this->env->getExtension("native_profiler");
        $__internal_d6b52cf561f2699b6158b4f92bdf3c90453053ae855451f60227e23169828076->enter($__internal_d6b52cf561f2699b6158b4f92bdf3c90453053ae855451f60227e23169828076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DSInternauteBundle:DS:formation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6b52cf561f2699b6158b4f92bdf3c90453053ae855451f60227e23169828076->leave($__internal_d6b52cf561f2699b6158b4f92bdf3c90453053ae855451f60227e23169828076_prof);

    }

    // line 5
    public function block_block_nav($context, array $blocks = array())
    {
        $__internal_f8fded7931fab7b0b3ae7aef2bab72eaf787cfbf30b7b7e3ef8fafd0ce10743e = $this->env->getExtension("native_profiler");
        $__internal_f8fded7931fab7b0b3ae7aef2bab72eaf787cfbf30b7b7e3ef8fafd0ce10743e->enter($__internal_f8fded7931fab7b0b3ae7aef2bab72eaf787cfbf30b7b7e3ef8fafd0ce10743e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_nav"));

        // line 6
        echo "
<div class=\"display\">
<div id=\"titre\" class=\"titrePro\">
        <b>Ma formation : </b><br>
</div>

    <div class=police_pro>
     <!--   Je suis continuellement en train de me former :
        <ul>
            <li>HTML 5 (<img src=\"logos/HTML5_Logo_512.png\" alt=\"Logo HTML5\" width=\"20\">)</li>
            <li>CSS de niveau 3 (<img src=\"logos/css3-logo.jpg\" alt=\"Logo CSS 3\" width=\"20\">)</li>
            <li>Ajax (donc Javascript)</li>
            <li>php5</li>
            <li>CMS...</li>
        </ul> -->
        <br>
\tMa formation de base est la suivante : <br>
        <UL>
            <li><strong>DU Développeur Grands Systèmes</strong> en 2014</li>
            <LI>Formation <strong>V</strong>oix <strong>D</strong>onnées <strong>I</strong>mages, technicien courant faible validée en 2008</LI>
            <LI><b>DUT en Informatique</b> option Génie Informatique obtenu en 2000</LI>
            <LI>BTS en Comptabilité et Gestion obtenu en 1998</LI>
            <LI>Bac. S option SVT obtenu en 1995</LI>
        </UL>
        <br>
        Je suis actuellement en train de me former et perfectionner aux technologies utilisées actuellement : Symfony2, etc... </div>  

</div>
";
        
        $__internal_f8fded7931fab7b0b3ae7aef2bab72eaf787cfbf30b7b7e3ef8fafd0ce10743e->leave($__internal_f8fded7931fab7b0b3ae7aef2bab72eaf787cfbf30b7b7e3ef8fafd0ce10743e_prof);

    }

    public function getTemplateName()
    {
        return "DSInternauteBundle:DS:formation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 3,);
    }
}
/* {# src/DS/InternauteBundle/Resources/views/DS/formation.html.twig #}*/
/* */
/* {% extends "DSInternauteBundle::DS/home2.html.twig" %}*/
/* */
/* {% block block_nav %}*/
/* */
/* <div class="display">*/
/* <div id="titre" class="titrePro">*/
/*         <b>Ma formation : </b><br>*/
/* </div>*/
/* */
/*     <div class=police_pro>*/
/*      <!--   Je suis continuellement en train de me former :*/
/*         <ul>*/
/*             <li>HTML 5 (<img src="logos/HTML5_Logo_512.png" alt="Logo HTML5" width="20">)</li>*/
/*             <li>CSS de niveau 3 (<img src="logos/css3-logo.jpg" alt="Logo CSS 3" width="20">)</li>*/
/*             <li>Ajax (donc Javascript)</li>*/
/*             <li>php5</li>*/
/*             <li>CMS...</li>*/
/*         </ul> -->*/
/*         <br>*/
/* 	Ma formation de base est la suivante : <br>*/
/*         <UL>*/
/*             <li><strong>DU Développeur Grands Systèmes</strong> en 2014</li>*/
/*             <LI>Formation <strong>V</strong>oix <strong>D</strong>onnées <strong>I</strong>mages, technicien courant faible validée en 2008</LI>*/
/*             <LI><b>DUT en Informatique</b> option Génie Informatique obtenu en 2000</LI>*/
/*             <LI>BTS en Comptabilité et Gestion obtenu en 1998</LI>*/
/*             <LI>Bac. S option SVT obtenu en 1995</LI>*/
/*         </UL>*/
/*         <br>*/
/*         Je suis actuellement en train de me former et perfectionner aux technologies utilisées actuellement : Symfony2, etc... </div>  */
/* */
/* </div>*/
/* {% endblock %}*/
