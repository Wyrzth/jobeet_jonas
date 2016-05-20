<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_2eb6169849617488f8c35b8ca6955eaf81e4685e03bd769cb855cfd9484be1fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f364bc45051ac54135fd010297c4295281c4e64c4c5e7af1e178cf9d3a8bce39 = $this->env->getExtension("native_profiler");
        $__internal_f364bc45051ac54135fd010297c4295281c4e64c4c5e7af1e178cf9d3a8bce39->enter($__internal_f364bc45051ac54135fd010297c4295281c4e64c4c5e7af1e178cf9d3a8bce39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f364bc45051ac54135fd010297c4295281c4e64c4c5e7af1e178cf9d3a8bce39->leave($__internal_f364bc45051ac54135fd010297c4295281c4e64c4c5e7af1e178cf9d3a8bce39_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fad695019388a6c3217368fe1249e6c3249dce33f5a4f6a2013513edebc9ebd9 = $this->env->getExtension("native_profiler");
        $__internal_fad695019388a6c3217368fe1249e6c3249dce33f5a4f6a2013513edebc9ebd9->enter($__internal_fad695019388a6c3217368fe1249e6c3249dce33f5a4f6a2013513edebc9ebd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_fad695019388a6c3217368fe1249e6c3249dce33f5a4f6a2013513edebc9ebd9->leave($__internal_fad695019388a6c3217368fe1249e6c3249dce33f5a4f6a2013513edebc9ebd9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_38074b785e18243e7e06cfcb11859c5e4f169f30583abc5d7622aef175e5556f = $this->env->getExtension("native_profiler");
        $__internal_38074b785e18243e7e06cfcb11859c5e4f169f30583abc5d7622aef175e5556f->enter($__internal_38074b785e18243e7e06cfcb11859c5e4f169f30583abc5d7622aef175e5556f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_38074b785e18243e7e06cfcb11859c5e4f169f30583abc5d7622aef175e5556f->leave($__internal_38074b785e18243e7e06cfcb11859c5e4f169f30583abc5d7622aef175e5556f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7864204cc0ac70b26d7adb39570b0973ef213e1d465383f8449dfeba269c274b = $this->env->getExtension("native_profiler");
        $__internal_7864204cc0ac70b26d7adb39570b0973ef213e1d465383f8449dfeba269c274b->enter($__internal_7864204cc0ac70b26d7adb39570b0973ef213e1d465383f8449dfeba269c274b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7864204cc0ac70b26d7adb39570b0973ef213e1d465383f8449dfeba269c274b->leave($__internal_7864204cc0ac70b26d7adb39570b0973ef213e1d465383f8449dfeba269c274b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
