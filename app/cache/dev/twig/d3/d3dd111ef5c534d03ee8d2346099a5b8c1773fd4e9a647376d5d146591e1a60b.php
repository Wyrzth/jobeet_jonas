<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_d85f5aad34849e590895bc621a3c1b02160fbbd4dda9b9ba54881b84775fe6c2 extends Twig_Template
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
        $__internal_bc45e7ec3e1bf0c70b0a86089eb4a4bf448d71249fe133a1cdc1f75172ce2a19 = $this->env->getExtension("native_profiler");
        $__internal_bc45e7ec3e1bf0c70b0a86089eb4a4bf448d71249fe133a1cdc1f75172ce2a19->enter($__internal_bc45e7ec3e1bf0c70b0a86089eb4a4bf448d71249fe133a1cdc1f75172ce2a19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_bc45e7ec3e1bf0c70b0a86089eb4a4bf448d71249fe133a1cdc1f75172ce2a19->leave($__internal_bc45e7ec3e1bf0c70b0a86089eb4a4bf448d71249fe133a1cdc1f75172ce2a19_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
