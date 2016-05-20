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
        $__internal_f3221437bd99964dbc85d1d4905c0dbaabf2678379e7f257e69ab1a479eb2dc2 = $this->env->getExtension("native_profiler");
        $__internal_f3221437bd99964dbc85d1d4905c0dbaabf2678379e7f257e69ab1a479eb2dc2->enter($__internal_f3221437bd99964dbc85d1d4905c0dbaabf2678379e7f257e69ab1a479eb2dc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_f3221437bd99964dbc85d1d4905c0dbaabf2678379e7f257e69ab1a479eb2dc2->leave($__internal_f3221437bd99964dbc85d1d4905c0dbaabf2678379e7f257e69ab1a479eb2dc2_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_0212807ac603111d3fe0b240e36498d19e19f9027388b1712389c919e58885b4 = $this->env->getExtension("native_profiler");
        $__internal_0212807ac603111d3fe0b240e36498d19e19f9027388b1712389c919e58885b4->enter($__internal_0212807ac603111d3fe0b240e36498d19e19f9027388b1712389c919e58885b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_0212807ac603111d3fe0b240e36498d19e19f9027388b1712389c919e58885b4->leave($__internal_0212807ac603111d3fe0b240e36498d19e19f9027388b1712389c919e58885b4_prof);

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
