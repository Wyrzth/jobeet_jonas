<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_95aae3ac5d3f8fd862724fef812ad394f2c731f38fa1d1196b46be8ddb30078f extends Twig_Template
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
        $__internal_357e5f3e1d8c408192f5a376c5f64a672464ff27a12ce01d4774aa09e0b5127c = $this->env->getExtension("native_profiler");
        $__internal_357e5f3e1d8c408192f5a376c5f64a672464ff27a12ce01d4774aa09e0b5127c->enter($__internal_357e5f3e1d8c408192f5a376c5f64a672464ff27a12ce01d4774aa09e0b5127c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_357e5f3e1d8c408192f5a376c5f64a672464ff27a12ce01d4774aa09e0b5127c->leave($__internal_357e5f3e1d8c408192f5a376c5f64a672464ff27a12ce01d4774aa09e0b5127c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
