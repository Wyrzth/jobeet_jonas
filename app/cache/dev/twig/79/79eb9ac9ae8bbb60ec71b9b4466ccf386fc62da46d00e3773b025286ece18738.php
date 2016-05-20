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
        $__internal_655b5d31d37de7728f6d130cb8c6550520d674f2beb3d8febd7b98ba025ebf05 = $this->env->getExtension("native_profiler");
        $__internal_655b5d31d37de7728f6d130cb8c6550520d674f2beb3d8febd7b98ba025ebf05->enter($__internal_655b5d31d37de7728f6d130cb8c6550520d674f2beb3d8febd7b98ba025ebf05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_655b5d31d37de7728f6d130cb8c6550520d674f2beb3d8febd7b98ba025ebf05->leave($__internal_655b5d31d37de7728f6d130cb8c6550520d674f2beb3d8febd7b98ba025ebf05_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_18d96c5fb0a99344c556198f7264264a5a0ebf62a1f2b8b05a33b653981a6f02 = $this->env->getExtension("native_profiler");
        $__internal_18d96c5fb0a99344c556198f7264264a5a0ebf62a1f2b8b05a33b653981a6f02->enter($__internal_18d96c5fb0a99344c556198f7264264a5a0ebf62a1f2b8b05a33b653981a6f02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_18d96c5fb0a99344c556198f7264264a5a0ebf62a1f2b8b05a33b653981a6f02->leave($__internal_18d96c5fb0a99344c556198f7264264a5a0ebf62a1f2b8b05a33b653981a6f02_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c2facef822aa34a3447efc3e4bad20f37ba085f8fb6bc1df31785e065da184b8 = $this->env->getExtension("native_profiler");
        $__internal_c2facef822aa34a3447efc3e4bad20f37ba085f8fb6bc1df31785e065da184b8->enter($__internal_c2facef822aa34a3447efc3e4bad20f37ba085f8fb6bc1df31785e065da184b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c2facef822aa34a3447efc3e4bad20f37ba085f8fb6bc1df31785e065da184b8->leave($__internal_c2facef822aa34a3447efc3e4bad20f37ba085f8fb6bc1df31785e065da184b8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7c3929e9c990dcd4e2a74563d6b7d9b3a86d0f3678f3980fe9bffef1e7c878e8 = $this->env->getExtension("native_profiler");
        $__internal_7c3929e9c990dcd4e2a74563d6b7d9b3a86d0f3678f3980fe9bffef1e7c878e8->enter($__internal_7c3929e9c990dcd4e2a74563d6b7d9b3a86d0f3678f3980fe9bffef1e7c878e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7c3929e9c990dcd4e2a74563d6b7d9b3a86d0f3678f3980fe9bffef1e7c878e8->leave($__internal_7c3929e9c990dcd4e2a74563d6b7d9b3a86d0f3678f3980fe9bffef1e7c878e8_prof);

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
