<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_db13e548bd0f39a424c9fac980341014fce3ef95a0a00aeb364d0cdb58151b12 extends Twig_Template
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
        $__internal_93e1c3500960e4dff5a8721b218160bfde0da59f585340c271167d71bcc8bf21 = $this->env->getExtension("native_profiler");
        $__internal_93e1c3500960e4dff5a8721b218160bfde0da59f585340c271167d71bcc8bf21->enter($__internal_93e1c3500960e4dff5a8721b218160bfde0da59f585340c271167d71bcc8bf21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_93e1c3500960e4dff5a8721b218160bfde0da59f585340c271167d71bcc8bf21->leave($__internal_93e1c3500960e4dff5a8721b218160bfde0da59f585340c271167d71bcc8bf21_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
