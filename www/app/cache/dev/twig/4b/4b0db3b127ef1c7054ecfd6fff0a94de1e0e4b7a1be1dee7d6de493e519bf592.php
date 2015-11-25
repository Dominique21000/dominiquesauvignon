<?php

/* DSInternauteBundle::layout2.html.twig */
class __TwigTemplate_fa6d9b57baedd945ab5907e117a2326c85416feb29cd54d720432dc239d1b1bf extends Twig_Template
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
        $__internal_6446d0b564b7dfbf7d8998efcd51594bfe3bb4129835cb9959be52155f5e1f4f = $this->env->getExtension("native_profiler");
        $__internal_6446d0b564b7dfbf7d8998efcd51594bfe3bb4129835cb9959be52155f5e1f4f->enter($__internal_6446d0b564b7dfbf7d8998efcd51594bfe3bb4129835cb9959be52155f5e1f4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DSInternauteBundle::layout2.html.twig"));

        // line 2
        echo "
<!DOCTYPE HTML>
<head>
\t<meta CHARSET=\"UTF-8\">
\t<title>Dominique SAUVIGNON (Développeur web)</title>
</head>
<body>
\t<header>
           <div ><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("ds_internaute_home");
        echo "\" class=\"accueil\" title=\"retour vers l'accueil\">
              Accueil</a></div>
            <div class=\"nom\">
                <img src=\"";
        // line 13
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
            ";
        // line 22
        $this->displayBlock('block_nav', $context, $blocks);
        // line 24
        echo "        </nav>\t
            ";
        // line 25
        $this->displayBlock('block_div', $context, $blocks);
        // line 27
        echo "        <footer>
            Webmaster : Dominique SAUVIGNON - Site développé avec le framework Symfony2 <a href=\"http://symfony.com\" target=\"_blank\"><img src=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("ds_internaute_homepage");
        echo "../images/logo_SF.svg\" width=\"100\"></a>
        </footer>                

            ";
        // line 31
        $this->displayBlock('link', $context, $blocks);
        // line 42
        echo "

\t<script type=\"text/javascript\">
        function ouvre(page)
        {
            window.open(page,page,\"width=900,height=700,top=100,left=200,toolbar=no,location=no\");
        }
    </script>
</body>";
        
        $__internal_6446d0b564b7dfbf7d8998efcd51594bfe3bb4129835cb9959be52155f5e1f4f->leave($__internal_6446d0b564b7dfbf7d8998efcd51594bfe3bb4129835cb9959be52155f5e1f4f_prof);

    }

    // line 22
    public function block_block_nav($context, array $blocks = array())
    {
        $__internal_2a41b0313831a6752dd595139ca72fd0a2a317a684971ec31268cf8415f1c2ac = $this->env->getExtension("native_profiler");
        $__internal_2a41b0313831a6752dd595139ca72fd0a2a317a684971ec31268cf8415f1c2ac->enter($__internal_2a41b0313831a6752dd595139ca72fd0a2a317a684971ec31268cf8415f1c2ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_nav"));

        // line 23
        echo "            ";
        
        $__internal_2a41b0313831a6752dd595139ca72fd0a2a317a684971ec31268cf8415f1c2ac->leave($__internal_2a41b0313831a6752dd595139ca72fd0a2a317a684971ec31268cf8415f1c2ac_prof);

    }

    // line 25
    public function block_block_div($context, array $blocks = array())
    {
        $__internal_cd0ba460fbd49484423018969b99c71d2194574d3a853715a78c398175a3a31b = $this->env->getExtension("native_profiler");
        $__internal_cd0ba460fbd49484423018969b99c71d2194574d3a853715a78c398175a3a31b->enter($__internal_cd0ba460fbd49484423018969b99c71d2194574d3a853715a78c398175a3a31b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_div"));

        // line 26
        echo "\t    ";
        
        $__internal_cd0ba460fbd49484423018969b99c71d2194574d3a853715a78c398175a3a31b->leave($__internal_cd0ba460fbd49484423018969b99c71d2194574d3a853715a78c398175a3a31b_prof);

    }

    // line 31
    public function block_link($context, array $blocks = array())
    {
        $__internal_e010fba3f01ac09ba8b293cbf06e5f685638a6a8b145218604d7d14f0d35e076 = $this->env->getExtension("native_profiler");
        $__internal_e010fba3f01ac09ba8b293cbf06e5f685638a6a8b145218604d7d14f0d35e076->enter($__internal_e010fba3f01ac09ba8b293cbf06e5f685638a6a8b145218604d7d14f0d35e076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "link"));

        // line 32
        echo "
            ";
        // line 33
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "3672499_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3672499_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/3672499_part_2_3672499_1.js");
            // line 34
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
        // line 36
        echo "

            ";
        // line 38
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "82e1f38_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_82e1f38_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/82e1f38_part_1_admin_position_1.css");
            // line 39
            echo "                <link rel=\"stylesheet\" type=\"text/css\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\">
            ";
            // asset "82e1f38_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_82e1f38_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/82e1f38_part_1_admin_style_2.css");
            echo "                <link rel=\"stylesheet\" type=\"text/css\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\">
            ";
            // asset "82e1f38_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_82e1f38_2") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/82e1f38_part_1_disposition-W8_3.css");
            echo "                <link rel=\"stylesheet\" type=\"text/css\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\">
            ";
            // asset "82e1f38_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_82e1f38_3") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/82e1f38_part_1_style-W8_4.css");
            echo "                <link rel=\"stylesheet\" type=\"text/css\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\">
            ";
        } else {
            // asset "82e1f38"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_82e1f38") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/82e1f38.css");
            echo "                <link rel=\"stylesheet\" type=\"text/css\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\">
            ";
        }
        unset($context["asset_url"]);
        // line 40
        echo "   
        ";
        
        $__internal_e010fba3f01ac09ba8b293cbf06e5f685638a6a8b145218604d7d14f0d35e076->leave($__internal_e010fba3f01ac09ba8b293cbf06e5f685638a6a8b145218604d7d14f0d35e076_prof);

    }

    public function getTemplateName()
    {
        return "DSInternauteBundle::layout2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 40,  159 => 39,  155 => 38,  151 => 36,  125 => 34,  121 => 33,  118 => 32,  112 => 31,  105 => 26,  99 => 25,  92 => 23,  86 => 22,  71 => 42,  69 => 31,  63 => 28,  60 => 27,  58 => 25,  55 => 24,  53 => 22,  41 => 13,  35 => 10,  25 => 2,);
    }
}
/* {# src/DS/InternauteBundle/Resources/views/layout2.html.twig #}*/
/* */
/* <!DOCTYPE HTML>*/
/* <head>*/
/* 	<meta CHARSET="UTF-8">*/
/* 	<title>Dominique SAUVIGNON (Développeur web)</title>*/
/* </head>*/
/* <body>*/
/* 	<header>*/
/*            <div ><a href="{{ path('ds_internaute_home') }}" class="accueil" title="retour vers l'accueil">*/
/*               Accueil</a></div>*/
/*             <div class="nom">*/
/*                 <img src="{{ path('ds_internaute_homepage') }}../images/2013_05_14--DominiqueSAUVIGNON_200.JPG" */
/*                      alt="Dominique SAUVIGNON" class="photoMoi">*/
/*                 <h1>Dominique SAUVIGNON</h1>*/
/*                 <a href="mailto:contact@dominiquesauvignon.eu" */
/*                    class="lienMail">contact[at]dominiquesauvignon.eu</a><br>*/
/*                 <span class="coordonnees">06.85.40.09.36</span>*/
/*             </div>  */
/*         </header>*/
/*         <nav>*/
/*             {% block block_nav %}*/
/*             {% endblock %}*/
/*         </nav>	*/
/*             {% block block_div %}*/
/* 	    {% endblock %}*/
/*         <footer>*/
/*             Webmaster : Dominique SAUVIGNON - Site développé avec le framework Symfony2 <a href="http://symfony.com" target="_blank"><img src="{{ path('ds_internaute_homepage') }}../images/logo_SF.svg" width="100"></a>*/
/*         </footer>                */
/* */
/*             {% block link %}*/
/* */
/*             {% javascripts '@DSInternauteBundle/Resources/public/bibli/*' 'js/*' %}*/
/*                 <script type="text/javascript" src="{{ asset_url }}"></script>*/
/*             {% endjavascripts %}*/
/* */
/* */
/*             {% stylesheets filter='cssrewrite' '@DSInternauteBundle/Resources/public/css/*'  %}*/
/*                 <link rel="stylesheet" type="text/css" href="{{ asset_url }}">*/
/*             {% endstylesheets %}   */
/*         {% endblock %}*/
/* */
/* */
/* 	<script type="text/javascript">*/
/*         function ouvre(page)*/
/*         {*/
/*             window.open(page,page,"width=900,height=700,top=100,left=200,toolbar=no,location=no");*/
/*         }*/
/*     </script>*/
/* </body>*/
