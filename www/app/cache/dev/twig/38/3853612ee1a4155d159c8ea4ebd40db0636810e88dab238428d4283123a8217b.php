<?php

/* DSInternauteBundle:Admin/Lien:form.html.twig */
class __TwigTemplate_49a26caa36844f075b26b187d1f4ce59d9f57ca97c8fdd4434dadec110267bd6 extends Twig_Template
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
        $__internal_0ccd01a633ce89d95cc1fdd2b00fb9fd82667c7408cf7cedfdc8ef2399583ec2 = $this->env->getExtension("native_profiler");
        $__internal_0ccd01a633ce89d95cc1fdd2b00fb9fd82667c7408cf7cedfdc8ef2399583ec2->enter($__internal_0ccd01a633ce89d95cc1fdd2b00fb9fd82667c7408cf7cedfdc8ef2399583ec2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DSInternauteBundle:Admin/Lien:form.html.twig"));

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
        
        $__internal_0ccd01a633ce89d95cc1fdd2b00fb9fd82667c7408cf7cedfdc8ef2399583ec2->leave($__internal_0ccd01a633ce89d95cc1fdd2b00fb9fd82667c7408cf7cedfdc8ef2399583ec2_prof);

    }

    public function getTemplateName()
    {
        return "DSInternauteBundle:Admin/Lien:form.html.twig";
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
/* {# src/DS/InternauteBundleResources/views/Lien/form.html.twig #}*/
/* */
/* <h3>Formulaire de lien</h3>*/
/* */
/* <div class="well">*/
/*     <form method="post" {{ form_enctype(form) }}>*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" class="btn btn-primary">*/
/*     </form>*/
/* </div>*/
