<?php

/* ::base.html.twig */
class __TwigTemplate_c3dc34dedb8cd518edb35a1ce6dfeb6fd8b55b47d6d8713631e10d2b21bd19bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4ce422d435781b5f9e1f09d6b8bcb04191cc8a6e444a0f8cb6819b45c407f229 = $this->env->getExtension("native_profiler");
        $__internal_4ce422d435781b5f9e1f09d6b8bcb04191cc8a6e444a0f8cb6819b45c407f229->enter($__internal_4ce422d435781b5f9e1f09d6b8bcb04191cc8a6e444a0f8cb6819b45c407f229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_4ce422d435781b5f9e1f09d6b8bcb04191cc8a6e444a0f8cb6819b45c407f229->leave($__internal_4ce422d435781b5f9e1f09d6b8bcb04191cc8a6e444a0f8cb6819b45c407f229_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2b7e789c2c5f5b56dd4d08f15bd51eca75e787e3042c50e7e23b5a6fc8e59890 = $this->env->getExtension("native_profiler");
        $__internal_2b7e789c2c5f5b56dd4d08f15bd51eca75e787e3042c50e7e23b5a6fc8e59890->enter($__internal_2b7e789c2c5f5b56dd4d08f15bd51eca75e787e3042c50e7e23b5a6fc8e59890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_2b7e789c2c5f5b56dd4d08f15bd51eca75e787e3042c50e7e23b5a6fc8e59890->leave($__internal_2b7e789c2c5f5b56dd4d08f15bd51eca75e787e3042c50e7e23b5a6fc8e59890_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_479cae708065e12a09ba04c30cab90971b690a761323db500e34d3239d7d9f0b = $this->env->getExtension("native_profiler");
        $__internal_479cae708065e12a09ba04c30cab90971b690a761323db500e34d3239d7d9f0b->enter($__internal_479cae708065e12a09ba04c30cab90971b690a761323db500e34d3239d7d9f0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_479cae708065e12a09ba04c30cab90971b690a761323db500e34d3239d7d9f0b->leave($__internal_479cae708065e12a09ba04c30cab90971b690a761323db500e34d3239d7d9f0b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_d62a2463cb8ebde6221945bcc4f57204f66c0b3e53115ba3b73e0ec1aacab9c3 = $this->env->getExtension("native_profiler");
        $__internal_d62a2463cb8ebde6221945bcc4f57204f66c0b3e53115ba3b73e0ec1aacab9c3->enter($__internal_d62a2463cb8ebde6221945bcc4f57204f66c0b3e53115ba3b73e0ec1aacab9c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d62a2463cb8ebde6221945bcc4f57204f66c0b3e53115ba3b73e0ec1aacab9c3->leave($__internal_d62a2463cb8ebde6221945bcc4f57204f66c0b3e53115ba3b73e0ec1aacab9c3_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5a56f49779f5300f5fb0547a81ef9c34491bb1a8182eaf6da3ca1cd64dd6e7a3 = $this->env->getExtension("native_profiler");
        $__internal_5a56f49779f5300f5fb0547a81ef9c34491bb1a8182eaf6da3ca1cd64dd6e7a3->enter($__internal_5a56f49779f5300f5fb0547a81ef9c34491bb1a8182eaf6da3ca1cd64dd6e7a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5a56f49779f5300f5fb0547a81ef9c34491bb1a8182eaf6da3ca1cd64dd6e7a3->leave($__internal_5a56f49779f5300f5fb0547a81ef9c34491bb1a8182eaf6da3ca1cd64dd6e7a3_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
