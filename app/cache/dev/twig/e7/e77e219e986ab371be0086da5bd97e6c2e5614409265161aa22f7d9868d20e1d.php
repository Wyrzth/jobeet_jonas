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
        $__internal_6e447cd7cdb9e4ad60ef9651eed38083fbbc186496becacb79ccb653428e6268 = $this->env->getExtension("native_profiler");
        $__internal_6e447cd7cdb9e4ad60ef9651eed38083fbbc186496becacb79ccb653428e6268->enter($__internal_6e447cd7cdb9e4ad60ef9651eed38083fbbc186496becacb79ccb653428e6268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_6e447cd7cdb9e4ad60ef9651eed38083fbbc186496becacb79ccb653428e6268->leave($__internal_6e447cd7cdb9e4ad60ef9651eed38083fbbc186496becacb79ccb653428e6268_prof);

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
