<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_44cdd419b68139455b99af648c763a8a18041ef09d85a9f6cbb578aebe73d11b extends Twig_Template
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
        $__internal_46c5f484c9b0ae30682edc4e4ba37cc3210e2c8bd5d60431b0649fbc4003caf8 = $this->env->getExtension("native_profiler");
        $__internal_46c5f484c9b0ae30682edc4e4ba37cc3210e2c8bd5d60431b0649fbc4003caf8->enter($__internal_46c5f484c9b0ae30682edc4e4ba37cc3210e2c8bd5d60431b0649fbc4003caf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_46c5f484c9b0ae30682edc4e4ba37cc3210e2c8bd5d60431b0649fbc4003caf8->leave($__internal_46c5f484c9b0ae30682edc4e4ba37cc3210e2c8bd5d60431b0649fbc4003caf8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
