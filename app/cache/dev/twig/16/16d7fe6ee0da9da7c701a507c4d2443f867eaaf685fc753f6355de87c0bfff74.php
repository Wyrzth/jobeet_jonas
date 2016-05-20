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
        $__internal_49160b7e6bc74d1016866148aa2348ecaa4c7ac8c14622221c33210394d26e58 = $this->env->getExtension("native_profiler");
        $__internal_49160b7e6bc74d1016866148aa2348ecaa4c7ac8c14622221c33210394d26e58->enter($__internal_49160b7e6bc74d1016866148aa2348ecaa4c7ac8c14622221c33210394d26e58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_49160b7e6bc74d1016866148aa2348ecaa4c7ac8c14622221c33210394d26e58->leave($__internal_49160b7e6bc74d1016866148aa2348ecaa4c7ac8c14622221c33210394d26e58_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_6de101984a0b5c8864dba0a042713040080066fe807973b100cb471065f96441 = $this->env->getExtension("native_profiler");
        $__internal_6de101984a0b5c8864dba0a042713040080066fe807973b100cb471065f96441->enter($__internal_6de101984a0b5c8864dba0a042713040080066fe807973b100cb471065f96441_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_6de101984a0b5c8864dba0a042713040080066fe807973b100cb471065f96441->leave($__internal_6de101984a0b5c8864dba0a042713040080066fe807973b100cb471065f96441_prof);

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
