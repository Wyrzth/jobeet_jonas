<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_8c149959baa61ac8356a890ec00a14a47a235d631175426cd66134e792b294c1 extends Twig_Template
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
        $__internal_8f3e21346563706770a8eecf946ecb88f8936ee68f90e0df0f609ce3f5e77d14 = $this->env->getExtension("native_profiler");
        $__internal_8f3e21346563706770a8eecf946ecb88f8936ee68f90e0df0f609ce3f5e77d14->enter($__internal_8f3e21346563706770a8eecf946ecb88f8936ee68f90e0df0f609ce3f5e77d14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_8f3e21346563706770a8eecf946ecb88f8936ee68f90e0df0f609ce3f5e77d14->leave($__internal_8f3e21346563706770a8eecf946ecb88f8936ee68f90e0df0f609ce3f5e77d14_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
