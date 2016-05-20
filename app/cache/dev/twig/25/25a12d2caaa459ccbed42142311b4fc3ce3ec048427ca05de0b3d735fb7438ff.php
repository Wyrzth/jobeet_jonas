<?php

/* ::base.html.twig */
class __TwigTemplate_585642a3d98d0d4956644e115203cc4785a28fd34c1b37a7edb04f1e43d800c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_09b18431204ce92166ff4aef38b0cd4fec327940743f11bea1568dab2094fef7 = $this->env->getExtension("native_profiler");
        $__internal_09b18431204ce92166ff4aef38b0cd4fec327940743f11bea1568dab2094fef7->enter($__internal_09b18431204ce92166ff4aef38b0cd4fec327940743f11bea1568dab2094fef7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_09b18431204ce92166ff4aef38b0cd4fec327940743f11bea1568dab2094fef7->leave($__internal_09b18431204ce92166ff4aef38b0cd4fec327940743f11bea1568dab2094fef7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_13f3889c1e17a435b5dd96bdb53d5b8f04f1520ad4a2041d4dc6af2c74890ae8 = $this->env->getExtension("native_profiler");
        $__internal_13f3889c1e17a435b5dd96bdb53d5b8f04f1520ad4a2041d4dc6af2c74890ae8->enter($__internal_13f3889c1e17a435b5dd96bdb53d5b8f04f1520ad4a2041d4dc6af2c74890ae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_13f3889c1e17a435b5dd96bdb53d5b8f04f1520ad4a2041d4dc6af2c74890ae8->leave($__internal_13f3889c1e17a435b5dd96bdb53d5b8f04f1520ad4a2041d4dc6af2c74890ae8_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_40f978deeb73af80dc50356d915fe331397b7fe73094d07bd5ffae23d3a989b3 = $this->env->getExtension("native_profiler");
        $__internal_40f978deeb73af80dc50356d915fe331397b7fe73094d07bd5ffae23d3a989b3->enter($__internal_40f978deeb73af80dc50356d915fe331397b7fe73094d07bd5ffae23d3a989b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_40f978deeb73af80dc50356d915fe331397b7fe73094d07bd5ffae23d3a989b3->leave($__internal_40f978deeb73af80dc50356d915fe331397b7fe73094d07bd5ffae23d3a989b3_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_5fb035a7ee2ca3192dbf6147154d0f1dadb005d3f6d3e9077b3f3adf50252ae3 = $this->env->getExtension("native_profiler");
        $__internal_5fb035a7ee2ca3192dbf6147154d0f1dadb005d3f6d3e9077b3f3adf50252ae3->enter($__internal_5fb035a7ee2ca3192dbf6147154d0f1dadb005d3f6d3e9077b3f3adf50252ae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5fb035a7ee2ca3192dbf6147154d0f1dadb005d3f6d3e9077b3f3adf50252ae3->leave($__internal_5fb035a7ee2ca3192dbf6147154d0f1dadb005d3f6d3e9077b3f3adf50252ae3_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a197f1a8219409f1d6c7f991869ed8eae07508eaf1300011cc9b947ec5fd03c4 = $this->env->getExtension("native_profiler");
        $__internal_a197f1a8219409f1d6c7f991869ed8eae07508eaf1300011cc9b947ec5fd03c4->enter($__internal_a197f1a8219409f1d6c7f991869ed8eae07508eaf1300011cc9b947ec5fd03c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a197f1a8219409f1d6c7f991869ed8eae07508eaf1300011cc9b947ec5fd03c4->leave($__internal_a197f1a8219409f1d6c7f991869ed8eae07508eaf1300011cc9b947ec5fd03c4_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
