<?php

/* EnsJobeetBundle::layout.html.twig */
class __TwigTemplate_f2d84ac9e986a653c4edb7edd1d259b333e6638065d571e24bc61f65d335294e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8cfcea7e569208b0b60131eeb2864b663e8922e2ee1107041e59c9e28f2a6359 = $this->env->getExtension("native_profiler");
        $__internal_8cfcea7e569208b0b60131eeb2864b663e8922e2ee1107041e59c9e28f2a6359->enter($__internal_8cfcea7e569208b0b60131eeb2864b663e8922e2ee1107041e59c9e28f2a6359_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EnsJobeetBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <title>
        ";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "    </title>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 15
        echo "    <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ensjobeet/images/favicon.ico"), "html", null, true);
        echo "\" />
</head>

<div id=\"container\">
    <div id=\"header\">
        <div class=\"content\">
            <h1><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("ens_jobeet_homepage");
        echo "\">
                    <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ensjobeet/images/logo.jpg"), "html", null, true);
        echo "\" alt=\"Jobeet Job Board\" />
                </a></h1>

            <div id=\"sub_header\">
                <div class=\"post\">
                    <h2>Ask for people</h2>
                    <div>
                        <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("ens_job_new");
        echo "\">Post a Job</a>
                    </div>
                </div>

                <div class=\"search\">
                    <h2>Ask for a job</h2>
                    <form action=\"\" method=\"get\">
                        <input type=\"text\" name=\"keywords\" id=\"search_keywords\" />
                        <input type=\"submit\" value=\"search\" />
                        <div class=\"help\">
                            Enter some keywords (city, country, position, ...)
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div id=\"content\">
        ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 49
            echo "            <div class=\"flash-notice\">
                ";
            // line 50
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "
        ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 55
            echo "            <div class=\"flash-error\">
                ";
            // line 56
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "
        <div class=\"content\">
            ";
        // line 61
        $this->displayBlock('content', $context, $blocks);
        // line 63
        echo "        </div>
    </div>

    <div id=\"footer\">
        <div class=\"content\">
              <span class=\"symfony\">
                <img src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ensjobeet/images/jobeet-mini.png"), "html", null, true);
        echo "\" />
                powered by <a href=\"http://www.symfony.com/\">
                  <img src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ensjobeet/images/symfony.gif"), "html", null, true);
        echo "\" alt=\"symfony framework\" />
                </a>
              </span>
            <ul>
                <li><a href=\"\">About Jobeet</a></li>
                <li class=\"feed\"><a href=\"\">Full feed</a></li>
                <li><a href=\"\">Jobeet API</a></li>
                <li class=\"last\"><a href=\"\">Affiliates</a></li>
            </ul>
        </div>
    </div>
</div>
</body>
</html>";
        
        $__internal_8cfcea7e569208b0b60131eeb2864b663e8922e2ee1107041e59c9e28f2a6359->leave($__internal_8cfcea7e569208b0b60131eeb2864b663e8922e2ee1107041e59c9e28f2a6359_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ac9d87dea6ee8d1e273b3d731295d22c948c91e48317dff6f70ca2ceb0434159 = $this->env->getExtension("native_profiler");
        $__internal_ac9d87dea6ee8d1e273b3d731295d22c948c91e48317dff6f70ca2ceb0434159->enter($__internal_ac9d87dea6ee8d1e273b3d731295d22c948c91e48317dff6f70ca2ceb0434159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "            Jobeet - Your best job board
        ";
        
        $__internal_ac9d87dea6ee8d1e273b3d731295d22c948c91e48317dff6f70ca2ceb0434159->leave($__internal_ac9d87dea6ee8d1e273b3d731295d22c948c91e48317dff6f70ca2ceb0434159_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c89ac869f154c9ce3e4cd28cd2351dcf60499e6418a6e62af751e0b3a5793462 = $this->env->getExtension("native_profiler");
        $__internal_c89ac869f154c9ce3e4cd28cd2351dcf60499e6418a6e62af751e0b3a5793462->enter($__internal_c89ac869f154c9ce3e4cd28cd2351dcf60499e6418a6e62af751e0b3a5793462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ensjobeet/css/main.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
    ";
        
        $__internal_c89ac869f154c9ce3e4cd28cd2351dcf60499e6418a6e62af751e0b3a5793462->leave($__internal_c89ac869f154c9ce3e4cd28cd2351dcf60499e6418a6e62af751e0b3a5793462_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3c6acea06121e61efda9687309c6cda2aa3acbf1849118bb807541e4c4d4bfe6 = $this->env->getExtension("native_profiler");
        $__internal_3c6acea06121e61efda9687309c6cda2aa3acbf1849118bb807541e4c4d4bfe6->enter($__internal_3c6acea06121e61efda9687309c6cda2aa3acbf1849118bb807541e4c4d4bfe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "    ";
        
        $__internal_3c6acea06121e61efda9687309c6cda2aa3acbf1849118bb807541e4c4d4bfe6->leave($__internal_3c6acea06121e61efda9687309c6cda2aa3acbf1849118bb807541e4c4d4bfe6_prof);

    }

    // line 61
    public function block_content($context, array $blocks = array())
    {
        $__internal_4b9f39285345328c093171b5e60891c0462133488f14dbd4ec1a1b95ff3dd236 = $this->env->getExtension("native_profiler");
        $__internal_4b9f39285345328c093171b5e60891c0462133488f14dbd4ec1a1b95ff3dd236->enter($__internal_4b9f39285345328c093171b5e60891c0462133488f14dbd4ec1a1b95ff3dd236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 62
        echo "            ";
        
        $__internal_4b9f39285345328c093171b5e60891c0462133488f14dbd4ec1a1b95ff3dd236->leave($__internal_4b9f39285345328c093171b5e60891c0462133488f14dbd4ec1a1b95ff3dd236_prof);

    }

    public function getTemplateName()
    {
        return "EnsJobeetBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 62,  207 => 61,  200 => 14,  194 => 13,  184 => 11,  178 => 10,  170 => 6,  164 => 5,  143 => 71,  138 => 69,  130 => 63,  128 => 61,  124 => 59,  115 => 56,  112 => 55,  108 => 54,  105 => 53,  96 => 50,  93 => 49,  89 => 48,  67 => 29,  57 => 22,  53 => 21,  43 => 15,  40 => 13,  38 => 10,  34 => 8,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <title>*/
/*         {% block title %}*/
/*             Jobeet - Your best job board*/
/*         {% endblock %}*/
/*     </title>*/
/*     <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />*/
/*     {% block stylesheets %}*/
/*         <link rel="stylesheet" href="{{ asset('bundles/ensjobeet/css/main.css') }}" type="text/css" media="all" />*/
/*     {% endblock %}*/
/*     {% block javascripts %}*/
/*     {% endblock %}*/
/*     <link rel="shortcut icon" href="{{ asset('bundles/ensjobeet/images/favicon.ico') }}" />*/
/* </head>*/
/* */
/* <div id="container">*/
/*     <div id="header">*/
/*         <div class="content">*/
/*             <h1><a href="{{ path('ens_jobeet_homepage') }}">*/
/*                     <img src="{{ asset('bundles/ensjobeet/images/logo.jpg') }}" alt="Jobeet Job Board" />*/
/*                 </a></h1>*/
/* */
/*             <div id="sub_header">*/
/*                 <div class="post">*/
/*                     <h2>Ask for people</h2>*/
/*                     <div>*/
/*                         <a href="{{ path('ens_job_new') }}">Post a Job</a>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="search">*/
/*                     <h2>Ask for a job</h2>*/
/*                     <form action="" method="get">*/
/*                         <input type="text" name="keywords" id="search_keywords" />*/
/*                         <input type="submit" value="search" />*/
/*                         <div class="help">*/
/*                             Enter some keywords (city, country, position, ...)*/
/*                         </div>*/
/*                     </form>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div id="content">*/
/*         {% for flashMessage in app.session.flashbag.get('notice') %}*/
/*             <div class="flash-notice">*/
/*                 {{ flashMessage }}*/
/*             </div>*/
/*         {% endfor %}*/
/* */
/*         {% for flashMessage in app.session.flashbag.get('error') %}*/
/*             <div class="flash-error">*/
/*                 {{ flashMessage }}*/
/*             </div>*/
/*         {% endfor %}*/
/* */
/*         <div class="content">*/
/*             {% block content %}*/
/*             {% endblock %}*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div id="footer">*/
/*         <div class="content">*/
/*               <span class="symfony">*/
/*                 <img src="{{ asset('bundles/ensjobeet/images/jobeet-mini.png') }}" />*/
/*                 powered by <a href="http://www.symfony.com/">*/
/*                   <img src="{{ asset('bundles/ensjobeet/images/symfony.gif') }}" alt="symfony framework" />*/
/*                 </a>*/
/*               </span>*/
/*             <ul>*/
/*                 <li><a href="">About Jobeet</a></li>*/
/*                 <li class="feed"><a href="">Full feed</a></li>*/
/*                 <li><a href="">Jobeet API</a></li>*/
/*                 <li class="last"><a href="">Affiliates</a></li>*/
/*             </ul>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* </body>*/
/* </html>*/
