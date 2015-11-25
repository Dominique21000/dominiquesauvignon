<?php

/* DSInternauteBundle:DS:cv.html.twig */
class __TwigTemplate_2012a772fa27900b5f4471c6eaf41d2b911e0886c2d84c7ab3de138fae62196d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'block_body' => array($this, 'block_block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0e6f39e1cb526bd6cfb3ffcdcd452ff9abda956e07bfc4644bde3c80274e3f69 = $this->env->getExtension("native_profiler");
        $__internal_0e6f39e1cb526bd6cfb3ffcdcd452ff9abda956e07bfc4644bde3c80274e3f69->enter($__internal_0e6f39e1cb526bd6cfb3ffcdcd452ff9abda956e07bfc4644bde3c80274e3f69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DSInternauteBundle:DS:cv.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('block_body', $context, $blocks);
        
        $__internal_0e6f39e1cb526bd6cfb3ffcdcd452ff9abda956e07bfc4644bde3c80274e3f69->leave($__internal_0e6f39e1cb526bd6cfb3ffcdcd452ff9abda956e07bfc4644bde3c80274e3f69_prof);

    }

    public function block_block_body($context, array $blocks = array())
    {
        $__internal_953d4be314427040709c8cd708e8e025c1c86e267dfeeb96e9da21051f40cc53 = $this->env->getExtension("native_profiler");
        $__internal_953d4be314427040709c8cd708e8e025c1c86e267dfeeb96e9da21051f40cc53->enter($__internal_953d4be314427040709c8cd708e8e025c1c86e267dfeeb96e9da21051f40cc53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_body"));

        // line 4
        echo "<object data=\"../docs/CV/DominiqueSAUVIGNON-DeveloppeurInformatique_CV.pdf\" type=\"application/pdf\" width=\"100%\" height=\"95%\">
    
</object>
<!--<p>Télécharger : <a href=\"../docs/CV/DominiqueSAUVIGNON-DeveloppeurInformatique_CV.pdf\">Mon CV</a></p>-->

<!--<META HTTP-EQUIV=\"Refresh\" CONTENT=\"0; URL=../docs/CV/DominiqueSAUVIGNON-DeveloppeurInformatique_CV.pdf\">-->

";
        
        $__internal_953d4be314427040709c8cd708e8e025c1c86e267dfeeb96e9da21051f40cc53->leave($__internal_953d4be314427040709c8cd708e8e025c1c86e267dfeeb96e9da21051f40cc53_prof);

    }

    public function getTemplateName()
    {
        return "DSInternauteBundle:DS:cv.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  38 => 4,  26 => 3,  23 => 2,);
    }
}
/* {# src/DS/InternauteBundle/Resources/views/DS/cv.html.twig #}*/
/* */
/* {% block block_body %}*/
/* <object data="../docs/CV/DominiqueSAUVIGNON-DeveloppeurInformatique_CV.pdf" type="application/pdf" width="100%" height="95%">*/
/*     */
/* </object>*/
/* <!--<p>Télécharger : <a href="../docs/CV/DominiqueSAUVIGNON-DeveloppeurInformatique_CV.pdf">Mon CV</a></p>-->*/
/* */
/* <!--<META HTTP-EQUIV="Refresh" CONTENT="0; URL=../docs/CV/DominiqueSAUVIGNON-DeveloppeurInformatique_CV.pdf">-->*/
/* */
/* {% endblock %}*/
