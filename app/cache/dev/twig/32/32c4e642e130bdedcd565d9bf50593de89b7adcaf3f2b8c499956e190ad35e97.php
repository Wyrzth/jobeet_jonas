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
        $__internal_68379079c89716ec7400ad10eba4bff0d44ed4aca340768376d1e871097216f9 = $this->env->getExtension("native_profiler");
        $__internal_68379079c89716ec7400ad10eba4bff0d44ed4aca340768376d1e871097216f9->enter($__internal_68379079c89716ec7400ad10eba4bff0d44ed4aca340768376d1e871097216f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68379079c89716ec7400ad10eba4bff0d44ed4aca340768376d1e871097216f9->leave($__internal_68379079c89716ec7400ad10eba4bff0d44ed4aca340768376d1e871097216f9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_56d6aaa61ee12eec9284cbcca73142f19b5af450659c15e37571c5a4cc81bf09 = $this->env->getExtension("native_profiler");
        $__internal_56d6aaa61ee12eec9284cbcca73142f19b5af450659c15e37571c5a4cc81bf09->enter($__internal_56d6aaa61ee12eec9284cbcca73142f19b5af450659c15e37571c5a4cc81bf09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_56d6aaa61ee12eec9284cbcca73142f19b5af450659c15e37571c5a4cc81bf09->leave($__internal_56d6aaa61ee12eec9284cbcca73142f19b5af450659c15e37571c5a4cc81bf09_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_340ba8fddd8c95a77ffd2e3e95b85d21ae276a888b9a99f6d5eb0096fd68d07e = $this->env->getExtension("native_profiler");
        $__internal_340ba8fddd8c95a77ffd2e3e95b85d21ae276a888b9a99f6d5eb0096fd68d07e->enter($__internal_340ba8fddd8c95a77ffd2e3e95b85d21ae276a888b9a99f6d5eb0096fd68d07e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_340ba8fddd8c95a77ffd2e3e95b85d21ae276a888b9a99f6d5eb0096fd68d07e->leave($__internal_340ba8fddd8c95a77ffd2e3e95b85d21ae276a888b9a99f6d5eb0096fd68d07e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_baf771fa9dca68775a2fd25aa7498d020025186df4514d33b46fac4eeb141ff9 = $this->env->getExtension("native_profiler");
        $__internal_baf771fa9dca68775a2fd25aa7498d020025186df4514d33b46fac4eeb141ff9->enter($__internal_baf771fa9dca68775a2fd25aa7498d020025186df4514d33b46fac4eeb141ff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_baf771fa9dca68775a2fd25aa7498d020025186df4514d33b46fac4eeb141ff9->leave($__internal_baf771fa9dca68775a2fd25aa7498d020025186df4514d33b46fac4eeb141ff9_prof);

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
