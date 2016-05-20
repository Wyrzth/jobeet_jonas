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
        $__internal_46027932d348e361be481e7089c3f236e36f1aaf6279c7a0109ee195e6c955fa = $this->env->getExtension("native_profiler");
        $__internal_46027932d348e361be481e7089c3f236e36f1aaf6279c7a0109ee195e6c955fa->enter($__internal_46027932d348e361be481e7089c3f236e36f1aaf6279c7a0109ee195e6c955fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46027932d348e361be481e7089c3f236e36f1aaf6279c7a0109ee195e6c955fa->leave($__internal_46027932d348e361be481e7089c3f236e36f1aaf6279c7a0109ee195e6c955fa_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7eaa3fe6b9c366a92936adac8e137321fe5c06e4aa2e1dcc3c97e4318ea663a8 = $this->env->getExtension("native_profiler");
        $__internal_7eaa3fe6b9c366a92936adac8e137321fe5c06e4aa2e1dcc3c97e4318ea663a8->enter($__internal_7eaa3fe6b9c366a92936adac8e137321fe5c06e4aa2e1dcc3c97e4318ea663a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_7eaa3fe6b9c366a92936adac8e137321fe5c06e4aa2e1dcc3c97e4318ea663a8->leave($__internal_7eaa3fe6b9c366a92936adac8e137321fe5c06e4aa2e1dcc3c97e4318ea663a8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ef156cbd51d6618d31a9753e59166adc12c21013edb82fcd6fbc0ffd26816f45 = $this->env->getExtension("native_profiler");
        $__internal_ef156cbd51d6618d31a9753e59166adc12c21013edb82fcd6fbc0ffd26816f45->enter($__internal_ef156cbd51d6618d31a9753e59166adc12c21013edb82fcd6fbc0ffd26816f45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ef156cbd51d6618d31a9753e59166adc12c21013edb82fcd6fbc0ffd26816f45->leave($__internal_ef156cbd51d6618d31a9753e59166adc12c21013edb82fcd6fbc0ffd26816f45_prof);

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
