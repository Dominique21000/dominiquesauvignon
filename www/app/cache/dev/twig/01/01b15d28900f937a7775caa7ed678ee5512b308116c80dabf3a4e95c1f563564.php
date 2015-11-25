<?php

/* DSInternauteBundle:DS:home.html.twig */
class __TwigTemplate_ba5bf01c42e40200e1945ae272a8000cca0423e1d852a28f00816e3d280af3af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("DSInternauteBundle::layout.html.twig", "DSInternauteBundle:DS:home.html.twig", 3);
        $this->blocks = array(
            'block_nav' => array($this, 'block_block_nav'),
            'block_div' => array($this, 'block_block_div'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DSInternauteBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ea23193d547336ad1971d1a1687a3c8549c03dfd0846918bb7af7fa9a903825f = $this->env->getExtension("native_profiler");
        $__internal_ea23193d547336ad1971d1a1687a3c8549c03dfd0846918bb7af7fa9a903825f->enter($__internal_ea23193d547336ad1971d1a1687a3c8549c03dfd0846918bb7af7fa9a903825f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DSInternauteBundle:DS:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea23193d547336ad1971d1a1687a3c8549c03dfd0846918bb7af7fa9a903825f->leave($__internal_ea23193d547336ad1971d1a1687a3c8549c03dfd0846918bb7af7fa9a903825f_prof);

    }

    // line 5
    public function block_block_nav($context, array $blocks = array())
    {
        $__internal_d32edb8b6c352201e4ad7d05e90d7a597d7b28247dd8ebbd972548811c989ebd = $this->env->getExtension("native_profiler");
        $__internal_d32edb8b6c352201e4ad7d05e90d7a597d7b28247dd8ebbd972548811c989ebd->enter($__internal_d32edb8b6c352201e4ad7d05e90d7a597d7b28247dd8ebbd972548811c989ebd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_nav"));

        // line 6
        echo "        <div id=\"cv\" class=\"tuile\">
            <a href=\"Javascript:ouvre('";
        // line 7
        echo $this->env->getExtension('routing')->getPath("ds_internaute_cv");
        echo "');\" title=\"C.V.\" class=\"menu cv\" id=\"cv\">
        <!--<a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("ds_internaute_cv");
        echo "\" title=\"C.V.\" class=\"menu cv\" id=\"cv\">-->
            CV
                </a>
        </div>

        <div id=\"competences\" class=\"tuile\" title=\"Mes Compétences\">
                <!--<span class=\"menu\">C</span>ompétences<br> -->
                <h2>Compétences</h2>
                <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("ds_internaute_competences");
        echo "\">
                    <img src=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("ds_internaute_homepage");
        echo "../logos/competences.jpg\" alt=\"Mes compétences\" 
                     width=\"130\"  class=\"menu\">
                </a>

            </div>

            <div id=\"experience\" class=\"tuile\" title=\"Mon expérience\">
                <!--<span class=\"menu\">E</span>xpérience<br> -->
                <h2>Expérience</h2>
                 <a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("ds_internaute_experience");
        echo "\">
                    <img src=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("ds_internaute_homepage");
        echo "../logos/experience.jpg\" alt=\"Mon expérience\" 
                     height=\"100\"  class=\"menu\">
                </a>
            </div>

            <div id=\"recommandation\" class=\"tuile\" title=\"Mes recommandations\">
                <!--<span class=\"menu\">R</span>ecommandations<br>-->
                <h2 class=\"reco\">Recommandations</h2>
                <a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("ds_internaute_recommandations");
        echo "\">
                    <img src=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("ds_internaute_homepage");
        echo "../logos/recommandation.jpg\" 
                     alt=\"Mes recommandations\" height=\"85\" class=\"menu\">
                </a>  
            </div>

            <div id=\"formation\" class=\"tuile\" title=\"Ma Formation\">
                <!--<span class=\"menu\">F</span>ormation<br>-->
                <h2>Formation</h2>
                 <a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("ds_internaute_formation");
        echo "\">
                    <img src=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("ds_internaute_homepage");
        echo "../logos/formation.jpg\" alt=\"Ma formation\" 
                     title=\"Ma formation\" height=\"85\" class=\"menu\">
                </a>
            </div>

            <div id=\"reference\" class=\"tuile\" title=\"Mes références\">
                <!--<span class=\"menu\">R</span>éférence<br>-->
                <h2>Références</h2>
                <!--<a href=\"Javascript:ouvre('";
        // line 53
        echo $this->env->getExtension('routing')->getPath("ds_internaute_references");
        echo "');\">-->
                <a href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("ds_internaute_references");
        echo "\">
                <img src=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("ds_internaute_homepage");
        echo "../logos/reference.jpg\" alt=\"Mes références\"
                     width=\"130\" title=\"Mes références\" class=\"menu\"></a>
            </div>

            <div id=\"contact\" class=\"tuile\" title=\"Me contacter\">
                <!--<span class=\"menu\">C</span>ontact<br>-->
                <h2>Contact</h2>
                 <a href=\"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("ds_internaute_contact");
        echo "\">    
                    <img src=\"";
        // line 63
        echo $this->env->getExtension('routing')->getPath("ds_internaute_homepage");
        echo "../logos/contact.jpg\" alt=\"Contact\" height=\"90\" 
                     title=\"Contact\" class=\"menu\">
                </a>
            </div>

            <div id=\"lien\" class=\"tuile\" title=\"Lien\">
                <!--<span class=\"menu\">L</span>ien<br>-->
                <h2>Liens</h2>
                <a href=\"";
        // line 71
        echo $this->env->getExtension('routing')->getPath("ds_internaute_liens");
        echo "\">
                    <img src=\"";
        // line 72
        echo $this->env->getExtension('routing')->getPath("ds_internaute_homepage");
        echo "../logos/lien.jpg\" alt=\"Lien\" width=\"130\"
                     title=\"Lien\" class=\"menu\">
                </a>
            </div>
            <div id=\"diplomes\" class=\"tuile\" alt=\"Diplomes\">
                <h2 class=\"dipl\">Diplômes et certifications</h2>
                    <a href=\"";
        // line 78
        echo $this->env->getExtension('routing')->getPath("ds_internaute_diplomes");
        echo "\">
    \t\t\t\t<img src=\"";
        // line 79
        echo $this->env->getExtension('routing')->getPath("ds_internaute_homepage");
        echo "../docs/diplome/certificat_dominique-sauvignon_developpez-votre-site-web-avec-le-framework-symfony2.jpg\"
         \t\t\talt=\"Certificat : Développer votre site web avec le framework Symfony2\"
         \t\t\twidth=\"130\">
\t\t\t\t</a>
            </div>
            <div id=\"Viadeo\" class=\"tuile viadeo menu\" title=\"Viadeo\">
                <h2>Réseaux sociaux</h2>
                Sur viadéo :<br>
                <a href=\"http://www.viadeo.com/fr/profile/0021e8bbk9ej58r9?readOnly&language=fr&ga_from=Fu:%2Fprofilev3%2F;Fb%3Aprofile-Top-bouton%3BFe%3Apreview%3B\" title=\"Viadeo\">ici</a>
                <br>
                Sur LinkedIn:<br>
                <a href=\"https://www.linkedin.com/profile/view?id=AAMAAAqCf2YBr0BAh1Eo9PqIKpVWsi5pE2-o-us&trk=hp-identity-photo\" title=\"LinkedIn\">ici</a> 
            </div>
";
        
        $__internal_d32edb8b6c352201e4ad7d05e90d7a597d7b28247dd8ebbd972548811c989ebd->leave($__internal_d32edb8b6c352201e4ad7d05e90d7a597d7b28247dd8ebbd972548811c989ebd_prof);

    }

    // line 94
    public function block_block_div($context, array $blocks = array())
    {
        $__internal_aadbe92d84cc4e601c921c0a156d4e54e4ea773f55011d3d3987683d9b50c3ba = $this->env->getExtension("native_profiler");
        $__internal_aadbe92d84cc4e601c921c0a156d4e54e4ea773f55011d3d3987683d9b50c3ba->enter($__internal_aadbe92d84cc4e601c921c0a156d4e54e4ea773f55011d3d3987683d9b50c3ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_div"));

        echo " 

";
        
        $__internal_aadbe92d84cc4e601c921c0a156d4e54e4ea773f55011d3d3987683d9b50c3ba->leave($__internal_aadbe92d84cc4e601c921c0a156d4e54e4ea773f55011d3d3987683d9b50c3ba_prof);

    }

    public function getTemplateName()
    {
        return "DSInternauteBundle:DS:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 94,  170 => 79,  166 => 78,  157 => 72,  153 => 71,  142 => 63,  138 => 62,  128 => 55,  124 => 54,  120 => 53,  109 => 45,  105 => 44,  94 => 36,  90 => 35,  79 => 27,  75 => 26,  63 => 17,  59 => 16,  48 => 8,  44 => 7,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/DS/InternauteBundle/Resources/views/home.html.twig #}*/
/* */
/* {% extends "DSInternauteBundle::layout.html.twig" %}*/
/* */
/* {% block block_nav %}*/
/*         <div id="cv" class="tuile">*/
/*             <a href="Javascript:ouvre('{{ path('ds_internaute_cv')}}');" title="C.V." class="menu cv" id="cv">*/
/*         <!--<a href="{{ path('ds_internaute_cv')}}" title="C.V." class="menu cv" id="cv">-->*/
/*             CV*/
/*                 </a>*/
/*         </div>*/
/* */
/*         <div id="competences" class="tuile" title="Mes Compétences">*/
/*                 <!--<span class="menu">C</span>ompétences<br> -->*/
/*                 <h2>Compétences</h2>*/
/*                 <a href="{{ path('ds_internaute_competences')}}">*/
/*                     <img src="{{ path('ds_internaute_homepage')}}../logos/competences.jpg" alt="Mes compétences" */
/*                      width="130"  class="menu">*/
/*                 </a>*/
/* */
/*             </div>*/
/* */
/*             <div id="experience" class="tuile" title="Mon expérience">*/
/*                 <!--<span class="menu">E</span>xpérience<br> -->*/
/*                 <h2>Expérience</h2>*/
/*                  <a href="{{ path('ds_internaute_experience') }}">*/
/*                     <img src="{{ path('ds_internaute_homepage')}}../logos/experience.jpg" alt="Mon expérience" */
/*                      height="100"  class="menu">*/
/*                 </a>*/
/*             </div>*/
/* */
/*             <div id="recommandation" class="tuile" title="Mes recommandations">*/
/*                 <!--<span class="menu">R</span>ecommandations<br>-->*/
/*                 <h2 class="reco">Recommandations</h2>*/
/*                 <a href="{{ path('ds_internaute_recommandations')}}">*/
/*                     <img src="{{ path('ds_internaute_homepage')}}../logos/recommandation.jpg" */
/*                      alt="Mes recommandations" height="85" class="menu">*/
/*                 </a>  */
/*             </div>*/
/* */
/*             <div id="formation" class="tuile" title="Ma Formation">*/
/*                 <!--<span class="menu">F</span>ormation<br>-->*/
/*                 <h2>Formation</h2>*/
/*                  <a href="{{path('ds_internaute_formation')}}">*/
/*                     <img src="{{ path('ds_internaute_homepage')}}../logos/formation.jpg" alt="Ma formation" */
/*                      title="Ma formation" height="85" class="menu">*/
/*                 </a>*/
/*             </div>*/
/* */
/*             <div id="reference" class="tuile" title="Mes références">*/
/*                 <!--<span class="menu">R</span>éférence<br>-->*/
/*                 <h2>Références</h2>*/
/*                 <!--<a href="Javascript:ouvre('{{ path('ds_internaute_references')}}');">-->*/
/*                 <a href="{{ path('ds_internaute_references')}}">*/
/*                 <img src="{{ path('ds_internaute_homepage')}}../logos/reference.jpg" alt="Mes références"*/
/*                      width="130" title="Mes références" class="menu"></a>*/
/*             </div>*/
/* */
/*             <div id="contact" class="tuile" title="Me contacter">*/
/*                 <!--<span class="menu">C</span>ontact<br>-->*/
/*                 <h2>Contact</h2>*/
/*                  <a href="{{ path('ds_internaute_contact')}}">    */
/*                     <img src="{{ path('ds_internaute_homepage')}}../logos/contact.jpg" alt="Contact" height="90" */
/*                      title="Contact" class="menu">*/
/*                 </a>*/
/*             </div>*/
/* */
/*             <div id="lien" class="tuile" title="Lien">*/
/*                 <!--<span class="menu">L</span>ien<br>-->*/
/*                 <h2>Liens</h2>*/
/*                 <a href="{{ path('ds_internaute_liens')}}">*/
/*                     <img src="{{ path('ds_internaute_homepage')}}../logos/lien.jpg" alt="Lien" width="130"*/
/*                      title="Lien" class="menu">*/
/*                 </a>*/
/*             </div>*/
/*             <div id="diplomes" class="tuile" alt="Diplomes">*/
/*                 <h2 class="dipl">Diplômes et certifications</h2>*/
/*                     <a href="{{path('ds_internaute_diplomes')}}">*/
/*     				<img src="{{ path('ds_internaute_homepage')}}../docs/diplome/certificat_dominique-sauvignon_developpez-votre-site-web-avec-le-framework-symfony2.jpg"*/
/*          			alt="Certificat : Développer votre site web avec le framework Symfony2"*/
/*          			width="130">*/
/* 				</a>*/
/*             </div>*/
/*             <div id="Viadeo" class="tuile viadeo menu" title="Viadeo">*/
/*                 <h2>Réseaux sociaux</h2>*/
/*                 Sur viadéo :<br>*/
/*                 <a href="http://www.viadeo.com/fr/profile/0021e8bbk9ej58r9?readOnly&language=fr&ga_from=Fu:%2Fprofilev3%2F;Fb%3Aprofile-Top-bouton%3BFe%3Apreview%3B" title="Viadeo">ici</a>*/
/*                 <br>*/
/*                 Sur LinkedIn:<br>*/
/*                 <a href="https://www.linkedin.com/profile/view?id=AAMAAAqCf2YBr0BAh1Eo9PqIKpVWsi5pE2-o-us&trk=hp-identity-photo" title="LinkedIn">ici</a> */
/*             </div>*/
/* {% endblock %}*/
/* */
/* {% block block_div %} */
/* */
/* {% endblock %}*/
