<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_489a2a63fa994276d2fdbe5147f2a270838e12ecfa8d7bf25ac3941100f05886 extends Twig_Template
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
        $__internal_283c74c7dbcbf790864484d3439bf91bcd854d511f1c41cad3408ff2abd2c910 = $this->env->getExtension("native_profiler");
        $__internal_283c74c7dbcbf790864484d3439bf91bcd854d511f1c41cad3408ff2abd2c910->enter($__internal_283c74c7dbcbf790864484d3439bf91bcd854d511f1c41cad3408ff2abd2c910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_283c74c7dbcbf790864484d3439bf91bcd854d511f1c41cad3408ff2abd2c910->leave($__internal_283c74c7dbcbf790864484d3439bf91bcd854d511f1c41cad3408ff2abd2c910_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
