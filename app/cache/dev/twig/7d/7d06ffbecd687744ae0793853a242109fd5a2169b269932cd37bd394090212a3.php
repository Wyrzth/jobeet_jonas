<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_95aae3ac5d3f8fd862724fef812ad394f2c731f38fa1d1196b46be8ddb30078f extends Twig_Template
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
        $__internal_5dbe561264ed2f81e1ffbf8dc0be163a86fb8ce880570ffe7876a732c40c2c40 = $this->env->getExtension("native_profiler");
        $__internal_5dbe561264ed2f81e1ffbf8dc0be163a86fb8ce880570ffe7876a732c40c2c40->enter($__internal_5dbe561264ed2f81e1ffbf8dc0be163a86fb8ce880570ffe7876a732c40c2c40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_5dbe561264ed2f81e1ffbf8dc0be163a86fb8ce880570ffe7876a732c40c2c40->leave($__internal_5dbe561264ed2f81e1ffbf8dc0be163a86fb8ce880570ffe7876a732c40c2c40_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
