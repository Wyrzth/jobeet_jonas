<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_33d56f99697a302302bdb87b776aeb6e21ce9dbaad2f00b56bf8a1337bdc7191 extends Twig_Template
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
        $__internal_dc623fb3c34dd896d56c161ad1e46e1b23662feb9cf1aa8f775fb070c7eca1b2 = $this->env->getExtension("native_profiler");
        $__internal_dc623fb3c34dd896d56c161ad1e46e1b23662feb9cf1aa8f775fb070c7eca1b2->enter($__internal_dc623fb3c34dd896d56c161ad1e46e1b23662feb9cf1aa8f775fb070c7eca1b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_dc623fb3c34dd896d56c161ad1e46e1b23662feb9cf1aa8f775fb070c7eca1b2->leave($__internal_dc623fb3c34dd896d56c161ad1e46e1b23662feb9cf1aa8f775fb070c7eca1b2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
