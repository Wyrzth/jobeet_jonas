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
        $__internal_06bf344af0e6f62bd80e41db4163ff9d9d8daad8355235cba1c2da7d47d8ba56 = $this->env->getExtension("native_profiler");
        $__internal_06bf344af0e6f62bd80e41db4163ff9d9d8daad8355235cba1c2da7d47d8ba56->enter($__internal_06bf344af0e6f62bd80e41db4163ff9d9d8daad8355235cba1c2da7d47d8ba56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_06bf344af0e6f62bd80e41db4163ff9d9d8daad8355235cba1c2da7d47d8ba56->leave($__internal_06bf344af0e6f62bd80e41db4163ff9d9d8daad8355235cba1c2da7d47d8ba56_prof);

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
