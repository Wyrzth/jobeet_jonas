<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_ef551a257d3c51dba2e00a9e0d2cd283f16d73f09b8189ee994aece7d20d258a extends Twig_Template
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
        $__internal_567728c8a1442726f1de2de0658a0d932f90b86563e78c445f99f0b5c3d96c94 = $this->env->getExtension("native_profiler");
        $__internal_567728c8a1442726f1de2de0658a0d932f90b86563e78c445f99f0b5c3d96c94->enter($__internal_567728c8a1442726f1de2de0658a0d932f90b86563e78c445f99f0b5c3d96c94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_567728c8a1442726f1de2de0658a0d932f90b86563e78c445f99f0b5c3d96c94->leave($__internal_567728c8a1442726f1de2de0658a0d932f90b86563e78c445f99f0b5c3d96c94_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
