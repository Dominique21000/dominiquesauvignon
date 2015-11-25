<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_92a8e74c70e2b485987046cc1a10ad8619a752ac5336718ba2c7ca78bd00b1ac extends Twig_Template
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
        $__internal_36d0e8750afdb82d115682b4f7c6f17d0f3a1befeaa3aa4c773185a1b0b02e43 = $this->env->getExtension("native_profiler");
        $__internal_36d0e8750afdb82d115682b4f7c6f17d0f3a1befeaa3aa4c773185a1b0b02e43->enter($__internal_36d0e8750afdb82d115682b4f7c6f17d0f3a1befeaa3aa4c773185a1b0b02e43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_36d0e8750afdb82d115682b4f7c6f17d0f3a1befeaa3aa4c773185a1b0b02e43->leave($__internal_36d0e8750afdb82d115682b4f7c6f17d0f3a1befeaa3aa4c773185a1b0b02e43_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
