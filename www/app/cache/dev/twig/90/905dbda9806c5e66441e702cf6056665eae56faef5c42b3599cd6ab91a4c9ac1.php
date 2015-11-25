<?php

/* DSInternauteBundle:DS:competences.html.twig */
class __TwigTemplate_abbefe87d7aed5c252338c8d88c6690e97573e61d28e9ea425453027915476a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("DSInternauteBundle::DS/home2.html.twig", "DSInternauteBundle:DS:competences.html.twig", 3);
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
        $__internal_e21e86722c699e970ceee8ea65c99c9d2d93f18b0ef5d5728ab5716c88e10857 = $this->env->getExtension("native_profiler");
        $__internal_e21e86722c699e970ceee8ea65c99c9d2d93f18b0ef5d5728ab5716c88e10857->enter($__internal_e21e86722c699e970ceee8ea65c99c9d2d93f18b0ef5d5728ab5716c88e10857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DSInternauteBundle:DS:competences.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e21e86722c699e970ceee8ea65c99c9d2d93f18b0ef5d5728ab5716c88e10857->leave($__internal_e21e86722c699e970ceee8ea65c99c9d2d93f18b0ef5d5728ab5716c88e10857_prof);

    }

    // line 5
    public function block_block_nav($context, array $blocks = array())
    {
        $__internal_e122538c462bd0a9520767f8255bd713ee6e0d99e1bf3d0b2b6e7b043a2eaefc = $this->env->getExtension("native_profiler");
        $__internal_e122538c462bd0a9520767f8255bd713ee6e0d99e1bf3d0b2b6e7b043a2eaefc->enter($__internal_e122538c462bd0a9520767f8255bd713ee6e0d99e1bf3d0b2b6e7b043a2eaefc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_nav"));

        // line 6
        echo "<div class=\"display\">
<a name=\"Haut\" tabindex=\"0\"></a>
<div class=titrePro><b>Mes compétences</b></div>
    <br>
<div class=\"police_pro\">
    <div class=\"titrePro\">Ma devise : </div>
    Satisfaire le client en mettant à sa disposition toute les ressources 
    nécessaires à la réussite de son projet :
    <ul>
        <li>De l'écouter pour connaître ses besoins</li>
        <li>Ensuite analyser ces besoins</li>
        <li>Enfin développer un outil efficace en optimisant les moyens mis en 
            oeuvre</li>
    </ul>
</div>

<div class=\"titrePro\">Mes atouts : </div>
<div class=\"police_pro\">
    <ul class=\"police_pro listePuce\">
        <li>ma capacité d'adaptation:
            <ol>
                <li>professionnellement, voici quelques exemples :
                    <ul>
                        <li>apprentissage de framework comme Symfony 2
                            <img src=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("ds_internaute_homepage");
        echo "../logos/logoSymfony.svg\" alt=\"logo Symfony\" width=\"100\"></li>
                        <li>programmation procédurale -> Programmation Orientée Objet</li>
                        <li>HTML 4 => 5 (<img src=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("ds_internaute_homepage");
        echo "../logos/HTML5_Logo_512.png\" 
                                              alt=\"Logo HTML5\" width=\"20\">)</li>
                        <li>CSS => CSS de niveau 3 (<img 
                                src=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("ds_internaute_homepage");
        echo "../logos/css3-logo.jpg\" alt=\"Logo CSS 3\" 
                                width=\"20\">)</li>
                        <li>Apprentissage d'AJAX</li>
                        <li>Apprentissage de jQuery</li>
                        <li>Apprentissage de PostgreSQL (<img 
                                src=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("ds_internaute_homepage");
        echo "../logos/logo_pgfr_sans_100.png\" width=\"20\" 
                                alt=\"LogoPostGreSql\">)</li>
                        <li>asp (Microcosft) => Php (sous Linux Ubuntu)</li>
                        <li>FRAMESET => DIV</li>
                    </ul>
                    <br>
                    Parce que le sens de l'adaptation, consiste aussi à savoir 
                    s'autoformer
                    <br>
                </li>
                <li>
                    personnellement,
                    <ul>
                        <li>
                            en tant que pratiquant de Karaté, je 
                            suis forcément amené à apprendre de nouvelles 
                            choses et à devoir constamment s'adapter
                        </li>
                        <li>Je viens de Dijon (21, Cote d'or) et suis 
                            actuellement dans la région de Strasbourg afin de me 
                            donner plus de chance de trouver un emploi, ce qui 
                            prouve ma capacité d'adaptation.
                        </li>
                    </ul>
                </li>           
            </ol>
        </li>
        <li>plus de 7 ans d'expérience professionnelle en informatique
        dont plus de 7 ans dans le développement web, durant lesquelles j'ai
        notamment développé:
            <ul>
                <li>un client ftp en interface web en asp, en lien avec le 
                    système d'exploitation</li>
                <li>une interface web de facturation</li>
                <li>un explorateur de fichiers en interface web</li>
            </ul>
        </li>
    </ul>
</div>

<div class=\"titrePro\">MES COMPETENCES sont donc...multiples : </div>
<ul>
    <li class=\"competListe\">
        <a href=\"#Developpements\" class=\"competLien\">Développement</a> | 
    </li>
    <li class=\"competListe\">
        <a href=\"#Sgbd\" class=\"competLien\">Base de Données</a> | 
    </li>
    <li class=\"competListe\">
        <a href=\"#Network\" class=\"competLien\">Réseaux</a> | 
    </li>
    <li class=\"competListe\">
        <a href=\"#Os\" class=\"competLien\">Système d'exploitation</a> | 
    </li>
</ul>

<br>
<A name=\"Developpements\" class=\"ssTitre\"><B>Développement</B></A>
<div id=\"Dev\" class=police_pro>
    Je suis en mesure de développer : <br>
    <ul>
        <li>Pour les sites internet : 
            <ul>
                <li>un site web à partir de rien, de préférence en liaison avec 
                    un infographiste afin que le côté graphisme soit optimisé
                </li>
                <li>des outils pour l'administration de sites web. L'
                    administration d'un site web permet au propriétaire, après 
                    s'être authentifié, de mettre à jour son site internet, sans 
                    avoir au préalable de compétences en informatique
                </li>
            </ul>
        <li>des logiciels de gestions en intranet.</li>
    </ul>
     Et ce, aussi bien: 
    <ul>
        <li>en php, avec une base de données MySql, et un système d'exploitation
            Windows ou Linux au choix</li>
        <li>en asp, avec une base Access et un système d'exploitation Windows</li>

    </ul>
    <br>
    <a href=\"#Haut\" class=\"competlien\">Haut</a> 
</div>
<br/>

<A name=\"Sgbd\" class=\"ssTitre\"><B>Base de Données</B></A>
<div id=\"Bdd\" class=police_pro>
    En ce qui concerne les S.G.B.D. (Système de Gestion de Base de Données) :
    <div id=\"texte\" class=\"police_pro\">
        <ul>
            <li><b>MySQL</b> : Bonne connaissance</li>
            <li><b>Access</b> (même si ce n'est pas forcément classé en SGBD) : 
                Bonne connaissance</li>
            <li><b>Oracle</b> : Connaissances de base</li>
            <li><b>PostgreSQL</b> : Connaissances de base</li>
            <li><b>Microsoft SQL Server</b> : Connaissance de base</li>
        </ul>
        Niveau analyse, bonne connaissance de <b>Merise</b>.
    </div>
    <br/>
    <a href=\"#Haut\" class=\"competlien\">Haut</a> 
</div>
<br>

<A name=\"Network\" class=\"ssTitre\"><B>Réseaux</B></A>
<div id=\"Reseau\" class=police_pro>\t
    Je suis en mesure : <br>
    <ul>
        <li>d'installer et dépanner un réseau</li>
        <li>de mettre en place de plan d'adressage IP</li>
    </ul>
    <br>
    <a href=\"#Haut\" class=\"competlien\">Haut</a> 
</div>

<br>

<A name=\"Os\" class=\"ssTitre\"><B>Système d'exploitation</B></A>
<div id=\"Se\" class=police_pro>
    <strong>PC</strong>
    <div id=logos class=logos>
       <img src=\"";
        // line 162
        echo $this->env->getExtension('routing')->getPath("ds_internaute_homepage");
        echo "../logos/Logo_Windows.png\" width=\"50\" alt=\"Windows\"
            title=\"Windows\">&nbsp;&nbsp;
       <img src=\"";
        // line 164
        echo $this->env->getExtension('routing')->getPath("ds_internaute_homepage");
        echo "../logos/logo-ubuntu-orange.svg\" width=\"100\" alt=\"Ubuntu\" title=\"Ubuntu\">
       <br>
    </div>
    <br>
    <div id=\"titre\" class=\"titre\" >MES COMPETENCES EN SYSTEME D'EXPLOITATION PC:
        <br><br>
    </div> 
    <div id=texte class=\"police_pro\">
        Systèmes d'exploitation, (OS en anglais pour Operating System)...<BR>
        <ul>
            <li>Windows : 
                    Bonne connaissance, paramétrage et installation de :
                    <ul>
                            <li>Windows 3.11</li>
                            <li>Windows 95</li>
                            <li>Windows 98 1ère et seconde édition</li>
                            <li>Windows 2000 Pro</li>
                            <li>Windows 2000 Server</li>
                            <li>Windows Xp</li>
                            <li>Windows Vista</li>
                            <li>Windows Sept</li>
                    </ul>
            </li>
            <li>Linux : Mon pc est en dual boot avec Windows Sept / Linux (Distribution Ubuntu 14.04 LTS). Et je développe sous Ubuntu.<br>
                Donc, utilisation et paramètrages de
                    <ul>
                            <li>Réseau et notamment TCP/IP</li>
                            <li>Lamp a savoir
                                <ul>
                                            <li><b>L</b>inux</li>
                                            <li><b>A</b>pache</li>
                                            <li><b>M</b>ySql</li>
                                            <li><b>P</b>hp</li>\t
                                </ul>
                            </li>
                    </ul>
            </li>
        </ul>
    </div>
</div>

<div id=\"titre\" class=\"titrePro\">Compétence Grands Systèmes</div>
<img src=\"";
        // line 206
        echo $this->env->getExtension('routing')->getPath("ds_internaute_homepage");
        echo "../logos/533px-Mainframe_Computer.svg.png\" alt=\"MainFrame IBM\" 
     width=\"100\">
<br>

Grâce à mon DU Développeurs Grands Systèmes, j'ai acquis les connaissances 
nécessaires pour :
<ul>
    <li>avoir une connaissance générale de ce qu'est un grand système 
        (MainFrame en anglais)</li>
    <li>pouvoir développer une application ou des modules, en Cobol sur 
        MainFrame</li>
</ul>
<a href=\"#Haut\" class=\"competlien\">Haut</a> 
</div>
";
        
        $__internal_e122538c462bd0a9520767f8255bd713ee6e0d99e1bf3d0b2b6e7b043a2eaefc->leave($__internal_e122538c462bd0a9520767f8255bd713ee6e0d99e1bf3d0b2b6e7b043a2eaefc_prof);

    }

    public function getTemplateName()
    {
        return "DSInternauteBundle:DS:competences.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 206,  215 => 164,  210 => 162,  85 => 40,  77 => 35,  71 => 32,  66 => 30,  40 => 6,  34 => 5,  11 => 3,);
    }
}
/* {# src/DS/InternauteBundle/Resources/views/competences.html.twig  #}*/
/* */
/* {% extends "DSInternauteBundle::DS/home2.html.twig" %}*/
/* */
/* {% block block_nav %}*/
/* <div class="display">*/
/* <a name="Haut" tabindex="0"></a>*/
/* <div class=titrePro><b>Mes compétences</b></div>*/
/*     <br>*/
/* <div class="police_pro">*/
/*     <div class="titrePro">Ma devise : </div>*/
/*     Satisfaire le client en mettant à sa disposition toute les ressources */
/*     nécessaires à la réussite de son projet :*/
/*     <ul>*/
/*         <li>De l'écouter pour connaître ses besoins</li>*/
/*         <li>Ensuite analyser ces besoins</li>*/
/*         <li>Enfin développer un outil efficace en optimisant les moyens mis en */
/*             oeuvre</li>*/
/*     </ul>*/
/* </div>*/
/* */
/* <div class="titrePro">Mes atouts : </div>*/
/* <div class="police_pro">*/
/*     <ul class="police_pro listePuce">*/
/*         <li>ma capacité d'adaptation:*/
/*             <ol>*/
/*                 <li>professionnellement, voici quelques exemples :*/
/*                     <ul>*/
/*                         <li>apprentissage de framework comme Symfony 2*/
/*                             <img src="{{ path('ds_internaute_homepage') }}../logos/logoSymfony.svg" alt="logo Symfony" width="100"></li>*/
/*                         <li>programmation procédurale -> Programmation Orientée Objet</li>*/
/*                         <li>HTML 4 => 5 (<img src="{{path('ds_internaute_homepage') }}../logos/HTML5_Logo_512.png" */
/*                                               alt="Logo HTML5" width="20">)</li>*/
/*                         <li>CSS => CSS de niveau 3 (<img */
/*                                 src="{{path('ds_internaute_homepage') }}../logos/css3-logo.jpg" alt="Logo CSS 3" */
/*                                 width="20">)</li>*/
/*                         <li>Apprentissage d'AJAX</li>*/
/*                         <li>Apprentissage de jQuery</li>*/
/*                         <li>Apprentissage de PostgreSQL (<img */
/*                                 src="{{path('ds_internaute_homepage') }}../logos/logo_pgfr_sans_100.png" width="20" */
/*                                 alt="LogoPostGreSql">)</li>*/
/*                         <li>asp (Microcosft) => Php (sous Linux Ubuntu)</li>*/
/*                         <li>FRAMESET => DIV</li>*/
/*                     </ul>*/
/*                     <br>*/
/*                     Parce que le sens de l'adaptation, consiste aussi à savoir */
/*                     s'autoformer*/
/*                     <br>*/
/*                 </li>*/
/*                 <li>*/
/*                     personnellement,*/
/*                     <ul>*/
/*                         <li>*/
/*                             en tant que pratiquant de Karaté, je */
/*                             suis forcément amené à apprendre de nouvelles */
/*                             choses et à devoir constamment s'adapter*/
/*                         </li>*/
/*                         <li>Je viens de Dijon (21, Cote d'or) et suis */
/*                             actuellement dans la région de Strasbourg afin de me */
/*                             donner plus de chance de trouver un emploi, ce qui */
/*                             prouve ma capacité d'adaptation.*/
/*                         </li>*/
/*                     </ul>*/
/*                 </li>           */
/*             </ol>*/
/*         </li>*/
/*         <li>plus de 7 ans d'expérience professionnelle en informatique*/
/*         dont plus de 7 ans dans le développement web, durant lesquelles j'ai*/
/*         notamment développé:*/
/*             <ul>*/
/*                 <li>un client ftp en interface web en asp, en lien avec le */
/*                     système d'exploitation</li>*/
/*                 <li>une interface web de facturation</li>*/
/*                 <li>un explorateur de fichiers en interface web</li>*/
/*             </ul>*/
/*         </li>*/
/*     </ul>*/
/* </div>*/
/* */
/* <div class="titrePro">MES COMPETENCES sont donc...multiples : </div>*/
/* <ul>*/
/*     <li class="competListe">*/
/*         <a href="#Developpements" class="competLien">Développement</a> | */
/*     </li>*/
/*     <li class="competListe">*/
/*         <a href="#Sgbd" class="competLien">Base de Données</a> | */
/*     </li>*/
/*     <li class="competListe">*/
/*         <a href="#Network" class="competLien">Réseaux</a> | */
/*     </li>*/
/*     <li class="competListe">*/
/*         <a href="#Os" class="competLien">Système d'exploitation</a> | */
/*     </li>*/
/* </ul>*/
/* */
/* <br>*/
/* <A name="Developpements" class="ssTitre"><B>Développement</B></A>*/
/* <div id="Dev" class=police_pro>*/
/*     Je suis en mesure de développer : <br>*/
/*     <ul>*/
/*         <li>Pour les sites internet : */
/*             <ul>*/
/*                 <li>un site web à partir de rien, de préférence en liaison avec */
/*                     un infographiste afin que le côté graphisme soit optimisé*/
/*                 </li>*/
/*                 <li>des outils pour l'administration de sites web. L'*/
/*                     administration d'un site web permet au propriétaire, après */
/*                     s'être authentifié, de mettre à jour son site internet, sans */
/*                     avoir au préalable de compétences en informatique*/
/*                 </li>*/
/*             </ul>*/
/*         <li>des logiciels de gestions en intranet.</li>*/
/*     </ul>*/
/*      Et ce, aussi bien: */
/*     <ul>*/
/*         <li>en php, avec une base de données MySql, et un système d'exploitation*/
/*             Windows ou Linux au choix</li>*/
/*         <li>en asp, avec une base Access et un système d'exploitation Windows</li>*/
/* */
/*     </ul>*/
/*     <br>*/
/*     <a href="#Haut" class="competlien">Haut</a> */
/* </div>*/
/* <br/>*/
/* */
/* <A name="Sgbd" class="ssTitre"><B>Base de Données</B></A>*/
/* <div id="Bdd" class=police_pro>*/
/*     En ce qui concerne les S.G.B.D. (Système de Gestion de Base de Données) :*/
/*     <div id="texte" class="police_pro">*/
/*         <ul>*/
/*             <li><b>MySQL</b> : Bonne connaissance</li>*/
/*             <li><b>Access</b> (même si ce n'est pas forcément classé en SGBD) : */
/*                 Bonne connaissance</li>*/
/*             <li><b>Oracle</b> : Connaissances de base</li>*/
/*             <li><b>PostgreSQL</b> : Connaissances de base</li>*/
/*             <li><b>Microsoft SQL Server</b> : Connaissance de base</li>*/
/*         </ul>*/
/*         Niveau analyse, bonne connaissance de <b>Merise</b>.*/
/*     </div>*/
/*     <br/>*/
/*     <a href="#Haut" class="competlien">Haut</a> */
/* </div>*/
/* <br>*/
/* */
/* <A name="Network" class="ssTitre"><B>Réseaux</B></A>*/
/* <div id="Reseau" class=police_pro>	*/
/*     Je suis en mesure : <br>*/
/*     <ul>*/
/*         <li>d'installer et dépanner un réseau</li>*/
/*         <li>de mettre en place de plan d'adressage IP</li>*/
/*     </ul>*/
/*     <br>*/
/*     <a href="#Haut" class="competlien">Haut</a> */
/* </div>*/
/* */
/* <br>*/
/* */
/* <A name="Os" class="ssTitre"><B>Système d'exploitation</B></A>*/
/* <div id="Se" class=police_pro>*/
/*     <strong>PC</strong>*/
/*     <div id=logos class=logos>*/
/*        <img src="{{ path('ds_internaute_homepage') }}../logos/Logo_Windows.png" width="50" alt="Windows"*/
/*             title="Windows">&nbsp;&nbsp;*/
/*        <img src="{{ path('ds_internaute_homepage') }}../logos/logo-ubuntu-orange.svg" width="100" alt="Ubuntu" title="Ubuntu">*/
/*        <br>*/
/*     </div>*/
/*     <br>*/
/*     <div id="titre" class="titre" >MES COMPETENCES EN SYSTEME D'EXPLOITATION PC:*/
/*         <br><br>*/
/*     </div> */
/*     <div id=texte class="police_pro">*/
/*         Systèmes d'exploitation, (OS en anglais pour Operating System)...<BR>*/
/*         <ul>*/
/*             <li>Windows : */
/*                     Bonne connaissance, paramétrage et installation de :*/
/*                     <ul>*/
/*                             <li>Windows 3.11</li>*/
/*                             <li>Windows 95</li>*/
/*                             <li>Windows 98 1ère et seconde édition</li>*/
/*                             <li>Windows 2000 Pro</li>*/
/*                             <li>Windows 2000 Server</li>*/
/*                             <li>Windows Xp</li>*/
/*                             <li>Windows Vista</li>*/
/*                             <li>Windows Sept</li>*/
/*                     </ul>*/
/*             </li>*/
/*             <li>Linux : Mon pc est en dual boot avec Windows Sept / Linux (Distribution Ubuntu 14.04 LTS). Et je développe sous Ubuntu.<br>*/
/*                 Donc, utilisation et paramètrages de*/
/*                     <ul>*/
/*                             <li>Réseau et notamment TCP/IP</li>*/
/*                             <li>Lamp a savoir*/
/*                                 <ul>*/
/*                                             <li><b>L</b>inux</li>*/
/*                                             <li><b>A</b>pache</li>*/
/*                                             <li><b>M</b>ySql</li>*/
/*                                             <li><b>P</b>hp</li>	*/
/*                                 </ul>*/
/*                             </li>*/
/*                     </ul>*/
/*             </li>*/
/*         </ul>*/
/*     </div>*/
/* </div>*/
/* */
/* <div id="titre" class="titrePro">Compétence Grands Systèmes</div>*/
/* <img src="{{ path('ds_internaute_homepage') }}../logos/533px-Mainframe_Computer.svg.png" alt="MainFrame IBM" */
/*      width="100">*/
/* <br>*/
/* */
/* Grâce à mon DU Développeurs Grands Systèmes, j'ai acquis les connaissances */
/* nécessaires pour :*/
/* <ul>*/
/*     <li>avoir une connaissance générale de ce qu'est un grand système */
/*         (MainFrame en anglais)</li>*/
/*     <li>pouvoir développer une application ou des modules, en Cobol sur */
/*         MainFrame</li>*/
/* </ul>*/
/* <a href="#Haut" class="competlien">Haut</a> */
/* </div>*/
/* {% endblock %}*/
