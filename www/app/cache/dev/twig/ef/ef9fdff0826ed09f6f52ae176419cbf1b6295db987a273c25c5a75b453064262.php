<?php

/* DSInternauteBundle:DS:experience.html.twig */
class __TwigTemplate_91da554c9330422ee2ba235db11d5ef981d1e887880209eaae0d4a1a799c25bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("DSInternauteBundle::DS/home2.html.twig", "DSInternauteBundle:DS:experience.html.twig", 3);
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
        $__internal_db9b17b1214fe5edb28b5a3419b2065e3853241099dab722372b468a7f95603f = $this->env->getExtension("native_profiler");
        $__internal_db9b17b1214fe5edb28b5a3419b2065e3853241099dab722372b468a7f95603f->enter($__internal_db9b17b1214fe5edb28b5a3419b2065e3853241099dab722372b468a7f95603f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DSInternauteBundle:DS:experience.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db9b17b1214fe5edb28b5a3419b2065e3853241099dab722372b468a7f95603f->leave($__internal_db9b17b1214fe5edb28b5a3419b2065e3853241099dab722372b468a7f95603f_prof);

    }

    // line 5
    public function block_block_nav($context, array $blocks = array())
    {
        $__internal_82bdbce138fd6d2c749697e87df83c4993c3d37dd301bb96d423a2e7e88f0075 = $this->env->getExtension("native_profiler");
        $__internal_82bdbce138fd6d2c749697e87df83c4993c3d37dd301bb96d423a2e7e88f0075->enter($__internal_82bdbce138fd6d2c749697e87df83c4993c3d37dd301bb96d423a2e7e88f0075_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_nav"));

        // line 6
        echo "<div class=\"display\">

<div class=\"titrePro\"><b>Mon expérience :</b></div>
    <br>
    <div id=informaticien class=\"police_pro\">
        <b>En informatique :</b>
        <ul>
            <li>Du 26/05 au 27/06/2014 : Développeur en Cobol du projet \"Colisage\" : <br>
                Dans le cadre du <strong>DU Développeur Grands Systèmes</strong> à Strasbourg.
            </li>
            <br>
            <li>De septembre 2011 à avril 2014 : <b>Webmaster</b> du site internet du dojo où je pratique le karaté (<a href=\"http://seirenkaikarate.eu\" target=\"_blank\">Seiren Kaï Karaté Dojo</a>)
                <ul>
                    <li>Refonte graphique du site
                        <ul>
                            <li>changement de la charte graphique</li>
                            <li>refonte de l'ergonomie du site</li>
                        </ul>
                    </li>
                    <li>ajout de la fonctionnalité multilingue au site</li>
                </ul>
            </li>
            <br>
            <li>07/2011 : Stage de <b>DEVELOPPEUR JAVA</b> à AKAROA (Agglomération dijonnaise, 21)</li>
            <br>
             <li>Du 01/12/2006 au 31/10/07 : <b>INFORMATICIEN</b> au sein des Restaurants du Coeur de Côte d'Or (Responsable du relais informatique)<br>
                 (Agglomération dijonnaise, 21)
                 
                 <ul>
                    <li>Développement d'une base de données Access avec Visual Basic pour Application</li>
                    <li>Dépannage de clients internes</li>
                    <li>Maintenance du parc informatique</li>
                    <li>Tri informatique des dons</li>
                    <li>Assistance aux utilisateurs</li>
                    <li>Formation d'utilisateurs à Word et Excel</li>
                </ul>
            </li>
            <br>
            <li>Du 01/03/2002 au 22/06/2004\t: <b>INFORMATICIEN DEVELOPPEUR</b> au sein d'Axel Technologies (conception de sites internet)<br>
            (Agglomération dijonnaise, 21)        
                 <ul>
                    <li>Développements de programmes
                            <ul>
                                    <li>en asp</li>
                                    <li>en php</li>
                            </ul>
                    </li>
                    <li>Paramétrages de serveurs</li>
                 </ul>
            </li>
            <BR>
            <li>Du 01/02/2001 au 14/01/2002 : <b>INFORMATICIEN</b> au sein de Global Photo (ancien site de photojournalisme)<br>
                (Agglomération dijonnaise, 21)
                <ul>
                    <li>Développement de programme en asp</li>
                    <li>Dépannage de client interne</li>
                    <li>Installation de serveurs</li>
                </ul>
            </li>
            <BR>
            <li>Du 02/11/2000 au 31/01/2001 : <b>INFORMATICIEN</b> au sein de Planet Axel (société de création de sites internet)<br>
                (Agglomération dijonnaise, 21)
                <ul>
                        <li>Développement de sites internet en asp</li>
                </ul>
            </li>
        </ul>\t\t\t
    </div>
    <div id=comptabilite class=\"police_pro\">
        <b>En comptabilité</b>
        <ul>
            <li>En entreprise : 
                    <ul>
                        <li>Du 17/06/2004 au 31/12/2004 : <b>Aide-Comptable</b> au sein de SOMATEM à Longvic (opération de comptabilité générale)<br>
                        (Agglomération dijonnaise, 21)</li>
                    </ul>
            </li>
        </ul>
    </div>
</div>
";
        
        $__internal_82bdbce138fd6d2c749697e87df83c4993c3d37dd301bb96d423a2e7e88f0075->leave($__internal_82bdbce138fd6d2c749697e87df83c4993c3d37dd301bb96d423a2e7e88f0075_prof);

    }

    public function getTemplateName()
    {
        return "DSInternauteBundle:DS:experience.html.twig";
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
/* {# src/DS/InternauteBundle/Resources/views/experience.html.twig  #}*/
/* */
/* {% extends "DSInternauteBundle::DS/home2.html.twig" %}*/
/* */
/* {% block block_nav %}*/
/* <div class="display">*/
/* */
/* <div class="titrePro"><b>Mon expérience :</b></div>*/
/*     <br>*/
/*     <div id=informaticien class="police_pro">*/
/*         <b>En informatique :</b>*/
/*         <ul>*/
/*             <li>Du 26/05 au 27/06/2014 : Développeur en Cobol du projet "Colisage" : <br>*/
/*                 Dans le cadre du <strong>DU Développeur Grands Systèmes</strong> à Strasbourg.*/
/*             </li>*/
/*             <br>*/
/*             <li>De septembre 2011 à avril 2014 : <b>Webmaster</b> du site internet du dojo où je pratique le karaté (<a href="http://seirenkaikarate.eu" target="_blank">Seiren Kaï Karaté Dojo</a>)*/
/*                 <ul>*/
/*                     <li>Refonte graphique du site*/
/*                         <ul>*/
/*                             <li>changement de la charte graphique</li>*/
/*                             <li>refonte de l'ergonomie du site</li>*/
/*                         </ul>*/
/*                     </li>*/
/*                     <li>ajout de la fonctionnalité multilingue au site</li>*/
/*                 </ul>*/
/*             </li>*/
/*             <br>*/
/*             <li>07/2011 : Stage de <b>DEVELOPPEUR JAVA</b> à AKAROA (Agglomération dijonnaise, 21)</li>*/
/*             <br>*/
/*              <li>Du 01/12/2006 au 31/10/07 : <b>INFORMATICIEN</b> au sein des Restaurants du Coeur de Côte d'Or (Responsable du relais informatique)<br>*/
/*                  (Agglomération dijonnaise, 21)*/
/*                  */
/*                  <ul>*/
/*                     <li>Développement d'une base de données Access avec Visual Basic pour Application</li>*/
/*                     <li>Dépannage de clients internes</li>*/
/*                     <li>Maintenance du parc informatique</li>*/
/*                     <li>Tri informatique des dons</li>*/
/*                     <li>Assistance aux utilisateurs</li>*/
/*                     <li>Formation d'utilisateurs à Word et Excel</li>*/
/*                 </ul>*/
/*             </li>*/
/*             <br>*/
/*             <li>Du 01/03/2002 au 22/06/2004	: <b>INFORMATICIEN DEVELOPPEUR</b> au sein d'Axel Technologies (conception de sites internet)<br>*/
/*             (Agglomération dijonnaise, 21)        */
/*                  <ul>*/
/*                     <li>Développements de programmes*/
/*                             <ul>*/
/*                                     <li>en asp</li>*/
/*                                     <li>en php</li>*/
/*                             </ul>*/
/*                     </li>*/
/*                     <li>Paramétrages de serveurs</li>*/
/*                  </ul>*/
/*             </li>*/
/*             <BR>*/
/*             <li>Du 01/02/2001 au 14/01/2002 : <b>INFORMATICIEN</b> au sein de Global Photo (ancien site de photojournalisme)<br>*/
/*                 (Agglomération dijonnaise, 21)*/
/*                 <ul>*/
/*                     <li>Développement de programme en asp</li>*/
/*                     <li>Dépannage de client interne</li>*/
/*                     <li>Installation de serveurs</li>*/
/*                 </ul>*/
/*             </li>*/
/*             <BR>*/
/*             <li>Du 02/11/2000 au 31/01/2001 : <b>INFORMATICIEN</b> au sein de Planet Axel (société de création de sites internet)<br>*/
/*                 (Agglomération dijonnaise, 21)*/
/*                 <ul>*/
/*                         <li>Développement de sites internet en asp</li>*/
/*                 </ul>*/
/*             </li>*/
/*         </ul>			*/
/*     </div>*/
/*     <div id=comptabilite class="police_pro">*/
/*         <b>En comptabilité</b>*/
/*         <ul>*/
/*             <li>En entreprise : */
/*                     <ul>*/
/*                         <li>Du 17/06/2004 au 31/12/2004 : <b>Aide-Comptable</b> au sein de SOMATEM à Longvic (opération de comptabilité générale)<br>*/
/*                         (Agglomération dijonnaise, 21)</li>*/
/*                     </ul>*/
/*             </li>*/
/*         </ul>*/
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
