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
        $__internal_7734af93c32ce4c970f13b62b01b82ea1bb615638ba38880b150edd411fbde05 = $this->env->getExtension("native_profiler");
        $__internal_7734af93c32ce4c970f13b62b01b82ea1bb615638ba38880b150edd411fbde05->enter($__internal_7734af93c32ce4c970f13b62b01b82ea1bb615638ba38880b150edd411fbde05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7734af93c32ce4c970f13b62b01b82ea1bb615638ba38880b150edd411fbde05->leave($__internal_7734af93c32ce4c970f13b62b01b82ea1bb615638ba38880b150edd411fbde05_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0b53b59a79eb0a68ec129818180205721cbe54b6a5fcf271b78b63b64abc5a5d = $this->env->getExtension("native_profiler");
        $__internal_0b53b59a79eb0a68ec129818180205721cbe54b6a5fcf271b78b63b64abc5a5d->enter($__internal_0b53b59a79eb0a68ec129818180205721cbe54b6a5fcf271b78b63b64abc5a5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_0b53b59a79eb0a68ec129818180205721cbe54b6a5fcf271b78b63b64abc5a5d->leave($__internal_0b53b59a79eb0a68ec129818180205721cbe54b6a5fcf271b78b63b64abc5a5d_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9e1e46b70f91e41ce48a1d383ef6ebaf0990acac7fe78e2dff0d5576950333c9 = $this->env->getExtension("native_profiler");
        $__internal_9e1e46b70f91e41ce48a1d383ef6ebaf0990acac7fe78e2dff0d5576950333c9->enter($__internal_9e1e46b70f91e41ce48a1d383ef6ebaf0990acac7fe78e2dff0d5576950333c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_9e1e46b70f91e41ce48a1d383ef6ebaf0990acac7fe78e2dff0d5576950333c9->leave($__internal_9e1e46b70f91e41ce48a1d383ef6ebaf0990acac7fe78e2dff0d5576950333c9_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0ddee979000180c62e11860746f8063d4ce9333f3fc5b477ae0d91b3b3892d6f = $this->env->getExtension("native_profiler");
        $__internal_0ddee979000180c62e11860746f8063d4ce9333f3fc5b477ae0d91b3b3892d6f->enter($__internal_0ddee979000180c62e11860746f8063d4ce9333f3fc5b477ae0d91b3b3892d6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_0ddee979000180c62e11860746f8063d4ce9333f3fc5b477ae0d91b3b3892d6f->leave($__internal_0ddee979000180c62e11860746f8063d4ce9333f3fc5b477ae0d91b3b3892d6f_prof);

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
