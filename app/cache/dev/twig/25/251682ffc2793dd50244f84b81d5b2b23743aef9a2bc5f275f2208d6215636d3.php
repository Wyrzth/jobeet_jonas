<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_2675ce434657d0ce72f701e626eac56e1be816e705273add4c71593c3f3534b0 extends Twig_Template
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
        $__internal_58977d5576d90a83be8a01e974756887042fe2da7240e4991290896509b57bc3 = $this->env->getExtension("native_profiler");
        $__internal_58977d5576d90a83be8a01e974756887042fe2da7240e4991290896509b57bc3->enter($__internal_58977d5576d90a83be8a01e974756887042fe2da7240e4991290896509b57bc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_58977d5576d90a83be8a01e974756887042fe2da7240e4991290896509b57bc3->leave($__internal_58977d5576d90a83be8a01e974756887042fe2da7240e4991290896509b57bc3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
