<?php

/* DSInternauteBundle:DS:formulaire.html.twig */
class __TwigTemplate_aaf04de8050bf51940d299f08bdcb14c007675ad58a4edddc43c1af04ce7ffaa extends Twig_Template
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
        $__internal_ec00b69f5356f58fb04ecbd1e7dbdbd40e87b50765dc9276a180d3d2e4c8fe48 = $this->env->getExtension("native_profiler");
        $__internal_ec00b69f5356f58fb04ecbd1e7dbdbd40e87b50765dc9276a180d3d2e4c8fe48->enter($__internal_ec00b69f5356f58fb04ecbd1e7dbdbd40e87b50765dc9276a180d3d2e4c8fe48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DSInternauteBundle:DS:formulaire.html.twig"));

        // line 2
        echo "
<h3>Formulaire de lien</h3>

<div class=\"well\">
    <form methode=\"post\" ";
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
        
        $__internal_ec00b69f5356f58fb04ecbd1e7dbdbd40e87b50765dc9276a180d3d2e4c8fe48->leave($__internal_ec00b69f5356f58fb04ecbd1e7dbdbd40e87b50765dc9276a180d3d2e4c8fe48_prof);

    }

    public function getTemplateName()
    {
        return "DSInternauteBundle:DS:formulaire.html.twig";
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
/* {# src/DS/InternauteBundleResources/views/DS/formulaire.html.twig #}*/
/* */
/* <h3>Formulaire de lien</h3>*/
/* */
/* <div class="well">*/
/*     <form methode="post" {{ form_enctype(form) }}>*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" class="btn btn-primary">*/
/*     </form>*/
/* </div>*/
