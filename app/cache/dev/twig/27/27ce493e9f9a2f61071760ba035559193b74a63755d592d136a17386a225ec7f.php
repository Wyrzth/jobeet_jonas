<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_d5bafbe6be0b929cdd9e3c323fc9cb8afa83725549ebba69595196b795e0fd4d extends Twig_Template
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
        $__internal_e72e56cc5f1fd08a7f24b8d6c727b2d86ed66c4cffe39dffb826feed3d492863 = $this->env->getExtension("native_profiler");
        $__internal_e72e56cc5f1fd08a7f24b8d6c727b2d86ed66c4cffe39dffb826feed3d492863->enter($__internal_e72e56cc5f1fd08a7f24b8d6c727b2d86ed66c4cffe39dffb826feed3d492863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_e72e56cc5f1fd08a7f24b8d6c727b2d86ed66c4cffe39dffb826feed3d492863->leave($__internal_e72e56cc5f1fd08a7f24b8d6c727b2d86ed66c4cffe39dffb826feed3d492863_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
