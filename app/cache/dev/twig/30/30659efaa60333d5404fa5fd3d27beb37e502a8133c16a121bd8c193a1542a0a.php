<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_66839b43c935fb5c16651937172e4e16baa0de97f5ae819d2c19f5795efdc1a7 extends Twig_Template
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
        $__internal_e2ddf08b4549bda9b4993de732a162ef25dde525a288baf6b27e6b19d1ebbbe5 = $this->env->getExtension("native_profiler");
        $__internal_e2ddf08b4549bda9b4993de732a162ef25dde525a288baf6b27e6b19d1ebbbe5->enter($__internal_e2ddf08b4549bda9b4993de732a162ef25dde525a288baf6b27e6b19d1ebbbe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_e2ddf08b4549bda9b4993de732a162ef25dde525a288baf6b27e6b19d1ebbbe5->leave($__internal_e2ddf08b4549bda9b4993de732a162ef25dde525a288baf6b27e6b19d1ebbbe5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */