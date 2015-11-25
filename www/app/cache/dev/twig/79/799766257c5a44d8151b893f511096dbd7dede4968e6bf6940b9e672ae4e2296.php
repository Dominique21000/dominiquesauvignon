<?php

/* DSInternauteBundle:DS:index.html.twig */
class __TwigTemplate_dd051a71184ba71f02fc80f0aecdb2edfffc53090a10b1e61f0ddd1413aa336f extends Twig_Template
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
        $__internal_f89ad23fda3d465fbe71f0009966cd88ad7fc66d0834e09af5355de75df0b1b9 = $this->env->getExtension("native_profiler");
        $__internal_f89ad23fda3d465fbe71f0009966cd88ad7fc66d0834e09af5355de75df0b1b9->enter($__internal_f89ad23fda3d465fbe71f0009966cd88ad7fc66d0834e09af5355de75df0b1b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DSInternauteBundle:DS:index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">\t
\t\t<title>Hello ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context[" name"]) ? $context[" name"] : $this->getContext($context, " name")), "html", null, true);
        echo "</title>
\t</head>
\t<body>
\t\t<h1>Hello ";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!</h1>
\t</body>
</html>";
        
        $__internal_f89ad23fda3d465fbe71f0009966cd88ad7fc66d0834e09af5355de75df0b1b9->leave($__internal_f89ad23fda3d465fbe71f0009966cd88ad7fc66d0834e09af5355de75df0b1b9_prof);

    }

    public function getTemplateName()
    {
        return "DSInternauteBundle:DS:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 8,  28 => 5,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* 	<head>*/
/* 		<meta charset="UTF-8">	*/
/* 		<title>Hello {{ name}}</title>*/
/* 	</head>*/
/* 	<body>*/
/* 		<h1>Hello {{ name }}!</h1>*/
/* 	</body>*/
/* </html>*/
