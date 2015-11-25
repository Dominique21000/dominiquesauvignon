<?php

/* DSInternauteBundle::DS/home2.html.twig */
class __TwigTemplate_5ac4c1d2d047f72945b8837813d473fedd28efe7116b849beb7e5816b7d187df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("DSInternauteBundle::layout2.html.twig", "DSInternauteBundle::DS/home2.html.twig", 3);
        $this->blocks = array(
            'block_nav' => array($this, 'block_block_nav'),
            'block_div' => array($this, 'block_block_div'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DSInternauteBundle::layout2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b25c7ff27e1403d12bcb51aa684cd2073cd6e5de5759e47377069e3ebeb78254 = $this->env->getExtension("native_profiler");
        $__internal_b25c7ff27e1403d12bcb51aa684cd2073cd6e5de5759e47377069e3ebeb78254->enter($__internal_b25c7ff27e1403d12bcb51aa684cd2073cd6e5de5759e47377069e3ebeb78254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DSInternauteBundle::DS/home2.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b25c7ff27e1403d12bcb51aa684cd2073cd6e5de5759e47377069e3ebeb78254->leave($__internal_b25c7ff27e1403d12bcb51aa684cd2073cd6e5de5759e47377069e3ebeb78254_prof);

    }

    // line 5
    public function block_block_nav($context, array $blocks = array())
    {
        $__internal_fb9f95be9806d3dae3f2d363704e93fa63ac32700c92fa8b727e7b92b7787a95 = $this->env->getExtension("native_profiler");
        $__internal_fb9f95be9806d3dae3f2d363704e93fa63ac32700c92fa8b727e7b92b7787a95->enter($__internal_fb9f95be9806d3dae3f2d363704e93fa63ac32700c92fa8b727e7b92b7787a95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_nav"));

        // line 6
        echo "      <div id=\"cv\" class=\"tuile\">
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
                     height=\"100\"  class=\"menu\">
                     </a>
            </div>

            <div id=\"experience\" class=\"tuile\" title=\"Mon expérience\">
                <!--<span class=\"menu\">E</span>xpérience<br> -->
                <h2>Expérience</h2>
                <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("ds_internaute_experience");
        echo "\">
                    <img src=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("ds_internaute_homepage");
        echo "../logos/experience.jpg\" alt=\"Mon expérience\" 
                     height=\"100\"  class=\"menu\">
                </a>
            </div>

            <div id=\"recommandation\" class=\"tuile\" title=\"Mes recommandations\">
                <!--<span class=\"menu\">R</span>ecommandations<br>-->
                <h2>Recommandations</h2>
                <a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("ds_internaute_recommandations");
        echo "\">
                    <img src=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("ds_internaute_homepage");
        echo "../logos/recommandation.jpg\" 
                     alt=\"Mes recommandations\" height=\"85\" class=\"menu\">
                </a>     
            </div>

            <div id=\"formation\" class=\"tuile\" title=\"Ma Formation\">
                <!--<span class=\"menu\">F</span>ormation<br>-->
                <h2>Formation</h2>
                <a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("ds_internaute_formation");
        echo "\">
                    <img src=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("ds_internaute_homepage");
        echo "../logos/formation.jpg\" alt=\"Ma formation\" 
                     title=\"Ma formation\" height=\"85\" class=\"menu\">
                </a>
            </div>

            <div id=\"reference\" class=\"tuile\" title=\"Mes références\">
                <!--<span class=\"menu\">R</span>éférence<br>-->
                <h2>Références</h2>
                <!--<a href=\"Javascript:ouvre('";
        // line 52
        echo $this->env->getExtension('routing')->getPath("ds_internaute_references");
        echo "');\">-->
                    <a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("ds_internaute_references");
        echo "\">
                    <img src=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("ds_internaute_homepage");
        echo "../logos/reference.jpg\" alt=\"Mes références\" 
                     height=\"65\" title=\"Mes références\" class=\"menu\"></a>
            </div>

            <div id=\"contact\" class=\"tuile\" title=\"Me contacter\">
                <!--<span class=\"menu\">C</span>ontact<br>-->
                <h2>Contact</h2>
                <a href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("ds_internaute_contact");
        echo "\">    
                    <img src=\"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("ds_internaute_homepage");
        echo "../logos/contact.jpg\" alt=\"Contact\" height=\"90\" 
                     title=\"Contact\" class=\"menu\">
                </a>
            </div>

            <div id=\"lien\" class=\"tuile\" title=\"Lien\">
                <!--<span class=\"menu\">L</span>ien<br>-->
                <h2>Liens</h2>
                <a href=\"";
        // line 70
        echo $this->env->getExtension('routing')->getPath("ds_internaute_liens");
        echo "\">
                    <img src=\"";
        // line 71
        echo $this->env->getExtension('routing')->getPath("ds_internaute_homepage");
        echo "../logos/lien.jpg\" alt=\"Lien\" height=\"90\" 
                     title=\"Lien\" class=\"menu\">
                </a>
            </div>
            <div id=\"diplomes\" class=\"tuile\" alt=\"Diplomes\">
                <h2>Diplômes et certificats</h2>
                <!--<a href=\"docs/diplome/certificat_dominique-sauvignon_developpez-votre-site-web-avec-le-framework-symfony2.jpg\" 
   \t\t\t\ttarget=\"_blank\"
   \t\t\t\ttitle=\"Certificat : Développer votre site web avec le framework Symfony2\">-->
    \t\t\t<a href=\"";
        // line 80
        echo $this->env->getExtension('routing')->getPath("ds_internaute_diplomes");
        echo "\">
                    <img src=\"";
        // line 81
        echo $this->env->getExtension('routing')->getPath("ds_internaute_homepage");
        echo "../docs/diplome/certificat_dominique-sauvignon_developpez-votre-site-web-avec-le-framework-symfony2.jpg\" 
         \t\t\talt=\"Certificat : Développer votre site web avec le framework Symfony2\"
         \t\t\tclass=\"diplome\">
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
        
        $__internal_fb9f95be9806d3dae3f2d363704e93fa63ac32700c92fa8b727e7b92b7787a95->leave($__internal_fb9f95be9806d3dae3f2d363704e93fa63ac32700c92fa8b727e7b92b7787a95_prof);

    }

    // line 96
    public function block_block_div($context, array $blocks = array())
    {
        $__internal_f2bdd135991ff1e5bfefad2fb7e75a7ac187eae0e9ad4eb50f2d0ed9fab2c5a3 = $this->env->getExtension("native_profiler");
        $__internal_f2bdd135991ff1e5bfefad2fb7e75a7ac187eae0e9ad4eb50f2d0ed9fab2c5a3->enter($__internal_f2bdd135991ff1e5bfefad2fb7e75a7ac187eae0e9ad4eb50f2d0ed9fab2c5a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_div"));

        echo "  
";
        
        $__internal_f2bdd135991ff1e5bfefad2fb7e75a7ac187eae0e9ad4eb50f2d0ed9fab2c5a3->leave($__internal_f2bdd135991ff1e5bfefad2fb7e75a7ac187eae0e9ad4eb50f2d0ed9fab2c5a3_prof);

    }

    public function getTemplateName()
    {
        return "DSInternauteBundle::DS/home2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 96,  172 => 81,  168 => 80,  156 => 71,  152 => 70,  141 => 62,  137 => 61,  127 => 54,  123 => 53,  119 => 52,  108 => 44,  104 => 43,  93 => 35,  89 => 34,  78 => 26,  74 => 25,  63 => 17,  59 => 16,  48 => 8,  44 => 7,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/DS/InternauteBundle/Resources/views/home2.html.twig #}*/
/* */
/* {% extends "DSInternauteBundle::layout2.html.twig" %}*/
/* */
/* {% block block_nav %}*/
/*       <div id="cv" class="tuile">*/
/*         <a href="Javascript:ouvre('{{ path('ds_internaute_cv')}}');" title="C.V." class="menu cv" id="cv">*/
/*         <!--<a href="{{ path('ds_internaute_cv')}}" title="C.V." class="menu cv" id="cv">-->*/
/*             CV*/
/*                 </a>*/
/*             </div>*/
/* */
/*             <div id="competences" class="tuile" title="Mes Compétences">*/
/*                 <!--<span class="menu">C</span>ompétences<br> -->*/
/*                 <h2>Compétences</h2>*/
/*                 <a href="{{ path('ds_internaute_competences')}}">*/
/*                     <img src="{{ path('ds_internaute_homepage')}}../logos/competences.jpg" alt="Mes compétences" */
/*                      height="100"  class="menu">*/
/*                      </a>*/
/*             </div>*/
/* */
/*             <div id="experience" class="tuile" title="Mon expérience">*/
/*                 <!--<span class="menu">E</span>xpérience<br> -->*/
/*                 <h2>Expérience</h2>*/
/*                 <a href="{{ path('ds_internaute_experience') }}">*/
/*                     <img src="{{ path('ds_internaute_homepage')}}../logos/experience.jpg" alt="Mon expérience" */
/*                      height="100"  class="menu">*/
/*                 </a>*/
/*             </div>*/
/* */
/*             <div id="recommandation" class="tuile" title="Mes recommandations">*/
/*                 <!--<span class="menu">R</span>ecommandations<br>-->*/
/*                 <h2>Recommandations</h2>*/
/*                 <a href="{{ path('ds_internaute_recommandations')}}">*/
/*                     <img src="{{ path('ds_internaute_homepage')}}../logos/recommandation.jpg" */
/*                      alt="Mes recommandations" height="85" class="menu">*/
/*                 </a>     */
/*             </div>*/
/* */
/*             <div id="formation" class="tuile" title="Ma Formation">*/
/*                 <!--<span class="menu">F</span>ormation<br>-->*/
/*                 <h2>Formation</h2>*/
/*                 <a href="{{path('ds_internaute_formation')}}">*/
/*                     <img src="{{ path('ds_internaute_homepage')}}../logos/formation.jpg" alt="Ma formation" */
/*                      title="Ma formation" height="85" class="menu">*/
/*                 </a>*/
/*             </div>*/
/* */
/*             <div id="reference" class="tuile" title="Mes références">*/
/*                 <!--<span class="menu">R</span>éférence<br>-->*/
/*                 <h2>Références</h2>*/
/*                 <!--<a href="Javascript:ouvre('{{ path('ds_internaute_references')}}');">-->*/
/*                     <a href="{{ path('ds_internaute_references')}}">*/
/*                     <img src="{{ path('ds_internaute_homepage')}}../logos/reference.jpg" alt="Mes références" */
/*                      height="65" title="Mes références" class="menu"></a>*/
/*             </div>*/
/* */
/*             <div id="contact" class="tuile" title="Me contacter">*/
/*                 <!--<span class="menu">C</span>ontact<br>-->*/
/*                 <h2>Contact</h2>*/
/*                 <a href="{{ path('ds_internaute_contact')}}">    */
/*                     <img src="{{ path('ds_internaute_homepage')}}../logos/contact.jpg" alt="Contact" height="90" */
/*                      title="Contact" class="menu">*/
/*                 </a>*/
/*             </div>*/
/* */
/*             <div id="lien" class="tuile" title="Lien">*/
/*                 <!--<span class="menu">L</span>ien<br>-->*/
/*                 <h2>Liens</h2>*/
/*                 <a href="{{ path('ds_internaute_liens') }}">*/
/*                     <img src="{{ path('ds_internaute_homepage')}}../logos/lien.jpg" alt="Lien" height="90" */
/*                      title="Lien" class="menu">*/
/*                 </a>*/
/*             </div>*/
/*             <div id="diplomes" class="tuile" alt="Diplomes">*/
/*                 <h2>Diplômes et certificats</h2>*/
/*                 <!--<a href="docs/diplome/certificat_dominique-sauvignon_developpez-votre-site-web-avec-le-framework-symfony2.jpg" */
/*    				target="_blank"*/
/*    				title="Certificat : Développer votre site web avec le framework Symfony2">-->*/
/*     			<a href="{{path('ds_internaute_diplomes')}}">*/
/*                     <img src="{{ path('ds_internaute_homepage')}}../docs/diplome/certificat_dominique-sauvignon_developpez-votre-site-web-avec-le-framework-symfony2.jpg" */
/*          			alt="Certificat : Développer votre site web avec le framework Symfony2"*/
/*          			class="diplome">*/
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
/* {% block block_div %}  */
/* {% endblock %}*/
