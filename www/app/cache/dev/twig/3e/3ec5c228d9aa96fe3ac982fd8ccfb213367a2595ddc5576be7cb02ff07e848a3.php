<?php

/* DSInternauteBundle:DS:recommandations.html.twig */
class __TwigTemplate_9d78d70dc7c1ca2b02a401b8583537103e087f4a1bc0bddbff89eecb7e0222ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("DSInternauteBundle::DS/home2.html.twig", "DSInternauteBundle:DS:recommandations.html.twig", 3);
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
        $__internal_f0c49ea6a58f217baeeaae8d81683253a5516935f6756a60e9bfa3de308ab80e = $this->env->getExtension("native_profiler");
        $__internal_f0c49ea6a58f217baeeaae8d81683253a5516935f6756a60e9bfa3de308ab80e->enter($__internal_f0c49ea6a58f217baeeaae8d81683253a5516935f6756a60e9bfa3de308ab80e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DSInternauteBundle:DS:recommandations.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0c49ea6a58f217baeeaae8d81683253a5516935f6756a60e9bfa3de308ab80e->leave($__internal_f0c49ea6a58f217baeeaae8d81683253a5516935f6756a60e9bfa3de308ab80e_prof);

    }

    // line 5
    public function block_block_nav($context, array $blocks = array())
    {
        $__internal_6e89a963ba6d3588291cd32c3007ee98dbb69f330c3f63481fda49e6d298b51f = $this->env->getExtension("native_profiler");
        $__internal_6e89a963ba6d3588291cd32c3007ee98dbb69f330c3f63481fda49e6d298b51f->enter($__internal_6e89a963ba6d3588291cd32c3007ee98dbb69f330c3f63481fda49e6d298b51f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_nav"));

        // line 6
        echo "
<div class=\"display\">
<div id=\"titre\" class=\"titrePro\"><b>Mes recommandations : </b></div>
<br>
<div id=\"recommandation\">
    <b>De M.Claudic, le sensei du Dojo dont je suis le webmaster</b> : <br>
    <br>
    <img src=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("ds_internaute_homepage");
        echo "../docs/recommandation/2013_07_27--Lettre_recommandation_SeirenKaiKarateDojo.jpg\" width=\"90%\"><br>
    <br>
    <hr>
    <b>De M.Rabut, gérant d'une des sociétés où j'ai travaillé</b> : <br>
    <br>
    <img src=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("ds_internaute_homepage");
        echo "../docs/recommandation/2004_06_25--lettreRecommandationAxel-Technologies.jpg\" width=\"90%\">
    
    
</div>
</div>
";
        
        $__internal_6e89a963ba6d3588291cd32c3007ee98dbb69f330c3f63481fda49e6d298b51f->leave($__internal_6e89a963ba6d3588291cd32c3007ee98dbb69f330c3f63481fda49e6d298b51f_prof);

    }

    public function getTemplateName()
    {
        return "DSInternauteBundle:DS:recommandations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 18,  49 => 13,  40 => 6,  34 => 5,  11 => 3,);
    }
}
/* {# src/DS/InternauteBundle/Resources/views/DS/recommandations.html.twig #}*/
/* */
/* {% extends "DSInternauteBundle::DS/home2.html.twig" %}*/
/* */
/* {% block block_nav %}*/
/* */
/* <div class="display">*/
/* <div id="titre" class="titrePro"><b>Mes recommandations : </b></div>*/
/* <br>*/
/* <div id="recommandation">*/
/*     <b>De M.Claudic, le sensei du Dojo dont je suis le webmaster</b> : <br>*/
/*     <br>*/
/*     <img src="{{ path('ds_internaute_homepage')}}../docs/recommandation/2013_07_27--Lettre_recommandation_SeirenKaiKarateDojo.jpg" width="90%"><br>*/
/*     <br>*/
/*     <hr>*/
/*     <b>De M.Rabut, gérant d'une des sociétés où j'ai travaillé</b> : <br>*/
/*     <br>*/
/*     <img src="{{ path('ds_internaute_homepage')}}../docs/recommandation/2004_06_25--lettreRecommandationAxel-Technologies.jpg" width="90%">*/
/*     */
/*     */
/* </div>*/
/* </div>*/
/* {% endblock %}*/
