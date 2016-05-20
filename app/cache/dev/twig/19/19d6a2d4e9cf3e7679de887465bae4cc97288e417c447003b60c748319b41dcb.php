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
        $__internal_d200935ed1317c1e4010cd0bed9998fced321339776cfb09a8f6d2ddf3076791 = $this->env->getExtension("native_profiler");
        $__internal_d200935ed1317c1e4010cd0bed9998fced321339776cfb09a8f6d2ddf3076791->enter($__internal_d200935ed1317c1e4010cd0bed9998fced321339776cfb09a8f6d2ddf3076791_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_d200935ed1317c1e4010cd0bed9998fced321339776cfb09a8f6d2ddf3076791->leave($__internal_d200935ed1317c1e4010cd0bed9998fced321339776cfb09a8f6d2ddf3076791_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_60c9b747d65c6c45735bbac161b7692da000d9f9ccddae3e1ee3a6932f43937c = $this->env->getExtension("native_profiler");
        $__internal_60c9b747d65c6c45735bbac161b7692da000d9f9ccddae3e1ee3a6932f43937c->enter($__internal_60c9b747d65c6c45735bbac161b7692da000d9f9ccddae3e1ee3a6932f43937c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_60c9b747d65c6c45735bbac161b7692da000d9f9ccddae3e1ee3a6932f43937c->leave($__internal_60c9b747d65c6c45735bbac161b7692da000d9f9ccddae3e1ee3a6932f43937c_prof);

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
