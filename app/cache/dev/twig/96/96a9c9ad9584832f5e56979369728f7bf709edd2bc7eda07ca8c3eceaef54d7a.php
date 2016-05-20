<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_64075614b1c96cb0cd976ecb70af01d1d254d7ca65065db05de2884a6463b71c extends Twig_Template
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
        $__internal_25d9d2e9c3065b2dd03ba535d887970e6e7c8365e71b7a261a5037ce96517452 = $this->env->getExtension("native_profiler");
        $__internal_25d9d2e9c3065b2dd03ba535d887970e6e7c8365e71b7a261a5037ce96517452->enter($__internal_25d9d2e9c3065b2dd03ba535d887970e6e7c8365e71b7a261a5037ce96517452_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_25d9d2e9c3065b2dd03ba535d887970e6e7c8365e71b7a261a5037ce96517452->leave($__internal_25d9d2e9c3065b2dd03ba535d887970e6e7c8365e71b7a261a5037ce96517452_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
