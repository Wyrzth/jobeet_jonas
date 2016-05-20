<?php

/* job/index.html.twig */
class __TwigTemplate_2623f02c6bdd0789d7ab6895829b3b2ed3ec9a2eef152136fbc21ce44b970720 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EnsJobeetBundle::layout.html.twig", "job/index.html.twig", 1);
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
        $__internal_2462491e413deb6b65204507ebfe87af7803b7731c1be5fb0f38dd5dc0980519 = $this->env->getExtension("native_profiler");
        $__internal_2462491e413deb6b65204507ebfe87af7803b7731c1be5fb0f38dd5dc0980519->enter($__internal_2462491e413deb6b65204507ebfe87af7803b7731c1be5fb0f38dd5dc0980519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "job/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2462491e413deb6b65204507ebfe87af7803b7731c1be5fb0f38dd5dc0980519->leave($__internal_2462491e413deb6b65204507ebfe87af7803b7731c1be5fb0f38dd5dc0980519_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0b319c0ade4fe5653578675a99a24dbb6a7579b1f22eef7918572cbaadf5607f = $this->env->getExtension("native_profiler");
        $__internal_0b319c0ade4fe5653578675a99a24dbb6a7579b1f22eef7918572cbaadf5607f->enter($__internal_0b319c0ade4fe5653578675a99a24dbb6a7579b1f22eef7918572cbaadf5607f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ensjobeet/css/jobs.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0b319c0ade4fe5653578675a99a24dbb6a7579b1f22eef7918572cbaadf5607f->leave($__internal_0b319c0ade4fe5653578675a99a24dbb6a7579b1f22eef7918572cbaadf5607f_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_a98adf1e9d167d45b84e1140d4742718b888d106b86f08980e012ec486ba96ce = $this->env->getExtension("native_profiler");
        $__internal_a98adf1e9d167d45b84e1140d4742718b888d106b86f08980e012ec486ba96ce->enter($__internal_a98adf1e9d167d45b84e1140d4742718b888d106b86f08980e012ec486ba96ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_a98adf1e9d167d45b84e1140d4742718b888d106b86f08980e012ec486ba96ce->leave($__internal_a98adf1e9d167d45b84e1140d4742718b888d106b86f08980e012ec486ba96ce_prof);

    }

    public function getTemplateName()
    {
        return "job/index.html.twig";
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
