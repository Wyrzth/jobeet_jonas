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
        $__internal_5ac0c355fcc78fe465dac20e545361183cd5911f60dc778be766f849f922c249 = $this->env->getExtension("native_profiler");
        $__internal_5ac0c355fcc78fe465dac20e545361183cd5911f60dc778be766f849f922c249->enter($__internal_5ac0c355fcc78fe465dac20e545361183cd5911f60dc778be766f849f922c249_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ac0c355fcc78fe465dac20e545361183cd5911f60dc778be766f849f922c249->leave($__internal_5ac0c355fcc78fe465dac20e545361183cd5911f60dc778be766f849f922c249_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2848176f3f64fe1aabd445b947108b6d79e448b418b4d9d16e9881488924be8e = $this->env->getExtension("native_profiler");
        $__internal_2848176f3f64fe1aabd445b947108b6d79e448b418b4d9d16e9881488924be8e->enter($__internal_2848176f3f64fe1aabd445b947108b6d79e448b418b4d9d16e9881488924be8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2848176f3f64fe1aabd445b947108b6d79e448b418b4d9d16e9881488924be8e->leave($__internal_2848176f3f64fe1aabd445b947108b6d79e448b418b4d9d16e9881488924be8e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_07938bdb29c9965347ab548ae0491d5af0d9aa7e0dc33d860ce955b5163effb8 = $this->env->getExtension("native_profiler");
        $__internal_07938bdb29c9965347ab548ae0491d5af0d9aa7e0dc33d860ce955b5163effb8->enter($__internal_07938bdb29c9965347ab548ae0491d5af0d9aa7e0dc33d860ce955b5163effb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_07938bdb29c9965347ab548ae0491d5af0d9aa7e0dc33d860ce955b5163effb8->leave($__internal_07938bdb29c9965347ab548ae0491d5af0d9aa7e0dc33d860ce955b5163effb8_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_254484753cac13bdab0a0e9c60264ca56cce0b29cab2a198d10496b8edddf4ef = $this->env->getExtension("native_profiler");
        $__internal_254484753cac13bdab0a0e9c60264ca56cce0b29cab2a198d10496b8edddf4ef->enter($__internal_254484753cac13bdab0a0e9c60264ca56cce0b29cab2a198d10496b8edddf4ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_254484753cac13bdab0a0e9c60264ca56cce0b29cab2a198d10496b8edddf4ef->leave($__internal_254484753cac13bdab0a0e9c60264ca56cce0b29cab2a198d10496b8edddf4ef_prof);

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
