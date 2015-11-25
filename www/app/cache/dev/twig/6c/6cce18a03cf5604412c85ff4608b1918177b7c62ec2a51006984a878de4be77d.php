<?php

/* CoreSphereConsoleBundle::base.html.twig */
class __TwigTemplate_21eb2f8393027ce8a42182820450f4eba0bce384f37f1f58c068c491e3cf9c71 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b1792a4a02a6ce6d5a4e7940f6ccd7604069868d6bd13cd22261f90bb164b2d8 = $this->env->getExtension("native_profiler");
        $__internal_b1792a4a02a6ce6d5a4e7940f6ccd7604069868d6bd13cd22261f90bb164b2d8->enter($__internal_b1792a4a02a6ce6d5a4e7940f6ccd7604069868d6bd13cd22261f90bb164b2d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 22
        echo "    </body>
</html>
";
        
        $__internal_b1792a4a02a6ce6d5a4e7940f6ccd7604069868d6bd13cd22261f90bb164b2d8->leave($__internal_b1792a4a02a6ce6d5a4e7940f6ccd7604069868d6bd13cd22261f90bb164b2d8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7553a31a7e723126d56d7b1148dab292691acac1cfca55c680ac8dd4863d9161 = $this->env->getExtension("native_profiler");
        $__internal_7553a31a7e723126d56d7b1148dab292691acac1cfca55c680ac8dd4863d9161->enter($__internal_7553a31a7e723126d56d7b1148dab292691acac1cfca55c680ac8dd4863d9161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CoreSphere Console";
        
        $__internal_7553a31a7e723126d56d7b1148dab292691acac1cfca55c680ac8dd4863d9161->leave($__internal_7553a31a7e723126d56d7b1148dab292691acac1cfca55c680ac8dd4863d9161_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b008f59a20faa57ab7428722a92eaa8b94b4064c07d2fc8864e2632b322d80a0 = $this->env->getExtension("native_profiler");
        $__internal_b008f59a20faa57ab7428722a92eaa8b94b4064c07d2fc8864e2632b322d80a0->enter($__internal_b008f59a20faa57ab7428722a92eaa8b94b4064c07d2fc8864e2632b322d80a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/coresphereconsole/css/base.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        ";
        
        $__internal_b008f59a20faa57ab7428722a92eaa8b94b4064c07d2fc8864e2632b322d80a0->leave($__internal_b008f59a20faa57ab7428722a92eaa8b94b4064c07d2fc8864e2632b322d80a0_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_ce2cde49c86d9aab85d63a300bac1087dd43408cb43a8bedc0e12a9d158a8344 = $this->env->getExtension("native_profiler");
        $__internal_ce2cde49c86d9aab85d63a300bac1087dd43408cb43a8bedc0e12a9d158a8344->enter($__internal_ce2cde49c86d9aab85d63a300bac1087dd43408cb43a8bedc0e12a9d158a8344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "";
        
        $__internal_ce2cde49c86d9aab85d63a300bac1087dd43408cb43a8bedc0e12a9d158a8344->leave($__internal_ce2cde49c86d9aab85d63a300bac1087dd43408cb43a8bedc0e12a9d158a8344_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9150c5981890e7114eebd798ffcab2d9c85e1853326973521882cf634b80f96f = $this->env->getExtension("native_profiler");
        $__internal_9150c5981890e7114eebd798ffcab2d9c85e1853326973521882cf634b80f96f->enter($__internal_9150c5981890e7114eebd798ffcab2d9c85e1853326973521882cf634b80f96f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "            ";
        // line 15
        echo "            <script>
            window.jQuery || document.write('<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js\"><\\/script>')
            </script>
            <script>
            window.jQuery || document.write(\"<script src=\\\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/coresphereconsole/js/jquery-1.8.3.min.js"), "html", null, true);
        echo "\\\"><\\/script>\");
            </script>
        ";
        
        $__internal_9150c5981890e7114eebd798ffcab2d9c85e1853326973521882cf634b80f96f->leave($__internal_9150c5981890e7114eebd798ffcab2d9c85e1853326973521882cf634b80f96f_prof);

    }

    public function getTemplateName()
    {
        return "CoreSphereConsoleBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 19,  107 => 15,  105 => 14,  99 => 13,  87 => 12,  77 => 7,  71 => 6,  59 => 5,  50 => 22,  47 => 13,  45 => 12,  38 => 9,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title 'CoreSphere Console' %}</title>*/
/*         {% block stylesheets %}*/
/*             <link rel="stylesheet" href="{{ asset('bundles/coresphereconsole/css/base.css') }}" type="text/css" />*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body '' %}*/
/*         {% block javascripts %}*/
/*             {# Load jQuery from Google CDN with a local fallback when not laded yet #}*/
/*             <script>*/
/*             window.jQuery || document.write('<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"><\/script>')*/
/*             </script>*/
/*             <script>*/
/*             window.jQuery || document.write("<script src=\"{{ asset('bundles/coresphereconsole/js/jquery-1.8.3.min.js') }}\"><\/script>");*/
/*             </script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
