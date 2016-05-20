<?php

/* @EnsJobeet/job/new.html.twig */
class __TwigTemplate_d17e4a89fe850ec8c7e4a1368c08a2ee10246d7b6b17a76dba335d49d7eda5b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EnsJobeetBundle::layout.html.twig", "@EnsJobeet/job/new.html.twig", 1);
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
        $__internal_83cb82a6012aa29613860611add50d3d2ea7ffc813b75721d713da51103147c5 = $this->env->getExtension("native_profiler");
        $__internal_83cb82a6012aa29613860611add50d3d2ea7ffc813b75721d713da51103147c5->enter($__internal_83cb82a6012aa29613860611add50d3d2ea7ffc813b75721d713da51103147c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EnsJobeet/job/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83cb82a6012aa29613860611add50d3d2ea7ffc813b75721d713da51103147c5->leave($__internal_83cb82a6012aa29613860611add50d3d2ea7ffc813b75721d713da51103147c5_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_3d5e822002b8f7df17265bacc7b2e542ea33e969f794709887cdd531c25eeb89 = $this->env->getExtension("native_profiler");
        $__internal_3d5e822002b8f7df17265bacc7b2e542ea33e969f794709887cdd531c25eeb89->enter($__internal_3d5e822002b8f7df17265bacc7b2e542ea33e969f794709887cdd531c25eeb89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_3d5e822002b8f7df17265bacc7b2e542ea33e969f794709887cdd531c25eeb89->leave($__internal_3d5e822002b8f7df17265bacc7b2e542ea33e969f794709887cdd531c25eeb89_prof);

    }

    public function getTemplateName()
    {
        return "@EnsJobeet/job/new.html.twig";
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
