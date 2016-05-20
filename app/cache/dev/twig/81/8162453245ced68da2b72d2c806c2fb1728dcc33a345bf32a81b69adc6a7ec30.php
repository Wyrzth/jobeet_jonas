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
        $__internal_07685327d1c83b37214655d876772b8d95e1d0d5ed7017b08eaa7a495f952dbc = $this->env->getExtension("native_profiler");
        $__internal_07685327d1c83b37214655d876772b8d95e1d0d5ed7017b08eaa7a495f952dbc->enter($__internal_07685327d1c83b37214655d876772b8d95e1d0d5ed7017b08eaa7a495f952dbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_07685327d1c83b37214655d876772b8d95e1d0d5ed7017b08eaa7a495f952dbc->leave($__internal_07685327d1c83b37214655d876772b8d95e1d0d5ed7017b08eaa7a495f952dbc_prof);

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
