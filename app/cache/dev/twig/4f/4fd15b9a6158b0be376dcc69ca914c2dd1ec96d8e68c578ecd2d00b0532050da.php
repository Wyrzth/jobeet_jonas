<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_01d0f7ad092f9f861a7609f17964963f084feb48abdd67c7f0692dc165dd4c72 extends Twig_Template
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
        $__internal_0d2b1ad1bf29f59a90239dd74b4c309b168abf45e7588ed3ac8c60a2fb8dfb2c = $this->env->getExtension("native_profiler");
        $__internal_0d2b1ad1bf29f59a90239dd74b4c309b168abf45e7588ed3ac8c60a2fb8dfb2c->enter($__internal_0d2b1ad1bf29f59a90239dd74b4c309b168abf45e7588ed3ac8c60a2fb8dfb2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_0d2b1ad1bf29f59a90239dd74b4c309b168abf45e7588ed3ac8c60a2fb8dfb2c->leave($__internal_0d2b1ad1bf29f59a90239dd74b4c309b168abf45e7588ed3ac8c60a2fb8dfb2c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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