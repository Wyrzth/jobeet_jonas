<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_cf96576b1f7498e02dd8d98bdcc983c33e63c4c8bf52e4060f7b6e3facff41d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c31a35cadc8fd8a2077c3e87589aaafa494aaf697379802207474deeb9103f3d = $this->env->getExtension("native_profiler");
        $__internal_c31a35cadc8fd8a2077c3e87589aaafa494aaf697379802207474deeb9103f3d->enter($__internal_c31a35cadc8fd8a2077c3e87589aaafa494aaf697379802207474deeb9103f3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_c31a35cadc8fd8a2077c3e87589aaafa494aaf697379802207474deeb9103f3d->leave($__internal_c31a35cadc8fd8a2077c3e87589aaafa494aaf697379802207474deeb9103f3d_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_dba92bbe8622fe7c1ec0c12653281f13962a394ba1fb2912bcab65c0b44ca41b = $this->env->getExtension("native_profiler");
        $__internal_dba92bbe8622fe7c1ec0c12653281f13962a394ba1fb2912bcab65c0b44ca41b->enter($__internal_dba92bbe8622fe7c1ec0c12653281f13962a394ba1fb2912bcab65c0b44ca41b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_dba92bbe8622fe7c1ec0c12653281f13962a394ba1fb2912bcab65c0b44ca41b->leave($__internal_dba92bbe8622fe7c1ec0c12653281f13962a394ba1fb2912bcab65c0b44ca41b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
