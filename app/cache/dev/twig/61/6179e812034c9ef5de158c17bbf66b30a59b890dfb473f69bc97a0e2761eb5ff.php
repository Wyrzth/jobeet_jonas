<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_2ab816540d22be26d6f0c10a8348460dc58a62c82a862a9fa73f1a5dc41c2779 extends Twig_Template
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
        $__internal_7015a11228d021046de1a10817b49661b45b0835a85ca390fb533147b2f5be3f = $this->env->getExtension("native_profiler");
        $__internal_7015a11228d021046de1a10817b49661b45b0835a85ca390fb533147b2f5be3f->enter($__internal_7015a11228d021046de1a10817b49661b45b0835a85ca390fb533147b2f5be3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_7015a11228d021046de1a10817b49661b45b0835a85ca390fb533147b2f5be3f->leave($__internal_7015a11228d021046de1a10817b49661b45b0835a85ca390fb533147b2f5be3f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
