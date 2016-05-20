<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_e28ff0348411c8fcb606e7b2c449685298e6c417160cf706cda6ab0132211c78 extends Twig_Template
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
        $__internal_be338248901a50772801683a75ec64467b4632914f86a45e8146f22d4163dc93 = $this->env->getExtension("native_profiler");
        $__internal_be338248901a50772801683a75ec64467b4632914f86a45e8146f22d4163dc93->enter($__internal_be338248901a50772801683a75ec64467b4632914f86a45e8146f22d4163dc93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_be338248901a50772801683a75ec64467b4632914f86a45e8146f22d4163dc93->leave($__internal_be338248901a50772801683a75ec64467b4632914f86a45e8146f22d4163dc93_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
