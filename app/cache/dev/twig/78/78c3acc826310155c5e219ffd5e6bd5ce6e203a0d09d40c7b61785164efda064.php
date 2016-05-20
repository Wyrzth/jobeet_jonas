<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_e1b3437de9820b23831361d4474d3fa41994b6e6dc7052bfdfb543234db95fa6 extends Twig_Template
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
        $__internal_2ada578d27b4e94c3a0d9b0298d8fe9c1ced36d3cf18d09fdca983c128b31630 = $this->env->getExtension("native_profiler");
        $__internal_2ada578d27b4e94c3a0d9b0298d8fe9c1ced36d3cf18d09fdca983c128b31630->enter($__internal_2ada578d27b4e94c3a0d9b0298d8fe9c1ced36d3cf18d09fdca983c128b31630_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_2ada578d27b4e94c3a0d9b0298d8fe9c1ced36d3cf18d09fdca983c128b31630->leave($__internal_2ada578d27b4e94c3a0d9b0298d8fe9c1ced36d3cf18d09fdca983c128b31630_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
