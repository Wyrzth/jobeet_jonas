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
        $__internal_49c194c3dadf2157afa472c8db1438152839c5cbf00f34adda1d9460e3d08393 = $this->env->getExtension("native_profiler");
        $__internal_49c194c3dadf2157afa472c8db1438152839c5cbf00f34adda1d9460e3d08393->enter($__internal_49c194c3dadf2157afa472c8db1438152839c5cbf00f34adda1d9460e3d08393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":job:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49c194c3dadf2157afa472c8db1438152839c5cbf00f34adda1d9460e3d08393->leave($__internal_49c194c3dadf2157afa472c8db1438152839c5cbf00f34adda1d9460e3d08393_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_896b8da63a94aee7056dcf97f066baf1a6e72db66d9dabbf0bf891165797a1d9 = $this->env->getExtension("native_profiler");
        $__internal_896b8da63a94aee7056dcf97f066baf1a6e72db66d9dabbf0bf891165797a1d9->enter($__internal_896b8da63a94aee7056dcf97f066baf1a6e72db66d9dabbf0bf891165797a1d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_896b8da63a94aee7056dcf97f066baf1a6e72db66d9dabbf0bf891165797a1d9->leave($__internal_896b8da63a94aee7056dcf97f066baf1a6e72db66d9dabbf0bf891165797a1d9_prof);

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
