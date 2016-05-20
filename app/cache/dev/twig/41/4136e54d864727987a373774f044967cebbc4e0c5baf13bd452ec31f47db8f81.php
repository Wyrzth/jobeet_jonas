<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_ac5eab82d4067ef33afa81a0849e338c2db63234687a39e052a92e3ae545d163 extends Twig_Template
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
        $__internal_18034d4fb7a4192e1158e0a7db25c6bc6629e941ab302a1327d2681b1a1ecfb3 = $this->env->getExtension("native_profiler");
        $__internal_18034d4fb7a4192e1158e0a7db25c6bc6629e941ab302a1327d2681b1a1ecfb3->enter($__internal_18034d4fb7a4192e1158e0a7db25c6bc6629e941ab302a1327d2681b1a1ecfb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_18034d4fb7a4192e1158e0a7db25c6bc6629e941ab302a1327d2681b1a1ecfb3->leave($__internal_18034d4fb7a4192e1158e0a7db25c6bc6629e941ab302a1327d2681b1a1ecfb3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
