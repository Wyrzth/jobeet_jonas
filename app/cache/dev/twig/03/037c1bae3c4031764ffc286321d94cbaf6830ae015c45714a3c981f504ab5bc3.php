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
        $__internal_b8be1d57ce2ebca84a9a729a7d20e357b84bd29769e5fbc57127cabf124afefd = $this->env->getExtension("native_profiler");
        $__internal_b8be1d57ce2ebca84a9a729a7d20e357b84bd29769e5fbc57127cabf124afefd->enter($__internal_b8be1d57ce2ebca84a9a729a7d20e357b84bd29769e5fbc57127cabf124afefd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_b8be1d57ce2ebca84a9a729a7d20e357b84bd29769e5fbc57127cabf124afefd->leave($__internal_b8be1d57ce2ebca84a9a729a7d20e357b84bd29769e5fbc57127cabf124afefd_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_041e09db787a982483da8974951063ca6da5852e87da8906854628f985466bee = $this->env->getExtension("native_profiler");
        $__internal_041e09db787a982483da8974951063ca6da5852e87da8906854628f985466bee->enter($__internal_041e09db787a982483da8974951063ca6da5852e87da8906854628f985466bee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_041e09db787a982483da8974951063ca6da5852e87da8906854628f985466bee->leave($__internal_041e09db787a982483da8974951063ca6da5852e87da8906854628f985466bee_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_87c697f81452f69e37c11c388fd1eb3afa70f8629450cfd48d053b28803084c5 = $this->env->getExtension("native_profiler");
        $__internal_87c697f81452f69e37c11c388fd1eb3afa70f8629450cfd48d053b28803084c5->enter($__internal_87c697f81452f69e37c11c388fd1eb3afa70f8629450cfd48d053b28803084c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_87c697f81452f69e37c11c388fd1eb3afa70f8629450cfd48d053b28803084c5->leave($__internal_87c697f81452f69e37c11c388fd1eb3afa70f8629450cfd48d053b28803084c5_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_7c5b7963c27e71d6b34211ef839b03e16660cf023ccff055b577564608ff1964 = $this->env->getExtension("native_profiler");
        $__internal_7c5b7963c27e71d6b34211ef839b03e16660cf023ccff055b577564608ff1964->enter($__internal_7c5b7963c27e71d6b34211ef839b03e16660cf023ccff055b577564608ff1964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7c5b7963c27e71d6b34211ef839b03e16660cf023ccff055b577564608ff1964->leave($__internal_7c5b7963c27e71d6b34211ef839b03e16660cf023ccff055b577564608ff1964_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_244ef42cfa9ac22e77e582e29fac9d7960a8ba9fbba6b779b54e6e8998a79330 = $this->env->getExtension("native_profiler");
        $__internal_244ef42cfa9ac22e77e582e29fac9d7960a8ba9fbba6b779b54e6e8998a79330->enter($__internal_244ef42cfa9ac22e77e582e29fac9d7960a8ba9fbba6b779b54e6e8998a79330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_244ef42cfa9ac22e77e582e29fac9d7960a8ba9fbba6b779b54e6e8998a79330->leave($__internal_244ef42cfa9ac22e77e582e29fac9d7960a8ba9fbba6b779b54e6e8998a79330_prof);

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
