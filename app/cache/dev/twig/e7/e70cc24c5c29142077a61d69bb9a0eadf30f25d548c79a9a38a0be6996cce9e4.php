<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_1665d0fc0a452f86ae98fe4900bc5e4feacfee23fd3f58facb6b5ce4bff56dce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9453f78b1043d524ab64834ca2adc801e02f1ce86f275a5e09280b4958558ed3 = $this->env->getExtension("native_profiler");
        $__internal_9453f78b1043d524ab64834ca2adc801e02f1ce86f275a5e09280b4958558ed3->enter($__internal_9453f78b1043d524ab64834ca2adc801e02f1ce86f275a5e09280b4958558ed3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9453f78b1043d524ab64834ca2adc801e02f1ce86f275a5e09280b4958558ed3->leave($__internal_9453f78b1043d524ab64834ca2adc801e02f1ce86f275a5e09280b4958558ed3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c8fb5097f8cb2bcf598b0297b5ed2efd2c81eddeb284a1af033b255370405f54 = $this->env->getExtension("native_profiler");
        $__internal_c8fb5097f8cb2bcf598b0297b5ed2efd2c81eddeb284a1af033b255370405f54->enter($__internal_c8fb5097f8cb2bcf598b0297b5ed2efd2c81eddeb284a1af033b255370405f54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c8fb5097f8cb2bcf598b0297b5ed2efd2c81eddeb284a1af033b255370405f54->leave($__internal_c8fb5097f8cb2bcf598b0297b5ed2efd2c81eddeb284a1af033b255370405f54_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d770f73e7722fe82ab121f499d8d15485f1ce270d021b29ac5653dc1b3e83f6e = $this->env->getExtension("native_profiler");
        $__internal_d770f73e7722fe82ab121f499d8d15485f1ce270d021b29ac5653dc1b3e83f6e->enter($__internal_d770f73e7722fe82ab121f499d8d15485f1ce270d021b29ac5653dc1b3e83f6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d770f73e7722fe82ab121f499d8d15485f1ce270d021b29ac5653dc1b3e83f6e->leave($__internal_d770f73e7722fe82ab121f499d8d15485f1ce270d021b29ac5653dc1b3e83f6e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3358ce32abb95a01794e83e48da2cae76eff31bc81e517de0eddaaa4276caccf = $this->env->getExtension("native_profiler");
        $__internal_3358ce32abb95a01794e83e48da2cae76eff31bc81e517de0eddaaa4276caccf->enter($__internal_3358ce32abb95a01794e83e48da2cae76eff31bc81e517de0eddaaa4276caccf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_3358ce32abb95a01794e83e48da2cae76eff31bc81e517de0eddaaa4276caccf->leave($__internal_3358ce32abb95a01794e83e48da2cae76eff31bc81e517de0eddaaa4276caccf_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
