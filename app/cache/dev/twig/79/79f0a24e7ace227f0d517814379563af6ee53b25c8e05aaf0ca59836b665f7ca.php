<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_b37d1eb5517a24a1954854e6b400091946f124e5fda12107f0f3ac070109526d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4a3b8b6eeee8c9cce7c4a40f3481a37294281b9b5ca260f34860022d5b6c4599 = $this->env->getExtension("native_profiler");
        $__internal_4a3b8b6eeee8c9cce7c4a40f3481a37294281b9b5ca260f34860022d5b6c4599->enter($__internal_4a3b8b6eeee8c9cce7c4a40f3481a37294281b9b5ca260f34860022d5b6c4599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a3b8b6eeee8c9cce7c4a40f3481a37294281b9b5ca260f34860022d5b6c4599->leave($__internal_4a3b8b6eeee8c9cce7c4a40f3481a37294281b9b5ca260f34860022d5b6c4599_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_777ee92e3e7ce0f0793fb32ee6156ad1ffcc4b1d70d70e831e9a5f6c8f1d8209 = $this->env->getExtension("native_profiler");
        $__internal_777ee92e3e7ce0f0793fb32ee6156ad1ffcc4b1d70d70e831e9a5f6c8f1d8209->enter($__internal_777ee92e3e7ce0f0793fb32ee6156ad1ffcc4b1d70d70e831e9a5f6c8f1d8209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 27
        echo "
    ";
        // line 28
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_777ee92e3e7ce0f0793fb32ee6156ad1ffcc4b1d70d70e831e9a5f6c8f1d8209->leave($__internal_777ee92e3e7ce0f0793fb32ee6156ad1ffcc4b1d70d70e831e9a5f6c8f1d8209_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 28,  71 => 27,  53 => 9,  50 => 8,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}*/
/*     {% set icon %}*/
/*         {{ include('@WebProfiler/Icon/ajax.svg') }}*/
/*         <span class="sf-toolbar-value sf-toolbar-ajax-requests">0</span>*/
/*     {% endset %}*/
/* */
/*     {% set text %}*/
/*         <div class="sf-toolbar-info-piece">*/
/*             <b class="sf-toolbar-ajax-info"></b>*/
/*         </div>*/
/*         <div class="sf-toolbar-info-piece">*/
/*             <table class="sf-toolbar-ajax-requests">*/
/*                 <thead>*/
/*                     <tr>*/
/*                         <th>Method</th>*/
/*                         <th>URL</th>*/
/*                         <th>Time</th>*/
/*                         <th>Profile</th>*/
/*                     </tr>*/
/*                 </thead>*/
/*                 <tbody class="sf-toolbar-ajax-request-list"></tbody>*/
/*             </table>*/
/*         </div>*/
/*     {% endset %}*/
/* */
/*     {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}*/
/* {% endblock %}*/
/* */
