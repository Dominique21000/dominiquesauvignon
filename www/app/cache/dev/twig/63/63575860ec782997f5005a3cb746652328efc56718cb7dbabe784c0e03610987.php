<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_cfd34ddbd5e70a96bdf2bd710b37dc3f37323452e02d58b65d04d77c4d98f052 extends Twig_Template
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
        $__internal_bd7676ece7a6069a7f1f839d6a7418b26d9be10ef714d2859fac302ae2129a68 = $this->env->getExtension("native_profiler");
        $__internal_bd7676ece7a6069a7f1f839d6a7418b26d9be10ef714d2859fac302ae2129a68->enter($__internal_bd7676ece7a6069a7f1f839d6a7418b26d9be10ef714d2859fac302ae2129a68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_bd7676ece7a6069a7f1f839d6a7418b26d9be10ef714d2859fac302ae2129a68->leave($__internal_bd7676ece7a6069a7f1f839d6a7418b26d9be10ef714d2859fac302ae2129a68_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:error.xml.twig' %}*/
/* */
