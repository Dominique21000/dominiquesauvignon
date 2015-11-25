<?php

/* DSInternauteBundle:Depannage:index.html.twig */
class __TwigTemplate_9fa02a846ed581d6bcc7f6c9d424aac9e9d9673c8ba5817b8f3f8963275d2e72 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\">
        <title>Dominique SAUVIGNON - Dépannage informatique</title>
    </head>
<body>
    <header>
        Dominique SAUVIGNON<br>
        Dépannage informatique<br>
        06.85.40.09.36 - <a href=\"mailto:contact@dominiquesauvignon.eu\">
            contact@dominiquesauvignon.eu</a>
    </header>

    <div id=\"bloc_annonce\">
        <div id=\"texte_annonce\">
            <img src=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("ds_internaute_homepage");
        echo "../depannage/logos/ordinateur.png\" width=\"200\" class=\"centre\">
            <ul class=\"gauche\">
                <li>Vous venez d'acquérir un ordinateur de type PC et vous
                    vous sentez un peu perdu ?</li>
                <li>Votre ordinateur a des soucis de lenteur ou est en panne ?</li>
                <li>Vous souhaitez créer votre site internet ?</li>
                <li>Vous souhaitez numériser le contenu de vos cassettes vidéos ?</li>
            </ul>
            <p class=\"accroche\">Je peux vous aider :)</p>
            <ul class=\"gauche\">
                <li>informaticien diplômé</li>
                <li>expérimenté dans le développement de sites webs</li>
                <li>expérimenté dans le dépannage et l'optimisation de pc</li>
            </ul>
            Pour me joindre : <br>
            gsm : 06.85.40.09.36<br>
            Courriel : <a href='mailto:contact@dominiquesauvignon.eu'>contact@dominiquesauvignon.eu</a>
        </div>
        Les logiciels que j'utilise et recommande : <a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("ds_internaute_logiciels");
        echo "\" target=\"_blank\">ici</a>
    </div>

    <footer>
        Dominique SAUVIGNON<br>
        -------<br>
        Développement web et applicatif & Dépannage informatique<br>
        06.85.40.09.36 - <a href=\"mailto:contact@dominiquesauvignon.eu\">contact@dominiquesauvignon.eu</a>
    </footer>
    <link rel=\"stylesheet\"
          media=\"screen\"
          type=\"text/css\"
          href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("ds_internaute_homepage");
        echo "../depannage/css/index_style.css\"/>
    <link rel=\"stylesheet\"
          media=\"screen\"
          type=\"text/css\"
          href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("ds_internaute_homepage");
        echo "../depannage/css/index_disposition.css\"/>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "DSInternauteBundle:Depannage:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 51,  73 => 47,  58 => 35,  37 => 17,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="fr">*/
/*     <head>*/
/*         <meta charset="UTF-8">*/
/*         <title>Dominique SAUVIGNON - Dépannage informatique</title>*/
/*     </head>*/
/* <body>*/
/*     <header>*/
/*         Dominique SAUVIGNON<br>*/
/*         Dépannage informatique<br>*/
/*         06.85.40.09.36 - <a href="mailto:contact@dominiquesauvignon.eu">*/
/*             contact@dominiquesauvignon.eu</a>*/
/*     </header>*/
/* */
/*     <div id="bloc_annonce">*/
/*         <div id="texte_annonce">*/
/*             <img src="{{ path('ds_internaute_homepage') }}../depannage/logos/ordinateur.png" width="200" class="centre">*/
/*             <ul class="gauche">*/
/*                 <li>Vous venez d'acquérir un ordinateur de type PC et vous*/
/*                     vous sentez un peu perdu ?</li>*/
/*                 <li>Votre ordinateur a des soucis de lenteur ou est en panne ?</li>*/
/*                 <li>Vous souhaitez créer votre site internet ?</li>*/
/*                 <li>Vous souhaitez numériser le contenu de vos cassettes vidéos ?</li>*/
/*             </ul>*/
/*             <p class="accroche">Je peux vous aider :)</p>*/
/*             <ul class="gauche">*/
/*                 <li>informaticien diplômé</li>*/
/*                 <li>expérimenté dans le développement de sites webs</li>*/
/*                 <li>expérimenté dans le dépannage et l'optimisation de pc</li>*/
/*             </ul>*/
/*             Pour me joindre : <br>*/
/*             gsm : 06.85.40.09.36<br>*/
/*             Courriel : <a href='mailto:contact@dominiquesauvignon.eu'>contact@dominiquesauvignon.eu</a>*/
/*         </div>*/
/*         Les logiciels que j'utilise et recommande : <a href="{{ path('ds_internaute_logiciels') }}" target="_blank">ici</a>*/
/*     </div>*/
/* */
/*     <footer>*/
/*         Dominique SAUVIGNON<br>*/
/*         -------<br>*/
/*         Développement web et applicatif & Dépannage informatique<br>*/
/*         06.85.40.09.36 - <a href="mailto:contact@dominiquesauvignon.eu">contact@dominiquesauvignon.eu</a>*/
/*     </footer>*/
/*     <link rel="stylesheet"*/
/*           media="screen"*/
/*           type="text/css"*/
/*           href="{{ path('ds_internaute_homepage') }}../depannage/css/index_style.css"/>*/
/*     <link rel="stylesheet"*/
/*           media="screen"*/
/*           type="text/css"*/
/*           href="{{ path('ds_internaute_homepage') }}../depannage/css/index_disposition.css"/>*/
/* </body>*/
/* </html>*/
