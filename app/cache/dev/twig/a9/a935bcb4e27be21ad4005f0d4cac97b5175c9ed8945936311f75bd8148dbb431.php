<?php

/* :job:edit.html.twig */
class __TwigTemplate_a6511cf03eb2200d2f75a2d2f14b5b180ff036a4e80587c33dc933a3fcd6e030 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EnsJobeetBundle::layout.html.twig", ":job:edit.html.twig", 1);
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
        $__internal_8452707c141a86c2bf78a5be6a8d62bb1251880c33c80512846c782535acda92 = $this->env->getExtension("native_profiler");
        $__internal_8452707c141a86c2bf78a5be6a8d62bb1251880c33c80512846c782535acda92->enter($__internal_8452707c141a86c2bf78a5be6a8d62bb1251880c33c80512846c782535acda92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":job:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8452707c141a86c2bf78a5be6a8d62bb1251880c33c80512846c782535acda92->leave($__internal_8452707c141a86c2bf78a5be6a8d62bb1251880c33c80512846c782535acda92_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_df1ce8e1e9b3e5acd32a7332e8ddbd6952c43a9e36cb7cbd7fd7402ae2bf613a = $this->env->getExtension("native_profiler");
        $__internal_df1ce8e1e9b3e5acd32a7332e8ddbd6952c43a9e36cb7cbd7fd7402ae2bf613a->enter($__internal_df1ce8e1e9b3e5acd32a7332e8ddbd6952c43a9e36cb7cbd7fd7402ae2bf613a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_df1ce8e1e9b3e5acd32a7332e8ddbd6952c43a9e36cb7cbd7fd7402ae2bf613a->leave($__internal_df1ce8e1e9b3e5acd32a7332e8ddbd6952c43a9e36cb7cbd7fd7402ae2bf613a_prof);

    }

    public function getTemplateName()
    {
        return ":job:edit.html.twig";
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
