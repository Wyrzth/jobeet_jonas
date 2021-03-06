<?php

/* EnsJobeetBundle:job:index.html.twig */
class __TwigTemplate_5a5eaddcc559c8bf2d218940b0c9abc080815098e7e74d977e1f967ad9f47a39 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EnsJobeetBundle::layout.html.twig", "EnsJobeetBundle:job:index.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ensjobeet/css/jobs.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "       <div id=\"jobs\">

           <h1><a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("EnsJobeetBundle_category", array("slug" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "slug", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name", array()), "html", null, true);
        echo "</a></h1>

           ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
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
    }

    public function getTemplateName()
    {
        return "EnsJobeetBundle:job:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 44,  146 => 41,  137 => 37,  134 => 36,  132 => 35,  128 => 33,  111 => 30,  105 => 27,  101 => 26,  96 => 24,  91 => 23,  74 => 22,  68 => 19,  61 => 14,  57 => 13,  50 => 11,  46 => 9,  43 => 8,  37 => 5,  32 => 4,  29 => 3,  11 => 1,);
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
