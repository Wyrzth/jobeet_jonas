<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_e28ff0348411c8fcb606e7b2c449685298e6c417160cf706cda6ab0132211c78 extends Twig_Template
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
        $__internal_970401bb7111a949c9c0046a0474b24e1daf646b9e45bcbd078f0d47fdbb0997 = $this->env->getExtension("native_profiler");
        $__internal_970401bb7111a949c9c0046a0474b24e1daf646b9e45bcbd078f0d47fdbb0997->enter($__internal_970401bb7111a949c9c0046a0474b24e1daf646b9e45bcbd078f0d47fdbb0997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_970401bb7111a949c9c0046a0474b24e1daf646b9e45bcbd078f0d47fdbb0997->leave($__internal_970401bb7111a949c9c0046a0474b24e1daf646b9e45bcbd078f0d47fdbb0997_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
