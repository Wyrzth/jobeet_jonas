<?php

/* job/new.html.twig */
class __TwigTemplate_29506a62daffb8a9cd8742a1b9a877bf4e5c60684df76c4906d1cb25a9dab083 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EnsJobeetBundle::layout.html.twig", "job/new.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EnsJobeetBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2df9a60ed390099457951eb3c646fc6caf7ebec540fa97e6abb3eb836ab67062 = $this->env->getExtension("native_profiler");
        $__internal_2df9a60ed390099457951eb3c646fc6caf7ebec540fa97e6abb3eb836ab67062->enter($__internal_2df9a60ed390099457951eb3c646fc6caf7ebec540fa97e6abb3eb836ab67062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "job/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2df9a60ed390099457951eb3c646fc6caf7ebec540fa97e6abb3eb836ab67062->leave($__internal_2df9a60ed390099457951eb3c646fc6caf7ebec540fa97e6abb3eb836ab67062_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_05a80a2814545c0d3c774b7a9da12a86a08017c25943c8b66ffe1d9183a141e8 = $this->env->getExtension("native_profiler");
        $__internal_05a80a2814545c0d3c774b7a9da12a86a08017c25943c8b66ffe1d9183a141e8->enter($__internal_05a80a2814545c0d3c774b7a9da12a86a08017c25943c8b66ffe1d9183a141e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <h1>Job creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("ens_job_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_05a80a2814545c0d3c774b7a9da12a86a08017c25943c8b66ffe1d9183a141e8->leave($__internal_05a80a2814545c0d3c774b7a9da12a86a08017c25943c8b66ffe1d9183a141e8_prof);

    }

    public function getTemplateName()
    {
        return "job/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'EnsJobeetBundle::layout.html.twig' %}*/
/* */
/* {% block content %}*/
/*     <h1>Job creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('ens_job_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
