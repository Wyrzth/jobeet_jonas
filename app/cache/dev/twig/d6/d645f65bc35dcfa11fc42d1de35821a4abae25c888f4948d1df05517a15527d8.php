<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_1ac65742999c740957b81096ba299ab729a2e85fb47682f31e49f9e256144884 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b57696b20b1e91428d9bc0f3d38d39e1a922dcd215c9b3f9ca8563b1d1f9b052 = $this->env->getExtension("native_profiler");
        $__internal_b57696b20b1e91428d9bc0f3d38d39e1a922dcd215c9b3f9ca8563b1d1f9b052->enter($__internal_b57696b20b1e91428d9bc0f3d38d39e1a922dcd215c9b3f9ca8563b1d1f9b052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_b57696b20b1e91428d9bc0f3d38d39e1a922dcd215c9b3f9ca8563b1d1f9b052->leave($__internal_b57696b20b1e91428d9bc0f3d38d39e1a922dcd215c9b3f9ca8563b1d1f9b052_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
