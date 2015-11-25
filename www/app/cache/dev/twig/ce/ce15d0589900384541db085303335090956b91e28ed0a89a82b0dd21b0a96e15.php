<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_0ffa44006e92d253965876b7542befb7108ddfb87a81c37bc12573d43dcb2128 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d0e30e202f2c7c66e79d4258734672715ffd9a3a17d043c989b98d01082024f5 = $this->env->getExtension("native_profiler");
        $__internal_d0e30e202f2c7c66e79d4258734672715ffd9a3a17d043c989b98d01082024f5->enter($__internal_d0e30e202f2c7c66e79d4258734672715ffd9a3a17d043c989b98d01082024f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_d0e30e202f2c7c66e79d4258734672715ffd9a3a17d043c989b98d01082024f5->leave($__internal_d0e30e202f2c7c66e79d4258734672715ffd9a3a17d043c989b98d01082024f5_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_e9e45d43c44b7e563ac390e500205f63456b7a858f4f32608e9260dfa8837fb3 = $this->env->getExtension("native_profiler");
        $__internal_e9e45d43c44b7e563ac390e500205f63456b7a858f4f32608e9260dfa8837fb3->enter($__internal_e9e45d43c44b7e563ac390e500205f63456b7a858f4f32608e9260dfa8837fb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_e9e45d43c44b7e563ac390e500205f63456b7a858f4f32608e9260dfa8837fb3->leave($__internal_e9e45d43c44b7e563ac390e500205f63456b7a858f4f32608e9260dfa8837fb3_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
