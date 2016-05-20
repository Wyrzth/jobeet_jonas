<?php

/* EnsJobeetBundle:job:new.html.twig */
class __TwigTemplate_7bd35b8732e17835d4dc187b872b6f0bbd2f57682e36693ad80b4f70465384a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EnsJobeetBundle::layout.html.twig", "EnsJobeetBundle:job:new.html.twig", 1);
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
        $__internal_c6b8ad83bff87847034e7c2d3f5c59beceddfb07cd6e4a065d1132edfcf42256 = $this->env->getExtension("native_profiler");
        $__internal_c6b8ad83bff87847034e7c2d3f5c59beceddfb07cd6e4a065d1132edfcf42256->enter($__internal_c6b8ad83bff87847034e7c2d3f5c59beceddfb07cd6e4a065d1132edfcf42256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EnsJobeetBundle:job:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6b8ad83bff87847034e7c2d3f5c59beceddfb07cd6e4a065d1132edfcf42256->leave($__internal_c6b8ad83bff87847034e7c2d3f5c59beceddfb07cd6e4a065d1132edfcf42256_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_71f073e61e4b302f68503094d5927315e07e904a43d5379a07008a7185b8e498 = $this->env->getExtension("native_profiler");
        $__internal_71f073e61e4b302f68503094d5927315e07e904a43d5379a07008a7185b8e498->enter($__internal_71f073e61e4b302f68503094d5927315e07e904a43d5379a07008a7185b8e498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_71f073e61e4b302f68503094d5927315e07e904a43d5379a07008a7185b8e498->leave($__internal_71f073e61e4b302f68503094d5927315e07e904a43d5379a07008a7185b8e498_prof);

    }

    public function getTemplateName()
    {
        return "EnsJobeetBundle:job:new.html.twig";
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
