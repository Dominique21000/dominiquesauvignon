<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_fb53583e75ab10ed2c3516090c6345c1a26ff1f604fdb70149b399a72ca92946 extends Twig_Template
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
        $__internal_3be6c0d2b70c26003012e1fff1e6353a1a3f51556ac10672d971e5097f686e60 = $this->env->getExtension("native_profiler");
        $__internal_3be6c0d2b70c26003012e1fff1e6353a1a3f51556ac10672d971e5097f686e60->enter($__internal_3be6c0d2b70c26003012e1fff1e6353a1a3f51556ac10672d971e5097f686e60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_3be6c0d2b70c26003012e1fff1e6353a1a3f51556ac10672d971e5097f686e60->leave($__internal_3be6c0d2b70c26003012e1fff1e6353a1a3f51556ac10672d971e5097f686e60_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:error.xml.twig' %}*/
/* */
