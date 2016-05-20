<?php

/* @EnsJobeet/job/edit.html.twig */
class __TwigTemplate_abf7ba26c6cad0787dacc6dec7a6716b3ec5b0519a6929d6f7567de0dd9a81c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EnsJobeetBundle::layout.html.twig", "@EnsJobeet/job/edit.html.twig", 1);
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
        $__internal_7415dce1b9c58e9b766daf4533d192d1de5029667a926371ab22798079f15d12 = $this->env->getExtension("native_profiler");
        $__internal_7415dce1b9c58e9b766daf4533d192d1de5029667a926371ab22798079f15d12->enter($__internal_7415dce1b9c58e9b766daf4533d192d1de5029667a926371ab22798079f15d12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EnsJobeet/job/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7415dce1b9c58e9b766daf4533d192d1de5029667a926371ab22798079f15d12->leave($__internal_7415dce1b9c58e9b766daf4533d192d1de5029667a926371ab22798079f15d12_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_1d2b4df1dc879523a485ed65d5cf6335aac08896aeef6d33919ac9ff0c70d666 = $this->env->getExtension("native_profiler");
        $__internal_1d2b4df1dc879523a485ed65d5cf6335aac08896aeef6d33919ac9ff0c70d666->enter($__internal_1d2b4df1dc879523a485ed65d5cf6335aac08896aeef6d33919ac9ff0c70d666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <h1>Job edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("ens_job_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_1d2b4df1dc879523a485ed65d5cf6335aac08896aeef6d33919ac9ff0c70d666->leave($__internal_1d2b4df1dc879523a485ed65d5cf6335aac08896aeef6d33919ac9ff0c70d666_prof);

    }

    public function getTemplateName()
    {
        return "@EnsJobeet/job/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'EnsJobeetBundle::layout.html.twig' %}*/
/* */
/* {% block content %}*/
/*     <h1>Job edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('ens_job_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
