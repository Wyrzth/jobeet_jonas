<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_fbdfc1cf6b47d8e92dccf2bbc9f83ed0a194192fddb2ebdd877aee9d7fadaf67 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_4e6b18adecc37760d22d184617d9e2f046f254f96577b35349cae979d93717e4 = $this->env->getExtension("native_profiler");
        $__internal_4e6b18adecc37760d22d184617d9e2f046f254f96577b35349cae979d93717e4->enter($__internal_4e6b18adecc37760d22d184617d9e2f046f254f96577b35349cae979d93717e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e6b18adecc37760d22d184617d9e2f046f254f96577b35349cae979d93717e4->leave($__internal_4e6b18adecc37760d22d184617d9e2f046f254f96577b35349cae979d93717e4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5ddd7bbe0acc81f0ef878727f3adb5e379ee7d53f355b69636d6989d2310fb85 = $this->env->getExtension("native_profiler");
        $__internal_5ddd7bbe0acc81f0ef878727f3adb5e379ee7d53f355b69636d6989d2310fb85->enter($__internal_5ddd7bbe0acc81f0ef878727f3adb5e379ee7d53f355b69636d6989d2310fb85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_5ddd7bbe0acc81f0ef878727f3adb5e379ee7d53f355b69636d6989d2310fb85->leave($__internal_5ddd7bbe0acc81f0ef878727f3adb5e379ee7d53f355b69636d6989d2310fb85_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_351d05c9303cc7bc0d28050ed4cc7254bfc3b4bfbec261dab8184284192459bb = $this->env->getExtension("native_profiler");
        $__internal_351d05c9303cc7bc0d28050ed4cc7254bfc3b4bfbec261dab8184284192459bb->enter($__internal_351d05c9303cc7bc0d28050ed4cc7254bfc3b4bfbec261dab8184284192459bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_351d05c9303cc7bc0d28050ed4cc7254bfc3b4bfbec261dab8184284192459bb->leave($__internal_351d05c9303cc7bc0d28050ed4cc7254bfc3b4bfbec261dab8184284192459bb_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_552813fcdcaae7035ee960b5f1227c2b4633bd3e60e6a54c900c14b0b4dba4b3 = $this->env->getExtension("native_profiler");
        $__internal_552813fcdcaae7035ee960b5f1227c2b4633bd3e60e6a54c900c14b0b4dba4b3->enter($__internal_552813fcdcaae7035ee960b5f1227c2b4633bd3e60e6a54c900c14b0b4dba4b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_552813fcdcaae7035ee960b5f1227c2b4633bd3e60e6a54c900c14b0b4dba4b3->leave($__internal_552813fcdcaae7035ee960b5f1227c2b4633bd3e60e6a54c900c14b0b4dba4b3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
