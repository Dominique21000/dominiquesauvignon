<?php

/* DSInternauteBundle::layout.html.twig */
class __TwigTemplate_0f90184fdb6080754dce0b409fca9d1fd673e72e659dd1fba6e26cee548b1bc8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'block_nav' => array($this, 'block_block_nav'),
            'block_div' => array($this, 'block_block_div'),
            'link' => array($this, 'block_link'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f86499f1290e7f5e4eac3c07b6c506116ac09091e191079ca2c2e2d5f21b37cb = $this->env->getExtension("native_profiler");
        $__internal_f86499f1290e7f5e4eac3c07b6c506116ac09091e191079ca2c2e2d5f21b37cb->enter($__internal_f86499f1290e7f5e4eac3c07b6c506116ac09091e191079ca2c2e2d5f21b37cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DSInternauteBundle::layout.html.twig"));

        // line 2
        echo "
<!DOCTYPE HTML>
<head>
\t<meta CHARSET=\"UTF-8\">
\t<title>Dominique SAUVIGNON (Développeur web)</title>
</head>
<body>
\t<header>
            <div id=\"bandeauCookies\">
                En poursuivant votre navigation sur ce site, vous acceptez 
                l’utilisation de Cookies ou autres traceurs 
                pour réaliser des 
                statistiques de visites.<br>
                <a href=\"javascript:ouvreSavoirPlus();\" class=\"boutonEnSavoirPlus\">En savoir plus</a>
                <span class=\"boutonFermer\"><a href=\"javascript:fermeBandeauCookies()\">Fermer X</a></span>
            </div>
            <div class=\"accueil\"><!--<a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("ds_internaute_homepage");
        echo "\">-->
              Accueil<!--</a>--></div>
            <div class=\"nom\">
                <img src=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("ds_internaute_homepage");
        echo "../images/2013_05_14--DominiqueSAUVIGNON_200.JPG\" 
                     alt=\"Dominique SAUVIGNON\" class=\"photoMoi\">
                <h1>Dominique SAUVIGNON</h1>
                <a href=\"mailto:contact@dominiquesauvignon.eu\" 
                   class=\"lienMail\">contact[at]dominiquesauvignon.eu</a><br>
                <span class=\"coordonnees\">06.85.40.09.36</span>
            </div>  
       </header>
       <nav>
       \t";
        // line 30
        $this->displayBlock('block_nav', $context, $blocks);
        // line 32
        echo "       </nav>\t
        ";
        // line 33
        $this->displayBlock('block_div', $context, $blocks);
        // line 35
        echo "        <footer>
            Webmaster : Dominique SAUVIGNON - Site développé avec le framework Symfony2 <a href=\"http://symfony.com\" target=\"_blank\"><img src=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("ds_internaute_homepage");
        echo "../images/logo_SF.svg\" width=\"100\"></a>
        </footer>
\t\t";
        // line 38
        $this->displayBlock('link', $context, $blocks);
        // line 49
        echo "

\t<script type=\"text/javascript\">
        function ouvre(page)
        {
            window.open(page,page,\"width=900,height=700,top=100,left=200,toolbar=no,location=no\");
        }
    </script>
</body>";
        
        $__internal_f86499f1290e7f5e4eac3c07b6c506116ac09091e191079ca2c2e2d5f21b37cb->leave($__internal_f86499f1290e7f5e4eac3c07b6c506116ac09091e191079ca2c2e2d5f21b37cb_prof);

    }

    // line 30
    public function block_block_nav($context, array $blocks = array())
    {
        $__internal_1ddeabc15764fa11d198db9e90406b92a50d560429d78e36651c6b98cc49fcb3 = $this->env->getExtension("native_profiler");
        $__internal_1ddeabc15764fa11d198db9e90406b92a50d560429d78e36651c6b98cc49fcb3->enter($__internal_1ddeabc15764fa11d198db9e90406b92a50d560429d78e36651c6b98cc49fcb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_nav"));

        // line 31
        echo "\t";
        
        $__internal_1ddeabc15764fa11d198db9e90406b92a50d560429d78e36651c6b98cc49fcb3->leave($__internal_1ddeabc15764fa11d198db9e90406b92a50d560429d78e36651c6b98cc49fcb3_prof);

    }

    // line 33
    public function block_block_div($context, array $blocks = array())
    {
        $__internal_ab445fb87112c9254f9ad4d9b9437822ed75a5df4574462d4fa95e5262dcb9e5 = $this->env->getExtension("native_profiler");
        $__internal_ab445fb87112c9254f9ad4d9b9437822ed75a5df4574462d4fa95e5262dcb9e5->enter($__internal_ab445fb87112c9254f9ad4d9b9437822ed75a5df4574462d4fa95e5262dcb9e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_div"));

        // line 34
        echo "\t";
        
        $__internal_ab445fb87112c9254f9ad4d9b9437822ed75a5df4574462d4fa95e5262dcb9e5->leave($__internal_ab445fb87112c9254f9ad4d9b9437822ed75a5df4574462d4fa95e5262dcb9e5_prof);

    }

    // line 38
    public function block_link($context, array $blocks = array())
    {
        $__internal_59ca05b5c63afecaff5d359f6c0f742b21150af0a5f3358f337d9a22fe0375c7 = $this->env->getExtension("native_profiler");
        $__internal_59ca05b5c63afecaff5d359f6c0f742b21150af0a5f3358f337d9a22fe0375c7->enter($__internal_59ca05b5c63afecaff5d359f6c0f742b21150af0a5f3358f337d9a22fe0375c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "link"));

        // line 39
        echo "        
            ";
        // line 40
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "3672499_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3672499_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/3672499_part_2_3672499_1.js");
            // line 41
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
            // asset "3672499_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3672499_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/3672499_part_2_myFonctionsJS_2.js");
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
            // asset "3672499_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3672499_2") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/3672499_part_2_myJQuery_3.js");
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
        } else {
            // asset "3672499"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3672499") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/3672499.js");
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
        }
        unset($context["asset_url"]);
        // line 43
        echo "            
            
            ";
        // line 45
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "846fd61_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_846fd61_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/846fd61_part_1_admin_position_1.css");
            // line 46
            echo "                <link rel=\"stylesheet\" type=\"text/css\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\">
            ";
            // asset "846fd61_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_846fd61_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/846fd61_part_1_admin_style_2.css");
            echo "                <link rel=\"stylesheet\" type=\"text/css\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\">
            ";
            // asset "846fd61_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_846fd61_2") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/846fd61_part_1_disposition-W8_3.css");
            echo "                <link rel=\"stylesheet\" type=\"text/css\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\">
            ";
            // asset "846fd61_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_846fd61_3") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/846fd61_part_1_style-W8_4.css");
            echo "                <link rel=\"stylesheet\" type=\"text/css\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\">
            ";
        } else {
            // asset "846fd61"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_846fd61") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/846fd61.css");
            echo "                <link rel=\"stylesheet\" type=\"text/css\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\">
            ";
        }
        unset($context["asset_url"]);
        // line 48
        echo "\t\t";
        
        $__internal_59ca05b5c63afecaff5d359f6c0f742b21150af0a5f3358f337d9a22fe0375c7->leave($__internal_59ca05b5c63afecaff5d359f6c0f742b21150af0a5f3358f337d9a22fe0375c7_prof);

    }

    public function getTemplateName()
    {
        return "DSInternauteBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 48,  166 => 46,  162 => 45,  158 => 43,  132 => 41,  128 => 40,  125 => 39,  119 => 38,  112 => 34,  106 => 33,  99 => 31,  93 => 30,  78 => 49,  76 => 38,  71 => 36,  68 => 35,  66 => 33,  63 => 32,  61 => 30,  49 => 21,  43 => 18,  25 => 2,);
    }
}
/* {# src/DS/InternauteBundle/Resources/views/layout.html.twig #}*/
/* */
/* <!DOCTYPE HTML>*/
/* <head>*/
/* 	<meta CHARSET="UTF-8">*/
/* 	<title>Dominique SAUVIGNON (Développeur web)</title>*/
/* </head>*/
/* <body>*/
/* 	<header>*/
/*             <div id="bandeauCookies">*/
/*                 En poursuivant votre navigation sur ce site, vous acceptez */
/*                 l’utilisation de Cookies ou autres traceurs */
/*                 pour réaliser des */
/*                 statistiques de visites.<br>*/
/*                 <a href="javascript:ouvreSavoirPlus();" class="boutonEnSavoirPlus">En savoir plus</a>*/
/*                 <span class="boutonFermer"><a href="javascript:fermeBandeauCookies()">Fermer X</a></span>*/
/*             </div>*/
/*             <div class="accueil"><!--<a href="{{ path('ds_internaute_homepage') }}">-->*/
/*               Accueil<!--</a>--></div>*/
/*             <div class="nom">*/
/*                 <img src="{{ path('ds_internaute_homepage') }}../images/2013_05_14--DominiqueSAUVIGNON_200.JPG" */
/*                      alt="Dominique SAUVIGNON" class="photoMoi">*/
/*                 <h1>Dominique SAUVIGNON</h1>*/
/*                 <a href="mailto:contact@dominiquesauvignon.eu" */
/*                    class="lienMail">contact[at]dominiquesauvignon.eu</a><br>*/
/*                 <span class="coordonnees">06.85.40.09.36</span>*/
/*             </div>  */
/*        </header>*/
/*        <nav>*/
/*        	{% block block_nav %}*/
/* 	{% endblock %}*/
/*        </nav>	*/
/*         {% block block_div %}*/
/* 	{% endblock %}*/
/*         <footer>*/
/*             Webmaster : Dominique SAUVIGNON - Site développé avec le framework Symfony2 <a href="http://symfony.com" target="_blank"><img src="{{ path('ds_internaute_homepage') }}../images/logo_SF.svg" width="100"></a>*/
/*         </footer>*/
/* 		{% block link %}*/
/*         */
/*             {% javascripts '@DSInternauteBundle/Resources/public/bibli/*' 'js/*' %}*/
/*                 <script type="text/javascript" src="{{ asset_url }}"></script>*/
/*             {% endjavascripts %}*/
/*             */
/*             */
/*             {% stylesheets  '@DSInternauteBundle/Resources/public/css/*'  %}*/
/*                 <link rel="stylesheet" type="text/css" href="{{ asset_url }}">*/
/*             {% endstylesheets %}*/
/* 		{% endblock %}*/
/* */
/* */
/* 	<script type="text/javascript">*/
/*         function ouvre(page)*/
/*         {*/
/*             window.open(page,page,"width=900,height=700,top=100,left=200,toolbar=no,location=no");*/
/*         }*/
/*     </script>*/
/* </body>*/
