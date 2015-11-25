<?php

/* DSInternauteBundle:DS:contact.html.twig */
class __TwigTemplate_d6ed09d116768f457d4f956e5f6e016fe19fd2db63619dc2741b91fbdcf5715b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("DSInternauteBundle::DS/home2.html.twig", "DSInternauteBundle:DS:contact.html.twig", 3);
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
        $__internal_7f46657cd8912b99102fe9b8b7f744de4618488496c2a07b5c6966f2cd003d45 = $this->env->getExtension("native_profiler");
        $__internal_7f46657cd8912b99102fe9b8b7f744de4618488496c2a07b5c6966f2cd003d45->enter($__internal_7f46657cd8912b99102fe9b8b7f744de4618488496c2a07b5c6966f2cd003d45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DSInternauteBundle:DS:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f46657cd8912b99102fe9b8b7f744de4618488496c2a07b5c6966f2cd003d45->leave($__internal_7f46657cd8912b99102fe9b8b7f744de4618488496c2a07b5c6966f2cd003d45_prof);

    }

    // line 5
    public function block_block_nav($context, array $blocks = array())
    {
        $__internal_e1418295486a27f8de4cf5b77af917e9860f9bfed1266ca8b1800822bcb4ee70 = $this->env->getExtension("native_profiler");
        $__internal_e1418295486a27f8de4cf5b77af917e9860f9bfed1266ca8b1800822bcb4ee70->enter($__internal_e1418295486a27f8de4cf5b77af917e9860f9bfed1266ca8b1800822bcb4ee70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_nav"));

        // line 6
        echo "
<div class=\"display\">
<div class=\"police_pro\">
    <div class=\"titrePro\">Comment me contacter ? </div>
    <br>
    Pour me contacter, envoyer un courriel à :&nbsp;
    <a href=\"mailto:contact@dominiquesauvignon.eu?subject=SiteInternet\" class=\"contactPro\" target=\"_blank\">contact@dominiquesauvignon.eu</a><br>
    Mon C.V. est également disponible <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("ds_internaute_cv");
        echo "\" target=\"_blank\" class=\"contactPro\" title=\"monCV\">ici</a><br>
    <br>
    Géographiquement, je suis ici :) : <a href=\"https://maps.google.fr/maps?f=q&amp;source=embed&amp;hl=fr&amp;geocode=&amp;q=11+Rue+d'Auvergne,+Schiltigheim&amp;aq=0&amp;oq=11+rue+d'&amp;sll=48.643455,7.760342&amp;sspn=0.008152,0.019999&amp;ie=UTF8&amp;hq=&amp;hnear=11+Rue+d'Auvergne,+67300+Schiltigheim,+Bas-Rhin,+Alsace&amp;t=m&amp;z=14&amp;iwloc=A\" style=\"color:#0000FF;text-align:left\" target=\"_blank\">Agrandir le plan</a></small><br>
    <iframe width=\"425\" height=\"350\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"https://maps.google.fr/maps?f=q&amp;source=s_q&amp;hl=fr&amp;geocode=&amp;q=11+Rue+d'Auvergne,+Schiltigheim&amp;aq=0&amp;oq=11+rue+d'&amp;sll=48.643455,7.760342&amp;sspn=0.008152,0.019999&amp;ie=UTF8&amp;hq=&amp;hnear=11+Rue+d'Auvergne,+67300+Schiltigheim,+Bas-Rhin,+Alsace&amp;t=m&amp;z=14&amp;iwloc=A&amp;output=embed\"></iframe><small>
    
    
    
</div>
</div>

";
        
        $__internal_e1418295486a27f8de4cf5b77af917e9860f9bfed1266ca8b1800822bcb4ee70->leave($__internal_e1418295486a27f8de4cf5b77af917e9860f9bfed1266ca8b1800822bcb4ee70_prof);

    }

    public function getTemplateName()
    {
        return "DSInternauteBundle:DS:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 13,  40 => 6,  34 => 5,  11 => 3,);
    }
}
/* {# src/DS/InternauteBundle/Resources/views/contact.html.twig #}*/
/* */
/* {% extends "DSInternauteBundle::DS/home2.html.twig" %}*/
/* */
/* {% block block_nav %}*/
/* */
/* <div class="display">*/
/* <div class="police_pro">*/
/*     <div class="titrePro">Comment me contacter ? </div>*/
/*     <br>*/
/*     Pour me contacter, envoyer un courriel à :&nbsp;*/
/*     <a href="mailto:contact@dominiquesauvignon.eu?subject=SiteInternet" class="contactPro" target="_blank">contact@dominiquesauvignon.eu</a><br>*/
/*     Mon C.V. est également disponible <a href="{{ path('ds_internaute_cv')}}" target="_blank" class="contactPro" title="monCV">ici</a><br>*/
/*     <br>*/
/*     Géographiquement, je suis ici :) : <a href="https://maps.google.fr/maps?f=q&amp;source=embed&amp;hl=fr&amp;geocode=&amp;q=11+Rue+d'Auvergne,+Schiltigheim&amp;aq=0&amp;oq=11+rue+d'&amp;sll=48.643455,7.760342&amp;sspn=0.008152,0.019999&amp;ie=UTF8&amp;hq=&amp;hnear=11+Rue+d'Auvergne,+67300+Schiltigheim,+Bas-Rhin,+Alsace&amp;t=m&amp;z=14&amp;iwloc=A" style="color:#0000FF;text-align:left" target="_blank">Agrandir le plan</a></small><br>*/
/*     <iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.fr/maps?f=q&amp;source=s_q&amp;hl=fr&amp;geocode=&amp;q=11+Rue+d'Auvergne,+Schiltigheim&amp;aq=0&amp;oq=11+rue+d'&amp;sll=48.643455,7.760342&amp;sspn=0.008152,0.019999&amp;ie=UTF8&amp;hq=&amp;hnear=11+Rue+d'Auvergne,+67300+Schiltigheim,+Bas-Rhin,+Alsace&amp;t=m&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><small>*/
/*     */
/*     */
/*     */
/* </div>*/
/* </div>*/
/* */
/* {%endblock %}*/
