<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_ee5c2401b9d4b4eb8e679bcf5060621a673545d74ef91633eb0eed41e64ea91d extends Twig_Template
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
        $__internal_e1479ecab0de065051e735f5c776cb22adf28f007bbf5ee28599049eed1274fb = $this->env->getExtension("native_profiler");
        $__internal_e1479ecab0de065051e735f5c776cb22adf28f007bbf5ee28599049eed1274fb->enter($__internal_e1479ecab0de065051e735f5c776cb22adf28f007bbf5ee28599049eed1274fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_e1479ecab0de065051e735f5c776cb22adf28f007bbf5ee28599049eed1274fb->leave($__internal_e1479ecab0de065051e735f5c776cb22adf28f007bbf5ee28599049eed1274fb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
