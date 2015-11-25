<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_e1785540d596e349b757d7075387e8fdcee927021e75768b65173f51a15a4c0e extends Twig_Template
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
        $__internal_ce0cc2013d720fd72e0dafcb1135595cf0b0b3da1b4402445f718fb0990f28ab = $this->env->getExtension("native_profiler");
        $__internal_ce0cc2013d720fd72e0dafcb1135595cf0b0b3da1b4402445f718fb0990f28ab->enter($__internal_ce0cc2013d720fd72e0dafcb1135595cf0b0b3da1b4402445f718fb0990f28ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_ce0cc2013d720fd72e0dafcb1135595cf0b0b3da1b4402445f718fb0990f28ab->leave($__internal_ce0cc2013d720fd72e0dafcb1135595cf0b0b3da1b4402445f718fb0990f28ab_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
