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
        $__internal_0592b2c9a24e46b6b41361afa4314567693983a6d18b6bc019891caf60a1b6db = $this->env->getExtension("native_profiler");
        $__internal_0592b2c9a24e46b6b41361afa4314567693983a6d18b6bc019891caf60a1b6db->enter($__internal_0592b2c9a24e46b6b41361afa4314567693983a6d18b6bc019891caf60a1b6db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_0592b2c9a24e46b6b41361afa4314567693983a6d18b6bc019891caf60a1b6db->leave($__internal_0592b2c9a24e46b6b41361afa4314567693983a6d18b6bc019891caf60a1b6db_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c8f4bb9f1998251895b7a46f4bee1ecef80231aff26b54c141e5ae06bd42124c = $this->env->getExtension("native_profiler");
        $__internal_c8f4bb9f1998251895b7a46f4bee1ecef80231aff26b54c141e5ae06bd42124c->enter($__internal_c8f4bb9f1998251895b7a46f4bee1ecef80231aff26b54c141e5ae06bd42124c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c8f4bb9f1998251895b7a46f4bee1ecef80231aff26b54c141e5ae06bd42124c->leave($__internal_c8f4bb9f1998251895b7a46f4bee1ecef80231aff26b54c141e5ae06bd42124c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c5696e45406bfcf6a701965d664d0d6332ec7db2633771eeacd037869c9119ed = $this->env->getExtension("native_profiler");
        $__internal_c5696e45406bfcf6a701965d664d0d6332ec7db2633771eeacd037869c9119ed->enter($__internal_c5696e45406bfcf6a701965d664d0d6332ec7db2633771eeacd037869c9119ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c5696e45406bfcf6a701965d664d0d6332ec7db2633771eeacd037869c9119ed->leave($__internal_c5696e45406bfcf6a701965d664d0d6332ec7db2633771eeacd037869c9119ed_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_2c98b584c8113c1be984d3302ced3f2bf94ebd5956a865ad65dd4f823b72a999 = $this->env->getExtension("native_profiler");
        $__internal_2c98b584c8113c1be984d3302ced3f2bf94ebd5956a865ad65dd4f823b72a999->enter($__internal_2c98b584c8113c1be984d3302ced3f2bf94ebd5956a865ad65dd4f823b72a999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2c98b584c8113c1be984d3302ced3f2bf94ebd5956a865ad65dd4f823b72a999->leave($__internal_2c98b584c8113c1be984d3302ced3f2bf94ebd5956a865ad65dd4f823b72a999_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_182579d8e20414c9adc63974ccc60191430c155e37f6fca1f6a685ba618d92c1 = $this->env->getExtension("native_profiler");
        $__internal_182579d8e20414c9adc63974ccc60191430c155e37f6fca1f6a685ba618d92c1->enter($__internal_182579d8e20414c9adc63974ccc60191430c155e37f6fca1f6a685ba618d92c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_182579d8e20414c9adc63974ccc60191430c155e37f6fca1f6a685ba618d92c1->leave($__internal_182579d8e20414c9adc63974ccc60191430c155e37f6fca1f6a685ba618d92c1_prof);

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
