<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_4c4537de70476732776503e3a5381970859fcee56cf6c97007f1b7bc9b333e6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_61894731fd459e40be9d93525fae27cbdb87fc4a69059209c6fb26d91f83452f = $this->env->getExtension("native_profiler");
        $__internal_61894731fd459e40be9d93525fae27cbdb87fc4a69059209c6fb26d91f83452f->enter($__internal_61894731fd459e40be9d93525fae27cbdb87fc4a69059209c6fb26d91f83452f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61894731fd459e40be9d93525fae27cbdb87fc4a69059209c6fb26d91f83452f->leave($__internal_61894731fd459e40be9d93525fae27cbdb87fc4a69059209c6fb26d91f83452f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0706073c25753f512225b0fceb6b995ee2f9cb89f1f13f8df79e4cdfb88cea41 = $this->env->getExtension("native_profiler");
        $__internal_0706073c25753f512225b0fceb6b995ee2f9cb89f1f13f8df79e4cdfb88cea41->enter($__internal_0706073c25753f512225b0fceb6b995ee2f9cb89f1f13f8df79e4cdfb88cea41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0706073c25753f512225b0fceb6b995ee2f9cb89f1f13f8df79e4cdfb88cea41->leave($__internal_0706073c25753f512225b0fceb6b995ee2f9cb89f1f13f8df79e4cdfb88cea41_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_54400adc0b01cfcc24e1220f5b3b4a09c3fffc38af7b4c37d7ca47c627205b94 = $this->env->getExtension("native_profiler");
        $__internal_54400adc0b01cfcc24e1220f5b3b4a09c3fffc38af7b4c37d7ca47c627205b94->enter($__internal_54400adc0b01cfcc24e1220f5b3b4a09c3fffc38af7b4c37d7ca47c627205b94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_54400adc0b01cfcc24e1220f5b3b4a09c3fffc38af7b4c37d7ca47c627205b94->leave($__internal_54400adc0b01cfcc24e1220f5b3b4a09c3fffc38af7b4c37d7ca47c627205b94_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_26c9c89cf340e3cf5f7a52020847f9414fe2854151554b3bbb517cb5e4a6ae74 = $this->env->getExtension("native_profiler");
        $__internal_26c9c89cf340e3cf5f7a52020847f9414fe2854151554b3bbb517cb5e4a6ae74->enter($__internal_26c9c89cf340e3cf5f7a52020847f9414fe2854151554b3bbb517cb5e4a6ae74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_26c9c89cf340e3cf5f7a52020847f9414fe2854151554b3bbb517cb5e4a6ae74->leave($__internal_26c9c89cf340e3cf5f7a52020847f9414fe2854151554b3bbb517cb5e4a6ae74_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
