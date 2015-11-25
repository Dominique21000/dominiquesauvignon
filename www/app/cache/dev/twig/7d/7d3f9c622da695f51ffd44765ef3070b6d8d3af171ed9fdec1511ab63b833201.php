<?php

/* DSInternauteBundle:Admin/Lien:add.html.twig */
class __TwigTemplate_d22d6824f0f4c864aee905993d346a52a3d21adc9beec4672666ce3bd4b37eb7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("DSInternauteBundle::Admin/layout.html.twig", "DSInternauteBundle:Admin/Lien:add.html.twig", 3);
        $this->blocks = array(
            'donnees' => array($this, 'block_donnees'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DSInternauteBundle::Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ff6bda4cfef36c6bb59600a5c8006b82c8008490c14db6173d6c5ee89447a13d = $this->env->getExtension("native_profiler");
        $__internal_ff6bda4cfef36c6bb59600a5c8006b82c8008490c14db6173d6c5ee89447a13d->enter($__internal_ff6bda4cfef36c6bb59600a5c8006b82c8008490c14db6173d6c5ee89447a13d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DSInternauteBundle:Admin/Lien:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff6bda4cfef36c6bb59600a5c8006b82c8008490c14db6173d6c5ee89447a13d->leave($__internal_ff6bda4cfef36c6bb59600a5c8006b82c8008490c14db6173d6c5ee89447a13d_prof);

    }

    // line 5
    public function block_donnees($context, array $blocks = array())
    {
        $__internal_fa90af9f20583621aab497512b613262fd0a06341e0dea0be689ee07f412cdfe = $this->env->getExtension("native_profiler");
        $__internal_fa90af9f20583621aab497512b613262fd0a06341e0dea0be689ee07f412cdfe->enter($__internal_fa90af9f20583621aab497512b613262fd0a06341e0dea0be689ee07f412cdfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "donnees"));

        // line 6
        echo "    ";
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_fa90af9f20583621aab497512b613262fd0a06341e0dea0be689ee07f412cdfe->leave($__internal_fa90af9f20583621aab497512b613262fd0a06341e0dea0be689ee07f412cdfe_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_f5f9d8188a278f057e50fa824afc3b75fd293c3d702e8d3eee07884985122ad9 = $this->env->getExtension("native_profiler");
        $__internal_f5f9d8188a278f057e50fa824afc3b75fd293c3d702e8d3eee07884985122ad9->enter($__internal_f5f9d8188a278f057e50fa824afc3b75fd293c3d702e8d3eee07884985122ad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        <h2>Ajouter un lien</h2>
            ";
        // line 9
        $this->loadTemplate("DSInternauteBundle:Admin/Lien:form.html.twig", "DSInternauteBundle:Admin/Lien:add.html.twig", 9)->display($context);
        // line 10
        echo "    ";
        
        $__internal_f5f9d8188a278f057e50fa824afc3b75fd293c3d702e8d3eee07884985122ad9->leave($__internal_f5f9d8188a278f057e50fa824afc3b75fd293c3d702e8d3eee07884985122ad9_prof);

    }

    public function getTemplateName()
    {
        return "DSInternauteBundle:Admin/Lien:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 10,  60 => 9,  54 => 7,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/DS/InternauteBundle/Resources/views/Lien/add.html.twig #}*/
/* */
/* {% extends "DSInternauteBundle::Admin/layout.html.twig" %}*/
/* */
/* {%  block donnees %}*/
/*     {% block body %}*/
/*         {{ form_errors(form) }}*/
/*         <h2>Ajouter un lien</h2>*/
/*             {% include "DSInternauteBundle:Admin/Lien:form.html.twig" %}*/
/*     {% endblock %}*/
/* {% endblock %}*/
/* */
