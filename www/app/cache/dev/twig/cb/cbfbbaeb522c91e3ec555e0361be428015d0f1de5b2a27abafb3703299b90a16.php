<?php

/* DSInternauteBundle:Admin:layout.html.twig */
class __TwigTemplate_527311949f051ffeccf80bbc14fbdc979b7f59bc912eb88c618ee2ffda417524 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'donnees' => array($this, 'block_donnees'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_629b9f9ae09bc46c24168e9c55b702bd2f3b9304abb2b6be65b6383aa128e501 = $this->env->getExtension("native_profiler");
        $__internal_629b9f9ae09bc46c24168e9c55b702bd2f3b9304abb2b6be65b6383aa128e501->enter($__internal_629b9f9ae09bc46c24168e9c55b702bd2f3b9304abb2b6be65b6383aa128e501_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DSInternauteBundle:Admin:layout.html.twig"));

        // line 2
        echo "<!DOCTYPE HTML>
<head>
    <meta CHARSET=\"UTF-8\">
    <title>Dominique SAUVIGNON (Développeur web) - Administration</title>
</head>
<body>
    <header>
        <h1>Administration -
            ";
        // line 10
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 11
            echo "                Connecté en tant que ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</h1>
            ";
        }
        // line 13
        echo "    </header>
    <nav>
        <h2>Menu : </h2>
            <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("ds_admin_liens_liste");
        echo "\">Gestion des liens</a><br>
            <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("ds_admin_references_liste");
        echo "\">Gestion des références</a><br>
    </nav>

    <div id=\"donnees\">
        ";
        // line 21
        $this->displayBlock('donnees', $context, $blocks);
        // line 23
        echo "    </div>

    ";
        // line 25
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "3f6558b_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3f6558b_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/3f6558b_admin_style_1.css");
            // line 26
            echo "        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\">
    ";
            // asset "3f6558b_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3f6558b_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/3f6558b_admin_position_2.css");
            echo "        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\">
    ";
        } else {
            // asset "3f6558b"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3f6558b") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/3f6558b.css");
            echo "        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\">
    ";
        }
        unset($context["asset_url"]);
        // line 27
        echo "   
                    
    <!--<link rel=\"stylesheet\" href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("ds_internaute_homepage");
        echo "../css/admin_style.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("ds_internaute_homepage");
        echo "../css/admin_position.css\"> -->
</body>";
        
        $__internal_629b9f9ae09bc46c24168e9c55b702bd2f3b9304abb2b6be65b6383aa128e501->leave($__internal_629b9f9ae09bc46c24168e9c55b702bd2f3b9304abb2b6be65b6383aa128e501_prof);

    }

    // line 21
    public function block_donnees($context, array $blocks = array())
    {
        $__internal_30f83eaae9390720d1fd9dca45ef1f99d8cf1caeece009a94de440bd0e627c4c = $this->env->getExtension("native_profiler");
        $__internal_30f83eaae9390720d1fd9dca45ef1f99d8cf1caeece009a94de440bd0e627c4c->enter($__internal_30f83eaae9390720d1fd9dca45ef1f99d8cf1caeece009a94de440bd0e627c4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "donnees"));

        // line 22
        echo "        ";
        
        $__internal_30f83eaae9390720d1fd9dca45ef1f99d8cf1caeece009a94de440bd0e627c4c->leave($__internal_30f83eaae9390720d1fd9dca45ef1f99d8cf1caeece009a94de440bd0e627c4c_prof);

    }

    public function getTemplateName()
    {
        return "DSInternauteBundle:Admin:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 22,  104 => 21,  95 => 30,  91 => 29,  87 => 27,  67 => 26,  63 => 25,  59 => 23,  57 => 21,  50 => 17,  46 => 16,  41 => 13,  35 => 11,  33 => 10,  23 => 2,);
    }
}
/* {# src/DS/InternauteBundle/Resources/views/admin/layout.html.twig #}*/
/* <!DOCTYPE HTML>*/
/* <head>*/
/*     <meta CHARSET="UTF-8">*/
/*     <title>Dominique SAUVIGNON (Développeur web) - Administration</title>*/
/* </head>*/
/* <body>*/
/*     <header>*/
/*         <h1>Administration -*/
/*             {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                 Connecté en tant que {{ app.user.username }}</h1>*/
/*             {% endif %}*/
/*     </header>*/
/*     <nav>*/
/*         <h2>Menu : </h2>*/
/*             <a href="{{ path('ds_admin_liens_liste') }}">Gestion des liens</a><br>*/
/*             <a href="{{ path('ds_admin_references_liste') }}">Gestion des références</a><br>*/
/*     </nav>*/
/* */
/*     <div id="donnees">*/
/*         {% block donnees %}*/
/*         {% endblock %}*/
/*     </div>*/
/* */
/*     {% stylesheets filter='cssrewrite' '@DSInternauteBundle/Resources/public/css/admin_style.css' '@DSInternauteBundle/Resources/public/css/admin_position.css'  %}*/
/*         <link rel="stylesheet" type="text/css" href="{{ asset_url }}">*/
/*     {% endstylesheets %}   */
/*                     */
/*     <!--<link rel="stylesheet" href="{{ path('ds_internaute_homepage') }}../css/admin_style.css">*/
/*     <link rel="stylesheet" href="{{ path('ds_internaute_homepage') }}../css/admin_position.css"> -->*/
/* </body>*/
