<?php

/* base.html.twig */
class __TwigTemplate_93626171f9609b6582bd17316395f88c49a3ce2cc025d733d8d8684c451b2cc7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4d76208b3bb903f04203392d1ee6e2944c2a5ee41d001da4f218b2201b864e14 = $this->env->getExtension("native_profiler");
        $__internal_4d76208b3bb903f04203392d1ee6e2944c2a5ee41d001da4f218b2201b864e14->enter($__internal_4d76208b3bb903f04203392d1ee6e2944c2a5ee41d001da4f218b2201b864e14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_4d76208b3bb903f04203392d1ee6e2944c2a5ee41d001da4f218b2201b864e14->leave($__internal_4d76208b3bb903f04203392d1ee6e2944c2a5ee41d001da4f218b2201b864e14_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_143a5410585c0b39759f4f22c5ee943f46a46de3397ee8983fff088e42a0e391 = $this->env->getExtension("native_profiler");
        $__internal_143a5410585c0b39759f4f22c5ee943f46a46de3397ee8983fff088e42a0e391->enter($__internal_143a5410585c0b39759f4f22c5ee943f46a46de3397ee8983fff088e42a0e391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_143a5410585c0b39759f4f22c5ee943f46a46de3397ee8983fff088e42a0e391->leave($__internal_143a5410585c0b39759f4f22c5ee943f46a46de3397ee8983fff088e42a0e391_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ddb30f7843ea60d2eef11faad9bac4189207d2e58116ac1c80ce02a3ab0470f4 = $this->env->getExtension("native_profiler");
        $__internal_ddb30f7843ea60d2eef11faad9bac4189207d2e58116ac1c80ce02a3ab0470f4->enter($__internal_ddb30f7843ea60d2eef11faad9bac4189207d2e58116ac1c80ce02a3ab0470f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ddb30f7843ea60d2eef11faad9bac4189207d2e58116ac1c80ce02a3ab0470f4->leave($__internal_ddb30f7843ea60d2eef11faad9bac4189207d2e58116ac1c80ce02a3ab0470f4_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_45b8526111c5f70a3b435b18e850120fb5f2b9a82682a70c040041867df63921 = $this->env->getExtension("native_profiler");
        $__internal_45b8526111c5f70a3b435b18e850120fb5f2b9a82682a70c040041867df63921->enter($__internal_45b8526111c5f70a3b435b18e850120fb5f2b9a82682a70c040041867df63921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_45b8526111c5f70a3b435b18e850120fb5f2b9a82682a70c040041867df63921->leave($__internal_45b8526111c5f70a3b435b18e850120fb5f2b9a82682a70c040041867df63921_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1c93d7b3f344057912cb607585398aee8415a4a4ff190f2825a5dfdbb8e3380f = $this->env->getExtension("native_profiler");
        $__internal_1c93d7b3f344057912cb607585398aee8415a4a4ff190f2825a5dfdbb8e3380f->enter($__internal_1c93d7b3f344057912cb607585398aee8415a4a4ff190f2825a5dfdbb8e3380f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_1c93d7b3f344057912cb607585398aee8415a4a4ff190f2825a5dfdbb8e3380f->leave($__internal_1c93d7b3f344057912cb607585398aee8415a4a4ff190f2825a5dfdbb8e3380f_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
