<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_8930951b74415c305194c841e7cae7850aa441555f0d6e32677aea4acf8fea7d extends Twig_Template
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
        $__internal_d9c921d5d85f6cc768f638c6c6db67e93762045a9dc9308690abd4874c03e2b3 = $this->env->getExtension("native_profiler");
        $__internal_d9c921d5d85f6cc768f638c6c6db67e93762045a9dc9308690abd4874c03e2b3->enter($__internal_d9c921d5d85f6cc768f638c6c6db67e93762045a9dc9308690abd4874c03e2b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_d9c921d5d85f6cc768f638c6c6db67e93762045a9dc9308690abd4874c03e2b3->leave($__internal_d9c921d5d85f6cc768f638c6c6db67e93762045a9dc9308690abd4874c03e2b3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
