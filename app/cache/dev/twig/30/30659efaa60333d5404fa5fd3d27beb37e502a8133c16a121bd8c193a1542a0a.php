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
        $__internal_68fa386675c39977ba049a48a2d930689cf8900ed1890b095f1ab485825108ab = $this->env->getExtension("native_profiler");
        $__internal_68fa386675c39977ba049a48a2d930689cf8900ed1890b095f1ab485825108ab->enter($__internal_68fa386675c39977ba049a48a2d930689cf8900ed1890b095f1ab485825108ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_68fa386675c39977ba049a48a2d930689cf8900ed1890b095f1ab485825108ab->leave($__internal_68fa386675c39977ba049a48a2d930689cf8900ed1890b095f1ab485825108ab_prof);

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
