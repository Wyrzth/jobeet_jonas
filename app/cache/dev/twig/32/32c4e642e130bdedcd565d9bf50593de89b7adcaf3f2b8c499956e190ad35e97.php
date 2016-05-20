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
        $__internal_1250d5d305cb58d85851934c77743ed9a5003bb30d15f2b3d432ff99f0732ef8 = $this->env->getExtension("native_profiler");
        $__internal_1250d5d305cb58d85851934c77743ed9a5003bb30d15f2b3d432ff99f0732ef8->enter($__internal_1250d5d305cb58d85851934c77743ed9a5003bb30d15f2b3d432ff99f0732ef8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1250d5d305cb58d85851934c77743ed9a5003bb30d15f2b3d432ff99f0732ef8->leave($__internal_1250d5d305cb58d85851934c77743ed9a5003bb30d15f2b3d432ff99f0732ef8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4da8046a189d24d8d86e6289a42e4cdaf11a9fe007f4849c15dec2d1dff6ee94 = $this->env->getExtension("native_profiler");
        $__internal_4da8046a189d24d8d86e6289a42e4cdaf11a9fe007f4849c15dec2d1dff6ee94->enter($__internal_4da8046a189d24d8d86e6289a42e4cdaf11a9fe007f4849c15dec2d1dff6ee94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4da8046a189d24d8d86e6289a42e4cdaf11a9fe007f4849c15dec2d1dff6ee94->leave($__internal_4da8046a189d24d8d86e6289a42e4cdaf11a9fe007f4849c15dec2d1dff6ee94_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b1f363b1e9203e3f486b6e7fec0c91d0ac36a4cd11d552338d487c7e4738f576 = $this->env->getExtension("native_profiler");
        $__internal_b1f363b1e9203e3f486b6e7fec0c91d0ac36a4cd11d552338d487c7e4738f576->enter($__internal_b1f363b1e9203e3f486b6e7fec0c91d0ac36a4cd11d552338d487c7e4738f576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b1f363b1e9203e3f486b6e7fec0c91d0ac36a4cd11d552338d487c7e4738f576->leave($__internal_b1f363b1e9203e3f486b6e7fec0c91d0ac36a4cd11d552338d487c7e4738f576_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0199c3903e442343a6629712588dd3fab8a7c2e3870e0bce11aa01ad79d99f8f = $this->env->getExtension("native_profiler");
        $__internal_0199c3903e442343a6629712588dd3fab8a7c2e3870e0bce11aa01ad79d99f8f->enter($__internal_0199c3903e442343a6629712588dd3fab8a7c2e3870e0bce11aa01ad79d99f8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0199c3903e442343a6629712588dd3fab8a7c2e3870e0bce11aa01ad79d99f8f->leave($__internal_0199c3903e442343a6629712588dd3fab8a7c2e3870e0bce11aa01ad79d99f8f_prof);

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
