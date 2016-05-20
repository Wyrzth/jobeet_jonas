<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_e369a196638de3a90c06576ddfefcead7ef1167fc431bfba0227cbab4592134f extends Twig_Template
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
        $__internal_38474ad951479c788d35d48c6dc8ca5c9db956440ba4d1a38dfd1461c920cbe4 = $this->env->getExtension("native_profiler");
        $__internal_38474ad951479c788d35d48c6dc8ca5c9db956440ba4d1a38dfd1461c920cbe4->enter($__internal_38474ad951479c788d35d48c6dc8ca5c9db956440ba4d1a38dfd1461c920cbe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_38474ad951479c788d35d48c6dc8ca5c9db956440ba4d1a38dfd1461c920cbe4->leave($__internal_38474ad951479c788d35d48c6dc8ca5c9db956440ba4d1a38dfd1461c920cbe4_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_c8ec44fb1482a92aa0fd9b7ebf3395bea5540a6c2ca4297e2491541508c48bb7 = $this->env->getExtension("native_profiler");
        $__internal_c8ec44fb1482a92aa0fd9b7ebf3395bea5540a6c2ca4297e2491541508c48bb7->enter($__internal_c8ec44fb1482a92aa0fd9b7ebf3395bea5540a6c2ca4297e2491541508c48bb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_c8ec44fb1482a92aa0fd9b7ebf3395bea5540a6c2ca4297e2491541508c48bb7->leave($__internal_c8ec44fb1482a92aa0fd9b7ebf3395bea5540a6c2ca4297e2491541508c48bb7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
