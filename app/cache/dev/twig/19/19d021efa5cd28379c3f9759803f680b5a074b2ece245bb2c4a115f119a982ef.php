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
        $__internal_7b921f8e4abfa27122b0bf32d1385f9ab857970a02cdda4794304b017579fa7f = $this->env->getExtension("native_profiler");
        $__internal_7b921f8e4abfa27122b0bf32d1385f9ab857970a02cdda4794304b017579fa7f->enter($__internal_7b921f8e4abfa27122b0bf32d1385f9ab857970a02cdda4794304b017579fa7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b921f8e4abfa27122b0bf32d1385f9ab857970a02cdda4794304b017579fa7f->leave($__internal_7b921f8e4abfa27122b0bf32d1385f9ab857970a02cdda4794304b017579fa7f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f739249ba089f9ab2109a6bfb5bcb33218f0f5bbc1a78099bcfda9bffbc1b679 = $this->env->getExtension("native_profiler");
        $__internal_f739249ba089f9ab2109a6bfb5bcb33218f0f5bbc1a78099bcfda9bffbc1b679->enter($__internal_f739249ba089f9ab2109a6bfb5bcb33218f0f5bbc1a78099bcfda9bffbc1b679_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_f739249ba089f9ab2109a6bfb5bcb33218f0f5bbc1a78099bcfda9bffbc1b679->leave($__internal_f739249ba089f9ab2109a6bfb5bcb33218f0f5bbc1a78099bcfda9bffbc1b679_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_856dfdd4ab3ea57ab1307e98530a2e684f83690dbe1b2ec8e69a81e35f054357 = $this->env->getExtension("native_profiler");
        $__internal_856dfdd4ab3ea57ab1307e98530a2e684f83690dbe1b2ec8e69a81e35f054357->enter($__internal_856dfdd4ab3ea57ab1307e98530a2e684f83690dbe1b2ec8e69a81e35f054357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_856dfdd4ab3ea57ab1307e98530a2e684f83690dbe1b2ec8e69a81e35f054357->leave($__internal_856dfdd4ab3ea57ab1307e98530a2e684f83690dbe1b2ec8e69a81e35f054357_prof);

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
