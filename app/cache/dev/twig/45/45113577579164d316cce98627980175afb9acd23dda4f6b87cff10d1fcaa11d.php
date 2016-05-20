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
        $__internal_f44cf9f3db2efa1a00f74e6b019232ebd07560ac8f9a666997406f8ed538b758 = $this->env->getExtension("native_profiler");
        $__internal_f44cf9f3db2efa1a00f74e6b019232ebd07560ac8f9a666997406f8ed538b758->enter($__internal_f44cf9f3db2efa1a00f74e6b019232ebd07560ac8f9a666997406f8ed538b758_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f44cf9f3db2efa1a00f74e6b019232ebd07560ac8f9a666997406f8ed538b758->leave($__internal_f44cf9f3db2efa1a00f74e6b019232ebd07560ac8f9a666997406f8ed538b758_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6f10394b8b329f86539cfaa7e8f0c7a1697ef1a2f9cc31cdd3f15b7914075c6a = $this->env->getExtension("native_profiler");
        $__internal_6f10394b8b329f86539cfaa7e8f0c7a1697ef1a2f9cc31cdd3f15b7914075c6a->enter($__internal_6f10394b8b329f86539cfaa7e8f0c7a1697ef1a2f9cc31cdd3f15b7914075c6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_6f10394b8b329f86539cfaa7e8f0c7a1697ef1a2f9cc31cdd3f15b7914075c6a->leave($__internal_6f10394b8b329f86539cfaa7e8f0c7a1697ef1a2f9cc31cdd3f15b7914075c6a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4679d30692254c7e0aaf3bbb560052572b665b48aea70e5ed9e47dbd6dfdefc6 = $this->env->getExtension("native_profiler");
        $__internal_4679d30692254c7e0aaf3bbb560052572b665b48aea70e5ed9e47dbd6dfdefc6->enter($__internal_4679d30692254c7e0aaf3bbb560052572b665b48aea70e5ed9e47dbd6dfdefc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4679d30692254c7e0aaf3bbb560052572b665b48aea70e5ed9e47dbd6dfdefc6->leave($__internal_4679d30692254c7e0aaf3bbb560052572b665b48aea70e5ed9e47dbd6dfdefc6_prof);

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
