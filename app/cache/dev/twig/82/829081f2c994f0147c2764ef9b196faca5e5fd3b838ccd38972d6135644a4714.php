<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_728b248ea678a52950dc9c5675f9175fd965c01aecc23264d61777a5fcac36af extends Twig_Template
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
        $__internal_dc8c84aa4623982bf7edd02731c7445f5cba512e22900a2f5a862af74b044d18 = $this->env->getExtension("native_profiler");
        $__internal_dc8c84aa4623982bf7edd02731c7445f5cba512e22900a2f5a862af74b044d18->enter($__internal_dc8c84aa4623982bf7edd02731c7445f5cba512e22900a2f5a862af74b044d18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_dc8c84aa4623982bf7edd02731c7445f5cba512e22900a2f5a862af74b044d18->leave($__internal_dc8c84aa4623982bf7edd02731c7445f5cba512e22900a2f5a862af74b044d18_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
