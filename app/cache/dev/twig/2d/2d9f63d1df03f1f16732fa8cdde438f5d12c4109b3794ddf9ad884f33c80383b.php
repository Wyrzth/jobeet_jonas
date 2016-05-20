<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_fbdfc1cf6b47d8e92dccf2bbc9f83ed0a194192fddb2ebdd877aee9d7fadaf67 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_9d23498dd00873ea874887cda03d83f7f453a93d564fbf571c222cae8c958a38 = $this->env->getExtension("native_profiler");
        $__internal_9d23498dd00873ea874887cda03d83f7f453a93d564fbf571c222cae8c958a38->enter($__internal_9d23498dd00873ea874887cda03d83f7f453a93d564fbf571c222cae8c958a38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d23498dd00873ea874887cda03d83f7f453a93d564fbf571c222cae8c958a38->leave($__internal_9d23498dd00873ea874887cda03d83f7f453a93d564fbf571c222cae8c958a38_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6ce342473e6d7ed52b3e7523f4f52de56e6687ec9a83e0af06db10a5b3dc734c = $this->env->getExtension("native_profiler");
        $__internal_6ce342473e6d7ed52b3e7523f4f52de56e6687ec9a83e0af06db10a5b3dc734c->enter($__internal_6ce342473e6d7ed52b3e7523f4f52de56e6687ec9a83e0af06db10a5b3dc734c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_6ce342473e6d7ed52b3e7523f4f52de56e6687ec9a83e0af06db10a5b3dc734c->leave($__internal_6ce342473e6d7ed52b3e7523f4f52de56e6687ec9a83e0af06db10a5b3dc734c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_78d73bf94b64a58db0f7f31638e0efd1cff550d110ed91331770ffe096b01bd9 = $this->env->getExtension("native_profiler");
        $__internal_78d73bf94b64a58db0f7f31638e0efd1cff550d110ed91331770ffe096b01bd9->enter($__internal_78d73bf94b64a58db0f7f31638e0efd1cff550d110ed91331770ffe096b01bd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_78d73bf94b64a58db0f7f31638e0efd1cff550d110ed91331770ffe096b01bd9->leave($__internal_78d73bf94b64a58db0f7f31638e0efd1cff550d110ed91331770ffe096b01bd9_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b4aa1ce88064a4b672219166636a41990486d12c4c2933fabf5781b609ad4abf = $this->env->getExtension("native_profiler");
        $__internal_b4aa1ce88064a4b672219166636a41990486d12c4c2933fabf5781b609ad4abf->enter($__internal_b4aa1ce88064a4b672219166636a41990486d12c4c2933fabf5781b609ad4abf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_b4aa1ce88064a4b672219166636a41990486d12c4c2933fabf5781b609ad4abf->leave($__internal_b4aa1ce88064a4b672219166636a41990486d12c4c2933fabf5781b609ad4abf_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
