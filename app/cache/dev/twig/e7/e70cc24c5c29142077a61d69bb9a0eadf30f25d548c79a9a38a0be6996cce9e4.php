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
        $__internal_d16456467111e91ba420f1d0b828b41dba778d7087e11aaec1c7e41f141c95b0 = $this->env->getExtension("native_profiler");
        $__internal_d16456467111e91ba420f1d0b828b41dba778d7087e11aaec1c7e41f141c95b0->enter($__internal_d16456467111e91ba420f1d0b828b41dba778d7087e11aaec1c7e41f141c95b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d16456467111e91ba420f1d0b828b41dba778d7087e11aaec1c7e41f141c95b0->leave($__internal_d16456467111e91ba420f1d0b828b41dba778d7087e11aaec1c7e41f141c95b0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8b8e2d1bdfb94bbb16a6d95b424a9858186ee6c65516ccc1056c221ebbb75ce5 = $this->env->getExtension("native_profiler");
        $__internal_8b8e2d1bdfb94bbb16a6d95b424a9858186ee6c65516ccc1056c221ebbb75ce5->enter($__internal_8b8e2d1bdfb94bbb16a6d95b424a9858186ee6c65516ccc1056c221ebbb75ce5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_8b8e2d1bdfb94bbb16a6d95b424a9858186ee6c65516ccc1056c221ebbb75ce5->leave($__internal_8b8e2d1bdfb94bbb16a6d95b424a9858186ee6c65516ccc1056c221ebbb75ce5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a7b1a4520838a222a0e4edf0263894a31f11f171f0efb4d117f90b0640e810b2 = $this->env->getExtension("native_profiler");
        $__internal_a7b1a4520838a222a0e4edf0263894a31f11f171f0efb4d117f90b0640e810b2->enter($__internal_a7b1a4520838a222a0e4edf0263894a31f11f171f0efb4d117f90b0640e810b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a7b1a4520838a222a0e4edf0263894a31f11f171f0efb4d117f90b0640e810b2->leave($__internal_a7b1a4520838a222a0e4edf0263894a31f11f171f0efb4d117f90b0640e810b2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3605471f53a49d5426f4f63a8d66e44ffcff964ccb306fa96c855349ad25b612 = $this->env->getExtension("native_profiler");
        $__internal_3605471f53a49d5426f4f63a8d66e44ffcff964ccb306fa96c855349ad25b612->enter($__internal_3605471f53a49d5426f4f63a8d66e44ffcff964ccb306fa96c855349ad25b612_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_3605471f53a49d5426f4f63a8d66e44ffcff964ccb306fa96c855349ad25b612->leave($__internal_3605471f53a49d5426f4f63a8d66e44ffcff964ccb306fa96c855349ad25b612_prof);

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
