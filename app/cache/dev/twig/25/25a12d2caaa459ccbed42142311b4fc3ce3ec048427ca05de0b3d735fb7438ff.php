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
        $__internal_a081e42f756d900b3fc48cf85fab926004ae7eab26bc4ff338cb468b3ee494df = $this->env->getExtension("native_profiler");
        $__internal_a081e42f756d900b3fc48cf85fab926004ae7eab26bc4ff338cb468b3ee494df->enter($__internal_a081e42f756d900b3fc48cf85fab926004ae7eab26bc4ff338cb468b3ee494df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_a081e42f756d900b3fc48cf85fab926004ae7eab26bc4ff338cb468b3ee494df->leave($__internal_a081e42f756d900b3fc48cf85fab926004ae7eab26bc4ff338cb468b3ee494df_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_eb4b0c684a1837eff2127899ed45c1006128a36fc401b0fb5cc382399370bf16 = $this->env->getExtension("native_profiler");
        $__internal_eb4b0c684a1837eff2127899ed45c1006128a36fc401b0fb5cc382399370bf16->enter($__internal_eb4b0c684a1837eff2127899ed45c1006128a36fc401b0fb5cc382399370bf16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_eb4b0c684a1837eff2127899ed45c1006128a36fc401b0fb5cc382399370bf16->leave($__internal_eb4b0c684a1837eff2127899ed45c1006128a36fc401b0fb5cc382399370bf16_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3aa9149d64bf4e26688697234866a5193166dcfb451ac67c945e043caadff5f0 = $this->env->getExtension("native_profiler");
        $__internal_3aa9149d64bf4e26688697234866a5193166dcfb451ac67c945e043caadff5f0->enter($__internal_3aa9149d64bf4e26688697234866a5193166dcfb451ac67c945e043caadff5f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_3aa9149d64bf4e26688697234866a5193166dcfb451ac67c945e043caadff5f0->leave($__internal_3aa9149d64bf4e26688697234866a5193166dcfb451ac67c945e043caadff5f0_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_26e9539e952b542fbabd1802cc25bb9134f1e5e3f76afb23b70dda9a4c651bf8 = $this->env->getExtension("native_profiler");
        $__internal_26e9539e952b542fbabd1802cc25bb9134f1e5e3f76afb23b70dda9a4c651bf8->enter($__internal_26e9539e952b542fbabd1802cc25bb9134f1e5e3f76afb23b70dda9a4c651bf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_26e9539e952b542fbabd1802cc25bb9134f1e5e3f76afb23b70dda9a4c651bf8->leave($__internal_26e9539e952b542fbabd1802cc25bb9134f1e5e3f76afb23b70dda9a4c651bf8_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_35a6d2bb20f2d7d3fcf1fd5c4f6ba60cd893a172aeccb333493b59c0ff8c46ee = $this->env->getExtension("native_profiler");
        $__internal_35a6d2bb20f2d7d3fcf1fd5c4f6ba60cd893a172aeccb333493b59c0ff8c46ee->enter($__internal_35a6d2bb20f2d7d3fcf1fd5c4f6ba60cd893a172aeccb333493b59c0ff8c46ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_35a6d2bb20f2d7d3fcf1fd5c4f6ba60cd893a172aeccb333493b59c0ff8c46ee->leave($__internal_35a6d2bb20f2d7d3fcf1fd5c4f6ba60cd893a172aeccb333493b59c0ff8c46ee_prof);

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
