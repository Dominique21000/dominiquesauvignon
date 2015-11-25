<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_a820446a919ef25d58b80f33f270f1e95e2971a1be27061c59d2fe1871cd1c5d extends Twig_Template
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
        $__internal_3c1b17292e6a9e049cf715e70a659ead2c70c33981e363394cac1f5abc17b0bd = $this->env->getExtension("native_profiler");
        $__internal_3c1b17292e6a9e049cf715e70a659ead2c70c33981e363394cac1f5abc17b0bd->enter($__internal_3c1b17292e6a9e049cf715e70a659ead2c70c33981e363394cac1f5abc17b0bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_3c1b17292e6a9e049cf715e70a659ead2c70c33981e363394cac1f5abc17b0bd->leave($__internal_3c1b17292e6a9e049cf715e70a659ead2c70c33981e363394cac1f5abc17b0bd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include 'TwigBundle:Exception:exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
