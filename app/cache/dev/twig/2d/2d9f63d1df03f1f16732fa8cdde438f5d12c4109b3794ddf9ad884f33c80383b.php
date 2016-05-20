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
        $__internal_300b79089a943f6c8cf8f68d8c37c7cf6bc37721b5d29287a5742846092f1970 = $this->env->getExtension("native_profiler");
        $__internal_300b79089a943f6c8cf8f68d8c37c7cf6bc37721b5d29287a5742846092f1970->enter($__internal_300b79089a943f6c8cf8f68d8c37c7cf6bc37721b5d29287a5742846092f1970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_300b79089a943f6c8cf8f68d8c37c7cf6bc37721b5d29287a5742846092f1970->leave($__internal_300b79089a943f6c8cf8f68d8c37c7cf6bc37721b5d29287a5742846092f1970_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c27b70fbe2ef8eabb468b8599db2b64696fbf8d3002a7d22bc250694ffb42f63 = $this->env->getExtension("native_profiler");
        $__internal_c27b70fbe2ef8eabb468b8599db2b64696fbf8d3002a7d22bc250694ffb42f63->enter($__internal_c27b70fbe2ef8eabb468b8599db2b64696fbf8d3002a7d22bc250694ffb42f63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c27b70fbe2ef8eabb468b8599db2b64696fbf8d3002a7d22bc250694ffb42f63->leave($__internal_c27b70fbe2ef8eabb468b8599db2b64696fbf8d3002a7d22bc250694ffb42f63_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_dae68413fdb4290d5ee21bc64c8fb67b7a935184682efb499f6525a42985d2f0 = $this->env->getExtension("native_profiler");
        $__internal_dae68413fdb4290d5ee21bc64c8fb67b7a935184682efb499f6525a42985d2f0->enter($__internal_dae68413fdb4290d5ee21bc64c8fb67b7a935184682efb499f6525a42985d2f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_dae68413fdb4290d5ee21bc64c8fb67b7a935184682efb499f6525a42985d2f0->leave($__internal_dae68413fdb4290d5ee21bc64c8fb67b7a935184682efb499f6525a42985d2f0_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d0e59102742df057f1e4f45c6908b23c54715d0d05bb838fb297c119fe4a5220 = $this->env->getExtension("native_profiler");
        $__internal_d0e59102742df057f1e4f45c6908b23c54715d0d05bb838fb297c119fe4a5220->enter($__internal_d0e59102742df057f1e4f45c6908b23c54715d0d05bb838fb297c119fe4a5220_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_d0e59102742df057f1e4f45c6908b23c54715d0d05bb838fb297c119fe4a5220->leave($__internal_d0e59102742df057f1e4f45c6908b23c54715d0d05bb838fb297c119fe4a5220_prof);

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
