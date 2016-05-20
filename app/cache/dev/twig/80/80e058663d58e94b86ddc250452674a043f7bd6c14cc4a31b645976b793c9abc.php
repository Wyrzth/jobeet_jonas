<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_02f38a904938059560aebb0edcef40fe8134876a6ec7d08df101e13a73ca5155 extends Twig_Template
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
        $__internal_e21c4380920d748e8991a245ab51ab9f0eadd19dfd0b65ea8eb66cecec5975b5 = $this->env->getExtension("native_profiler");
        $__internal_e21c4380920d748e8991a245ab51ab9f0eadd19dfd0b65ea8eb66cecec5975b5->enter($__internal_e21c4380920d748e8991a245ab51ab9f0eadd19dfd0b65ea8eb66cecec5975b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

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
        
        $__internal_e21c4380920d748e8991a245ab51ab9f0eadd19dfd0b65ea8eb66cecec5975b5->leave($__internal_e21c4380920d748e8991a245ab51ab9f0eadd19dfd0b65ea8eb66cecec5975b5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
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
