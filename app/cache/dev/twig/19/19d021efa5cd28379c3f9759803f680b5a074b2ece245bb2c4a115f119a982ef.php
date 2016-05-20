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
        $__internal_a4c0b88bafe5bbe875642840374d13d002c3a0ba6ee32a2e9dcf193a42e0a151 = $this->env->getExtension("native_profiler");
        $__internal_a4c0b88bafe5bbe875642840374d13d002c3a0ba6ee32a2e9dcf193a42e0a151->enter($__internal_a4c0b88bafe5bbe875642840374d13d002c3a0ba6ee32a2e9dcf193a42e0a151_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4c0b88bafe5bbe875642840374d13d002c3a0ba6ee32a2e9dcf193a42e0a151->leave($__internal_a4c0b88bafe5bbe875642840374d13d002c3a0ba6ee32a2e9dcf193a42e0a151_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_aa6e1697a001d42d6e2517ec9b2703f58ea4119bd73b0ddfbda2d9ffec534c75 = $this->env->getExtension("native_profiler");
        $__internal_aa6e1697a001d42d6e2517ec9b2703f58ea4119bd73b0ddfbda2d9ffec534c75->enter($__internal_aa6e1697a001d42d6e2517ec9b2703f58ea4119bd73b0ddfbda2d9ffec534c75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_aa6e1697a001d42d6e2517ec9b2703f58ea4119bd73b0ddfbda2d9ffec534c75->leave($__internal_aa6e1697a001d42d6e2517ec9b2703f58ea4119bd73b0ddfbda2d9ffec534c75_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7df6da783ff5b18e12b8a900ddc2847f2e4f7ade7c91e8344884bd47a2c63076 = $this->env->getExtension("native_profiler");
        $__internal_7df6da783ff5b18e12b8a900ddc2847f2e4f7ade7c91e8344884bd47a2c63076->enter($__internal_7df6da783ff5b18e12b8a900ddc2847f2e4f7ade7c91e8344884bd47a2c63076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7df6da783ff5b18e12b8a900ddc2847f2e4f7ade7c91e8344884bd47a2c63076->leave($__internal_7df6da783ff5b18e12b8a900ddc2847f2e4f7ade7c91e8344884bd47a2c63076_prof);

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
