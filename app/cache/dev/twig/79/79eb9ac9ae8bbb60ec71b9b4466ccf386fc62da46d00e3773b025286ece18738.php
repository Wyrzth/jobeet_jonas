<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_374daa9efeef58dabd4cf2f120ec2c4498173aafb41519b3af06df62655bfab3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_4d52e77a0581cbdf37869caba3206d73c8c2b9122800d3c385506556e9b420e3 = $this->env->getExtension("native_profiler");
        $__internal_4d52e77a0581cbdf37869caba3206d73c8c2b9122800d3c385506556e9b420e3->enter($__internal_4d52e77a0581cbdf37869caba3206d73c8c2b9122800d3c385506556e9b420e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d52e77a0581cbdf37869caba3206d73c8c2b9122800d3c385506556e9b420e3->leave($__internal_4d52e77a0581cbdf37869caba3206d73c8c2b9122800d3c385506556e9b420e3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4414bde35a15fc87b7af6a79c80a876e0fec1aab92e2e9a506b186cfec6be33e = $this->env->getExtension("native_profiler");
        $__internal_4414bde35a15fc87b7af6a79c80a876e0fec1aab92e2e9a506b186cfec6be33e->enter($__internal_4414bde35a15fc87b7af6a79c80a876e0fec1aab92e2e9a506b186cfec6be33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4414bde35a15fc87b7af6a79c80a876e0fec1aab92e2e9a506b186cfec6be33e->leave($__internal_4414bde35a15fc87b7af6a79c80a876e0fec1aab92e2e9a506b186cfec6be33e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_34cb73708184d0f882419fe23632796178821afd0649cd2182db4fbac68cef18 = $this->env->getExtension("native_profiler");
        $__internal_34cb73708184d0f882419fe23632796178821afd0649cd2182db4fbac68cef18->enter($__internal_34cb73708184d0f882419fe23632796178821afd0649cd2182db4fbac68cef18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_34cb73708184d0f882419fe23632796178821afd0649cd2182db4fbac68cef18->leave($__internal_34cb73708184d0f882419fe23632796178821afd0649cd2182db4fbac68cef18_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f258d79a51fc113b33979321ab2334ec0b2d5b49756c658f23fd5cb2147c0792 = $this->env->getExtension("native_profiler");
        $__internal_f258d79a51fc113b33979321ab2334ec0b2d5b49756c658f23fd5cb2147c0792->enter($__internal_f258d79a51fc113b33979321ab2334ec0b2d5b49756c658f23fd5cb2147c0792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f258d79a51fc113b33979321ab2334ec0b2d5b49756c658f23fd5cb2147c0792->leave($__internal_f258d79a51fc113b33979321ab2334ec0b2d5b49756c658f23fd5cb2147c0792_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
