<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_d3cc1de7f249fd68fc25a52359c1e3c075d5b46a48561c87074e00ae41c26ca2 extends Twig_Template
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
        $__internal_7726bc747f1bce062c5518532c6d9f8f26f8e022dff90f3dbd7a7687b03286c6 = $this->env->getExtension("native_profiler");
        $__internal_7726bc747f1bce062c5518532c6d9f8f26f8e022dff90f3dbd7a7687b03286c6->enter($__internal_7726bc747f1bce062c5518532c6d9f8f26f8e022dff90f3dbd7a7687b03286c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_7726bc747f1bce062c5518532c6d9f8f26f8e022dff90f3dbd7a7687b03286c6->leave($__internal_7726bc747f1bce062c5518532c6d9f8f26f8e022dff90f3dbd7a7687b03286c6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
