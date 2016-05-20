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
        $__internal_d30e74628d4d2a34676dd073d046085b662302f749838ccd563c0a0abe2082e1 = $this->env->getExtension("native_profiler");
        $__internal_d30e74628d4d2a34676dd073d046085b662302f749838ccd563c0a0abe2082e1->enter($__internal_d30e74628d4d2a34676dd073d046085b662302f749838ccd563c0a0abe2082e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_d30e74628d4d2a34676dd073d046085b662302f749838ccd563c0a0abe2082e1->leave($__internal_d30e74628d4d2a34676dd073d046085b662302f749838ccd563c0a0abe2082e1_prof);

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
