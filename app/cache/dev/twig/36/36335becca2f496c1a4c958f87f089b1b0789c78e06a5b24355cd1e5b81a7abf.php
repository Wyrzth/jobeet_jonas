<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_8044fe0d0c52f35b87e511741602af707dac1c0704fe9a1dbb37095ad187aa27 extends Twig_Template
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
        $__internal_9b922e26634bd697a4a24f8b7faca2683e4145a2ccae4134d6519d36fe65b901 = $this->env->getExtension("native_profiler");
        $__internal_9b922e26634bd697a4a24f8b7faca2683e4145a2ccae4134d6519d36fe65b901->enter($__internal_9b922e26634bd697a4a24f8b7faca2683e4145a2ccae4134d6519d36fe65b901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_9b922e26634bd697a4a24f8b7faca2683e4145a2ccae4134d6519d36fe65b901->leave($__internal_9b922e26634bd697a4a24f8b7faca2683e4145a2ccae4134d6519d36fe65b901_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
