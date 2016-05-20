<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_0581c8a24be4ae6b9643a4818a6d221cd4f0a3764b2b47412c026d90901a3534 extends Twig_Template
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
        $__internal_708835345f07461debeca2d24d6a324ddf1f18c41be73f9738d648592d1239a1 = $this->env->getExtension("native_profiler");
        $__internal_708835345f07461debeca2d24d6a324ddf1f18c41be73f9738d648592d1239a1->enter($__internal_708835345f07461debeca2d24d6a324ddf1f18c41be73f9738d648592d1239a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_708835345f07461debeca2d24d6a324ddf1f18c41be73f9738d648592d1239a1->leave($__internal_708835345f07461debeca2d24d6a324ddf1f18c41be73f9738d648592d1239a1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
