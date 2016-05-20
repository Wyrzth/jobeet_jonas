<?php

/* @EnsJobeet/job/index.html.twig */
class __TwigTemplate_2af6fd051c4bb366ea27adbfe9b2dbefeec05929db39f5ab6efff03c91b7ad7f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EnsJobeetBundle::layout.html.twig", "@EnsJobeet/job/index.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EnsJobeetBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_afa973174d1a513849c5ad290847886768424eaa83654ff32a3e324058cad0e6 = $this->env->getExtension("native_profiler");
        $__internal_afa973174d1a513849c5ad290847886768424eaa83654ff32a3e324058cad0e6->enter($__internal_afa973174d1a513849c5ad290847886768424eaa83654ff32a3e324058cad0e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EnsJobeet/job/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_afa973174d1a513849c5ad290847886768424eaa83654ff32a3e324058cad0e6->leave($__internal_afa973174d1a513849c5ad290847886768424eaa83654ff32a3e324058cad0e6_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7fca75611876fb1a6f66f52ea146018e87fe0223e631fa4571882fb8de53af27 = $this->env->getExtension("native_profiler");
        $__internal_7fca75611876fb1a6f66f52ea146018e87fe0223e631fa4571882fb8de53af27->enter($__internal_7fca75611876fb1a6f66f52ea146018e87fe0223e631fa4571882fb8de53af27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ensjobeet/css/jobs.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7fca75611876fb1a6f66f52ea146018e87fe0223e631fa4571882fb8de53af27->leave($__internal_7fca75611876fb1a6f66f52ea146018e87fe0223e631fa4571882fb8de53af27_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_fa193e3997ca265c861c1c3d569b7f219accd965be234709b7b5101fa25e3274 = $this->env->getExtension("native_profiler");
        $__internal_fa193e3997ca265c861c1c3d569b7f219accd965be234709b7b5101fa25e3274->enter($__internal_fa193e3997ca265c861c1c3d569b7f219accd965be234709b7b5101fa25e3274_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "       <div id=\"jobs\">

           <h1><a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("EnsJobeetBundle_category", array("slug" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "slug", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "name", array()), "html", null, true);
        echo "</a></h1>

           ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 14
            echo "               <div>
                   <div class=\"category\">
                       <div class=\"feed\">
                           <a href=\"\">Feed</a>
                       </div>
                       <h1>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</h1>
                   </div>
                   <table class=\"jobs\">
                       ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category"], "activejobs", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 23
                echo "                           <tr class=\"";
                echo twig_escape_filter($this->env, twig_cycle(array(0 => "even", 1 => "odd"), $this->getAttribute($context["loop"], "index", array())), "html", null, true);
                echo "\">
                               <td class=\"location\">";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "location", array()), "html", null, true);
                echo "</td>
                               <td class=\"position\">
                                   <a href=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ens_job_show", array("id" => $this->getAttribute($context["entity"], "id", array()), "company" => $this->getAttribute($context["entity"], "companyslug", array()), "location" => $this->getAttribute($context["entity"], "locationslug", array()), "position" => $this->getAttribute($context["entity"], "positionslug", array()))), "html", null, true);
                echo "\">
                                       ";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "position", array()), "html", null, true);
                echo "
                                   </a>
                               </td>
                               <td class=\"company\">";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "company", array()), "html", null, true);
                echo "</td>
                           </tr>
                       ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "                   </table>

                   ";
            // line 35
            if ($this->getAttribute($context["category"], "morejobs", array())) {
                // line 36
                echo "                       <div class=\"more_jobs\">
                           and <a href=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("EnsJobeetBundle_category", array("slug" => $this->getAttribute($context["category"], "slug", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "morejobs", array()), "html", null, true);
                echo "</a>
                           more...
                       </div>
                   ";
            }
            // line 41
            echo "
               </div>
           ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "       </div>
   ";
        
        $__internal_fa193e3997ca265c861c1c3d569b7f219accd965be234709b7b5101fa25e3274->leave($__internal_fa193e3997ca265c861c1c3d569b7f219accd965be234709b7b5101fa25e3274_prof);

    }

    public function getTemplateName()
    {
        return "@EnsJobeet/job/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 44,  161 => 41,  152 => 37,  149 => 36,  147 => 35,  143 => 33,  126 => 30,  120 => 27,  116 => 26,  111 => 24,  106 => 23,  89 => 22,  83 => 19,  76 => 14,  72 => 13,  65 => 11,  61 => 9,  55 => 8,  46 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'EnsJobeetBundle::layout.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/ensjobeet/css/jobs.css') }}" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/*    {% block content %}*/
/*        <div id="jobs">*/
/* */
/*            <h1><a href="{{ path('EnsJobeetBundle_category', { 'slug': category.slug }) }}">{{ category.name }}</a></h1>*/
/* */
/*            {% for category in categories %}*/
/*                <div>*/
/*                    <div class="category">*/
/*                        <div class="feed">*/
/*                            <a href="">Feed</a>*/
/*                        </div>*/
/*                        <h1>{{ category.name }}</h1>*/
/*                    </div>*/
/*                    <table class="jobs">*/
/*                        {% for entity in category.activejobs %}*/
/*                            <tr class="{{ cycle(['even', 'odd'], loop.index) }}">*/
/*                                <td class="location">{{ entity.location }}</td>*/
/*                                <td class="position">*/
/*                                    <a href="{{ path('ens_job_show', { 'id': entity.id, 'company': entity.companyslug, 'location': entity.locationslug, 'position': entity.positionslug }) }}">*/
/*                                        {{ entity.position }}*/
/*                                    </a>*/
/*                                </td>*/
/*                                <td class="company">{{ entity.company }}</td>*/
/*                            </tr>*/
/*                        {% endfor %}*/
/*                    </table>*/
/* */
/*                    {% if category.morejobs %}*/
/*                        <div class="more_jobs">*/
/*                            and <a href="{{ path('EnsJobeetBundle_category', { 'slug': category.slug }) }}">{{ category.morejobs }}</a>*/
/*                            more...*/
/*                        </div>*/
/*                    {% endif %}*/
/* */
/*                </div>*/
/*            {% endfor %}*/
/*        </div>*/
/*    {% endblock %}*/
/* */
