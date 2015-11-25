<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_f7971c3c3ac3ba90da85a8fbc856024321bda3e2d254e33dcb154c3f806deecb extends Twig_Template
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
        $__internal_3d417d479c851cc30f6342e14e042ab8c24951eee9d5d9ef9092fb619347f58c = $this->env->getExtension("native_profiler");
        $__internal_3d417d479c851cc30f6342e14e042ab8c24951eee9d5d9ef9092fb619347f58c->enter($__internal_3d417d479c851cc30f6342e14e042ab8c24951eee9d5d9ef9092fb619347f58c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_3d417d479c851cc30f6342e14e042ab8c24951eee9d5d9ef9092fb619347f58c->leave($__internal_3d417d479c851cc30f6342e14e042ab8c24951eee9d5d9ef9092fb619347f58c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
