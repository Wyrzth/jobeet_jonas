<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_d0a46fddd88ada0d5f77449ab1a48644814566474d7eb8820da8fab9c611d08c extends Twig_Template
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
        $__internal_074eeaab06af3efc225cad6af6fecb73708f02bbcf21739c0b340a9273c37e51 = $this->env->getExtension("native_profiler");
        $__internal_074eeaab06af3efc225cad6af6fecb73708f02bbcf21739c0b340a9273c37e51->enter($__internal_074eeaab06af3efc225cad6af6fecb73708f02bbcf21739c0b340a9273c37e51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_074eeaab06af3efc225cad6af6fecb73708f02bbcf21739c0b340a9273c37e51->leave($__internal_074eeaab06af3efc225cad6af6fecb73708f02bbcf21739c0b340a9273c37e51_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
