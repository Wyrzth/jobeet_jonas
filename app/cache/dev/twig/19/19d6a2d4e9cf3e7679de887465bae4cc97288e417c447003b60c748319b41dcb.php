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
        $__internal_01d2ad7518d9f1c9bdd853afac8903fe9f645ebc892ba559fc4f379bab653d37 = $this->env->getExtension("native_profiler");
        $__internal_01d2ad7518d9f1c9bdd853afac8903fe9f645ebc892ba559fc4f379bab653d37->enter($__internal_01d2ad7518d9f1c9bdd853afac8903fe9f645ebc892ba559fc4f379bab653d37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_01d2ad7518d9f1c9bdd853afac8903fe9f645ebc892ba559fc4f379bab653d37->leave($__internal_01d2ad7518d9f1c9bdd853afac8903fe9f645ebc892ba559fc4f379bab653d37_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_4a360a9bbb712934c55378f1d5109fbd790f1e459fad6cb3bb604fc48b6b3c4d = $this->env->getExtension("native_profiler");
        $__internal_4a360a9bbb712934c55378f1d5109fbd790f1e459fad6cb3bb604fc48b6b3c4d->enter($__internal_4a360a9bbb712934c55378f1d5109fbd790f1e459fad6cb3bb604fc48b6b3c4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_4a360a9bbb712934c55378f1d5109fbd790f1e459fad6cb3bb604fc48b6b3c4d->leave($__internal_4a360a9bbb712934c55378f1d5109fbd790f1e459fad6cb3bb604fc48b6b3c4d_prof);

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
