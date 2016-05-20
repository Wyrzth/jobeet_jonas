<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_cb8a546dd815b0fc64d54494b3dd83c448781652c16dd5d859724ae871283ca7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_a509a0ce4327701f897689f141a1d3aac627b6cf95ec20961aa7e9c3fd2e7d3f = $this->env->getExtension("native_profiler");
        $__internal_a509a0ce4327701f897689f141a1d3aac627b6cf95ec20961aa7e9c3fd2e7d3f->enter($__internal_a509a0ce4327701f897689f141a1d3aac627b6cf95ec20961aa7e9c3fd2e7d3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a509a0ce4327701f897689f141a1d3aac627b6cf95ec20961aa7e9c3fd2e7d3f->leave($__internal_a509a0ce4327701f897689f141a1d3aac627b6cf95ec20961aa7e9c3fd2e7d3f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5b76e88758438c1bd195235619e0c5b137c1a79513e65fbd030ad79722948b55 = $this->env->getExtension("native_profiler");
        $__internal_5b76e88758438c1bd195235619e0c5b137c1a79513e65fbd030ad79722948b55->enter($__internal_5b76e88758438c1bd195235619e0c5b137c1a79513e65fbd030ad79722948b55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_5b76e88758438c1bd195235619e0c5b137c1a79513e65fbd030ad79722948b55->leave($__internal_5b76e88758438c1bd195235619e0c5b137c1a79513e65fbd030ad79722948b55_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_489712c37dbc6e192c7cee595aedd9327b0582330ff642a27fc47a15bacbb8a4 = $this->env->getExtension("native_profiler");
        $__internal_489712c37dbc6e192c7cee595aedd9327b0582330ff642a27fc47a15bacbb8a4->enter($__internal_489712c37dbc6e192c7cee595aedd9327b0582330ff642a27fc47a15bacbb8a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_489712c37dbc6e192c7cee595aedd9327b0582330ff642a27fc47a15bacbb8a4->leave($__internal_489712c37dbc6e192c7cee595aedd9327b0582330ff642a27fc47a15bacbb8a4_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
