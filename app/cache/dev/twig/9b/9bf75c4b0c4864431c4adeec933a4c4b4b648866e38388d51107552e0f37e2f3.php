<?php

/* EnsJobeetBundle:job:edit.html.twig */
class __TwigTemplate_fee1416e471787ef93ef0c9517681bfdc52e3a78646a8eb5dcc35426d39f77a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EnsJobeetBundle::layout.html.twig", "EnsJobeetBundle:job:edit.html.twig", 1);
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
        $__internal_792ba78b5641731ecd0416bdd6d4991fee1f4e26a4793be7c6d83854bad8273f = $this->env->getExtension("native_profiler");
        $__internal_792ba78b5641731ecd0416bdd6d4991fee1f4e26a4793be7c6d83854bad8273f->enter($__internal_792ba78b5641731ecd0416bdd6d4991fee1f4e26a4793be7c6d83854bad8273f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EnsJobeetBundle:job:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_792ba78b5641731ecd0416bdd6d4991fee1f4e26a4793be7c6d83854bad8273f->leave($__internal_792ba78b5641731ecd0416bdd6d4991fee1f4e26a4793be7c6d83854bad8273f_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_94306909b7ca97022d337cc1a88c8de7989da91249a534c0d14051e047aedd96 = $this->env->getExtension("native_profiler");
        $__internal_94306909b7ca97022d337cc1a88c8de7989da91249a534c0d14051e047aedd96->enter($__internal_94306909b7ca97022d337cc1a88c8de7989da91249a534c0d14051e047aedd96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_94306909b7ca97022d337cc1a88c8de7989da91249a534c0d14051e047aedd96->leave($__internal_94306909b7ca97022d337cc1a88c8de7989da91249a534c0d14051e047aedd96_prof);

    }

    public function getTemplateName()
    {
        return "EnsJobeetBundle:job:edit.html.twig";
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
