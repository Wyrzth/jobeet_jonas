<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_e7823a722758dc1c8436b577a5d8542cb98ab65ec0f318b705d20110f6341d0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_05de020b6fc33af7e4c73f92dc21d5e190b66db398bd93d17ed3806d2a215bd5 = $this->env->getExtension("native_profiler");
        $__internal_05de020b6fc33af7e4c73f92dc21d5e190b66db398bd93d17ed3806d2a215bd5->enter($__internal_05de020b6fc33af7e4c73f92dc21d5e190b66db398bd93d17ed3806d2a215bd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05de020b6fc33af7e4c73f92dc21d5e190b66db398bd93d17ed3806d2a215bd5->leave($__internal_05de020b6fc33af7e4c73f92dc21d5e190b66db398bd93d17ed3806d2a215bd5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_dd4314992c2bf09c6c6807b2e0fa57232b36461ba79c70be3026b9dc7e12ed98 = $this->env->getExtension("native_profiler");
        $__internal_dd4314992c2bf09c6c6807b2e0fa57232b36461ba79c70be3026b9dc7e12ed98->enter($__internal_dd4314992c2bf09c6c6807b2e0fa57232b36461ba79c70be3026b9dc7e12ed98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_dd4314992c2bf09c6c6807b2e0fa57232b36461ba79c70be3026b9dc7e12ed98->leave($__internal_dd4314992c2bf09c6c6807b2e0fa57232b36461ba79c70be3026b9dc7e12ed98_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8626f0092ae26599926d459ad84a434f00b3bf321a8e6080c5fc679b422c36a5 = $this->env->getExtension("native_profiler");
        $__internal_8626f0092ae26599926d459ad84a434f00b3bf321a8e6080c5fc679b422c36a5->enter($__internal_8626f0092ae26599926d459ad84a434f00b3bf321a8e6080c5fc679b422c36a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_8626f0092ae26599926d459ad84a434f00b3bf321a8e6080c5fc679b422c36a5->leave($__internal_8626f0092ae26599926d459ad84a434f00b3bf321a8e6080c5fc679b422c36a5_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_081ab790a9d1518d95234ddd3e9f629e89787b81ee0c1e1423097705567ee687 = $this->env->getExtension("native_profiler");
        $__internal_081ab790a9d1518d95234ddd3e9f629e89787b81ee0c1e1423097705567ee687->enter($__internal_081ab790a9d1518d95234ddd3e9f629e89787b81ee0c1e1423097705567ee687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_081ab790a9d1518d95234ddd3e9f629e89787b81ee0c1e1423097705567ee687->leave($__internal_081ab790a9d1518d95234ddd3e9f629e89787b81ee0c1e1423097705567ee687_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
