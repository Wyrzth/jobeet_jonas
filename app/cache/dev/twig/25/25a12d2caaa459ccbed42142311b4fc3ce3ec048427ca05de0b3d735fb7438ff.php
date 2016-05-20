<?php

/* ::base.html.twig */
class __TwigTemplate_585642a3d98d0d4956644e115203cc4785a28fd34c1b37a7edb04f1e43d800c2 extends Twig_Template
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
        $__internal_6d4917a56d0c56b64616f91ae1dbd7e1584c5034db51e76a56c742efc1db9c0f = $this->env->getExtension("native_profiler");
        $__internal_6d4917a56d0c56b64616f91ae1dbd7e1584c5034db51e76a56c742efc1db9c0f->enter($__internal_6d4917a56d0c56b64616f91ae1dbd7e1584c5034db51e76a56c742efc1db9c0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_6d4917a56d0c56b64616f91ae1dbd7e1584c5034db51e76a56c742efc1db9c0f->leave($__internal_6d4917a56d0c56b64616f91ae1dbd7e1584c5034db51e76a56c742efc1db9c0f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_32fdfbe10a1a55ae511e8e856fb4b77b290c43ee12784c94a16b5f2928e98da9 = $this->env->getExtension("native_profiler");
        $__internal_32fdfbe10a1a55ae511e8e856fb4b77b290c43ee12784c94a16b5f2928e98da9->enter($__internal_32fdfbe10a1a55ae511e8e856fb4b77b290c43ee12784c94a16b5f2928e98da9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_32fdfbe10a1a55ae511e8e856fb4b77b290c43ee12784c94a16b5f2928e98da9->leave($__internal_32fdfbe10a1a55ae511e8e856fb4b77b290c43ee12784c94a16b5f2928e98da9_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_15306dabd7e60fd94938dfde4d5bc124eee28bb934e07b76d24f390c96002a2a = $this->env->getExtension("native_profiler");
        $__internal_15306dabd7e60fd94938dfde4d5bc124eee28bb934e07b76d24f390c96002a2a->enter($__internal_15306dabd7e60fd94938dfde4d5bc124eee28bb934e07b76d24f390c96002a2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_15306dabd7e60fd94938dfde4d5bc124eee28bb934e07b76d24f390c96002a2a->leave($__internal_15306dabd7e60fd94938dfde4d5bc124eee28bb934e07b76d24f390c96002a2a_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e8ec0e1698b1085acbd1433a3c6c6ed44eca4de6f67756ffb8cd1bc23244fa42 = $this->env->getExtension("native_profiler");
        $__internal_e8ec0e1698b1085acbd1433a3c6c6ed44eca4de6f67756ffb8cd1bc23244fa42->enter($__internal_e8ec0e1698b1085acbd1433a3c6c6ed44eca4de6f67756ffb8cd1bc23244fa42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e8ec0e1698b1085acbd1433a3c6c6ed44eca4de6f67756ffb8cd1bc23244fa42->leave($__internal_e8ec0e1698b1085acbd1433a3c6c6ed44eca4de6f67756ffb8cd1bc23244fa42_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_725bb81df12f033f8d1aca63734ff299d8b974766ecec24846c761e8cd2489ff = $this->env->getExtension("native_profiler");
        $__internal_725bb81df12f033f8d1aca63734ff299d8b974766ecec24846c761e8cd2489ff->enter($__internal_725bb81df12f033f8d1aca63734ff299d8b974766ecec24846c761e8cd2489ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_725bb81df12f033f8d1aca63734ff299d8b974766ecec24846c761e8cd2489ff->leave($__internal_725bb81df12f033f8d1aca63734ff299d8b974766ecec24846c761e8cd2489ff_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
