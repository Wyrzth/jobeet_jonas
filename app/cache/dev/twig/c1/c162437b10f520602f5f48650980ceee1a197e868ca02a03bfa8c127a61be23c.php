<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_bb659e16065db9d0a7527e738609a2ae81c9a1a04d8d207c8d8a5743e562ab68 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a8a94b97d61bfb2ce076c13bac1b8fc9fe79370443d75f3cce08fbf516c1e5bb = $this->env->getExtension("native_profiler");
        $__internal_a8a94b97d61bfb2ce076c13bac1b8fc9fe79370443d75f3cce08fbf516c1e5bb->enter($__internal_a8a94b97d61bfb2ce076c13bac1b8fc9fe79370443d75f3cce08fbf516c1e5bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
            // line 5
            echo "
            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_a8a94b97d61bfb2ce076c13bac1b8fc9fe79370443d75f3cce08fbf516c1e5bb->leave($__internal_a8a94b97d61bfb2ce076c13bac1b8fc9fe79370443d75f3cce08fbf516c1e5bb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  34 => 5,  32 => 4,  29 => 3,  25 => 2,  22 => 1,);
    }
}
/*         <traces>*/
/* {% for trace in exception.trace %}*/
/*             <trace>*/
/* {% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/*             </trace>*/
/* {% endfor %}*/
/*         </traces>*/
/* */
