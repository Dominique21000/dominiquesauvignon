<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_a11a05745fbab180ceb09ad91fdd7811507ab2c1caa920909471308ad01d9d86 extends Twig_Template
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
        $__internal_597a382a5801c8f367d9ec17f55a1815d17acf6d26f90220f9a972efd4bd023a = $this->env->getExtension("native_profiler");
        $__internal_597a382a5801c8f367d9ec17f55a1815d17acf6d26f90220f9a972efd4bd023a->enter($__internal_597a382a5801c8f367d9ec17f55a1815d17acf6d26f90220f9a972efd4bd023a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_597a382a5801c8f367d9ec17f55a1815d17acf6d26f90220f9a972efd4bd023a->leave($__internal_597a382a5801c8f367d9ec17f55a1815d17acf6d26f90220f9a972efd4bd023a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:exception.xml.twig' with { 'exception': exception } %}*/
/* */
