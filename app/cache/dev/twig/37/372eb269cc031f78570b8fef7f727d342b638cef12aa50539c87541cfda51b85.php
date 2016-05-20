<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_867e30fdf23143e9e97456874386cc95e8801b110f700448c69e677a59546d37 extends Twig_Template
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
        $__internal_1da6fd104503a37dffa6572c4db073953e56c98c127ce8ef60347c281ac01a0e = $this->env->getExtension("native_profiler");
        $__internal_1da6fd104503a37dffa6572c4db073953e56c98c127ce8ef60347c281ac01a0e->enter($__internal_1da6fd104503a37dffa6572c4db073953e56c98c127ce8ef60347c281ac01a0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_1da6fd104503a37dffa6572c4db073953e56c98c127ce8ef60347c281ac01a0e->leave($__internal_1da6fd104503a37dffa6572c4db073953e56c98c127ce8ef60347c281ac01a0e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
