<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_5b8977ea3046c7467454228d3a13a1a253fb850d14bce7a0d3a49e2a17115cec extends Twig_Template
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
        $__internal_cbc7655c47402b8e00f600dd7c8c762354f784efd95f97dd685c07824a1219ab = $this->env->getExtension("native_profiler");
        $__internal_cbc7655c47402b8e00f600dd7c8c762354f784efd95f97dd685c07824a1219ab->enter($__internal_cbc7655c47402b8e00f600dd7c8c762354f784efd95f97dd685c07824a1219ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_cbc7655c47402b8e00f600dd7c8c762354f784efd95f97dd685c07824a1219ab->leave($__internal_cbc7655c47402b8e00f600dd7c8c762354f784efd95f97dd685c07824a1219ab_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
