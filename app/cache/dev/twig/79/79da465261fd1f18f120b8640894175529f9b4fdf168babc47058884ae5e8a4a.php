<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_2b345f53d45fc2db7e30e759f507506d8210507fda14a1d87b4fc94f64f0033b extends Twig_Template
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
        $__internal_3f41ef9710100fe3fe5eddc127434f2533af50e73be8bdb599cdf64ea7c93074 = $this->env->getExtension("native_profiler");
        $__internal_3f41ef9710100fe3fe5eddc127434f2533af50e73be8bdb599cdf64ea7c93074->enter($__internal_3f41ef9710100fe3fe5eddc127434f2533af50e73be8bdb599cdf64ea7c93074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_3f41ef9710100fe3fe5eddc127434f2533af50e73be8bdb599cdf64ea7c93074->leave($__internal_3f41ef9710100fe3fe5eddc127434f2533af50e73be8bdb599cdf64ea7c93074_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
