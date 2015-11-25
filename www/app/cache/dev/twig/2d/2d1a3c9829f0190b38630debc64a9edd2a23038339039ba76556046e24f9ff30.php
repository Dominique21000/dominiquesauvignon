<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_84eabd2a8955bd8797a1ba7803de80713b0d6baf83967d2625acb0e3b728eeec extends Twig_Template
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
        $__internal_63a146bcbb104b8b3cad79589d0bfc3cbd6ffdc54980e762b185541213f8eb15 = $this->env->getExtension("native_profiler");
        $__internal_63a146bcbb104b8b3cad79589d0bfc3cbd6ffdc54980e762b185541213f8eb15->enter($__internal_63a146bcbb104b8b3cad79589d0bfc3cbd6ffdc54980e762b185541213f8eb15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_63a146bcbb104b8b3cad79589d0bfc3cbd6ffdc54980e762b185541213f8eb15->leave($__internal_63a146bcbb104b8b3cad79589d0bfc3cbd6ffdc54980e762b185541213f8eb15_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */
