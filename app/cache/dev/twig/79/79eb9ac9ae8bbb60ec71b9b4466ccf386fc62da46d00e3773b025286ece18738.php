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
        $__internal_588da45025fbc68beaa7145115bbc0e0ebe49fa2490f88225fa5bf2a8224d886 = $this->env->getExtension("native_profiler");
        $__internal_588da45025fbc68beaa7145115bbc0e0ebe49fa2490f88225fa5bf2a8224d886->enter($__internal_588da45025fbc68beaa7145115bbc0e0ebe49fa2490f88225fa5bf2a8224d886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_588da45025fbc68beaa7145115bbc0e0ebe49fa2490f88225fa5bf2a8224d886->leave($__internal_588da45025fbc68beaa7145115bbc0e0ebe49fa2490f88225fa5bf2a8224d886_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_231b9bfa8691bfa92c94fe23f83eb36ac18856d28e5133b8829374cf4eb9ae9d = $this->env->getExtension("native_profiler");
        $__internal_231b9bfa8691bfa92c94fe23f83eb36ac18856d28e5133b8829374cf4eb9ae9d->enter($__internal_231b9bfa8691bfa92c94fe23f83eb36ac18856d28e5133b8829374cf4eb9ae9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_231b9bfa8691bfa92c94fe23f83eb36ac18856d28e5133b8829374cf4eb9ae9d->leave($__internal_231b9bfa8691bfa92c94fe23f83eb36ac18856d28e5133b8829374cf4eb9ae9d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_579c51d2312ff8f1eba1f1daba575302ad708b9f5e1292325b9ebf2df15a89a3 = $this->env->getExtension("native_profiler");
        $__internal_579c51d2312ff8f1eba1f1daba575302ad708b9f5e1292325b9ebf2df15a89a3->enter($__internal_579c51d2312ff8f1eba1f1daba575302ad708b9f5e1292325b9ebf2df15a89a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_579c51d2312ff8f1eba1f1daba575302ad708b9f5e1292325b9ebf2df15a89a3->leave($__internal_579c51d2312ff8f1eba1f1daba575302ad708b9f5e1292325b9ebf2df15a89a3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c422eb58a9c416ce706386537cce0f2a12596c6bb2293dafb56e26b95ff895a7 = $this->env->getExtension("native_profiler");
        $__internal_c422eb58a9c416ce706386537cce0f2a12596c6bb2293dafb56e26b95ff895a7->enter($__internal_c422eb58a9c416ce706386537cce0f2a12596c6bb2293dafb56e26b95ff895a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c422eb58a9c416ce706386537cce0f2a12596c6bb2293dafb56e26b95ff895a7->leave($__internal_c422eb58a9c416ce706386537cce0f2a12596c6bb2293dafb56e26b95ff895a7_prof);

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
