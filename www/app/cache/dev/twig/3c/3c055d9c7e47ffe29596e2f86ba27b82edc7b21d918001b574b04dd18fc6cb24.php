<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_ade322a709f9cea1617c91b407a76d5379fcf3af97d2e7955b407d06ef5ee998 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_0bcbbdecb923491c716df756b451d963f01dd0727ca8e5b30bf3846baa1bb523 = $this->env->getExtension("native_profiler");
        $__internal_0bcbbdecb923491c716df756b451d963f01dd0727ca8e5b30bf3846baa1bb523->enter($__internal_0bcbbdecb923491c716df756b451d963f01dd0727ca8e5b30bf3846baa1bb523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0bcbbdecb923491c716df756b451d963f01dd0727ca8e5b30bf3846baa1bb523->leave($__internal_0bcbbdecb923491c716df756b451d963f01dd0727ca8e5b30bf3846baa1bb523_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_918be46e737aaf5c834c91286a3161425070e5583015ccdc5cd2c21e38a19df0 = $this->env->getExtension("native_profiler");
        $__internal_918be46e737aaf5c834c91286a3161425070e5583015ccdc5cd2c21e38a19df0->enter($__internal_918be46e737aaf5c834c91286a3161425070e5583015ccdc5cd2c21e38a19df0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_918be46e737aaf5c834c91286a3161425070e5583015ccdc5cd2c21e38a19df0->leave($__internal_918be46e737aaf5c834c91286a3161425070e5583015ccdc5cd2c21e38a19df0_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d8b88565d3c7963a93778bdabca4196ac1d0e7c1cc845bf8c2fcc22a5af3465b = $this->env->getExtension("native_profiler");
        $__internal_d8b88565d3c7963a93778bdabca4196ac1d0e7c1cc845bf8c2fcc22a5af3465b->enter($__internal_d8b88565d3c7963a93778bdabca4196ac1d0e7c1cc845bf8c2fcc22a5af3465b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_d8b88565d3c7963a93778bdabca4196ac1d0e7c1cc845bf8c2fcc22a5af3465b->leave($__internal_d8b88565d3c7963a93778bdabca4196ac1d0e7c1cc845bf8c2fcc22a5af3465b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
