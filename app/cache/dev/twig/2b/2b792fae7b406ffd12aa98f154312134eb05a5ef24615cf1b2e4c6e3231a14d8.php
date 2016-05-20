<?php

/* :job:new.html.twig */
class __TwigTemplate_82f8c8e67ae8fb05d5c631bc3339ecf933314882ce44cf9647d19af4649e625f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EnsJobeetBundle::layout.html.twig", ":job:new.html.twig", 1);
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
        $__internal_96813bb405a8bd0258796f362cdce6c72b510eae57760789791654c49cfdb2a5 = $this->env->getExtension("native_profiler");
        $__internal_96813bb405a8bd0258796f362cdce6c72b510eae57760789791654c49cfdb2a5->enter($__internal_96813bb405a8bd0258796f362cdce6c72b510eae57760789791654c49cfdb2a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":job:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96813bb405a8bd0258796f362cdce6c72b510eae57760789791654c49cfdb2a5->leave($__internal_96813bb405a8bd0258796f362cdce6c72b510eae57760789791654c49cfdb2a5_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_2892c4f05e66b040077cb60638173f204bc38e169fe9be4863af5e5f1597f38b = $this->env->getExtension("native_profiler");
        $__internal_2892c4f05e66b040077cb60638173f204bc38e169fe9be4863af5e5f1597f38b->enter($__internal_2892c4f05e66b040077cb60638173f204bc38e169fe9be4863af5e5f1597f38b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_2892c4f05e66b040077cb60638173f204bc38e169fe9be4863af5e5f1597f38b->leave($__internal_2892c4f05e66b040077cb60638173f204bc38e169fe9be4863af5e5f1597f38b_prof);

    }

    public function getTemplateName()
    {
        return ":job:new.html.twig";
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
