<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_728b248ea678a52950dc9c5675f9175fd965c01aecc23264d61777a5fcac36af extends Twig_Template
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
        $__internal_321509ff27d0cbcb1ee0e28cdc4396dc8af7ede2881ebfb7b23750efb26abdc7 = $this->env->getExtension("native_profiler");
        $__internal_321509ff27d0cbcb1ee0e28cdc4396dc8af7ede2881ebfb7b23750efb26abdc7->enter($__internal_321509ff27d0cbcb1ee0e28cdc4396dc8af7ede2881ebfb7b23750efb26abdc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_321509ff27d0cbcb1ee0e28cdc4396dc8af7ede2881ebfb7b23750efb26abdc7->leave($__internal_321509ff27d0cbcb1ee0e28cdc4396dc8af7ede2881ebfb7b23750efb26abdc7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
