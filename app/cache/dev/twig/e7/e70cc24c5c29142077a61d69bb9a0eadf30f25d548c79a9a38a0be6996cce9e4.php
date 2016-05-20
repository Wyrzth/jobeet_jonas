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
        $__internal_d42ce001ec4f7aae4cb82384d708fc21a2e112b8c4fb740a56ddbb2528818a67 = $this->env->getExtension("native_profiler");
        $__internal_d42ce001ec4f7aae4cb82384d708fc21a2e112b8c4fb740a56ddbb2528818a67->enter($__internal_d42ce001ec4f7aae4cb82384d708fc21a2e112b8c4fb740a56ddbb2528818a67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d42ce001ec4f7aae4cb82384d708fc21a2e112b8c4fb740a56ddbb2528818a67->leave($__internal_d42ce001ec4f7aae4cb82384d708fc21a2e112b8c4fb740a56ddbb2528818a67_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_908ca949a62001db0d087c78f2316257a01c71c89b6a0326afd0fd572cf8c25d = $this->env->getExtension("native_profiler");
        $__internal_908ca949a62001db0d087c78f2316257a01c71c89b6a0326afd0fd572cf8c25d->enter($__internal_908ca949a62001db0d087c78f2316257a01c71c89b6a0326afd0fd572cf8c25d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_908ca949a62001db0d087c78f2316257a01c71c89b6a0326afd0fd572cf8c25d->leave($__internal_908ca949a62001db0d087c78f2316257a01c71c89b6a0326afd0fd572cf8c25d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7cf5fb5b51a33167e994629d92c679c20601588a9581734a6452aad618f98ed8 = $this->env->getExtension("native_profiler");
        $__internal_7cf5fb5b51a33167e994629d92c679c20601588a9581734a6452aad618f98ed8->enter($__internal_7cf5fb5b51a33167e994629d92c679c20601588a9581734a6452aad618f98ed8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7cf5fb5b51a33167e994629d92c679c20601588a9581734a6452aad618f98ed8->leave($__internal_7cf5fb5b51a33167e994629d92c679c20601588a9581734a6452aad618f98ed8_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4328414c40864929c315761fcf7bf688fc96a677164d41aa7a920dd98fbbe496 = $this->env->getExtension("native_profiler");
        $__internal_4328414c40864929c315761fcf7bf688fc96a677164d41aa7a920dd98fbbe496->enter($__internal_4328414c40864929c315761fcf7bf688fc96a677164d41aa7a920dd98fbbe496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_4328414c40864929c315761fcf7bf688fc96a677164d41aa7a920dd98fbbe496->leave($__internal_4328414c40864929c315761fcf7bf688fc96a677164d41aa7a920dd98fbbe496_prof);

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
