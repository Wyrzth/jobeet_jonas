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
        $__internal_904f48adb31d2f046c9548286cf7c6b0c3b8064645d98e18ee65fa3a0ed88aa9 = $this->env->getExtension("native_profiler");
        $__internal_904f48adb31d2f046c9548286cf7c6b0c3b8064645d98e18ee65fa3a0ed88aa9->enter($__internal_904f48adb31d2f046c9548286cf7c6b0c3b8064645d98e18ee65fa3a0ed88aa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_904f48adb31d2f046c9548286cf7c6b0c3b8064645d98e18ee65fa3a0ed88aa9->leave($__internal_904f48adb31d2f046c9548286cf7c6b0c3b8064645d98e18ee65fa3a0ed88aa9_prof);

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
