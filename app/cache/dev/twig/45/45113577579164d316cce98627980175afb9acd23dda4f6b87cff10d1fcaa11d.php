<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_00cb5a19a14eade077dbf102f9ce6a7b2d98162243ab9bb9b40ef0cec886c94f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7f227879a37b5929306216b24e0ee5bc4dd5e9d1925efcefb98c176666db13a8 = $this->env->getExtension("native_profiler");
        $__internal_7f227879a37b5929306216b24e0ee5bc4dd5e9d1925efcefb98c176666db13a8->enter($__internal_7f227879a37b5929306216b24e0ee5bc4dd5e9d1925efcefb98c176666db13a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f227879a37b5929306216b24e0ee5bc4dd5e9d1925efcefb98c176666db13a8->leave($__internal_7f227879a37b5929306216b24e0ee5bc4dd5e9d1925efcefb98c176666db13a8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c4bfc7e21e17180030fc104a9ada95600779c0b2b4e2be20a1f35b6f1391fe13 = $this->env->getExtension("native_profiler");
        $__internal_c4bfc7e21e17180030fc104a9ada95600779c0b2b4e2be20a1f35b6f1391fe13->enter($__internal_c4bfc7e21e17180030fc104a9ada95600779c0b2b4e2be20a1f35b6f1391fe13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_c4bfc7e21e17180030fc104a9ada95600779c0b2b4e2be20a1f35b6f1391fe13->leave($__internal_c4bfc7e21e17180030fc104a9ada95600779c0b2b4e2be20a1f35b6f1391fe13_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_74897c1f5dbee0483501aa663a28d12230524125b29d9acd03bd48c9c13fc7d0 = $this->env->getExtension("native_profiler");
        $__internal_74897c1f5dbee0483501aa663a28d12230524125b29d9acd03bd48c9c13fc7d0->enter($__internal_74897c1f5dbee0483501aa663a28d12230524125b29d9acd03bd48c9c13fc7d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_74897c1f5dbee0483501aa663a28d12230524125b29d9acd03bd48c9c13fc7d0->leave($__internal_74897c1f5dbee0483501aa663a28d12230524125b29d9acd03bd48c9c13fc7d0_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
