<?php

/* DSInternauteBundle:Admin/Reference:form.html.twig */
class __TwigTemplate_e84eec8fda6116010b18b08717baeff47dd67d31847f84c178fb35395fc4275c extends Twig_Template
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
        $__internal_bd72da9d2afd13ca3c8ad1e1317a72107a8823cfbf0e029409651e6673a5ca80 = $this->env->getExtension("native_profiler");
        $__internal_bd72da9d2afd13ca3c8ad1e1317a72107a8823cfbf0e029409651e6673a5ca80->enter($__internal_bd72da9d2afd13ca3c8ad1e1317a72107a8823cfbf0e029409651e6673a5ca80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DSInternauteBundle:Admin/Reference:form.html.twig"));

        // line 2
        echo "
<h3>Formulaire de lien</h3>

<div class=\"well\">
    <form method=\"post\" ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" class=\"btn btn-primary\">
    </form>
</div>";
        
        $__internal_bd72da9d2afd13ca3c8ad1e1317a72107a8823cfbf0e029409651e6673a5ca80->leave($__internal_bd72da9d2afd13ca3c8ad1e1317a72107a8823cfbf0e029409651e6673a5ca80_prof);

    }

    public function getTemplateName()
    {
        return "DSInternauteBundle:Admin/Reference:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 7,  28 => 6,  22 => 2,);
    }
}
/* {# src/DS/InternauteBundleResources/views/Reference/form.html.twig #}*/
/* */
/* <h3>Formulaire de lien</h3>*/
/* */
/* <div class="well">*/
/*     <form method="post" {{ form_enctype(form) }}>*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" class="btn btn-primary">*/
/*     </form>*/
/* </div>*/
