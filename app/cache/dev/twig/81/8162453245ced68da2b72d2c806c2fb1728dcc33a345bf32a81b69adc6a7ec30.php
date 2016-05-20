<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_c23ee9897d005c2ade5b99242f59aca1f386ee6836b8bffffbddcb490510279f extends Twig_Template
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
        $__internal_48da7e1603d6fdde8356fbfc85cb95d2fdbe907b86af6198d384e04aa504fd3f = $this->env->getExtension("native_profiler");
        $__internal_48da7e1603d6fdde8356fbfc85cb95d2fdbe907b86af6198d384e04aa504fd3f->enter($__internal_48da7e1603d6fdde8356fbfc85cb95d2fdbe907b86af6198d384e04aa504fd3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_48da7e1603d6fdde8356fbfc85cb95d2fdbe907b86af6198d384e04aa504fd3f->leave($__internal_48da7e1603d6fdde8356fbfc85cb95d2fdbe907b86af6198d384e04aa504fd3f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
