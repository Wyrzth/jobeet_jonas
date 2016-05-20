<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_71b7e3b0d68388f011f159eda209c0397859fdb7dee7cdf222ab935a7b9ec7c6 extends Twig_Template
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
        $__internal_f457d4d9e84ed7948dcb8bc0d4ddf09109cd9de7ed24bf636a82a20df259006e = $this->env->getExtension("native_profiler");
        $__internal_f457d4d9e84ed7948dcb8bc0d4ddf09109cd9de7ed24bf636a82a20df259006e->enter($__internal_f457d4d9e84ed7948dcb8bc0d4ddf09109cd9de7ed24bf636a82a20df259006e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_f457d4d9e84ed7948dcb8bc0d4ddf09109cd9de7ed24bf636a82a20df259006e->leave($__internal_f457d4d9e84ed7948dcb8bc0d4ddf09109cd9de7ed24bf636a82a20df259006e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
