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
        $__internal_9d9fa3b865346bc50ea302a17ca4c4ac8b98a30811f429cc15a926cb5017983b = $this->env->getExtension("native_profiler");
        $__internal_9d9fa3b865346bc50ea302a17ca4c4ac8b98a30811f429cc15a926cb5017983b->enter($__internal_9d9fa3b865346bc50ea302a17ca4c4ac8b98a30811f429cc15a926cb5017983b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_9d9fa3b865346bc50ea302a17ca4c4ac8b98a30811f429cc15a926cb5017983b->leave($__internal_9d9fa3b865346bc50ea302a17ca4c4ac8b98a30811f429cc15a926cb5017983b_prof);

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
